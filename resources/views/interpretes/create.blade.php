@extends('layouts.app')

@section('titulo','Crear Artista')

@section('contenido')

<div class="d-flex justify-content-center">
    <div class="col-md-5 mt-4">
        <form action="javascript:crearArtista();" id="formaArt" class="validarFormulario" novalidate>
            <div class="card">
                <div class="card-header">
                    Crear nuevo artista
                </div>

                <div class="card-body">

                    <div class="row bg-dark text-light text-start rounded pb-3">
                        <div class="col-6">
                            <label for="nom" class="form-label">Nombres</label>
                            <input type="text" class="form-control form-control-sm" id="nom" required />
                            <div class="invalid-feedback text-start">&nbsp;El nombre es obligatorio</div>
                        </div>
                        <div class="col-6">
                            <label for="ape" class="form-label">Apellidos</label>
                            <input type="text" class="form-control form-control-sm" id="ape" required />
                            <div class="invalid-feedback text-start">&nbsp;El apellido es obligatorio</div>
                        </div>
                    </div>

                    <div class="row mt-4 bg-dark text-light text-start rounded pb-3">
                        <div class="col-6 text-start">
                            <label for="pai" class="form-label">Pais</label>
                            <input type="text" class="form-control form-control-sm" id="pai" required />
                            <div class="invalid-feedback text-start">&nbsp;El país es obligatorio</div>
                        </div>
                        <div class="col-6 text-start">
                            <label for="pse" class="form-label">Pseudónimo</label>
                            <input type="text" class="form-control form-control-sm" id="pse" required />
                            <div class="invalid-feedback text-start">&nbsp;El pseudónimo es obligatorio</div>
                        </div>
                    </div>

                    <div class=" bg-dark text-light text-start rounded mt-3">
                        <label for="fot" class="form-label" style="margin-bottom: 0px">&nbsp;Foto artista</label>
                        <input type="file" class="form-control mt-2" id="fot"
                        accept="image/*" onchange="mostrarArtista(event);" />
                    </div>

                    <div class=" bg-dark text-light text-start rounded mt-3">
                        <div class="d-flex justify-content-center">
                            <img id="fotArtYa" src="#/" class="maximoInterprete" alt="No foto" />
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Crear registro</button>
                </div>

            </div>
        </form>
    </div>

</div>

<div class="d-flex justify-content-center">

    <div class="col-md-5 mt-4">
        <div class="alert alert-primary" id="artMsgOk" style="display: none;">
            Artista creado con éxito.
        </div>

        <div class="alert alert-danger" id="artMsgError" style="display: none;">
            No se puede grabar el artista, intente de nuevo.
        </div>
    </div>

</div>

@endsection
