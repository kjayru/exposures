<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use App\Page;
use App\Block;
class PageController extends Controller
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
        $paginas = Page::orderBy('id','desc')->get();
        return view('backend.page.index',['paginas'=>$paginas]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bloques = null;
        $page = Page::find($id);




        return view('backend.page.edit',['page'=>$page,'bloques'=>$bloques]);
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


       /* $page->content = $request->editorgut;
        $page->save();*/

       // $page->blocks()->associate($request->editor);
       Block::where('page_id',$id)->delete();

        foreach($request->editor as $data){
          $block = new Block;
          $block->page_id = $id;
          $block->contenido = $data;
          $block->save();
        }

        return redirect()->route('pages.edit',['id'=>$id]);
    }


}
