<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Suscription;

class HomeController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
   }
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function suscripcion(){
        $suscripciones = Suscription::orderBy('id','desc')->get();

        return view('backend.suscripcion.index',['suscripciones'=>$suscripciones]);
    }

    public function exportar(){

        
    }
}
