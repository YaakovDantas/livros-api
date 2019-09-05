<?php

namespace App\Http\Controllers;

use App\Autor;
use Illuminate\Http\Request;
use App\Http\Requests\AutoresFormRequest;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Autor::query()->orderBy('nome')->get();
        // return Autor::all();
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AutoresFormRequest $request)
    {
        // $request->validate([
        //     'nome' => "required"
        // ]);
        return Autor::create($request->all());
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Autor::find($id);
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function update(AutoresFormRequest $request, $id)
    {
        $autor = Autor::find($id);
        $autor->update($request->all());
        return redirect("/api/autores");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        
        Autor::destroy($id);
        return redirect("/api/autores");
    }

    public function getLivros($id){
        return Autor::find($id)->livros;
    }
}
