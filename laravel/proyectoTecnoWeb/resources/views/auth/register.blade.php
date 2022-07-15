@extends('plantilla')

@section('content')
<div class="container-fluid mt-3 text-center text-dark">

    <div class="col-md-12">
        <!-- Comienzo del registro -->
        <div class="card">
            <div class="card-header">
                <!-- Botones para logearse y registrarse -->
                <h4>Registrarse</h4>
            </div>
            <div class="card-body">
                <!-- Formulario para ingresar o registrarse -->
                <form action="/registrarse" method="POST">
                    @csrf
                    @include('msg')
                    <div class="form-group">
                        <label for="username">Nombre de usuario:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
                    </div>
                    <div class="form-group">
                        <label for="email">Correo:</label>
                        <input type="email" class="form-control" id="exampleInputPassword1" name="email">
                    </div>
                    <div class="form-group form-check">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <div class="form-group form-check">
                        <label for="password_confirmation">Confirmar password:</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation">
                    </div>
                    <div class="row mt-3 d-flex justify-content-center">
                        <a href="login" class="btn btn-danger">Cancelar</a>
                        <input type="submit" class="btn btn-primary value=" Registarse">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection