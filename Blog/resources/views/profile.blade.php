@extends('layout')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
@section('title','Perfil')
@section('header')
</header> 
@endsection  
@section('content')
    <section>
    <div class="container-fluid row pr-0">
        <div class="col-2 bg-dark profile-sidebar text-white d-none d-lg-block py-5">
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
    @endsection
</body>
@section('scripts')
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
            $('#indicator').text('Historial');            
        }
        
        function favorites() {
            $('#receipt').css('display','none');
            $('#history').css('display','none');
            $('#favorites').css('display','block'); 
            $('#indicator').text('Favoritas');           
        }
    </script>
 @endsection
