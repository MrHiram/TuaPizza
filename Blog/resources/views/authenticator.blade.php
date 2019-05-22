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
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Scripts -->
    <script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body class="bg--img__wall">
    <header>
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
    </header>
    <section>
        <h1 class="text-center h1 text-white" id="title">Inicio de Secion</h1>
        <div class="d-flex justify-content-center mt-5">
            <div class="card col-10 col-sm-7 col-lg-4 px-5 mt-4">
                <div class="rounded-circle user-icon text-center">
                    <i class="far fa-user"></i>
                </div>
                <form id="formLogin" action="" class="form-group pt-5">
        	        <label class="main-text pt-3"for="Email">Correo electronico</label>
                    <input class="form-control" type="text" name="userName" id="Email" placeholder="">
        	        <label class="main-text pt-3" for="Password">Contraseña</label>
                    <input class="form-control" type="password" name="password" id="Password" placeholder="">
                    <button class="btn btn-red bold col-12 mt-3">Ingresar</button>
                    <p class="text-center main-text light mt-2">¿Aun no tienes cuenta? <a href="register" onClick="return false;" id="register">Registrate</a></p>
                </form>
                <form id="formRegister" action="" class="form-group pt-5">
        	        <label class="main-text pt-3"for="Email">Nombre de usuario</label>
                    <input class="form-control" type="text" name="userName" id="UserName" placeholder="">
        	        <label class="main-text pt-3"for="Email">Correo electronico</label>
                    <input class="form-control" type="text" name="userName" id="Email" placeholder="">
        	        <label class="main-text pt-3" for="Password">Contraseña</label>
                    <input class="form-control" type="password" name="password" id="Password" placeholder="">
        	        <label class="main-text pt-3" for="Password">Confirmar contraseña</label>
                    <input class="form-control" type="password" name="password" id="ConfirmPassword" placeholder="">
                    <button class="btn btn-red bold col-12 mt-3">Ingresar</button>
                    <p class="text-center main-text light mt-2">¿Aun no tienes cuenta? <a href="login" onClick="return false;" id="login">Registrate</a></p>
                </form>
            </div>
        </div>
    </section>
    
    <script>
        $('document').ready(function(){
            $('#register').click(function(){
                loadRegister();
            });
            $('#login').click(function(){
                loadLogin();
            });
        });
        function loadRegister() {
            $('#title').text('Crear Cueta')
            $('#formLogin').css('display', 'none');
            $('#formRegister').css('display', 'block');
        }
        function loadLogin() {
            $('#title').text('Inicio de Secion')
            $('#formLogin').css('display', 'block');
            $('#formRegister').css('display', 'none');            
        }
    </script>
</body>
</html>