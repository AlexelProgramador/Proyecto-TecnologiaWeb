@extends('imagen.plantilla')

@section('content')

<!-- Comienzo Contenido -->
<div class="container-fluid mt-3 ">

    <div class="col-md-6 mx-auto">
        <!-- Comienzo del registro -->
        <div class="card">
            <div class="card-header bg-dark text-light text-center">
                <br>
                <h2>SUBIR IMAGEN</h2><br>
            </div>
            <div class="card-body">
                <!-- Formulario para SubirImagenes -->
                <form action="/imagenes" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="grid grid-cols-1 mt-5 mx-7">
                        <img id="ImagenSeleccionada" style="max-width: 300px;">
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Image:</strong>
                            <input type="file" name="Imagen" REQUIRED id="Imagen"
                                class="form-control-file btn btn-outline-primary" placeholder="Imagen">
                            <br><br>
                        </div>
                    </div>

                    <div class="row mt-3 d-flex justify-content-end">
                        <a href="/imagenes" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-primary ml-2">Subir Imagen</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Fin Contenido -->
<!-- Script para ver la imagen antes de CREAR UN NUEVA IMAGEN -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function (e) {
        $('#Imagen').change(function () {
            let reader = new FileReader();
            reader.onload = (e) => {
                $('#ImagenSeleccionada').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        });
    });
</script>
@endsection