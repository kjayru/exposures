<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\CategoryBlog;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id','desc')->get();
        return view('backend.blog.index',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = CategoryBlog::orderBy('name','desc')->get();
        return view('backend.blog.create',['categorias'=>$categorias]);
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
            'title' => 'required|min:3',
            'excerpt' => 'required',
            'content' => 'required',
            'category_blog_id' => 'required'
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->excerpt = $request->excerpt;
        $post->content = $request->content;
        $post->facebook = $request->facebook;
        $post->instagram = $request->instagram;

        if($request->hasFile('foto')){
            $foto = $request->file('foto')->store('profile');
            $post->foto = $foto;
        }

        $post->category_blog_id = $request->category_blog_id;

        $post->save();

        return redirect()->route('post.edit',['id'=>$post->id])
                ->with(['info'=>'Post creado']);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categorias = CategoryBlog::orderBy('name','desc')->get();

        return view('backend.blog.edit',['post'=>$post,'categorias'=>$categorias]);
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
            'title' => 'required|min:3',
            'excerpt' => 'required',
            'content' => 'required',
            'category_blog_id' => 'required'
        ]);

        $post =  Post::find($id);
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->excerpt = $request->excerpt;
        $post->content = $request->content;
        $post->facebook = $request->facebook;
        $post->instagram = $request->instagram;
        if($request->hasFile('foto')){
            $foto = $request->file('foto')->store('profile');
            $post->foto = $foto;
        }

        $post->category_blog_id = $request->category_blog_id;

        $post->save();

        return redirect()->route('post.edit',['id'=>$id])
                ->with(['info'=>'Post actualizado satisfactoriamente']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Post::find($request->id)->delete();

        return redirect()->route('post.index')
        ->with('info','Post eliminado con exito');
    }


}
