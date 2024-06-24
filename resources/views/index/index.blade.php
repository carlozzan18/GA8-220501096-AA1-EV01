@extends('layouts.app')

@section('titulo','Inicio de Sesion')

@section('contenido')
<div class="d-flex justify-content-center" style="height: 550px; ;">
    <div class="form-acceso col-md-5 mt-5">
        <form>
            <div class="card">
                <div class="card-header">
                    Usuarios registrados
                </div>
                <div class="card-body">
                    <div class="form-floating">
                        <input type="email" class="form-control" id="usu" placeholder="Correo" />
                        <label for="usu">Correo electrónico</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="cla" placeholder="clave" />
                        <label for="cla">Contraseña</label>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <button class="w-100 btn btn btn-warning" type="submit">
                        Iniciar sesión
                    </button>
                </div>
            </div>
        </form>
    </div>

</div>

@endsection
