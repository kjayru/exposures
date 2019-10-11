<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}
