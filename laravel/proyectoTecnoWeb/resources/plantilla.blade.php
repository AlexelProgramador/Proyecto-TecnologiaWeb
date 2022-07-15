<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Joan&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body class="bg-white text-light">
    <nav class="navbar sticky-top navbar-dark bg-dark navbar-expand-sm">
        <!-- Logo -->
        <a class="navbar-brand" href="/"><img src="Imagen/logo.png" width="40" height="40" class="rounded-circle" role="img" alt="logo"> Arica Treasures</a>
        <!-- Boton para movil -->
        <button class="navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <!-- Opciones menu -->
            <div class="navbar-nav mr-auto ml-auto text-center">
                <a href="/" class="nav-item nav-link text-white">Inicio</a>
                <a href="/buscar" class="nav-item nav-link text-white">Buscar</a>
            </div>
            <div class="d-flex flex-row text-center justify-content-center">
                <a name="Ingresar" id="ingresar" class="text-white" href="/login" role="button">ingresar</a>
            </div>
        </div>
    </nav>
    <!-- Content -->
    @yield('content')
    <footer class="col-xl-12 col-md-12 col-12 text-center text-white bg-dark">
      <!-- Copyright -->
      <div class="text-center p-4">© 2020 Copyright Treasure Arica</div>
      <!-- Copyright -->
    </footer>
    <!-- End Content -->
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>

</html>