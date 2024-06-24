@extends('layouts.app')

@section('titulo','Listado de Generos')

@section('contenido')

<h3 class="text-center m-5">Listado de Generos</h3>

<div class="row"> {{--ya tenemos la fila--}}
    @foreach ($gener as $genet)
  <div class="d-flex justify-content-center w-50 mx-auto">

        <div class="col-md-2">
            <div class="col-sm"> {{--abrimos columna--}}
                <div class="card" style="width: 18rem;">
                    <img style="height: 200px; width:250px; margin:20px" src="{{ Storage::url($genet->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
                      <div class="card-body">
                      <h5 class="card-title">{{$genet->nombre_genero}}</h5>
                      <p class="card-text">{{$genet->descripcion}}</p>
                      <a href="/generos/{{$genet->id}}" class="btn btn-success">Ver detalles</a>
                    </div>
                </div>
            </div>


        </div>
      </div>





@endforeach


@endsection
