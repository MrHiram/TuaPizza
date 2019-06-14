<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <link rel="shortcut icon" href="img/logoNegro.ico" type="image/x-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Scripts -->
    <script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="/js/live.js"></script>

</head>
<body>
    <header class="bg--img__wall overflow-hidden">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a href="/" class="navbar-brand ml-5"><img src="img/logo.png" class="logo" alt="">Tua Pizza</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item @yield('activeIndex')"><a href="/" class="nav-link mx-3">Inicio</a></li>
                    <li class="nav-item @yield('activeCrear')"><a href="/create" class="nav-link mx-3">Crear</a></li>
                    <li class="nav-item @yield('activeMenu')"><a href="/menu" class="nav-link mx-3">Menu</a></li>
                    <li class="nav-item @yield('activeSobre')"><a href="/about" class="nav-link mx-3">Sobre Nosotros</a></li>
                    <li class="nav-item @yield('activeInicio')"><a href="/signin" class="nav-link mx-3">Iniciar Sesión</a></li>
                    <li>
                        <div class="btn-group">
                            <button class="btn nav-link dropdown-toggle mr-3 pl-3" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                HiramGonzalez
                            </button>
                            <div class="dropdown-menu dropdown-menu-left px-3">
                                <a href="/profile" class="text-dark"><i class="fas fa-user"></i>&#160; Perfil</a>
                                <div class="dropdown-divider"></div>
                                <a href="" class="text-dark"><i class="fas fa-sign-out-alt"></i>&#160; Log-out</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        @yield('header')
        @yield('content')
    <footer>
        <div class="container-fluid">
            <div class="row justify-content-center mt-5">
                <div class="col-lg-6 col-md-8 col-sm-12 text-center text-body">
                    <a href="/"><img src="img/logo.png" class="my-3" alt=""></a>
                    <ul class="p-0">
                        <li class="bg-light rounded-circle mx-4 mt-3"><i class="fab fa-twitter mt-2" alt=""></i></li>
                        <li class="bg-light rounded-circle mx-4 mt-3"><i class="fab fa-instagram mt-2" alt=""></i></li>
                        <li class="bg-light rounded-circle mx-4 mt-3"><i class="fab fa-facebook-f mt-2" alt=""></i></li>
                        <li class="bg-light rounded-circle mx-4 mt-3"><i class="fab fa-google mt-2" alt=""></i></li>
                    </ul>
                    <p class="my-3 main-text">Todos los derechos reservados</p>
                </div>
            </div>
        </div>
    </footer>
</body>
@yield('scripts')
</html>