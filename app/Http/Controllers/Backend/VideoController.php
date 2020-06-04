<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Video;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $videos = Video::orderBy('id','desc')->get();
        return view('backend.videos.index',compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.videos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $video =  new Video();
        $video->name = $request->name;
        $video->link = $request->link;
        $video->description = $request->description;
        $video->order = $request->order;
        if( $request->destacar){
        $video->destacar = $request->destacar;
        }else{
            $video->destacar = 0;
        }
        $video->save();

        return redirect()->route('video.index')->with(['info'=>'Creado exitosamente']);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $video = Video::find($id);
        return view('backend.videos.edit',['video'=>$video]);
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
        $video = Video::find($id);

        $video->name = $request->name;
        $video->link = $request->link;
        $video->description = $request->description;
        $video->order = $request->order;
        $video->destacar = $request->destacar;
        $video->save();

        return redirect()->route('video.index')->with(['info'=>'Datos actualizados']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {


        Video::find($request->id)->delete();
        return redirect()->route('video.index')->with(['info'=>'Eliminado ']);
    }
}
