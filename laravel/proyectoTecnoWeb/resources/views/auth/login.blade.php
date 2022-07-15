@extends('plantilla')

@section('content')
<div class="container-fluid mt-3 ">

    <div class="col-md-6 mx-auto">
        <!-- Comienzo del registro -->
        <div class="card">
            <div class="card-header text-dark text-center">
                <br>
                <h2>Iniciar sesion</h2>
            </div>
            <div class="card-body">
                <form action="/login" method="POST">
                    @csrf
                    @include('msg')
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <div class="form-group text-dark">
                            <label for="username">Usuario/Correo:</label>
                            <input type="text" name="username">
                        </div>
                        <div class="form-group text-dark">
                            <label for="password">Password:</label>
                            <input type="password" name="password">
                        </div>

                    </div>

                    <div class="row mt-3 d-flex justify-content-center">
                        <a href="registrarse" class="btn btn-secondary">Registrarse</a>
                        <input type="submit" class="btn btn-primary" value="login">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection