<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Imagenes</title>
</head>

<body>
    <!-- Comienzo Encabezado -->

    <nav class="navbar sticky-top navbar-dark bg-dark navbar-expand-sm">
        <!-- Logo -->
        <a class="navbar-brand" href="#">Logo</a>
        <!-- Boton para movil -->
        <button class="navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <!-- Opciones menu -->
            <div class="navbar-nav mr-auto ml-auto text-center">
                <a href="index.html" class="nav-item nav-link text-white">Inicio</a>
                <a href="buscar.html" class="nav-item nav-link text-white">Buscar</a>
            </div>
            <div class="d-flex flex-row text-center justify-content-center">
                <a name="Ingresar" id="ingresar" class="text-white" href="ingresar.html" role="button">ingresar</a>
            </div>
        </div>
    </nav>
    <!-- Fin Encabezado -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Comienzo pie pagina -->
    <div class="layout content content--8of8-medium contentTop">
        <div class="flex flex--top flex--center contentBox--top">
            <div class="footerItemColumn" data-context-text="Productos">
                <h3 class="footerItemColumn__heading base-heading-3 margin--bottom-c6">Productos</h3>
                <ul>
                    <li class="footerItem">
                        <a class="cta" href="/es/why-mailchimp/">

                            ¿Por qué Mailchimp?
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="/es/whats-new/">

                            Actualizaciones de productos
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="/es/features/email/">

                            Email marketing
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="/es/features/website-builder/">

                            Páginas web
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="/es/features/transactional-email/">

                            Correo electrónico transaccional
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="/es/resources/mailchimp-comparisons/">

                            Comparación
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="/es/gdpr/">

                            Cumplimiento del RGPD
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="/es/about/security/">

                            Seguridad
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="https://status.mailchimp.com/">

                            Status
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="/es/features/mailchimp-mobile/">

                            Aplicación móvil
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footerItemColumn" data-context-text="Recursos">
                <h3 class="footerItemColumn__heading base-heading-3 margin--bottom-c6">Recursos</h3>
                <ul>
                    <li class="footerItem">
                        <a class="cta" href="/es/resources/" aria-label="Consejos sobre marketing">

                            Consejos sobre marketing
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="/es/resources/free-marketing-features-overview/" aria-label="Herramientas de marketing gratuitas">

                            Herramientas de marketing gratuitas
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="/es/marketing-glossary/">

                            Glosario de marketing
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="/es/integrations/">

                            Directorio de integraciones
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footerItemColumn" data-context-text="Comunidad">
                <h3 class="footerItemColumn__heading base-heading-3 margin--bottom-c6">Comunidad</h3>
                <ul>
                    <li class="footerItem">
                        <a class="cta" href="/es/andco/">

                            Agencias y freelancers
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="https://mailchimp.com/developer/">

                            Desarrolladores
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="/es/events/">

                            Eventos
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footerItemColumn" data-context-text="Empresa">
                <h3 class="footerItemColumn__heading base-heading-3 margin--bottom-c6">Empresa</h3>
                <ul>
                    <li class="footerItem">
                        <a class="cta" href="/es/about/">

                            Nuestra historia
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="/es/newsroom/">

                            Sala de prensa
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="https://mailchimp.com/annual-report/">

                            Informe anual
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="/es/jobs/">

                            Empleo
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="https://www.intuit.com/accessibility/" target="_blank" rel="noopener noreferrer" aria-label="Accesibilidad">

                            Accesibilidad
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footerItemColumn" data-context-text="Ayuda">
                <h3 class="footerItemColumn__heading base-heading-3 margin--bottom-c6">Ayuda</h3>
                <ul>
                    <li class="footerItem">
                        <a class="cta" href="/es/contact/">

                            Contacto
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="/es/experts/">

                            Contratar a un experto
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="/es/help/" aria-label="Centro de Ayuda">

                            Centro de Ayuda
                        </a>
                    </li>
                    <li class="footerItem">
                        <a class="cta" href="https://mailchimp.com/contact/?primaryTopic=prospective" aria-label="Hablar con Ventas">

                            Hablar con Ventas
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footerItemColumn">
                <ul>
                    <li class="footerItem">
                        <div class="globalNav__brandMoment" data-context-text="Descúbrelos">
                            <a href="https://mailchimp.com/presents/">
                                <img src="https://eep.io/images/yzco4xsimv0y/73ZAoe8O3Y7SXQLeCNTq5u/8ddf1f63b4abdf7f67149d3a9d74a0bd/MCP.svg?w=260&amp;fm=webp&amp;q=80" data-src="https://eep.io/images/yzco4xsimv0y/73ZAoe8O3Y7SXQLeCNTq5u/8ddf1f63b4abdf7f67149d3a9d74a0bd/MCP.svg?w=260&amp;fm=webp&amp;q=80" data-behavior="lazyload" data-webp-src="https://eep.io/images/yzco4xsimv0y/73ZAoe8O3Y7SXQLeCNTq5u/8ddf1f63b4abdf7f67149d3a9d74a0bd/MCP.svg?w=260&amp;fm=webp&amp;q=80" style="" data-srcset="https://eep.io/images/yzco4xsimv0y/73ZAoe8O3Y7SXQLeCNTq5u/8ddf1f63b4abdf7f67149d3a9d74a0bd/MCP.svg?w=260&amp;fm=webp&amp;q=80 260w, https://eep.io/images/yzco4xsimv0y/73ZAoe8O3Y7SXQLeCNTq5u/8ddf1f63b4abdf7f67149d3a9d74a0bd/MCP.svg?w=520&amp;fm=webp&amp;q=80 520w" sizes="260px" data-webp-srcset="https://eep.io/images/yzco4xsimv0y/73ZAoe8O3Y7SXQLeCNTq5u/8ddf1f63b4abdf7f67149d3a9d74a0bd/MCP.svg?w=260&amp;fm=webp&amp;q=80 260w, https://eep.io/images/yzco4xsimv0y/73ZAoe8O3Y7SXQLeCNTq5u/8ddf1f63b4abdf7f67149d3a9d74a0bd/MCP.svg?w=520&amp;fm=webp&amp;q=80 520w" class="" alt="Mailchimp Presents" loading="lazy" srcset="https://eep.io/images/yzco4xsimv0y/73ZAoe8O3Y7SXQLeCNTq5u/8ddf1f63b4abdf7f67149d3a9d74a0bd/MCP.svg?w=260&amp;fm=webp&amp;q=80 260w, https://eep.io/images/yzco4xsimv0y/73ZAoe8O3Y7SXQLeCNTq5u/8ddf1f63b4abdf7f67149d3a9d74a0bd/MCP.svg?w=520&amp;fm=webp&amp;q=80 520w"> </a>
                            <p class="copy-regular">
                                Películas, podcasts y series originales que son un homenaje al espíritu emprendedor. </p>
                            <p class="margin--top-c3">
                                <a class="cta gn__moreLink" href="https://mailchimp.com/presents/">

                                    Descúbrelos
                                </a>
                            </p>
                        </div>
                    </li>
                    <li class="footerItem">
                        <div class="globalNav__brandMoment" data-context-text="Más información">
                            <a href="https://mailchimp.com/courier/">
                                <img src="https://eep.io/images/yzco4xsimv0y/5itQmdXHB6vMuAcvyWp5MR/ef5cd2cecd4c92b7029a22ec67585c65/Courier.svg?w=260&amp;fm=webp&amp;q=80" data-src="https://eep.io/images/yzco4xsimv0y/5itQmdXHB6vMuAcvyWp5MR/ef5cd2cecd4c92b7029a22ec67585c65/Courier.svg?w=260&amp;fm=webp&amp;q=80" data-behavior="lazyload" data-webp-src="https://eep.io/images/yzco4xsimv0y/5itQmdXHB6vMuAcvyWp5MR/ef5cd2cecd4c92b7029a22ec67585c65/Courier.svg?w=260&amp;fm=webp&amp;q=80" style="" data-srcset="https://eep.io/images/yzco4xsimv0y/5itQmdXHB6vMuAcvyWp5MR/ef5cd2cecd4c92b7029a22ec67585c65/Courier.svg?w=260&amp;fm=webp&amp;q=80 260w, https://eep.io/images/yzco4xsimv0y/5itQmdXHB6vMuAcvyWp5MR/ef5cd2cecd4c92b7029a22ec67585c65/Courier.svg?w=520&amp;fm=webp&amp;q=80 520w" sizes="260px" data-webp-srcset="https://eep.io/images/yzco4xsimv0y/5itQmdXHB6vMuAcvyWp5MR/ef5cd2cecd4c92b7029a22ec67585c65/Courier.svg?w=260&amp;fm=webp&amp;q=80 260w, https://eep.io/images/yzco4xsimv0y/5itQmdXHB6vMuAcvyWp5MR/ef5cd2cecd4c92b7029a22ec67585c65/Courier.svg?w=520&amp;fm=webp&amp;q=80 520w" class="" alt="Courier" loading="lazy" srcset="https://eep.io/images/yzco4xsimv0y/5itQmdXHB6vMuAcvyWp5MR/ef5cd2cecd4c92b7029a22ec67585c65/Courier.svg?w=260&amp;fm=webp&amp;q=80 260w, https://eep.io/images/yzco4xsimv0y/5itQmdXHB6vMuAcvyWp5MR/ef5cd2cecd4c92b7029a22ec67585c65/Courier.svg?w=520&amp;fm=webp&amp;q=80 520w"> </a>
                            <p class="copy-regular">
                                Datos de expertos, tendencias de la industria e historias inspiradoras que te ayudan a vivir y trabajar a tu manera. </p>
                            <p class="margin--top-c3">
                                <a class="cta gn__moreLink" href="https://mailchimp.com/courier/">

                                    Más información
                                </a>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Fin pie pagina -->



    <!-- Bootstrap -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>