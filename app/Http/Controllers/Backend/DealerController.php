<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Dealer;
use App\State;
use App\Multimedia;
use App\Brand;
use App\Brandmedia;
class DealerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dealers = Dealer::orderBy('id','desc')->get();

        return view('backend.dealer.index',['dealers'=>$dealers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados = State::orderBy('name','desc')->get();


        $files = Storage::files('marcas');

        $estados = State::orderBy('name','desc')->get();
        $multimedias = Multimedia::orderBy('id','desc')->get();
        $brands = Brand::all();


            $contenedor =null;


        return view('backend.dealer.create',['estados'=>$estados,'fotos'=>$files,'brands'=>$brands,'contenedor'=>$contenedor]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $dealer = new Dealer();

        $dealer->name = $request->name;
        $dealer->subtitle = $request->subtitle;
        $dealer->description = $request->description;
        $dealer->address = $request->address;
        $dealer->phone = $request->phone;
        $dealer->email = $request->email;
        $dealer->maps = $request->maps;
        $dealer->order = $request->order;
        $dealer->state_id = $request->state;

        $dealer->save();

        if($request->marca){
            $dealer->brand()->sync($request->marca);
        }



        return redirect()->route('dealer.index')->with(['info'=>'Datos actualizados']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $contenedor = null;
        $files = Storage::files('marcas');


        $dealer = Dealer::find($id);
        $estados = State::orderBy('name','desc')->get();
        $multimedias = Multimedia::orderBy('id','desc')->get();
        $brands = Brand::all();

        $arreglo = $dealer->brand;
        foreach($arreglo as $arr){
            $contenedor[] =$arr->id;
        }


        return view('backend.dealer.edit',['dealer'=>$dealer,'estados'=>$estados,'fotos'=>$files,'brands'=>$brands,'contenedor'=>$contenedor]);
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


        $dealer = Dealer::find($id);
        $dealer->name = $request->name;
        $dealer->subtitle = $request->subtitle;
        $dealer->description = $request->description;
        $dealer->address = $request->address;
        $dealer->phone = $request->phone;
        $dealer->email = $request->email;
        $dealer->maps = $request->maps;
        $dealer->order = $request->order;
        $dealer->state_id = $request->state;

        $dealer->save();

        if($request->marca){

            $dealer->brand()->sync($request->marca);
        }

        return redirect()->route('dealer.index')->with(['info'=>'Datos actualizados']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $dealer = Dealer::find($request->id)->delete();

        return redirect()->route('dealer.index')->with(['info'=>'Datos actualizados']);
    }
}
