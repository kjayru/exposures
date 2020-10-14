<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slide;
use App\SlideItem;
use App\Page;
use App\Testimony;
use App\Dealer;
use App\Video;
use App\Product;
use App\Category;
use App\Marca;
use App\Activity;
use Illuminate\Support\Str;
use Excel;
use File;
use Illuminate\Support\Facades\Storage;
use App\State;
use App\Brand;
use App\Imports\ProductImport;
use App\Gallery;
use App\Order;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMail;
use Sendgrid\Sendgrid;

class HomeController extends Controller
{
    public function index(){

        $slide = Slide::where('id',1)->first();
        $testimonios = Testimony::orderBy('id','desc')->get();
        $categorias = Category::all();
        $pagina = Page::where('id',1)->first();

        return view('frontend.home.inicio',['testimonios'=>$testimonios,'slide'=>$slide,'pagina'=>$pagina]);
    }

    public function empresa(){
        $slide = Slide::where('id',2)->first();

        $pagina = Page::where('id',2)->first();
        return view('frontend.home.empresa',['slide'=>$slide,'pagina'=>$pagina]);
    }

    public function productos(){

        $slide = Slide::where('id',3)->first();
        $productos = Product::orderBy('id','desc')->paginate(8);
        $categorias = Category::orderBy('name','desc')->get();
        $categoria = null;


        return view('frontend.home.productos',['slide'=>$slide,'productos'=>$productos,'categorias'=>$categorias,'categoria'=>$categoria]);
    }

    public function productoCategory($cat,$slug){


        $slide = Slide::where('id',3)->first();
        $categoria = Category::where('id',$cat)->first();

        $productos = $categoria->product()->paginate(8);


        $marcas = Marca::where('parent_id','')->get();

        $actividades = Category::orderBy('name','asc')->where('parent_id',null)->get();


        $categorias = Category::orderBy('name','desc')->get();
        return view('frontend.home.productos',['slide'=>$slide,'productos'=>$productos,'categorias'=>$categorias,'categoria'=>$categoria,'marcas'=>$marcas,'actividades'=>$actividades]);
    }


    public function productoMarca($cat,$subcat){

        $slide = Slide::where('id',3)->first();
        $brand = Marca::where('id',$cat)->first();

        $productos =$brand->product()->paginate(8);
       // dd($cat." - ".$subcat);

        $categoria = Product::where('brand_id',$cat)->first();


       // $productos = $categoria->product()->paginate(8);

        $marcas = Marca::where('parent_id','')->get();
        $actividades = Activity::orderBy('name','asc')->get();

        $categorias = Category::orderBy('name','desc')->get();
        return view('frontend.home.productos',['slide'=>$slide,'productos'=>$productos,'categorias'=>$categorias,'categoria'=>$categoria,'marcas'=>$marcas,'actividades'=>$actividades]);
    }



    public function productoDetalle($id,$slug){
        $slide = Slide::where('id',3)->first();

        $producto = Product::where('id',$id)->first();



        $contador = Gallery::where('product_id',$id)->count();

        $galeria = Gallery::where('product_id',$id)->get();

        if(count($producto->marca)>0){

            $relacionados = $producto->marca[0]->product;

        }else{
            $relacionados = null;
        }



        return view('frontend.home.detalleProducto',['slide'=>$slide,'producto'=>$producto,'contador'=>$contador,'galeria'=>$galeria,'relacionados'=>$relacionados]);
    }

    public function videos(){
        $slide = Slide::where('id',4)->first();

        $destacado = Video::where('destacar',1)->first();

        $videos = Video::where('destacar','<>',1)->orderBy('order','asc')->get();


        return view('frontend.home.videos',['slide'=>$slide,'videos'=>$videos,'destacado'=>$destacado]);
    }

    public function distribuidores(){
        $slide = Slide::where('id',4)->first();
        $dealers = Dealer::orderBy('id','desc')->paginate(8);

        $marcas = Brand::orderBy('name','desc')->get();
        $estados = State::orderBy('name','desc')->get();
        return view('frontend.home.distribuidores',['slide'=>$slide,'dealers'=>$dealers,'estados'=>$estados,'marcas'=>$marcas]);
    }


    public function dealerSearch($id){
        $slide = Slide::where('id',4)->first();
       // $dealers = Dealer::where('id',$id)->orderBy('id','desc')->paginate(8);

        $estados = State::orderBy('name','desc')->get();

        $ciudad = State::where('id',$id)->first();

        $dealers = $ciudad->dealers;
        $marcas = Brand::orderBy('name','desc')->get();

        return view('frontend.home.buscar',['slide'=>$slide,'dealers'=>$dealers,'estados'=>$estados,'ciudad'=>$ciudad,'marcas'=>$marcas,'ciudad'=>$ciudad->name]);
    }

    public function dealermarca($marca){

        $slide = Slide::where('id',4)->first();
        $brand = Brand::where('id',$marca)->first();
        $estados = State::orderBy('name','desc')->get();

        $ciudad = null;
        $marcas = Brand::orderBy('name','desc')->get();

        return view('frontend.home.buscarmarca',['slide'=>$slide,'dealers'=>$brand->dealer,'estados'=>$estados,'ciudad'=>$ciudad,'marcas'=>$marcas,'marca'=>$brand->name]);
    }


    public function contacto(){
        $slide = Slide::where('id',6)->first();
        $pagina = Page::where('id',6)->first();
        return view('frontend.home.contacto',['slide'=>$slide,'pagina'=>$pagina]);
    }

    public function getslide(){
        $slider = SlideItem::where('slide_id','1')->get();

       foreach($slider as $sli){
           $items[] = $sli->multimedias;
       }


       return response()->json([$items]);
    }


    public function search(Request $request){

        $products = \DB::table('products')->where('name', 'like', '%'.$request->search.'%')->get();


        return view('frontend.home.search',['products'=>$products]);
    }


    public function preguntas(){


        return view('frontend.home.preguntas');
    }

    public function politicas(){


        return view('frontend.home.politicas');
    }


    public function getinicio(){
        $page = Page::where('id',1)->first();

        return response()->json($page);
    }
    public function getempresa(){
        $page = Page::where('id',2)->first();

        return response()->json($page);
    }
    public function getproductos(){
        $page = Page::where('id',3)->first();

        return response()->json($page);
    }
    public function getvideos(){
        $page = Page::where('id',4)->first();

        return response()->json($page);
    }
    public function getdistribuidores(){
        $page = Page::where('id',5)->first();

        return response()->json($page);
    }
    public function getcontacto(){
        $page = Page::where('id',6)->first();

        return response()->json($page);
    }

    public function ingresar(){
        return view('frontend.login.index');
    }

    public function filtro($id){
        $arreglo = collect();
        $producto = Product::where('id',$id)->first();
        $dealers=null;

        $slide = Slide::where('id',4)->first();


        $marcas = Brand::orderBy('name','desc')->get();
        $estados = State::orderBy('name','desc')->get();

        if($producto!=null){
            foreach($producto->marca as $marca){
                dd($marca->brand);
                if($marca->parent_id == null){
                    if(!$marca->brand->dealer){
                    foreach($marca->brand->dealer as $dl){

                        $arreglo->push($dl);
                    }
                  }
                }
                break;
            }

            $dealers = collect($arreglo->all());
        }


        return view('frontend.home.filtro',['slide'=>$slide,'dealers'=>$dealers,'estados'=>$estados,'marcas'=>$marcas]);
    }


    public function procesocontacto(Request $request){
        $slide = Slide::where('id',6)->first();
        $pagina = Page::where('id',6)->first();

      $data = ([
        "nombre"  =>  $request['nombre'],
        "email"   =>  $request['email'],
        "asunto"  =>  $request['asunto'],
        "mensaje" =>  $request['mensaje'],
        ]);

        Mail::to('tania@cobos.com.mx')->send(new ContactoMail($data));


        return view('frontend.home.gracias',['slide'=>$slide,'pagina'=>$pagina]);

    }

    public function testmail(){


       $order = Order::where('id',1)->first();


       Mail::to("tania@cobos.com.mx")->send(new OrderShipped($order));

    }

    public function getphotos(){

        $multimedias = Storage::allFiles('products');
        return Response()->json($multimedias);
    }

}

