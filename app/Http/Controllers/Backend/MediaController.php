<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Multimedia;
class MediaController extends Controller
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
        $mediafiles = Multimedia::orderBy('id','desc')->get();

        return view('backend.media.index',["mediafiles"=>$mediafiles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.media.create');
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
            'file'=>'required|mimes:jpeg,png'
        ]);

        $media = new Multimedia();

        $file = $request->file('file')->store('products');
        $media->file = $file;

        $media->save();


        return response()->json($media);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Multimedia::find($id)->delete();
         return response()->json(['rpta'=>'ok']);
    }

    public function savephoto(Request $request){
        $request->validate([
            'file'=>'required|mimes:jpeg,png'
        ]);

        $media = new Multimedia();
        $file = $request->file('file')->store('products');
        $media->file = $file;

        $media->save();


        return response()->json(['rpta'=>'ok']);
    }

}
