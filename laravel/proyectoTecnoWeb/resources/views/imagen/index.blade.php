@extends('imagen.plantilla')
<!-- imagen. es la carpeta imagen -->
@section('content')




<table class="table table-bordered table-hover mt-4 text-center">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Imagen</th>
            <th scope="col">Ultima Actualicion</th>
            <th scope="col">Acciones</th>
            <th scope="col">
                <div class="row justify-content-center">
                    <a href="imagenes/create" class="btn btn-primary">Subir Imagen</a>
                </div>
            </th>
        </tr>
    </thead>
    <tbody>
        <!-- imagenes -> imagen  para tomar sus valores en especifico-->
        @foreach ($imagenes as $imagen)
        <tr>
            <td>{{$imagen->id}}</td>
            <td>
                <img src="/imagen/{{$imagen->Imagen}}" alt="Imagen..." width="100px">
            </td>
            <td>{{$imagen->updated_at}}</td>
            <td>
                <div class="d-flex">
                    <a href="/imagenes/{{$imagen->id}}/edit" class="btn btn-info mr-2">Editar</a>
                    <!-- imagenes de web.php(su funcion destroy) y imagen para mandar la id-->
                    <form action="{{ route('imagenes.destroy',$imagen->id)}}" method="POST">
                        @csrf
                        <!-- hace la eliminacion en la BD -->
                        @method('DELETE')
                        <button class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection