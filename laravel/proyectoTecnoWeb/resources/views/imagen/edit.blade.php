@extends('imagen.plantilla')

@section('content')

<!-- Comienzo Contenido -->
<div class="container-fluid mt-3">
      
      <div class="col-md-6 mx-auto">
        <!-- Comienzo del registro -->
        <div class="card">
          <div class="card-header bg-dark text-light text-center">
            <!-- Botones para logearse y registrarse -->
            <br><h2>EDITAR IMAGEN</h2><br>
          </div>
          <div class="card-body">
            <!-- Formulario para ingresar o registrarse -->
              <form action="/imagenes/{{$imagen->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- hace la actualizacion en la BD -->
                @method('PUT')

                 <!-- los values son para poner los valores anteriodes -->
                 <td>
                  <img src="/imagen/{{$imagen->Imagen}}" id="ImagenSeleccionada" alt="Imagen..." style="max-width: 300px;">
                </td>
              <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="Imagen" id="Imagen" class="form-control-file btn btn-outline-primary" placeholder="Imagen">
                <br><br>
              </div>
                <div class="row mt-3 d-flex justify-content-end">
                <a href="/imagenes" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-primary ml-2">Editar</button>
                </div>
            </form>
          </div>
        </div>
        </div>
      </div>
    </div>
    <!-- Fin Contenido -->

<!-- Script para ver la imagen antes de CREAR UN NUEVO IMAGEN -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
<script>   
    $(document).ready(function (e) {   
        $('#Imagen').change(function(){            
            let reader = new FileReader();
            reader.onload = (e) => { 
                $('#ImagenSeleccionada').attr('src', e.target.result); 
            }
            reader.readAsDataURL(this.files[0]); 
        });
    });
</script>
@endsection