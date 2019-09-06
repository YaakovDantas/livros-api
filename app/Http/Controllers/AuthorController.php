<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;
use App\Http\Requests\AuthorsFormRequest;
use App\Helpers\FractalUtils;


class AuthorController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FractalUtils::genericFractal( Author::query()->orderBy('name')->get(), "AuthorTransformer");
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
        
        return FractalUtils::genericFractal( Author::create($request->all()),  "AuthorTransformer");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return FractalUtils::genericFractal( Author::find($id),  "AuthorTransformer");
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
        return redirect("/api/authors/".$id);
        // return redirect("/api/authors");

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

    private function genericFractal($collection, $transformer){
        return Fractal::create($collection,$transformer)->toJson();
    }
}
 