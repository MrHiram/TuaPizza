@extends('layout')
@section('title', 'Sobre Nosotros')
@section('activeSobre','active')
@section('content')
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
        
@endsection