@extends('plantilla')

@section('content')
<form action="/registrarse" method="POST">
    @csrf
    @include('msg')
    <label for="username">Nombre de usuario:</label>
    <input type="text" name="username">
    <label for="email">Correo:</label>
    <input type="text" name="email">
    <label for="password">Password:</label>
    <input type="password" name="password">
    <label for="password_confirmation">Confirmar password:</label>
    <input type="password" name="password_confirmation">
    <input type="submit" value="Registarse">

</form>
@endsection