@extends('plantilla')

@section('content')
<form action="/login" method="POST">
    @csrf
    @include('msg')
    <label for="username">Usuario/Correo:</label>
    <input type="text" name="username">
    <label for="password">Password:</label>
    <input type="password" name="password">
    <input type="submit" value="login">
    <h4>No te has registrado?</h4>
    <a href="registrarse" class="btn btn-primary">Registrarse</a>
</form>
@endsection