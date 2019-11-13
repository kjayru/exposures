<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slide;
use App\SlideItem;
use App\Page;
use App\Testimony;

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
        return view('frontend.home.productos',['slide'=>$slide]);
    }
    public function productoDetalle($slug){
        $slide = Slide::where('id',3)->first();
        return view('frontend.home.detalleProducto',['slide'=>$slide]);
    }

    public function videos(){
        $slide = Slide::where('id',4)->first();
        return view('frontend.home.videos',['slide'=>$slide]);
    }
    public function distribuidores(){
        $slide = Slide::where('id',4)->first();
        return view('frontend.home.distribuidores',['slide'=>$slide]);
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
}

