<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Marca;
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
use App\Slide;
$provider = new ExpressCheckout;      // To use express checkout.
//$provider = new AdaptivePayments;     // To use adaptive payments.


class OutletController extends Controller
{
     public $gateway;



    public function index(){
        $slide = Slide::where('id',7)->first();

        $products = Product::where('outlet','1')->orderBy('id','desc')->get();

        $latest = Product::where('outlet','1')->orderBy('id','desc')->limit(6)->get();
        /*$catout = [];
        foreach($products as $prod){

                $obj = array('name'=> $prod->category->name ,'slug'=> $prod->category->slug);
                array_push($catout,$obj);

        }*/
        //$coleccion = collect($catout);
        //$categorias = $coleccion->unique();
        $marcas = Marca::where('parent_id',null)->get();

      ;

        return view('frontend.outlet.index',compact('latest','products','marcas','slide'));
    }


    public function categoria($slug){


        $marca = Marca::where('slug',$slug)->first();


        $products = $marca->products;



        $latest = Product::where('outlet','1')->orderBy('id','desc')->limit(4)->get();
        $generals = Product::where('outlet','1')->orderBy('id','desc')->get();

        $catout = [];


        $marcas = Marca::where('parent_id',null)->get();
        $nombre = $marca->name;

        return view('frontend.outlet.index',compact('latest','products','marcas','nombre'));
    }


    public function detalle($slug,$prod){
        $producto = Product::where('slug',$prod)->first();

        $meta_title ="exposure outle";
        $meta_description ="Ipsum lorem ipcus";
        $meta_image = 'https://exposure.kjayru.com/storage/products/1272-1-Joshua-Tree-Hat.JPG';

        return view('frontend.outlet.detalle',['producto'=>$producto,"meta_title"=>$meta_title,"meta_description"=>$meta_description,"meta_image"=>$meta_image]);
    }


    public function addCart(Request $request){

        $product = Product::where('id',$request->id)->first();

        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);


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


    public function productos(Request $request){
        $producto = Product::where('id',$request->id)->get();
        $prods = $request->session()->get('cart');
        return view('frontend.cart.index',['productos'=>$prods]);
    }


}
