<?php

namespace App\Http\Controllers;

use App\Models\Interprete;
use Illuminate\Http\Request;

class InterpreteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $interpr = Interprete::all();

        return view('interpretes.index',compact('interpr'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('interpretes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $interp=new Interprete();
        $interp->nombre_genero=$request->input('nombre_genero');
        $interp->apellido_interprete =$request->input('apellido_interprete');
        $interp->pais_interprete  =$request->input('pais_interprete');
        $interp->seudonimo_interprete=$request->input('seudonimo_interprete');

            if ($request->hasFile('imagen')){ //si desde ese campo viene un archivo hacer:
                $interp->imagen = $request->file('imagen')->store('public/interpretes');


        }

        $interp->save();
        return'Guardado Exitoso';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $interp = Interprete::find($id);
        return view('interpretes.show',compact('interp'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $interEdit = Interprete::find($id);
        return view('interpretes.edit',compact('interEdit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $inter = Interprete::find($id);
        $inter->fill($request->except('imagen'));
        if ($request->hasFile('imagen')){ //si desde ese campo viene un archivo hacer:
            $inter->imagen = $request->file('imagen')->store('public/interpretes');
            $inter->save();
            return 'Artista Actualizado';
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
