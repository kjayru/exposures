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
use Illuminate\Support\Str;
use Excel;
use File;
use App\State;
use App\Imports\ProductImport;


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

    public function productoCategory($cat){
        $slide = Slide::where('id',3)->first();


        $categoria = Category::where('slug',$cat)->first();

        $productos = $categoria->product()->paginate(8);


        $categorias = Category::orderBy('name','desc')->get();
        return view('frontend.home.productos',['slide'=>$slide,'productos'=>$productos,'categorias'=>$categorias,'categoria'=>$categoria]);
    }


    public function productoDetalle($cat,$slug){
        $slide = Slide::where('id',3)->first();

        $producto = Product::where('slug',$slug)->first();

        $categoria = Category::where('slug',$cat)->first();

        return view('frontend.home.detalleProducto',['slide'=>$slide,'producto'=>$producto,'categoria'=>$categoria]);
    }

    public function videos(){
        $slide = Slide::where('id',4)->first();

        $destacado = Video::where('destacar',1)->first();

        $videos = Video::where('destacar','<>',1)->get();
        return view('frontend.home.videos',['slide'=>$slide,'videos'=>$videos,'destacado'=>$destacado]);
    }

    public function distribuidores(){
        $slide = Slide::where('id',4)->first();
        $dealers = Dealer::orderBy('id','desc')->paginate(8);

        $estados = State::orderBy('name','desc')->get();
        return view('frontend.home.distribuidores',['slide'=>$slide,'dealers'=>$dealers,'estados'=>$estados]);
    }


    public function dealerSearch($id){
        $slide = Slide::where('id',4)->first();
        $dealers = Dealer::where('id',$id)->orderBy('id','desc')->paginate(8);

        $estados = State::orderBy('name','desc')->get();

        $ciudad = State::where('id',$id)->first();

        return view('frontend.home.buscar',['slide'=>$slide,'dealers'=>$dealers,'estados'=>$estados,'ciudad'=>$ciudad]);
    }


    public function contacto(){
        $slide = Slide::where('id',5)->first();
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
}

