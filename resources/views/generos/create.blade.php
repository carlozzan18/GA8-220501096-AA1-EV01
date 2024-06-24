@extends('layouts.app')

@section('titulo','Crear Genero')

@section('contenido')
<form action="/generos" method="post" enctype="multipart/form-data">
    @csrf
    <div class="d-flex justify-content-center">
        <div class="col-md-5 mt-4">
            <form action="javascript:crearGenero();" id="formaGenero" class="validarFormulario" novalidate>
                <div class="card">
                    <div class="card-header">
                        Crear nuevo género
                    </div>

                    <div class="card-body">
                        <div class=" bg-dark text-light text-start rounded">
                            <label for="gen" class="form-label">&nbsp;Nombre del Género</label>
                        </div>

                        <input type="text" name="nombre_genero" class="form-control mt-3" id="nombregenero" required/>
                        <div class="invalid-feedback text-start">El nombre es obligatorio</div>

                        <div class=" bg-dark text-light text-start rounded ">
                            <label for="gen" class="form-label">&nbsp; Descripción</label>
                        </div>
                        <input type="text" name="descripcion" class="form-control mt-3" id="descripcion" required/>

                        <div class=" bg-dark text-light text-start rounded mt-3">
                            <label for="fot" class="form-label" style="margin-bottom: 0px">&nbsp;Foto del Genero</label>
                            <input  name="imagen" class="form-control mt-2" id="imagen" type="file"/>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Crear registro</button>
                    </div>

                </div>


        </div>
    </div>
 </form>




    <div class="d-flex justify-content-center">

        <div class="col-md-5 mt-4">
            <div class="alert alert-primary" id="genMsgOk" style="display: none;">
                Género guardado con éxito.
            </div>

            <div class="alert alert-danger" id="genMsgError" style="display: none;">
                No se puede grabar el género, intente de nuevo.
            </div>
        </div>

    </div>
</form>



@endsection
