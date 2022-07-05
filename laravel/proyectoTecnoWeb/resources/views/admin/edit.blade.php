@extends('admin.plantilla')

@section('contenido')
<h1>Vista Crear del administrador</h1>

<form action="/lugares/{{ $lugar->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mt-3">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" class="form-control" value="{{ $lugar->nombre }}">
    </div>
    <div class="mt-3">
        <label for="descripcion">Descripcion</label>
        <input type="text" id="descripcion" name="descripcion" class="form-control" value="{{ $lugar->descripcion }}">
    </div>
    <div class="mt-3">
        <label for="direccion">Direccion</label>
        <input type="text" id="direccion" name="direccion" class="form-control" value="{{ $lugar->direccion }}">
    </div>

    <div class="row mt-3 justify-content-end">
        <a href="/lugares" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-success ml-2">Editar</button>
    </div>
</form>
@endsection