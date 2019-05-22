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
<body class="bg-light">
    <header>
        <nav class="navbar navbar-expand-lg mb-5 navbar-dark bg-dark">
            <a href="" class="navbar-brand ml-5"><img src="img/logo.png" class="logo" alt="">Tua Pizza</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="/" class="nav-link mx-3">Inicio</a></li>
                    <li class="nav-item"><a href="/create" class="nav-link mx-3">Crear</a></li>
                    <li class="nav-item active"><a href="" class="nav-link mx-3">Sobre Nosotros</a></li>
                    <li class="nav-item"><a href="" class="nav-link mx-3">Iniciar Sesión</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <section>
    <div class="container-fluid">
        <div class="card col-12 col-lg-10 offset-lg-1 p-0 flex-row flex-wrap">
            <div class="col-12 col-md-6 border-right text-center py-5 overflow-hidden">
                <h3 class="h3"> Empieza a Crear</h3>
                <div class="container-pizza d-block text-left">
                    <img src="img/plain-pizza.jpg" class="img-fluid position-absolute w-100" alt="" style="z-index: 0">
                    <img src="img/mozarrella.png" class="img-fluid position-absolute w-100" alt="" style="z-index: 1" id="mozarrella">
                    <img src="img/cheddar.png" class="img-fluid position-absolute w-100" alt="" style="z-index: 1" id="cheddar">
                    <img src="img/tomates.png" class="img-fluid position-absolute w-100" alt="" style="z-index: 2" id="tomates">
                    <img src="img/peperoni.png" class="img-fluid position-absolute w-100" alt="" style="z-index: 3" id="peperoni">
                    <img src="img/pepinillos.png" class="img-fluid position-absolute w-100" alt="" style="z-index: 4" id="pepinillos">
                    <img src="img/salchicha.png" class="img-fluid position-absolute w-100" alt="" style="z-index: 5" id="salchicha">
                    <img src="img/carne_molida.png" class="img-fluid position-absolute w-100" alt="" style="z-index: 6" id="carnemolida">
                    <img src="img/greenPepper.png" class="img-fluid position-absolute w-100" alt="" style="z-index: 7" id="greenpepper">
                    <img src="img/mushroom.png" class="img-fluid position-absolute w-100" alt="" style="z-index: 8" id="mushroom">
                    <img src="img/bacon.png" class="img-fluid position-absolute w-100" alt="" style="z-index: 9" id="bacon">
                    <img src="img/cebolla.png" class="img-fluid position-absolute w-100" alt="" style="z-index: 10" id="cebolla">
                    <img src="img/chicken.png" class="img-fluid position-absolute w-100" alt="" style="z-index: 11" id="chicken">
                    <img src="img/manzana.png" class="img-fluid position-absolute w-100" alt="" style="z-index: 12" id="manzana">
                    <img src="img/piña.png" class="img-fluid position-absolute w-100" alt="" style="z-index: 13" id="pina">
                    <img src="img/limones.png" class="img-fluid position-absolute w-100" alt="" style="z-index: 14" id="limones">
                    <img src="img/olives.png" class="img-fluid position-absolute w-100" alt="" style="z-index: 15" id="olives">
                    <img src="img/basil.png" class="img-fluid position-absolute w-100" alt="" style="z-index: 16" id="basil">
                    <img src="img/cilantro.png" class="img-fluid position-absolute w-100" alt="" style="z-index: 17" id="cilantro">
                </div>
                <label for="" class="main-text bold large text-dark te">Monto a Cancelar</label>
                <div class="card col-6 offset-3 text-left">
                    <p class="main-text text-dark my-2">$5</p>
                </div>
            </div>
            <div class="col-12 col-md-6 p-5">
                <label class="main-text medium text-dark mb-0">Elegí tus vegetales favoritos</label>
                <hr class="border-top my-2">
                <ul class="d-flex flex-wrap list-unstyled">
                    <li class="p-0 mx-4 my-2"><button id="greenpepper" class="btn width btn-outline-light rounded-circle shadow-sm p-0"><img class="img-fluid" src="/img/btn-green-peppers.png" alt=""></button></li>
                    <li class="p-0 mx-4 my-2"><button id="olives" class="btn width btn-outline-light rounded-circle shadow-sm p-0"><img class="img-fluid" src="/img/btn-olivas.png" alt=""></button></li>
                    <li class="p-0 mx-4 my-2"><button id="mushroom" class="btn width btn-outline-light rounded-circle shadow-sm p-0"><img class="img-fluid" src="/img/btn-hongos.png" alt=""></button></li>
                    <li class="p-0 mx-4 my-2"><button id="pepinillos" class="btn width btn-outline-light rounded-circle shadow-sm p-0"><img class="img-fluid" src="/img/btn-pepinillo.png" alt=""></button></li>
                    <li class="p-0 mx-4 my-2"><button id="cebolla" class="btn width btn-outline-light rounded-circle shadow-sm p-0"><img class="img-fluid" src="/img/btn-cebolla.png" alt=""></button></li>                    
                </ul>
                <label class="main-text medium text-dark mb-0">Elegí tus frutas favoritas</label>
                <hr class="border-top my-2">
                <ul class="d-flex flex-wrap list-unstyled">
                    <li class="p-0 mx-4 my-2"><button id="tomates" class="btn width btn-outline-light rounded-circle shadow-sm p-0"><img class="img-fluid" src="/img/btn-tomate.png" alt=""></button></li>
                    <li class="p-0 mx-4 my-2"><button id="limones" class="btn width btn-outline-light rounded-circle shadow-sm p-0"><img class="img-fluid" src="/img/btn-limon.png" alt=""></button></li>
                    <li class="p-0 mx-4 my-2"><button id="manzana" class="btn width btn-outline-light rounded-circle shadow-sm p-0"><img class="img-fluid" src="/img/btn-manzanas.png" alt=""></button></li>
                    <li class="p-0 mx-4 my-2"><button id="pina" class="btn width btn-outline-light rounded-circle shadow-sm p-0"><img class="img-fluid" src="/img/btn-pina.png" alt=""></button></li>
                </ul>
                <label class="main-text medium text-dark mb-0">Elegí tus especies favoritas</label>
                <hr class="border-top my-2">
                <ul class="d-flex flex-wrap list-unstyled">
                    <li class="p-0 mx-4 my-2"><button id="basil" class="btn width btn-outline-light rounded-circle shadow-sm p-0"><img class="img-fluid" src="/img/btn-albahaca.png" alt=""></button></li>
                    <li class="p-0 mx-4 my-2"><button id="cilantro" class="btn width btn-outline-light rounded-circle shadow-sm p-0"><img class="img-fluid" src="/img/btn-culantro.png" alt=""></button></li>
                </ul>
                <label class="main-text medium text-dark mb-0">Elegí tus carnes favoritas</label>
                <hr class="border-top my-2">
                <ul class="d-flex flex-wrap list-unstyled">
                    <li class="p-0 mx-4 my-2"><button id="chicken" class="btn width btn-outline-light rounded-circle shadow-sm p-0"><img class="img-fluid" src="/img/btn-pollo.png" alt=""></button></li>
                    <li class="p-0 mx-4 my-2"><button id="carnemolida" class="btn width btn-outline-light rounded-circle shadow-sm p-0"><img class="img-fluid" src="/img/btn-carneMolida.png" alt=""></button></li>
                    <li class="p-0 mx-4 my-2"><button id="bacon" class="btn width btn-outline-light rounded-circle shadow-sm p-0"><img class="img-fluid" src="/img/btn-bacon.png" alt=""></button></li>
                    <li class="p-0 mx-4 my-2"><button id="salchicha" class="btn width btn-outline-light rounded-circle shadow-sm p-0"><img class="img-fluid" src="/img/btn-salchicha.png" alt=""></button></li>
                </ul>
                <label class="main-text medium text-dark mb-0">Elegí tus queso favorito</label>
                <hr class="border-top my-2">
                <ul class="d-flex flex-wrap list-unstyled">
                    <li class="p-0 mx-4 my-2"><button id="cheddar" class="btn width btn-outline-light rounded-circle shadow-sm p-0"><img class="img-fluid" src="/img/btn-cheddar.png" alt=""></button></li>
                    <li class="p-0 mx-4 my-2"><button id="mozarrella" class="btn width btn-outline-light rounded-circle shadow-sm p-0"><img class="img-fluid" src="/img/btn-mozarrella.png" alt=""></button></li>
                </ul>
            </div>
            <div class="col-12 d-flex justify-content-between"> 
                <div class="d-flex">
                    <ul class="px-3 pt-0 list-unstyled">
                        <li class="height"><i class="fas fa-circle active"></i></li>
                        <li class="height"><i class="fas fa-circle"></i></li>
                        <li class="height"><i class="fas fa-circle"></i></li>
                        <li class="height"><i class="fas fa-circle"></i></li>
                    </ul>
                    <p class="step-indicator">Siguiente paso <br><span>Bebidas</span></p>
                </div>
                <div>
                    <button class="btn"><i class="fas fa-chevron-left main-text large d-none"></i></button>
                    <button class="btn"><i class="fas fa-chevron-right main-text large"></i></button>
                </div>
            </div>
        </div>
    </section>
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
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js "></script>

    <script>
        new WOW().init();
    </script>
</body>
</html>