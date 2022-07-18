@extends('visita.plantilla')

@section('content')
<div class="card-footer text-center bg-info ml-5 mr-5">
    <h1 class="mt-2 text-center">{{ $lugar->nombre }}</h1>
</div>
<div class="container col-md-8 mt-5 mb-5 text-dark">
    <!-- Carousel -->

    <div class="card">
        <img class="card">
        <div class="card-body" style="border-radius: 10px;">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                </ol>
                <div class="carousel-inner " role="listbox">
                    <div class="carousel-item active carousel-item-left">
                        @if ($lugar->imagenLugar)
                        <img class="d-block w-100" src="/imagen/{{$lugar->imagenLugar}}" data-src="holder.js/900x400?theme=social" alt="imagen-turistica" data-holder-rendered="true" style="width: 900px; height: 400px">
                        @else
                        <img class="d-block w-100" src="/imagen/default.png" data-src="holder.js/900x400?theme=social" alt="imagen-turistica" data-holder-rendered="true" style="width: 900px; height: 400px">
                        @endif
                    </div>
                    <div class="carousel-item carousel-item-next carousel-item-left">
                        @if ($lugar->imagenLugar)
                        <img class="d-block w-100" src="/imagen/{{$lugar->imagenLugar}}" data-src="holder.js/900x400?theme=social" alt="imagen-turistica" data-holder-rendered="true" style="width: 900px; height: 400px">
                        @else
                        <img class="d-block w-100" src="/imagen/default.png" data-src="holder.js/900x400?theme=social" alt="imagen-turistica" data-holder-rendered="true" style="width: 900px; height: 400px">
                        @endif
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!-- Fin carousel -->
        <!-- Descripcion del lugar -->
        <div class="card-footer text-center">
            <!-- Titulo -->
            <h3 class="card-text">Nombre del lugar: {{ $lugar->nombre }}</h3>
            <!-- Descripcion -->
            <p class="card-text">
                Descripcion: {{$lugar->descripcion}}
            </p>
            <!-- Ubicacion -->
            <p class="card-text">
                Ubicación: {{$lugar->direccion}}
            </p>
        </div>
        <!-- Fin descripcion del lugar -->
    </div>

    <!-- Comentarios -->
    <div class="comentarios text-white col-md-12 mt-5 mb-5">
        <br>
        <h2>Comentarios</h2>
        @forelse ($lugar->comentario as $comentario)
        <div class="media col-md-12 ">
            <div class="card card-shadow text-center text-dark ">
                <div class="card ">
                    <div class="row no-gutters ">
                        <div class="col-sm-4">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/d/d3/User_Circle.png" class="card-img mt-5 ml-1" alt="user" style="width: 100px">
                        </div>
                        <div class="col-sm-8 md-12">
                            <div class="card-body">
                                <h4 class="card-title">{{auth()->user()->username ?? $comentario->usuarioID}}</h4>
                                <p class="card-text">
                                    {{$comentario->text}}
                                </p>
                                @if (($comentario->imagen))
                                <img class="img-thumbnail" src="/imagen/{{$comentario->imagen}}" alt="" srcset="">
                                @endif
                                <p class="card-text">
                                    <small class="text-muted">Comentado el dia {{$comentario->created_at}}</small>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <br>
        @empty
        No hay comentarios
        @endforelse
    </div>
    @if (Auth::check())
    @include("visita.comentario-form");
    @endif
    @if (!Auth::check())
    <h3>debes iniciar sesion para comentar</h3>
    <a href="/login" class="btn btn-primary">Ingresar</a>
    @endif
    <!-- Fin comentarios -->
</div>
@endsection