<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Http\Requests\StoreCategoriesPost;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo "Lourdes";
        $categories=Categories::orderBy('created_at','desc')->cursorpaginate(5); //según la variable created_at de manera ascendente
        //$posts=Post::get();
        echo view ('Dashboard.categories.index',["categories"=>$categories]); //para los arreglos, se debe apuntar con =>
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        echo view('Dashboard.Categories.create',["categories"=>new categories()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoriesPost $request)
    {
        //echo "el titulo trae " .$request->title; 
        
        Categories :: create($request->validated());
        return back()->with('status', 'Muchas gracias, tu categoría fue creada con éxito :).');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $category)
    {
        //
        echo view ('Dashboard.Categories.show', ["category"=>$category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories $category)
    {
        //
        echo view ('Dashboard.Categories.edit', ["category"=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategoriesPost $request, Categories $category)
    {
        //
        $category->update($request->validated());
        return back()->with('status', 'Muchas gracias, tu categoría fue actualizada con éxito :).');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $category)
    {
        //
        $category->delete();
        return back()->with('status', 'Categoría borrada con éxito');
        //echo "Hola?";
    }
}
