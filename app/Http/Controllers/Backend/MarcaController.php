<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Marca;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $makes = Marca::all();
        $marcas = Marca::marcas();

        return view('backend.marca.index',['marcas'=>$marcas,'makes'=>$makes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $makes = Marca::orderBy('id','desc')->get();
        $marcas = Marca::marcas();
        return view('backend.marca.create',['makes'=>$makes,'marcas'=>$marcas]);
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

      ]);

       $marca =  new Marca();

       $marca->name = $request->nombre;
       $marca->slug = Str::slug($request->nombre, '-');

       $marca->parent_id = $request->categoria;
       $marca->order = $request->order;
       $marca->save();

      return redirect()->route('marca.edit',['id'=>$marca->id])
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
        $marca = Marca::find($id);
        $makes = Marca::orderBy('name','asc')->get();

        return view('backend.marca.edit',['marca'=>$marca,'makes'=>$makes]);
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

        ]);

         $marca =  Marca::find($id);


         $marca->name = $request->nombre;
         $marca->slug = Str::slug($request->nombre, '-');

         $marca->parent_id = $request->categoria;
         $marca->order = $request->order;
         $marca->save();



        return redirect()->route('marca.edit',['id'=>$id])
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
        Marca::find($request->id)->delete();

        return redirect()->route('marca.index')
        ->with('info','Producto eliminado con exito');
    }
}
