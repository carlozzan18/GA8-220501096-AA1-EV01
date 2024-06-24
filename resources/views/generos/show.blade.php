@extends('layouts.app')

@section('titulo','Detalle del Genero')

@section('contenido')

<div class="text-center">
    <img style="height: 400px; width:500px; margin:20px" src="{{ Storage::url($genert->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
    <div class="card-body">
        <p class="card-text">{{$genert->descripcion}}</p>
    </div>
    <br>
    <a href="/generos/{{$genert->id}}/edit" class="btn btn-dark">Editar Genero</a>
   </div>





@endsection
