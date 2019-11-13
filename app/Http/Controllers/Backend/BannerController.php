<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slide;
use App\SlideItem;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
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
        $banners = Slide::orderBy('id','desc')->get();
        return view('backend.banner.index',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        $banner = Slide::find($id);
        $images = Storage::disk('public')->files('slide');



        return view('backend.banner.edit',['banner'=>$banner, 'images'=>$images]);
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
       $items = count($request->imagen);

        $slide = Slide::find($id);

        $slide->name = $request->nombre;
        $slide->save();



        for($i=0;$i<$items;$i++){
            if(!isset($request->item_id[$i])){

                $sl = new slideItem();
                $sl->link = $request->link[$i];
                $sl->target = $request->target[$i];
                $sl->imagen = $request->imagen[$i];
                $sl->order = $request->order[$i];
                $sl->slide_id = $request->slide_id;
                $sl->save();

            }else{

                $sl = slideItem::where('id',$request->item_id[$i])->first();

                $sl->link = $request->link[$i];
                $sl->target = $request->target[$i];
                $sl->imagen = $request->imagen[$i];
                $sl->order = $request->order[$i];
                $sl->save();
            }
        }

        return redirect()->route('banner.index')->with(['info'=>'Banner actualizado']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function destroyitem($id){
        slideItem::find($id)->delete();

        return response()->json(['rpta'=>'ok']);
    }
}
