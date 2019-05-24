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
    <header class="bg--img__wall">
        <nav class="navbar navbar-expand-lg mb-5 navbar-dark">
            <a href="/" class="navbar-brand ml-5"><img src="img/logo.png" class="logo" alt="">Tua Pizza</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="/" class="nav-link mx-3">Inicio</a></li>
                    <li class="nav-item"><a href="/create" class="nav-link mx-3">Crear</a></li>
                    <li class="nav-item"><a href="/menu" class="nav-link mx-3">Menu</a></li>
                    <li class="nav-item active"><a href="/about" class="nav-link mx-3">Sobre Nosotros</a></li>
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
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-sm-12 text-center my-5 py-5">
                    <h1 class="h1 mb-5">Sobre Nosotros</h1>
                </div>
            </div>
        </div>
        </div>
    </header>
    <section>
        <div class="container-fluid bg-light">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-12 my-5">
                    <h2 class="text-center h3">Nuestra Filosofía</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5 text-center">
                    <p>Nos enorgullecemos por ser una compañia que trabaja con etica y respetuo muto. Creemos en la filosofia del cliente siempre tiene la razon. </p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5 text-center">
                    <p>Deseamos siempre satisfacer los gustos de nuestros clientes y que disfruten de una experiencia unica como lo es armar su pizza sin tener que hacerla voz mismo </p>
                </div>
            </div>
        </div>
        <div class="container-fluid col-12 col-lg-8 offset-lg-2">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-12 mt-5">
                    <p class="text-center h3">Nuestro Equipo</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-4 col-sm-4 mt-5 pr-5 text-center text-lg-right">
                    <img src="img/img-hiram.png" class="img-fluid w-50" alt="">
                </div>
                <div class="col-lg-6 col-md-4 col-sm-4 my-5 text-center text-lg-left">
                    <p>Hiram Gonzales es graduado en gastronomía en una de las escuelas mas prestigios de nicaragua , es nuestro chef que ha trabajado con nosotros desme el 2009 es el mejor haciendo nuestra salsa secreta.</p>
                </div>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-lg-6 col-md-4 col-sm-4 my-5 order-2 order-lg-1 order-md-2 order-sm-2 text-center text-lg-right">
                    <p>Priscilla Rivera es nuestra head chef es la encargada de manterner todo en la cocina bajo clama es la fundadora de este proyecto. Graduada de una de las escuelas mas prestigiosas de Paris,y haber trabajado con Gordon Ramsey, una de las
                        mejores Chefs del mundo. </p>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-4 mt-5 order-1 order-lg-2 order-md-1 order-sm-1 text-center text-lg-left">
                    <img src="img/img-pri.png" class="img-fluid w-50 " alt="">
                </div>
            </div>
        </div>
        <div class="container-fluid bg-light py-5">
            <div class="row justify-content-center">
                <div class="card-deck" style="max-width: 56rem;">
                    <div class="card">
                        <div class="card-body">
                            <p class="h3 mt-5">Como cóntactar a Tua Pizza</p>
                            <p class="sub-text"> Correo Electronico:</p>
                            <p>info@tuapizza.com</p>
                            <p class="sub-text"> Número Teléfonico:</p>
                            <p>(+506)8422-0599</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="h3 mt-5">¿Querés dejarnos un Comentario?</p>
                            <form action="">
                                <label class="form-text"> Nombre:</label>
                                <input type="text" id="name" class="form-control">
                                <label class="form-text "> Correo:</label>
                                <input type="email" id="email" class="form-control">
                                <label class="form-text "> Comentario:</label>
                                <input type="textarea" id="comment" class="form-control mb-3" rows="3">
                                <button class="btn btn-secondary w-100 mb-5 ">Enviar Comentario</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container-fluid">
            <div class="row justify-content-center">
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
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js "></script>

    <script>
        new WOW().init();
    </script>
</body>
</html>