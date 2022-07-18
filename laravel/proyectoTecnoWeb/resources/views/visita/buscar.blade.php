@extends('visita.plantilla')

@section('content')
<br>
<div class="card-footer text-center bg-info ml-5 mr-5">
    <h1 class="mt-2 text-center">Buscar un Lugar</h1>
</div>

<br>
<div class="container-fluid text-dark col-md-10">


    <form action="buscar" method="get">
        <div class="form-row">
            <input type="text" name="texto" class="form-control" value="{{$texto}}" placeholder="Ingrese un lugar...">
        </div><br>
        <div class="form-row">
            <input type="submit" value="Buscar" class="btn btn-primary">
        </div>
        <br>
    </form>
    <div class="container-fluid d-flex text-dark col-md-12">
        <div class="row">
            <div class="col-lg-10 col-sm-12 d-flex flex-wrap">
                @foreach ($lugares as $lugar)

                <div class="card mx-auto" style="width: 20rem; height:18rem; margin:10px;">
                    <a href="/buscar/{{$lugar->id}}">
                        <!-- Imagen -->
                        @if ($lugar->imagenLugar)
                            <img class="d-block w-100" src="/imagen/{{$lugar->imagenLugar}}" data-src="holder.js/900x400?theme=social" alt="imagen-turistica" data-holder-rendered="true"  style="width: 100%; height:10rem;">
                            @else
                            <img class="d-block w-100" src="/imagen/default.png" data-src="holder.js/900x400?theme=social" alt="imagen-turistica" data-holder-rendered="true"  style="width: 100%; height:10rem;">
                            @endif
                    </a>
                    <!-- Descripcion -->
                    <div class="card-body " style="border-radius: 10px;">
                        <h2 class="card-title">{{ $lugar->nombre }}</h2>
                        <p class="card-text">{{ $lugar->direccion }}</p>
                    </div>
                </div>

                @endforeach
            </div>
            <div class="col-lg-2 text-light ">
                <ul class="list-group flex-lg-column flex-rowmb-2">
                    <li class="list-group-item  lh-condensed" id="publicidad">
                        <img src="https://i.pinimg.com/550x/2a/40/c7/2a40c735a818e53d701904c5c3d84112.jpg" width="100%" height="100%" alt="auto-publicidad">
                    </li>
                    <li class="list-group-item  lh-condensed" id="publicidad">
                        <img src="https://i.pinimg.com/474x/b4/e3/85/b4e385df02980536ff75ebe2cb7bb56a.jpg" width="100%" height="100%" alt="auto-publicidad">
                    </li>
                    <li class="list-group-item  lh-condensed" id="publicidad">
                        <iframe src="https://www.youtube.com/embed/j65L6eB34m0" width="100%" height="100%" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </li>
                </ul>
            </div>
        </div>
    </div>


</div>
</main>
@endsection