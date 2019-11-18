<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;

class OutletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


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
}
