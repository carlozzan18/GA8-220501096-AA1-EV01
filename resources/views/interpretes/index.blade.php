@extends('layouts.app')

@section('titulo','Listar Artista')

@section('contenido')

<div class="d-flex justify-content-center">
    <div class="col-md-8 mt-4">
      <h5 style="color: white">Artistas registrados</h5>

      <table class="table table-dark table-sm table-striped" id="tablaArtistasListado">
        <thead>
          <tr>
            <th style="width: 15%;">ID</th>
            <th style="width: 30%;">Nombre</th>
            <th class="text-start" style="width: 20%;">Pais</th>
            <th class="text-start" style="width: 15%;">seudonimo</th>
            <th style="width: 20%;">imagen</th>
            <th style="width: 15%;">Acciones</th>
          </tr>
        </thead>

        <tbody></tbody>
      </table>
    </div>
  </div>

  @endsection
