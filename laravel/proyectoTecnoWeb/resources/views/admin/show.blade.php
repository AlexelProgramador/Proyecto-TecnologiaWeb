@extends('admin.plantilla')

@section('contenido')
<div class="container col-md-8 mt-5 mb-5 text-dark">
    @auth
    @include('msg')
    <div class="mt-3">
        <h3>Comentarios del lugar " {{ $lugar->nombre }} "</h3>
    </div>

    <!-- Comentarios -->
    @forelse ($lugar->comentario as $comentario)
    <div class="media ">
        <div class="card card-shadow text-center text-dark">
            <div class="card sm-3">
                <div class="row no-gutters">
                    <div class="col-sm-4">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/d/d3/User_Circle.png" class="card-img mt-5 ml-1" alt="user" style="width: 100px">
                    </div>
                    <div class="col-sm-8">
                        <div class="card-body">
                            <h4 class="card-title">{{$comentario->usuarioID}}</h4>
                            <p class="card-text">
                                {{$comentario->text}}
                            </p>
                            @if (($comentario->imagen))
                            <img class="img-thumbnail" src="/imagen/{{$comentario->imagen}}" alt="imagen lugar">
                            @endif
                            <p class="card-text">
                                <small class="text-muted">Comentado el dia {{$comentario->created_at}}</small>
                            </p>
                        </div>
                    </div>
                </div>
                <form action="{{ route('comentario.destroy',  $comentario->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger mt-3 mb-3">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
    @empty
    No hay comentarios
    @endforelse
    <!-- Fin comentarios -->
    <a href="/" class="mt-3 btn btn-primary">Volver al menu</a>
    <a href="/lugares" class="mt-3 btn btn-primary">Ver tus lugares</a>
    @endauth

    @guest
    <h3>Para visualizar tu contenido debes iniciar sesion</h3>
    <a href="/login" class="btn btn-primary">Iniciar sesion</a>
    @endguest
</div>

@endsection