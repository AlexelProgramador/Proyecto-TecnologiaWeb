@extends('plantilla')

@section('content')
<div class="container col-md-6 mt-5 mb-5 text-dark">
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
                        <img class="d-block w-100" src="https://mayurutour.com/wp-content/uploads/2020/01/catedral_san_marcos.jpg" data-src="holder.js/900x400?theme=social" alt="catedral" style="width: 800px; height: 500px">
                    </div>
                    <div class="carousel-item carousel-item-next carousel-item-left">
                        <img class="d-block w-100" src="https://www.monumentos.gob.cl/sites/default/files/styles/slide_monumentos/public/image-monumentos/00381_mh_15101-24.jpg?itok=spqag_j_" data-src="holder.js/900x400?theme=industrial" alt="monumento" style="width: 800px; height: 500px">
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
        <div class="card-footer text-center" style="font-family: none;">
            <!-- Titulo -->
            <p class="card-text">{{ $lugar->nombre }}</p>
            <!-- Descripcion -->
            <p class="card-text">
                {{$lugar->descripcion}}
            </p>
            <!-- Ubicacion -->
            {{$lugar->direccion}}
        </div>
        <!-- Fin descripcion del lugar -->
    </div>


    <!-- Comentarios -->
    <div class="card card-shadow text-center">
        <div class="card sm-3">
            <div class="row no-gutters">
                <div class="col-sm-4">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/d/d3/User_Circle.png" class="card-img mt-5 ml-1" alt="user" style="width: 100px">
                </div>
                <div class="col-sm-8">
                    <div class="card-body">
                        <h4 class="card-title">Usuario#2503</h4>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit
                            sint vitae necessitatibus id laboriosam provident eum aliquid
                            nostrum a hic.
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Comentado el dia 31/05/22</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection