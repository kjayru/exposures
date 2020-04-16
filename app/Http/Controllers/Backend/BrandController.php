<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use App\Brand;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marcas = Brand::orderBy('id','desc')->paginate(20);

        return view('backend.brand.index',['marcas'=>$marcas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.brand.create');
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
            'file' => 'required',
        ]);

         $brand =  new Brand();

         $brand->name = $request->nombre;
         $brand->file =  Storage::putFile('marcas', $request->file('file'));

         $brand->save();

        return redirect()->route('brand.edit',['id'=>$brand->id])
       ->with('info','Marca creada satisfactoriamente');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $marca = Brand::find($id);

        return view('backend.brand.edit',['marca'=>$marca]);
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
        dd($request);
        $request->validate([
            'nombre' => 'required',
            'file' => 'required',
        ]);

         $brand =  Brand::find($id);


         $brand->name = $request->nombre;
         $brand->file =  $request->file('file')->store('marcas');

         $brand->save();




        return redirect()->route('brand.edit',['id'=>$id])
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
        Brand::find($request->id)->delete();

        return redirect()->route('brand.index')
        ->with('info','Producto eliminado con exito');
    }
}
