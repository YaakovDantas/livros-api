<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;
use App\Http\Requests\AuthorsFormRequest;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Author::query()->orderBy('name')->get();
        // return Author::all();
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AuthorsFormRequest $request)
    {
        // $request->validate([
        //     'nome' => "required"
        // ]);
        return Author::create($request->all());
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Author::find($id);
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(AuthorsFormRequest $request, $id)
    {
        $author = Author::find($id);
        $author->update($request->all());
        return redirect("/api/authors");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        
        Author::destroy($id);
        return redirect("/api/authors");
    }

    public function getBooks($id){
        return Author::find($id)->books;
    }
}
