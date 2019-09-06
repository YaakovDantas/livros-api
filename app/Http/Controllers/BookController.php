<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use App\Http\Requests\BooksFormRequest;
use App\Helpers\FractalUtils;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FractalUtils::genericFractal(Book::all(), "BookTransformer");
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BooksFormRequest $request)
    {   
        // return $request->all();
       return FractalUtils::genericFractal(Book::create($request->all()), "BookTransformer");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return FractalUtils::genericFractal(Book::find($id), "BookTransformer");
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(BooksFormRequest $request, $id)
    {   
        
        $book = Book::find($id);
        
        $book->update($request->all());
        return redirect("/api/books/".$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        Book::destroy($id);
        return redirect("/api/books");   
    }
}
