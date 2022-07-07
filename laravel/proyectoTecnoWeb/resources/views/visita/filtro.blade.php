@extends('plantilla')

@section('content')

<div class="container-fluid pl-0 pr-0 text-dark">
    <input class="form-control" type="text" placeholder="Default input" spellcheck="false" data-ms-editor="true">
    <button type="submit" class="btn btn-primary">Submit</button>
    <div class="d-flex text-dark">
        <div class="p-2 w-100 bg-primary">
            @foreach ($lugares as $lugar)


            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <!-- Imagen -->
                        <img src="..." class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <!-- Nombre del lugar -->
                            <h5 class="card-title">{{ $lugar->nombre }}</h5>
                            <h5 class="card-title">{{ $lugar->id }}</h5>
                            <!-- Descripcion -->
                            <p class="card-text">{{ $lugar->descripcion }}</p>
                            <a href="/buscar/{{$lugar->id}}" class="btn btn-primary">Ver</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="p-2 flex-shrink-1 bg-success">
            <h3>publicidad</h3>
        </div>
    </div>


</div>

@endsection