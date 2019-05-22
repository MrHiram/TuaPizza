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
                    <li class="nav-item"><a href="index.html" class="nav-link mx-3">Inicio</a></li>
                    <li class="nav-item"><a href="" class="nav-link mx-3">Crear</a></li>
                    <li class="nav-item active"><a href="" class="nav-link mx-3">Sobre Nosotros</a></li>
                    <li class="nav-item"><a href="" class="nav-link mx-3">Iniciar Sesión</a></li>
                </ul>
            </div>
        </nav>

      <section>
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
        <div class="col-lg-6 col-md-6 col-sm-12 border-right">
        <div class="row">
        <h3 class="h3 text-center"> Empieza a Crear</h3>
        </div>
        <img src="img/plain-pizza.jpg" class="img-fluid w-100" alt="">
        <div class="row justify-content-center">
        <label for="" class="main-text large text-dark">Monto a Cancelar:</label>
        </div>
        <div class="row justify-content-center">
        <input  type="text" class="form-text" >
        </div>
        
        
        </div>
           
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