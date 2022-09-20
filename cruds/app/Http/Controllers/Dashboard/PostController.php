<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostPost;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //echo('Lourdes Del Valle');
        $post=Post::orderBy('created_at','desc')->cursorpaginate(5); //según la variable created_at de manera ascendente
        //$posts=Post::get();
        echo view ('Dashboard.post.index',["posts"=>$post]); //para los arreglos, se debe apuntar con =>
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo view ('dashboard.post.create',["posts"=>new post()]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostPost $request)
    {
        echo "el titulo trae " .$request->title; 
        
        Post :: create($request->validated());
        return back()->with('status', 'Muchas gracias, tu post fue creado con éxito :).'); // status: si hay una sesión activa
        //return redirect('post.create')->with('status', 'Post created'); // status: si hay una sesión activa
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //echo "Hola mundo";
        echo view ('Dashboard.Post.show', ["post"=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        echo view ('Dashboard.Post.edit', ["post"=>$post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostPost $request, Post $post)
    {
        //
        $post->update($request->validated());
        return back()->with('status', 'Muchas gracias, tu post fue actualizado con éxito :).');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        $post->delete();
        return back()->with('status', 'Post borrado con éxito');
        //echo "Hola?";
    }
}
