<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Product;
use App\Category;
use App\Marca;
use Illuminate\Support\Str;
use App\Multimedia;
use App\MultimediaProduct;
use App\ProductMultimedia;
use App\Gallery;
use App\CategoryProduct;
use App\MarcaProduct;

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
        $categorias = Category::all();

        return view('backend.product.index',['productos'=>$productos,'categorias'=>$categorias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Category::orderBy('name','desc')->get();

        $marcas = Marca::OrderBy('name','desc')->where('parent_id',null)->get();




        $multimedias = Storage::allFiles('products');

        $categories = Category::categorias();

        $marcas = Marca::marcas();

        return view('backend.product.create',['categories'=>$categories,'marcas'=>$marcas,'categorias'=>$categorias,'marcas'=>$marcas,'fotos'=>$multimedias]);
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
            'description' => 'required'
        ]);

        $product = new Product();

        $product->name = $request->name;
        $product->price = $request->price;
        $product->excerpt = $request->excerpt;
        $product->description = $request->description;
        $product->title = $request->name;
        $product->slug = Str::slug($request->name, '-');

        $product->imagen = $request->imagen;

        /*if($request->hasFile('imagen')){
            $imagen = $request->file('imagen')->store('products');
            $product->imagen = $imagen;
        }*/

        if(!$request->outlet){
            $product->outlet = 0;
        }else{
            $product->outlet = 1;
        }

        $product->save();

        $product->category()->sync($request->categorias);
        $product->marca()->sync($request->marcas);

        /*if($request->imageid){

            foreach($request->imageid as $imgid){
                $galeria = New Gallery();
                $galeria->product_id  = $product->id;
                $galeria->imagen = $imgid;
                $galeria->save();

            }
        }*/

        if($request->gimagen){
            foreach($request->gimagen as $gal){
                $galeria = new Gallery();
                $galeria->imagen = $gal;
                $galeria->product_id = $product->id;
                $galeria->save();
            }
        }

        return redirect()->route('product.index',['id' => $product->id ])
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

        $catprods = $product->category()->get();

        $cats=[];
        $marcs=[];

        foreach($catprods as $cat){
           $cats[] =  $cat->id;
        }
        if(count($cats)>0){
            $mcas = $cats;
        }else{
            $mcas = 0;
        }

        $catmarcs = $product->marca()->get();

        foreach($catmarcs as $cam){
            $marcs[] =  $cam->id;
         }
         if(count($marcs)>0){
             $mpro = $marcs;
         }else{
             $mpro = 0;
         }

      //  $marcas = Marca::OrderBy('name','desc')->where('parent_id',null)->get();

        $galerias = Gallery::where('product_id',$id)->get();
        $multimedias = Storage::allFiles('products');
        $categories = Category::categorias();
        $marcas = Marca::marcas();


        return view('backend.product.edit',['product'=>$product,'categories'=>$categories,'categorias'=>$categorias,'catprods'=>$mcas,'mpro'=>$mpro,'marcas'=>$marcas,'galerias'=>$galerias]);
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
        $product->imagen = $request->imagen;
        $product->slug = Str::slug($request->name, '-');
       /* if($request->hasFile('imagen')){
         $imagen = $request->file('imagen')->store('products');
         $product->imagen = $imagen;
        }*/

        if(!$request->outlet){
            $product->outlet = 0;
        }else{
            $product->outlet = 1;
        }

        $product->save();

        $product->category()->sync($request->categorias);
        $product->marca()->sync($request->marcas);


        if($request->gimagen){

            //$product->galleries()->update(['product_id' => $id,'imagen'=>$request->gimagen]);
                Gallery::where('product_id',$id)->delete();

                foreach($request->gimagen as $gal){
                    $galeria = new Gallery();
                    $galeria->imagen = $gal;
                    $galeria->product_id = $product->id;
                    $galeria->save();
                }
            }

        /*if($request->imageid){
            Gallery::where('product_id',$id)->delete();

            foreach($request->imageid as $imgid){
                $galeria = New Gallery();
                $galeria->product_id  = $id;
                $galeria->imagen = $imgid;
                $galeria->save();

            }
        }*/

        return redirect()->route('product.index',['id'=>$id])
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


    public function deletegal(Request $request){

        Gallery::find($request->id)->delete();
        return response()->json([
            'rpta' => 'ok',
        ]);

    }


}
