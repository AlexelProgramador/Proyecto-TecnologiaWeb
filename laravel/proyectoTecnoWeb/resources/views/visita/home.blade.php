@extends('plantilla')

@section('content')

@foreach ($lugares as $lugar)

@if (($lugar->id) == 1){
{{$lugar->nombre}}
}
@endif
@endforeach

<div class="container-fluid">
    <main class="row">
        <!-- Comienzo carousel -->
        <div class="col-12 mt-5">
            <div class="card  ml-2 mr-2">
                <div class="card-footer text-center bg-secondary ">
                    <h3>Lugares mas visitados</h3>
                </div>
                <!--<div class="card-body bg-info">-->
                <div id="carouselFadeExampleIndicators" class="carousel slide carousel-fade bg-dark" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://chileestuyo.cl/wp-content/uploads/2020/07/PlayasVeranoNorte_Arica.jpg" data-src="holder.js/900x400?theme=social" alt="playa" data-holder-rendered="true" style="width: 900px; height: 400px">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://enviajes.cl/wp-content/uploads/2021/12/Arica-Catedral-Enviajes.jpg" data-src="holder.js/900x400?theme=industrial" alt="catedral" data-holder-rendered="true" style="width: 900px; height: 400px">
                        </div>
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
                <div class="card m-2">
                    <div class="card-header ">Playa Chinchorro</div>
                    <div class="card-body">
                        <img src="https://chileestuyo.cl/wp-content/uploads/2020/07/PlayasVeranoNorte_Arica.jpg" alt="playa" width="440" height="240" class="img-fluid">
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-success">Ver Lugar</button>
                    </div>
                </div>
                <div class="card m-2">
                    <div class="card-header ">Catedral San Marcos</div>
                    <div class="card-body">
                        <img src="https://enviajes.cl/wp-content/uploads/2021/12/Arica-Catedral-Enviajes.jpg" alt="catedral" width="440" height="240" class="img-fluid">
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-success">Ver Lugar</button>
                    </div>
                </div>
                <div class="card m-2">
                    <div class="card-header ">Momias</div>
                    <div class="card-body">
                        <img src="https://www.semana.com/resizer/ZxRDay7NNaiWEEqynT3ocJy4wgQ=/1200x675/filters:format(jpg):quality(50)//cloudfront-us-east-1.images.arcpublishing.com/semana/U6JJUGCF3RF45AG46VAZ4IVY2E.jpg" alt="momia" width="440" height="260" class="img-fluid">
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-success">Ver Lugar</button>
                    </div>
                </div>
            </div>
            <!-- Fin grupo de cartas -->
        </article>
        <!-- Fin buscar filtro -->
    </main>

</div>
@endsection