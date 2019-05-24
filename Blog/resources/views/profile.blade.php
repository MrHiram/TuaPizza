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
    <header class="bg--img__wall fixed-pos">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a href="/" class="navbar-brand ml-5"><img src="img/logo.png" class="logo" alt="">Tua Pizza</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    
                    <li class="nav-item active"><a href="#" onClick="receipt()" class="nav-link mx-3 d-block d-lg-none"><i class="fas fa-file-invoice-dollar"></i>&#160; &#160; Facturas</a></li>
                    <li class="nav-item active"><a href="#" onClick="history()" class="nav-link mx-3 d-block d-lg-none"><i class="fas fa-history"></i>&#160; &#160; Historial</a></li>
                    <li class="nav-item active"><a href="#" conClick="favorites()" class="nav-link mx-3 d-block d-lg-none"><i class="fas fa-star"></i>&#160; Favoritas</a></li>
                    <li class="d-block d-lg-none"><hr class="col-10"></li>
                    <li class="nav-item"><a href="/create" class="nav-link mx-3">Crear</a></li>
                    <li class="nav-item"><a href="/menu" class="nav-link mx-3">Menu</a></li>
                    <li class="nav-item"><a href="/about" class="nav-link mx-3">Sobre Nosotros</a></li>
                    <li class="nav-item"><a href="/signin" class="nav-link mx-3">Iniciar Sesión</a></li>
                    <li class="nav-item active"><a href="/signin" class="nav-link mx-3 d-block d-lg-none">Perfil</a></li>
                    <li class="nav-item"><a href="/signin" class="nav-link mx-3 d-block d-lg-none">Log-out</a></li>
                    <li class="d-none d-lg-block">
                        <div class="btn-group">
                            <button class="btn nav-link dropdown-toggle mr-5" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Hiram González C.
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
    </header>
    <section>
    <div class="container-fluid row pr-0">
        <div class="col-2 bg-dark profile-sidebar text-white d-none d-lg-block py-5 mt-5">
            <div class="row mb-3 justify-content-center">
                <div class="h4 text-white bg-danger rounded-circle text-center btn width"><i class="far fa-user"></i></div>
                <p class="m-3">Hiram González C.</p>
            </div>
            <div class="row ">
                <div class="col-3 offset-1 text-center">
                    <ul class="list-unstyled">
                        <li class="py-2"><a href="#" onClick="receipt()" class="main-text medium text-white"><i class="fas fa-file-invoice-dollar"></i></a></li>
                        <li class="py-2"><a href="#" onClick="history()" class="main-text medium text-white"><i class="fas fa-history"></i></a></li>
                        <li class="py-2"><a href="#" onClick="favorites()" class="main-text medium text-white"><i class="fas fa-star"></i></a></li>
                    </ul>
                </div>
                <div class="col-6 text-left">
                    <ul class="list-unstyled">
                        <li class="py-2"><a href="#" onClick="receipt()" class="main-text medium text-white">Facturas</a></li>
                        <li class="py-2"><a href="#" onClick="history()" class="main-text medium text-white">Historial</a></li>
                        <li class="py-2"><a href="#" onClick="favorites()" class="main-text medium text-white">Favoritas</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-10">
            <div class="row bg-white shadow-sm margin-right">
                <h2 id="indicator" class="h3 pl-5 pt-2">Facturas</h2>
            </div>
            <div id="receipt" class="card-columns">
                <div class="card card-width mt-5">
                    <div class="card-body">
                        <h5 class="card-title text-primary main-text medium bold">Factura #1024</h5>
                        <h6 class="card-subtitle mb-2 text-muted mb-3">12/5/2019 23:43h</h6>
                        <table class="table">
                            <thead>
                            <tbody>
                                <tr>
                                <th scope="row">x1</th>
                                <td>Pizza personalizada</td>
                                </tr>
                                <tr>
                                <th scope="row">x1</th>
                                <td>Coca-Cola 3L</td>
                                </tr>
                                <tr>
                                <th scope="row">x1</th>
                                <td>Express</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="main-text text-dark"><span class="main-text text-dark bold">Total: </span> $21</p>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary btn-lg" >Más Info</button>
                    </div>
                </div>
                <div class="card card-width mt-5">
                    <div class="card-body">
                        <h5 class="card-title text-primary main-text medium bold">Factura #1024</h5>
                        <h6 class="card-subtitle mb-2 text-muted mb-3">12/5/2019 23:43h</h6>
                        <table class="table">
                            <thead>
                            <tbody>
                                <tr>
                                <th scope="row">x1</th>
                                <td>Pizza personalizada</td>
                                </tr>
                                <tr>
                                <th scope="row">x1</th>
                                <td>Coca-Cola 3L</td>
                                </tr>
                                <tr>
                                <th scope="row">x1</th>
                                <td>Express</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="main-text text-dark"><span class="main-text text-dark bold">Total: </span> $21</p>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary btn-lg" >Más Info</button>
                    </div>
                </div>
                <div class="card card-width mt-5">
                    <div class="card-body">
                        <h5 class="card-title text-primary main-text medium bold">Factura #1024</h5>
                        <h6 class="card-subtitle mb-2 text-muted mb-3">12/5/2019 23:43h</h6>
                        <table class="table">
                            <thead>
                            <tbody>
                                <tr>
                                <th scope="row">x1</th>
                                <td>Pizza personalizada</td>
                                </tr>
                                <tr>
                                <th scope="row">x1</th>
                                <td>Coca-Cola 3L</td>
                                </tr>
                                <tr>
                                <th scope="row">x1</th>
                                <td>Express</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="main-text text-dark"><span class="main-text text-dark bold">Total: </span> $21</p>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary btn-lg" >Más Info</button>
                    </div>
                </div>
                <div class="card card-width mt-5">
                    <div class="card-body">
                        <h5 class="card-title text-primary main-text medium bold">Factura #1024</h5>
                        <h6 class="card-subtitle mb-2 text-muted mb-3">12/5/2019 23:43h</h6>
                        <table class="table">
                            <thead>
                            <tbody>
                                <tr>
                                <th scope="row">x1</th>
                                <td>Pizza personalizada</td>
                                </tr>
                                <tr>
                                <th scope="row">x1</th>
                                <td>Coca-Cola 3L</td>
                                </tr>
                                <tr>
                                <th scope="row">x1</th>
                                <td>Express</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="main-text text-dark"><span class="main-text text-dark bold">Total: </span> $21</p>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary btn-lg" >Más Info</button>
                    </div>
                </div>
            </div>
            
            <div id="history" class="card-columns disp-none">
                <div class="card card-width mt-5">
                    <div class="card-body">
                        <h5 class="card-title text-primary main-text medium bold">Pizza personalizada</h5>
                        <h6 class="card-subtitle mb-2 text-muted mb-3">Factura #1024</h6>
                        <table class="table">
                            <thead>
                            <tbody>
                                <tr>
                                <th scope="row">x1</th>
                                <td>Hongos</td>
                                </tr>
                                <tr>
                                <th scope="row">x1</th>
                                <td>Tomate</td>
                                </tr>
                                <tr>
                                <th scope="row">x1</th>
                                <td>Albahaca</td>
                                </tr>
                                <tr>
                                <th scope="row">x1</th>
                                <td>Mozarrella</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary btn-lg">Crear</button>
                    </div>
                </div>
                <div class="card card-width mt-5">
                    <div class="card-body">
                        <h5 class="card-title text-primary main-text medium bold">Pizza personalizada</h5>
                        <h6 class="card-subtitle mb-2 text-muted mb-3">Factura #1024</h6>
                        <table class="table">
                            <thead>
                            <tbody>
                                <tr>
                                <th scope="row">x1</th>
                                <td>Hongos</td>
                                </tr>
                                <tr>
                                <th scope="row">x1</th>
                                <td>Tomate</td>
                                </tr>
                                <tr>
                                <th scope="row">x1</th>
                                <td>Albahaca</td>
                                </tr>
                                <tr>
                                <th scope="row">x1</th>
                                <td>Mozarrella</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary btn-lg">Crear</button>
                    </div>
                </div>
                <div class="card card-width mt-5">
                    <div class="card-body">
                        <h5 class="card-title text-primary main-text medium bold">Pizza personalizada</h5>
                        <h6 class="card-subtitle mb-2 text-muted mb-3">Factura #1024</h6>
                        <table class="table">
                            <thead>
                            <tbody>
                                <tr>
                                <th scope="row">x1</th>
                                <td>Hongos</td>
                                </tr>
                                <tr>
                                <th scope="row">x1</th>
                                <td>Tomate</td>
                                </tr>
                                <tr>
                                <th scope="row">x1</th>
                                <td>Albahaca</td>
                                </tr>
                                <tr>
                                <th scope="row">x1</th>
                                <td>Mozarrella</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary btn-lg">Crear</button>
                    </div>
                </div>
            </div>
            
            <div id="favorites" class="card-columns disp-none">
                <div class="card card-width mt-5">
                    <div class="card-body">
                        <h5 class="card-title text-primary main-text medium bold">Pizza personalizada</h5>
                        <h6 class="card-subtitle mb-2 text-muted mb-3">Pedida 10 veces</h6>
                        <table class="table">
                            <thead>
                            <tbody>
                                <tr>
                                <th scope="row">x1</th>
                                <td>Hongos</td>
                                </tr>
                                <tr>
                                <th scope="row">x1</th>
                                <td>Tomate</td>
                                </tr>
                                <tr>
                                <th scope="row">x1</th>
                                <td>Albahaca</td>
                                </tr>
                                <tr>
                                <th scope="row">x1</th>
                                <td>Mozarrella</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary btn-lg">Crear</button>
                    </div>
                </div>
                <div class="card card-width mt-5">
                    <div class="card-body">
                        <h5 class="card-title text-primary main-text medium bold">Pizza personalizada</h5>
                        <h6 class="card-subtitle mb-2 text-muted mb-3">Pedida 10 veces</h6>
                        <table class="table">
                            <thead>
                            <tbody>
                                <tr>
                                <th scope="row">x1</th>
                                <td>Hongos</td>
                                </tr>
                                <tr>
                                <th scope="row">x1</th>
                                <td>Tomate</td>
                                </tr>
                                <tr>
                                <th scope="row">x1</th>
                                <td>Albahaca</td>
                                </tr>
                                <tr>
                                <th scope="row">x1</th>
                                <td>Mozarrella</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary btn-lg">Crear</button>
                    </div>
                </div>
                <div class="card card-width mt-5">
                    <div class="card-body">
                        <h5 class="card-title text-primary main-text medium bold">Pizza personalizada</h5>
                        <h6 class="card-subtitle mb-2 text-muted mb-3">Pedida 10 veces</h6>
                        <table class="table">
                            <thead>
                            <tbody>
                                <tr>
                                <th scope="row">x1</th>
                                <td>Hongos</td>
                                </tr>
                                <tr>
                                <th scope="row">x1</th>
                                <td>Tomate</td>
                                </tr>
                                <tr>
                                <th scope="row">x1</th>
                                <td>Albahaca</td>
                                </tr>
                                <tr>
                                <th scope="row">x1</th>
                                <td>Mozarrella</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-center">
                        <button class="btn btn-primary btn-lg">Crear</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <footer>
    </footer>
</body>
    <script>
        function receipt() {
            $('#receipt').css('display','block');
            $('#history').css('display','none');
            $('#favorites').css('display','none');
        }
        
        function history() {
            $('#receipt').css('display','none');
            $('#history').css('display','block');
            $('#favorites').css('display','none');            
        }
        
        function favorites() {
            $('#receipt').css('display','none');
            $('#history').css('display','none');
            $('#favorites').css('display','block');            
        }
    </script>
</html>