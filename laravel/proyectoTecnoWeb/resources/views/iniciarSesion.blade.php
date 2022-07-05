@extends('plantilla')

@section('content')
<div class="container-fluid">
    <main class="row">

        <div class="col-md-12 mt-5 mb-5 pb-3">
            <!-- Comienzo del registro -->
            <div class="card">
                <div class="card-header" style="background-color: white;">
                    <!-- Botones para logearse y registrarse -->
                    <button type="button" class="btn  ingresar btn-primary active">Ingresar</button>
                    <button type="button" class="btn registrarse btn-primary disabled">Registrarse</button>

                    <!-- <button type="submit" class="btn btn-primary ingresar">Ingresar</button>
            <button type="submit" class="btn btn-primary registrarse">Registrarse</button> -->
                </div>
                <div class="card-body">
                    <!-- Formulario para ingresar o registrarse -->
                    <form>
                        <div class="form-group">
                            <label for="usuario">Usuario</label>
                            <input type="text" class="form-control" name="usuario" placeholder="Usuario" spellcheck="false" data-ms-editor="true">
                        </div>
                        <div class="form-group email" style="display: none;">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" name="password" placeholder="Contrasenha">
                        </div>
                        <a href="inicio.html">
                            <button type="button" class="btn btn-primary btnForm">Ingresar</button>
                        </a>
                    </form>
                </div>
                <div class="card-footer text-muted">
                    <!-- Link para formulario de olvidar contrasenha -->
                    <a href="#" class="badge badge-light" style="font-family: none;">¿olvidaste tu contraseña?</a>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection