<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use Illuminate\Support\Str;
use App\Multimedia;
use App\MultimediaProduct;
use App\ProductMultimedia;
class ProductController extends Controller
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
        $productos = Product::orderBy('id','desc')->get();

        return view('backend.product.index',['productos'=>$productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Category::orderBy('name','desc')->get();
        return view('backend.product.create',['categorias'=>$categorias]);
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
            'name' => 'required|min:3',
            'price' => 'required',
            'excerpt' => 'required',
            'description' => 'required',
            'title' => 'required',
            'imagen'=>'required|image',

        ]);

        $product = new Product();

        $product->name = $request->name;
        $product->price = $request->price;
        $product->excerpt = $request->excerpt;
        $product->description = $request->description;
        $product->title = $request->title;
        $product->slug = Str::slug($request->name, '-');

        if($request->hasFile('imagen')){
         $imagen = $request->file('imagen')->store('products');
         $product->imagen = $imagen;
        }

        $product->category_id = $request->category;
        $product->save();

        return redirect()->route('product.edit',['id' => $product->id ])
        ->with('info','Producto actualizado satisfactoriamente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


      $product = Product::find($id);

      $categorias = Category::orderBy('name','desc')->get();
    $multimedias = Multimedia::orderBy('id','desc')->get();

      return view('backend.product.edit',['product'=>$product,'categorias'=>$categorias,'fotos'=>$multimedias]);
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


        $product = Product::find($id);

        $product->name = $request->name;
        $product->price = $request->price;
        $product->excerpt = $request->excerpt;
        $product->description = $request->description;
        $product->slug = Str::slug($request->name, '-');
        if($request->hasFile('imagen')){
         $imagen = $request->file('imagen')->store('products');
         $product->imagen = $imagen;
        }
        $product->category_id = $request->category;

        if($request->outlet){
            $product->outlet = $request->outlet;
        }


        $product->save();

        if($request->imageid){
            foreach($request->imageid as $imgid){
                $producto = Product::findOrFail($id);
                $product->multimedias()->attach($imgid);
            }
        }

        return redirect()->route('product.edit',['id'=>$id])
     ->with('info','Producto actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Product::find($request->id)->delete();

        return redirect()->route('product.index')
        ->with('info','Producto eliminado con exito');
    }


}
