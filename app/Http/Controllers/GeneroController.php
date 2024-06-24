<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gener = Genero::all();

        return view('generos.index',compact('gener'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('generos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $gener =new Genero();
        $gener->nombre_genero=$request->input('nombre_genero');
        $gener->descripcion=$request->input('descripcion');

            if ($request->hasFile('imagen')){ //si desde ese campo viene un archivo hacer:
                $gener->imagen = $request->file('imagen')->store('public/generos');


        }

        $gener->save();
        return'Guardado Exitoso';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $genert = Genero::find($id);
        return view('generos.show',compact('genert'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $genEdit = Genero::find($id);
        return view('generos.edit',compact('genEdit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $gner = Genero::find($id);
        $gner->fill($request->except('imagen'));
        if ($request->hasFile('imagen')){ //si desde ese campo viene un archivo hacer:
            $gner->imagen = $request->file('imagen')->store('public/generos');
            $gner->save();
            return 'Genero Actualizado';
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
