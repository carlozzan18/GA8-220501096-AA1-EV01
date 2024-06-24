@extends('layouts.app')

@section('titulo', 'Editar Genero')

@section('contenido')
<br>
<h3 class="text-center">Editar información del Genero</h3>
{{--se utiliza el atributo enctype para poder subir archivos--}}
<form action="/generos/{{$genEdit->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="d-flex justify-content-center">
        <div class="col-md-5 mt-4">
            <div class="mb-3">
                <label for="nombre_genero">Modifique el Nombre del Genero</label>
                <input name="nombre_genero" id="nombre_genero" value="{{$genEdit->nombre_genero}}" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label for="descripcion">Modifique la Descripción del Genero</label>
                <input name="descripcion" id="descripcion" value="{{$genEdit->descripcion}}" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label for="imagen">Cargar nueva imagen</label>
                <br>
                <input name="imagen" id="imagen" type="file">
            </div>
            <br>
            <button type="submit" class="btn btn-success">Actualizar</button>

        </div>
    </div>





</form>

@endsection
