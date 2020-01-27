<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;

use Session;
use DB;
use App\Invoice;
use App\BillingData;
use App\Payment;
use Illuminate\Support\Str;
use App\Cart;

use Omnipay\Omnipay;

// Import the class namespaces first, before using it directly
use Srmklive\PayPal\Services\ExpressCheckout;
use Srmklive\PayPal\Services\AdaptivePayments;

$provider = new ExpressCheckout;      // To use express checkout.
//$provider = new AdaptivePayments;     // To use adaptive payments.


class OutletController extends Controller
{
     public $gateway;



    public function index(){
        $products = Product::where('outlet','1')->orderBy('id','desc')->get();

        $latest = Product::where('outlet','1')->orderBy('id','desc')->limit(4)->get();
        $catout = [];
        foreach($products as $prod){

                $obj = array('name'=> $prod->category->name ,'slug'=> $prod->category->slug);
                array_push($catout,$obj);

        }
        $coleccion = collect($catout);
        $categorias = $coleccion->unique();

        return view('frontend.outlet.index',compact('latest','products','categorias'));
    }


    public function categoria($slug){

        $categoria = Category::where('slug',$slug)->first();
        $products = Product::where('category_id',$categoria->id)->where('outlet','1')->get();


        $latest = Product::where('outlet','1')->orderBy('id','desc')->limit(4)->get();
        $generals = Product::where('outlet','1')->orderBy('id','desc')->get();

        $catout = [];
        foreach($generals as $prod){
                $obj = array('name'=> $prod->category->name ,'slug'=> $prod->category->slug);
                array_push($catout,$obj);
        }
        $coleccion = collect($catout);
        $categorias = $coleccion->unique();

        $nombre = $categoria->name;

        return view('frontend.outlet.index',compact('latest','products','categorias','nombre'));
    }


    public function detalle($slug,$prod){
        $producto = Product::where('slug',$prod)->first();

        return view('frontend.outlet.detalle',compact('producto'));
    }


    public function addCart(Request $request){

        $product = Product::where('id',$request->id)->first();

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);

    // $cart->add($product,1,$product->price,$product->price);
    // $request->session()->put('cart', $cart);
    // $prods = $request->session()->get('cart');
    // return response()->json(['rpta'=>'ok','nombre'=>$product->name]);

      // return redirect()->back()->with('success', ['Producto agregado al carrito']);

       return response()->json(['rpta'=>'ok']);
    }



    public function getRemoveItem(Request $request){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($request->id);

        if(count($cart->items) > 0){
          Session::put('cart', $cart);
        }else{
          Session::forget('cart');
        }
        return response()->json(['rpta'=>'ok']);
      }



    public function procesopago($id){

       /* $provider = new ExpressCheckout;


        $data = [];
        $data['items'] = [
            [
                'name' => 'Product 1',
                'price' => 9.99,
                'desc'  => 'Description for product 1',
                'qty' => 1
            ],
            [
                'name' => 'Product 2',
                'price' => 4.99,
                'desc'  => 'Description for product 2',
                'qty' => 2
            ]
        ];

        $data['invoice_id'] = 1;
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = url('/payment/success');
        $data['cancel_url'] = url('/cart');

        $total = 0;
        foreach($data['items'] as $item) {
            $total += $item['price']*$item['qty'];
        }

        $data['total'] = $total;

        //give a discount of 10% of the order amount
        $data['shipping_discount'] = round((10 / 100) * $total, 2);



        $response = $provider->setExpressCheckout($data);
        dd($response);
        // Use the following line when creating recurring payment profiles (subscriptions)
        //$response = $provider->setExpressCheckout($data, false);

        dd("fin proceso");
        // This will redirect user to PayPal
        return redirect($response['paypal_link']);

        */
    }

    public function productos(Request $request){

        $producto = Product::where('id',$request->id)->get();

        $prods = $request->session()->get('cart');

        return view('frontend.cart.index',['productos'=>$prods]);
    }


}
