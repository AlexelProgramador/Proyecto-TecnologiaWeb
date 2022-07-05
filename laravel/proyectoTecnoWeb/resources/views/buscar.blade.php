@extends('plantilla')

@section('content')
<div class="container-fluid pl-0 pr-0 ">
    <main>
        <div class="row col-12 ">
            <!-- Comienzo buscador -->
            <!-- Barra buscador -->
            <div class="input-group mt-3 ml-2">
                <input type="text" class="form-control inputControl" placeholder="Ingrese un lugar..." aria-label="Buscador" aria-describedby="buscador" spellcheck="false" data-ms-editor="true">
                <div class="input-group-append">
                    <!-- Boton buscar -->
                    <button class="btn btn-secondary botonBuscar" type="button" id="botonBuscar">
                        Buscar
                    </button>
                    <!-- Filtro -->
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Lugares
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Playa</a>
                                <a class="dropdown-item" href="#">Morro</a>
                                <a class="dropdown-item" href="#">Catedral</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin buscador -->
        <div class="container mt-5">
            <div class="row">
                <aside class="col-md-3 order-md-2 mb-4 mt-4 rounded ml-3 mr-3">
                    <!-- Parte Derecha -->

                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                    </h4>
                    <ul class="list-group mb-3 bg-dark">
                        <li class="list-group-item d-flex justify-content-between lh-condensed mb-3 mt-3 bg-dark rounded-bottom" id="publicidad">
                            <img src="https://i.pinimg.com/550x/2a/40/c7/2a40c735a818e53d701904c5c3d84112.jpg" width="100%" height="100%" alt="auto-publicidad">
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed mb-3 mt-3 bg-dark rounded-bottom" id="publicidad">
                            <img src="https://i.pinimg.com/474x/b4/e3/85/b4e385df02980536ff75ebe2cb7bb56a.jpg" width="100%" height="100%" alt="auto-publicidad">
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed mb-3 mt-3 bg-dark rounded-bottom" id="publicidad">
                            <iframe src="https://www.youtube.com/embed/j65L6eB34m0" width="100%" height="100%" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed mb-3 mt-3 bg-dark rounded-bottom" id="publicidad">
                            <img src="https://i.pinimg.com/550x/2a/40/c7/2a40c735a818e53d701904c5c3d84112.jpg" width="100%" height="100%" alt="auto-publicidad">
                        </li>
                    </ul>

                </aside>

                <article class="col-md-8 order-md-1">
                    <!--Parte Izq-->

                    <!-- Lugares -->
                    <div class="container col-sm-10 mt-3 mb-4" id="contenido">
                        <!-- Cartas -->
                        <div class="card col-sm-12 card-shadow text-center ">
                            <div class="card-body">
                                <img src="https://mayurutour.com/wp-content/uploads/2020/01/catedral_san_marcos.jpg" alt="Catedral San Marcos de Arica" class="img-fluid" width="400" height="400">
                                <h4 class="card-title">Catedral San Marcos de Arica</h4>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Veritatis
                                    porro id necessitatibus ullam ipsam dicta,
                                    repellat deserunt sapiente ab.
                                </p>
                                <a href="sitio.html">
                                    <button type="button" class="btn btn-primary">
                                        Ver
                                    </button>
                                </a>
                            </div>
                        </div>
                        <!-- Fin carta 1 -->
                        <div class="card col-sm-12 mt-3 card-shadow text-center">
                            <div class="card-body">
                                <img src="https://live.staticflickr.com/4014/4650180564_8600c4bfaa_b.jpg" alt="Morro de Arica" class="img-fluid" width="400" height="400">
                                <h4 class="card-title">Morro de Arica</h4>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Veritatis
                                    porro id necessitatibus ullam ipsam dicta,
                                    repellat deserunt sapiente ab.
                                </p>
                                <a href="#">
                                    <button type="button" class="btn btn-primary">
                                        Ver
                                    </button>
                                </a>
                            </div>
                        </div>
                        <!-- Fin carta 2 -->
                        <div class="card col-sm-12 mt-3 card-shadow text-center">
                            <div class="card-body">
                                <img src="https://i3.visitchile.com/img/GalleryContent/352/slider/Chinchorro.jpg" alt="Playa Chinchorro" class="img-fluid" width="400" height="400">
                                <h4 class="card-title">Playa Chinchorro</h4>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Veritatis
                                    porro id necessitatibus ullam ipsam dicta,
                                    repellat deserunt sapiente ab.
                                </p>
                                <a href="#">
                                    <button type="button" class="btn btn-primary">
                                        Ver
                                    </button>
                                </a>
                            </div>
                        </div>
                        <!-- Fin carta 3 -->
                    </div>
                    <!-- Fin lugares -->
                </article>
                <!-- Fin Contenido -->
            </div>
        </div>
    </main>
</div>
@endsection