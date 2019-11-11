<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Testimony;
class TestimonyController extends Controller
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
        $testimonials = Testimony::orderBy('id','desc')->get();
        return view('backend.testimony.index',['testimonials'=>$testimonials]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.testimony.create');
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
            'categoria' => 'required',
            'testimonio' => 'required',

        ]);


        $testimony = new Testimony();

        $testimony->nombres = $request->nombre;
        $testimony->foto = $request->foto;
        $testimony->categoria = $request->categoria;
        $testimony->testimonio = $request->testimonio;
        $testimony->facebook = $request->facebook;
        $testimony->twitter = $request->twitter;

        if($request->hasFile('foto')){
            $foto = $request->file('foto')->store('profile');
            $testimony->foto = $foto;
           }
        $testimony->save();

        return redirect()->route('testimony.edit',['id'=>$testimony->id])
        ->with('info','Testimonio creada satisfactoriamente');

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $testimony = Testimony::find($id);

       return view('backend.testimony.edit',['testimony'=>$testimony]);
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
            'categoria' => 'required',
            'testimonio' => 'required',

        ]);


        $testimony = Testimony::find($id);

        $testimony->nombres = $request->nombre;

        $testimony->categoria = $request->categoria;
        $testimony->testimonio = $request->testimonio;
        $testimony->facebook = $request->facebook;
        $testimony->twitter = $request->twitter;

        if($request->hasFile('foto')){
            $foto = $request->file('foto')->store('profile');
            $testimony->foto = $foto;
           }
        $testimony->save();

        return redirect()->route('testimony.edit',['id'=>$id])
        ->with('info','Testimonio actualizado satisfactoriamente');
        }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Testimony::find($request->id)->delete();

        return redirect()->route('testimony.index')
        ->with('info','Testimonio eliminado con exito');
    }
}
