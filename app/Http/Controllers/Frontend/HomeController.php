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
use App\Imports\ProductImport;

class HomeController extends Controller
{
    public function index(){

        $slide = Slide::where('id',1)->first();
        $testimonios = Testimony::orderBy('id','desc')->get();

        return view('frontend.home.inicio',['testimonios'=>$testimonios,'slide'=>$slide]);
    }

    public function empresa(){
        $slide = Slide::where('id',2)->first();
        return view('frontend.home.empresa',['slide'=>$slide]);
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
        $productos = $categoria->products()->paginate(8);

        $categorias = Category::orderBy('name','desc')->get();
        return view('frontend.home.productos',['slide'=>$slide,'productos'=>$productos,'categorias'=>$categorias,'categoria'=>$categoria]);
    }
    public function productoDetalle($cat,$slug){
        $slide = Slide::where('id',3)->first();

        $producto = Product::where('slug',$slug)->first();
        return view('frontend.home.detalleProducto',['slide'=>$slide,'producto'=>$producto]);
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

        return view('frontend.home.distribuidores',['slide'=>$slide,'dealers'=>$dealers]);
    }
    public function contacto(){
        $slide = Slide::where('id',5)->first();
        return view('frontend.home.contacto',['slide'=>$slide]);
    }

    public function getslide(){
        $slider = SlideItem::where('slide_id','1')->get();

       foreach($slider as $sli){
           $items[] = $sli->multimedias;
       }


       return response()->json([$items]);
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


    public function jobslug(){


        //$products = Product::all();
        /*
        foreach($products as $prod){
        $product = Product::find($prod->id);
        $product->slug = Str::slug($prod->name, '-');
        $product->save();

        echo Str::slug($prod->name, '-')."<br>";

        }*/

        //$path = File::get(public_path().'/productos_imagenes.xls');
       //Excel::import(new ProductImport, 'productos_imagenes.xls');


        //dd($data);
    }
}

