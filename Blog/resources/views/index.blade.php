<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="shortcut icon" href="img/logoNegro.ico" type="image/x-icon" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

    <!-- Scripts -->
    <script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="/js/live.js"></script>

</head>
<body>
    <header class="bg--img__wall overflow-hidden">
        <nav class="navbar navbar-expand-lg mb-5 navbar-dark">
            <a href="/" class="navbar-brand ml-5"><img src="img/logo.png" class="logo" alt="">Tua Pizza</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="/" class="nav-link mx-3">Inicio</a></li>
                    <li class="nav-item"><a href="/create" class="nav-link mx-3">Crear</a></li>
                    <li class="nav-item"><a href="/menu" class="nav-link mx-3">Menu</a></li>
                    <li class="nav-item"><a href="/about" class="nav-link mx-3">Sobre Nosotros</a></li>
                    <li class="nav-item"><a href="/signin" class="nav-link mx-3">Iniciar Sesión</a></li>
                    <li>
                        <div class="btn-group">
                            <button class="btn nav-link dropdown-toggle mr-3" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        <div class="container-fluid">
            <div class="row main-padding text-center text-lg-left">
                <div class="col-lg-5 offset-lg-1 col-sm-12 py-5">
                    <p class="p--spacing pt-5">Dele viaje y empezá a</p>
                    <h1 class="h1 large">Crear tu Pizza</h1>
                    <a href="/create" class="btn btn-danger btn-rounded mt-3 px-5 mb-5">Comenzar</a>
                    <a href="/signin" class="btn btn-outline-light btn-rounded mt-3 px-5 mb-5">Iniciar Sesion</a>
                </div>
                <div class="col-lg-6 col-12 d-flex justify-content-start justify-content-md-center justify-content-lg-around p-0">
                    <div class="container-pizza">
                        <img src="img/plato_pizza.png" class="img-fluid wow fadeInUp pizza_plate" alt="">
                        <img src="img/pizza_index.png" class="img-fluid wow fadeInUp delay-1s pizza_home" alt="">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-4 col-sd-4 my-5">
                <h2 class="text-center h3">Descubre más</h2>
                <p class="text-center">Fácil, comodo, y sencillo todo en línea</p>
            </div>
        </div>
        <div class="row main_images">
            <div class="col-lg-6 col-md-6 col-sd-12 text-right p-0 pr-3">
                <a href=""><img src="img/menu2.jpg" class="wow fadeIn image-fluid gallery main_image w-100" alt=""></a>
            </div>
            <div class="col-lg-6 col-md-6 col-sd-12">
                <img src="img/masa.jpg" class="wow delay fadeIn delay-1s image-fluid gallery secondary_image w-75" alt="">
                <img src="img/personas.jpg" class="wow fadeIn delay-2s image-fluid gallery third_image w-50" alt="">
            </div>
        </div>
    </div>
    <footer>
        <div class="container-fluid">
            <div class="row justify-content-center mt-5">
                <div class="col-lg-6 col-md-8 col-sm-12 text-center">
                    <a href=""><img src="img/logo.png" class="my-3" alt=""></a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
</body>
</html>