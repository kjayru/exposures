<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Session;
use DB;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;

use App\Billing;
use App\Order;
use App\Paypal;
use App\Cart;
use App\Product;
use App\User;
use Omnipay\Omnipay;
use App\City;
use App\State;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');


        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true); //set it to 'false' when go live


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){

        $user_id = Auth::id();

        $prods = $request->session()->get('cart');
        $estados = State::orderBy('name','asc')->get();
        $ciudades = City::orderBy('name','asc')->get();
        $billings = Billing::where('user_id',$user_id)->get();

        if($billings->count()==0){
            $billings=null;
        }

        $billingselect = Billing::where('user_id',$user_id)->where('status',1)->first();



        return view('frontend.cart.payment',['estados'=>$estados,'productos'=>$prods,'ciudades'=>$ciudades,'billings'=>$billings,'billingselect'=>$billingselect]);
    }


    public function charge(Request $request){


        if($request)
        {
            try {
                $response = $this->gateway->purchase(array(
                    'amount' => $_POST['amount'],
                    'currency' => env('PAYPAL_CURRENCY'),
                    'returnUrl' => url('/checkout/paymentsuccess'),
                    'cancelUrl' => url('/checkout/paymenterror'),
                ))->send();

                if ($response->isRedirect()) {
                    $response->redirect(); // this will automatically forward the customer
                } else {
                    // not successful


                    return $response->getMessage();
                }
            } catch(Exception $e) {

                return $e->getMessage();
            }
        }

    }

    public function payment_success(Request $request){


        // Once the transaction has been approved, we need to complete it.
        if ($request->input('paymentId') && $request->input('PayerID'))
        {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id'             => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),
            ));
            $response = $transaction->send();

            if ($response->isSuccessful())
            {
                // The customer has successfully paid.
                $arr_body = $response->getData();

                // Insert transaction data into the database
                $isPaymentExist = Paypal::where('payment_id', $arr_body['id'])->first();

                if(!$isPaymentExist)
                {
                    $payment = new Paypal;
                    $payment->payment_id = $arr_body['id'];
                    $payment->payer_id = $arr_body['payer']['payer_info']['payer_id'];
                    $payment->payer_email = $arr_body['payer']['payer_info']['email'];
                    $payment->amount = $arr_body['transactions'][0]['amount']['total'];
                    $payment->currency = env('PAYPAL_CURRENCY');
                    $payment->payment_status = $arr_body['state'];
                    $payment->save();


                    ///REGISTRA PPAYMENT
                    $user_id = Auth::id();

                    $user = User::find($user_id);


                    //obtener billing
                        $billing = Billing::where('user_id',$user_id)->where('status','1')->first();
                    //

                    //REGISTRA ORDEN
                    $order = new Order;

                    if(Session::has('cart')){
                        $oldCart = Session::get('cart');
                        $cart = new Cart($oldCart);
                        $order->cart = serialize($cart);
                    }


                    $order->user_id = $user_id;

                    $order->order_send_id =  $arr_body['id'];
                    $order->billing_id = $billing->id;
                    $order->shipment = '0';
                    $order->save();



                    //enviar mail con productos

                    Mail::to($user->email)->send(new OrderShipped($order));


                    Session::forget('cart');
                }
                /*** END PRODUCTOS */



                Session::forget('cart');

                $mensaje =  "El pago es exitoso. Su ID de transacción es: ". $arr_body['id'];
            } else {
                $mensaje =  $response->getMessage();
            }
        } else {
            $mensaje =  'Transaction is declined';
        }

        return view('frontend.cart.gracias',['mensaje'=>$mensaje]);
    }

    public function payment_error(){
        return 'User is canceled the payment.';
    }



    public function savebilling(Request $request){

       
        $user_id = Auth::id();

        $contador = Billing::where('user_id',$user_id)->count();
        $address = Billing::where('user_id',$user_id)->get();

        if($contador>0){
            foreach($address as $adr){
                $ua = Billing::where('id',$adr->id)->first();
                $ua->status = 0;
                $ua->save();
            }
        }

        $billing = new Billing;

        $billing->name = $request->nombre;
        $billing->lastname = $request->apellidos;
        $billing->phone = $request->celular;
        $billing->other_phone = $request->telefono;
        $billing->email = $request->email;
        $billing->address1 = $request->direccion;
        $billing->city_id = $request->ciudad;
        $billing->state_id = $request->estado;
        $billing->zipcode = $request->zipcode;
        $billing->status = 1;

        $billing->user_id = $user_id;

        $billing->save();

        return response()->json(['rpta'=>'ok']);

    }

    public function activestatus(Request $request){


        $contador = Billing::where('user_id',$request->userid)->count();
        $address = Billing::where('user_id',$request->userid)->get();

        if($contador>0){
            foreach($address as $adr){
                $ua = Billing::where('id',$adr->id)->first();
                $ua->status = 0;
                $ua->save();
            }
        }

        $actualizado = Billing::where('id',$request->id)->first();
        $actualizado->status = '1';
        $actualizado->save();


       return response()->json(['rpta'=>'ok']);
    }


    public function getCiudades(Request $request){

        $ciudades = City::where('state_id',$request->id)->get();

        return response()->json($ciudades);
    }

    public function getbilling($id){


        $billing = Billing::where('id',$id)->first();

        $ciudad = City::where('id',$billing->city_id)->first();

        $datos =  [
            'id' => $billing->id,
            'address1' => $billing->address1,
            'address2' => $billing->address2,
            'city_id' => $billing->city_id,
            'city_name' => $ciudad->name,
            'email' => $billing->email,
            'lastname' => $billing->lastname,
            'name' => $billing->name,
            'other_phone' => $billing->other_phone,
            'phone' => $billing->phone,
            'state_id' => $billing->state_id,
            'zipcode' => $billing->zipcode
        ];


        return response()->json($datos);
    }


    public function updatebilling(Request $request, $id){
        $user_id = Auth::id();

        $billing =  Billing::where('id',$id)->first();

        $billing->name = $request->nombre;
        $billing->lastname = $request->apellidos;
        $billing->phone = $request->celular;
        $billing->other_phone = $request->telefono;
        $billing->email = $request->email;
        $billing->address1 = $request->direccion;
        $billing->city_id = $request->ciudad;
        $billing->state_id = $request->estado;
        $billing->zipcode = $request->zipcode;
        $billing->status = 1;

        $billing->user_id = $user_id;

        $billing->save();

        return response()->json(['rpta'=>'ok']);

    }


}

