<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slide;
use App\SlideItem;
use App\Page;
class HomeController extends Controller
{
    public function index(){
        return view('frontend.home.inicio');
    }

    public function empresa(){
        return view('frontend.home.empresa');
    }

    public function productos(){
        return view('frontend.home.productos');
    }

    public function videos(){
        return view('frontend.home.videos');
    }
    public function distribuidores(){
        return view('frontend.home.distribuidores');
    }
    public function contacto(){
        return view('frontend.home.contacto');
    }

    public function getslide(){
        $slider = SlideItem::where('slide_id','1')->get();
 
       foreach($slider as $sli){
           $items[] = $sli->multimedias;
       }

    
       return response()->json([$items]);
    }

    public function getpage(){
        $page = Page::where('id',1)->first();

        return response()->json([$page]);
    }
}

