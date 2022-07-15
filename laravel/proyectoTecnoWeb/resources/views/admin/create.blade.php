@extends('admin.plantilla')

@section('contenido')
<!-- Comienzo Contenido -->
<div class="container-fluid mt-3">

    <div class="col-md-12">
        <!-- Comienzo del registro -->
        <div class="card">
            <div class="card-header">
                <!-- Botones para logearse y registrarse -->
                <h4>Crear Lugar</h4>
            </div>
            <div class="card-body">
                <!-- Formulario para ingresar o registrarse -->
                <form action="/lugares" method="POST" enctype="multipart/form-data">
                    @csrf
                    @include('msg')
                    <div class="form-group mt-3">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="descripcion">Descripcion</label>
                        <input type="text" id="descripcion" name="descripcion" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="direccion">Direccion</label>
                        <input type="text" id="direccion" name="direccion" class="form-control">
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

                    <div class="row mt-3 d-flex justify-content-end">
                        <a href="/lugares" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-success ml-2">Crear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
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
<!-- Fin Contenido -->
@endsection