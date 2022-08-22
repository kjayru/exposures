<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CategoryBlog;
use Illuminate\Support\Str;

class CategoryBlogController extends Controller
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
        $categorias = CategoryBlog::orderBy('id','desc')->get();
        return view('backend.categoryblog.index',['categorias'=>$categorias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.categoryblog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3'
        ]);

        $categoria = new CategoryBlog();
        $categoria->name = $request->name;
        $categoria->slug = Str::slug($request->name, '-');
        $categoria->save();

        return redirect()->route('catblog.edit',['id'=>$categoria->id])->with(['info'=>'Categoria blog creada']);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = CategoryBlog::find($id);

        return view('backend.categoryblog.edit',['categoria'=>$categoria]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3'
        ]);

        $categoria = CategoryBlog::find($id);
        $categoria->name = $request->name;
        $categoria->slug = Str::slug($request->name, '-');
        $categoria->save();

        return redirect()->route('catblog.edit',['id'=>$id])->with(['info'=>'Categoria blog actualizada']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        CategoryBlog::find($request->id)->delete();

        return redirect()->route('catblog.index')
        ->with('info','Producto eliminado con exito');
    }
}
