<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\CategoryBlog;

class ExposureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $categorias = CategoryBlog::orderBy('id','desc')->get();
        $posts = Post::orderBy('id','desc')->get();
        return view('frontend.exposure-team.index',['categorias'=>$categorias,'posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function categoria($slug)
    {
        $categoria = CategoryBlog::where('slug',$slug)->first();
        $categorias = CategoryBlog::orderBy('id','desc')->get();


        return view('frontend.exposure-team.categoria',['categorias'=>$categorias,'posts'=>$categoria->posts]);
    }

    public function detalle($categoria,$slug)
    {

        $post = Post::where('slug',$slug)->first();

        return view('frontend.exposure-team.detalle',['post'=>$post]);
    }
}
