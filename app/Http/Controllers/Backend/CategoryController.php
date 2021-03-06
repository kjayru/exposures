<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Category;

class CategoryController extends Controller
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
        $categorias = Category::all();
        $categories = Category::categorias();
        return view('backend.category.index',['categorias'=>$categorias,'categories'=>$categories]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Category::orderBy('id','desc')->get();
        return view('backend.category.create',['categorias'=>$categorias]);
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
          'nombre' => 'required',
          'titulo' => 'required',
      ]);

       $category =  new Category();

       $category->name = $request->nombre;
       $category->slug = Str::slug($request->nombre, '-');
       $category->title =  $request->titulo;
       $category->parent_id = $request->categoria;
       $category->order = $request->order;
       $category->save();

      return redirect()->route('category.index',['id'=>$category->id])
     ->with('info','Categoria creada satisfactoriamente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = Category::find($id);
        $categorias = Category::orderBy('name','asc')->get();

        return view('backend.category.edit',['categoria'=>$categoria,'categorias'=>$categorias]);
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
            'nombre' => 'required',
            'titulo' => 'required',
        ]);

         $category =  Category::find($id);


         $category->name = $request->nombre;
         $category->slug = Str::slug($request->nombre, '-');
         $category->title =  $request->titulo;
         $category->parent_id = $request->categoria;
         $category->order = $request->order;
         $category->save();



        return redirect()->route('category.index',['id'=>$id])
       ->with('info','Categoria actualizada satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Category::find($request->id)->delete();

        return redirect()->route('category.index')
        ->with('info','Producto eliminado con exito');
    }
}
