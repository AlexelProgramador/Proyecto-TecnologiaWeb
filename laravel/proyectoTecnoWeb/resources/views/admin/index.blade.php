@extends('admin.plantilla')

@section('contenido')
<h1>Vista INDEX del administrador</h1>
<!-- @auth Permite ocultar contenido para personal que este autenticado, en este caso, alguien que se halla logeado previamente
debemos terminar la sentencia con un @endauth -->
@auth
<h2 class="mt-2">Bienvenido {{auth()->user()->name ?? auth()->user()->username}}</h2>
@include('msg')

<a href="lugares/create" class="btn btn-primary">Crear</a>
<div class="mt-3">
    <h3>Tus sitios</h3>
    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lugares as $lugar)
            @if(($lugar->usuarioID) == (auth()->user()->id))
            <tr>
                <td scope="row">{{ $lugar->id }}</td>
                <td scope="row">{{ $lugar->nombre }}</td>
                <td scope="row">{{ $lugar->descripcion }}</td>
                <td scope="row">
                    <div class="d-flex">
                        <a href="/lugares/{{ $lugar->id }}" class="btn btn-info mr-2">Ver</a>
                        <a href="/lugares/{{ $lugar->id }}/edit" class="btn btn-primary mr-2">Editar</a>
                        <form action="{{ route('lugares.destroy',  $lugar->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endif
            @endforeach
        </tbody>
    </table>
</div>
<a href="/logout" class="btn btn-danger">Cerrar sesion</a>
<a href="/" class="btn btn-primary">Ir al menu</a>
@endauth

@guest
<h3>Para visualizar tu contenido debes iniciar sesion</h3>
<a href="/login" class="btn btn-primary">Iniciar sesion</a>
@endguest

@endsection