<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/authenticator.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Scripts -->
    <script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
    <header class="bg--img__table">
        <nav class="navbar navbar-expand-lg mb-5 navbar-dark">
            <a href="" class="navbar-brand ml-5"><img src="img/logo.png" class="logo" alt="">Tua Pizza</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="" class="nav-link mx-3">Inicio</a></li>
                    <li class="nav-item"><a href="" class="nav-link mx-3">Crear</a></li>
                    <li class="nav-item"><a href="" class="nav-link mx-3">Sobre Nosotros</a></li>
                    <li class="nav-item"><a href="" class="nav-link mx-3">Iniciar Sesión</a></li>
                </ul>
            </div>
        </nav>
        <h1 class="offset-1 h1 large pt-5">Nuestro Menú</h1>
        <hr class="col-5 offset-1">
        <p class="offset-1 secondary-text padding-bot">La mejor calidad al mejor precio.<br>Tua pizza es el unico lugar donde podés crear tu pizza o <br>elegir una de nuestras especialidades.</p>
    </header>
    <section>
        <h3 class="h3 text-center py-3">Especialidades</h3>
        <p class="main-text medium text-center">Proba nuestras especialidades de la casa</p>
        <div class="d-flex offset-1 col-10 justify-content-between">
            <div class="card col p-0 my-5">
                <img class="card-img-top" src="{{url('/img/pizza-1.jpeg')}}" alt="" style="height:282px">
                <div class="card-body">
                    <h4 class="h4 card-title">Franbuesa Fusión</h4>
                    <p class="card-text main-text medium text-dark">Nuestra deliciosa pizza dulce, es donde el almuerzo se vuelve postre.</p>
                    <button class="btn btn-red col-12 mt-3">Probar</button>
                </div>
            </div>
            <div class="card col p-0 my-5 mx-5">
                <img class="card-img-top" src="{{url('/img/pizza-3.jpg')}}" alt="">
                <div class="card-body">
                    <h4 class="h4 card-title">Mariscaza</h4>
                    <p class="card-text main-text medium text-dark">TuaPizza ha descubierto el secreto al unir los mariscos y la pizza. Es una exposión de sabor en tu boca.</p>
                    <button class="btn btn-red col-12 mt-3">Probar</button>
                </div>
            </div>
            <div class="card col p-0 my-5">
                <img class="card-img-top" src="{{url('/img/pizza-2.jpg')}}" alt="">
                <div class="card-body">
                    <h4 class="h4 card-title">Hamburpizza</h4>
                    <p class="card-text main-text medium text-dark">¿Hamburguesas o pizzas? TuaPizza ha combinado las comidas rápidas favoritas de nuestros clientes para un sabor único.</p>
                    <button class="btn btn-red col-12 mt-3">Probar</button>
                </div>
            </div>
        </div>
        <div class="bg--grey__light">
            <div class="col">
                <img src="" alt="">
            </div>
            <div class="col">
                <h4 class="h4">¿No te gustó ninguna?</h4>
                <p class="main-text medium text-dark"> No hay bronca</p>
                <button class="btn btn-red col-2 mt-3">Comenzar</button>
                <!-- Continuar aquí -->
            </div>
        </div>
    </section>
    <footer>

    </footer>
</body>
</html>