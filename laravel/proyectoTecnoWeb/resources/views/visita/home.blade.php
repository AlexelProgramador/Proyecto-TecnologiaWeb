@extends('visita.plantilla')

@section('content')

<div class="container-fluid ">
    <main class="row">
        <!-- Comienzo carousel -->
        <div class="col-12 mt-5">
            <div class="card  ml-2 mr-2">
                <div class="card-footer text-center bg-secondary ">
                    <h3>Lugares mas visitados</h3>
                </div>
                <!--<div class="card-body bg-info">-->
                <!--<div class="card-body bg-info">-->
                <div id="carouselFadeExampleIndicators" class="carousel slide carousel-fade bg-dark" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">

                        <div class="carousel-item active">
                            @foreach ($lugares as $lugar)@if (($lugar->id) == 1)

                            <img class="d-block w-100" src="/imagen/{{$lugar->imagenLugar}}" data-src="holder.js/900x400?theme=social" alt="imagen-turistica" data-holder-rendered="true" style="width: 900px; height: 400px">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/Imagen/Arica Treasure.png" data-src="holder.js/900x400?theme=industrial" alt="catedral" data-holder-rendered="true" style="width: 900px; height: 400px">
                        </div>
                        @endif
                        @endforeach
                    </div>

                    <a class="carousel-control-prev" href="#carouselFadeExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                </div>

                <a class="carousel-control-prev" href="#carouselFadeExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselFadeExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <!--</div>-->
            <!-- Comienzo texto carousel -->
            <!--<div class="card-footer text-center bg-secondary">
              <h3>Lugares mas visitados</h3>
            </div>-->
            <!-- Fin texto carousel -->
        </div>
</div>

<!-- Comienzo carousel -->
<!-- Para buscar filtro -->

<article class="col-12 mt-4 mb-4 mr-3">
    <div class="card-footer text-center bg-info ml-5 mr-5">
        <h3>Lugares de Arica</h3>
    </div>
    <!-- Grupo de cartas-->

    <div class="card-group text-center ">
        @foreach ($lugares as $lugar)@if (($lugar->id) < 5) <div class="card m-2">
            <div class="card-header bg-dark ">{{ $lugar->nombre }}</div>
            <div class="card-body">
                @if ($lugar->imagenLugar)
                <img class="d-block w-100" src="/imagen/{{$lugar->imagenLugar}}" data-src="holder.js/900x400?theme=social" alt="imagen-turistica" data-holder-rendered="true" style="width: 100%; height:20rem;">
                @else
                <img class="d-block w-100" src="/imagen/default.png" data-src="holder.js/900x400?theme=social" alt="imagen-turistica" data-holder-rendered="true" style="width: 100%; height:20rem;">
                @endif
            </div>
            <div class="card-footer">
                <button type="button" class="btn btn-success"><a href="/buscar/{{$lugar->id}}" class="text-white">Ver</a></button>
            </div>
    </div>
    @endif
    @endforeach
    </div>

    <!-- Fin grupo de cartas -->
</article>
<!-- Fin buscar filtro -->
</main>

</div>
@endsection