@extends('admin.plantilla')

@section('contenido')
<h3>Editar {{$lugar->nombre}}</h3>
<form action="/lugares/{{ $lugar->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('msg')

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
    <div class="grid grid-cols-1 mt-5 mx-7">
        <img id="ImagenSeleccionada" style="max-width: 300px;">
    </div>

    <div class="grid grid-cols-1 mt-5 mx-7">
        <img id="ImagenSeleccionada" style="max-width: 300px;">
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Image:</strong>
            <input type="file" name="Imagen" id="Imagen" class="form-control-file btn btn-outline-primary" placeholder="Imagen">
            <br><br>
        </div>
    </div>

    <div class="row mt-3 justify-content-end">
        <a href="/lugares" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-success ml-2">Editar</button>
    </div>
</form>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
    $(document).ready(function(e) {
        $('#Imagen').change(function() {
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#ImagenSeleccionada').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });
</script>
@endsection