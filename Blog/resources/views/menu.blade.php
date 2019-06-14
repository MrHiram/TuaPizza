@extends('layout')
@section('title','Menu')
@section('activeMenu','active')
@section('content') 
    <section>
            <h1 class="offset-1 h1 large pt-5">Nuestro Menú</h1>
            <hr class="col-5 offset-1">
            <p class="offset-1 secondary-text padding-bot">La mejor calidad al mejor precio.<br>Tua pizza es el unico lugar donde podés crear tu pizza o <br>elegir una de nuestras especialidades.</p>
    </header>
        <h3 class="h3 text-center py-3">Especialidades</h3>
        <p class="main-text medium text-center">Proba nuestras especialidades de la casa</p>
        <div class=" col-12 col-lg-8 offset-lg-2">
            <div class="card-deck">
                <div class="card p-0 my-5">
                    <img src='/img/pizza-1.jpeg' alt="" class="card-img-top">
                    <div class="card-body">
                        <h4 class="h4 card-title">Frambuesa Fusión</h4>
                        <p class="card-text main-text medium text-dark">Nuestra deliciosa pizza dulce, es donde el almuerzo se vuelve postre.</p>
                        <button class="btn btn-red col-12 mt-3">Probar</button>
                    </div>
                </div>
                <div class="card p-0 my-5">
                    <img class="card-img-top" src='/img/pizza-3.jpg' alt="">
                    <div class="card-body">
                        <h4 class="h4 card-title">Mariscaza</h4>
                        <p class="card-text main-text medium text-dark">TuaPizza ha descubierto el secreto al unir los mariscos y la pizza. Es una exposión de sabor en tu boca.</p>
                        <button class="btn btn-red col-12 mt-3">Probar</button>
                    </div>
                </div>
                <div class="card p-0 my-5">
                    <img class="card-img-top" src='/img/pizza-2.jpg' alt="">
                    <div class="card-body">
                        <h4 class="h4 card-title">Hamburpizza</h4>
                        <p class="card-text main-text medium text-dark">¿Hamburguesas o pizzas? TuaPizza ha combinado las comidas rápidas favoritas de nuestros clientes para un sabor único.</p>
                        <button class="btn btn-red col-12 mt-3">Probar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container col-12 bg-light py-5">
            <div class="row py-5 mx-3">
                <div class="col-12 col-lg-6 text-right">
                    <img src="img/menu-girl.jpg" alt="" class="img-fluid w-100">
                </div>
                <div class="col-12 col-lg-6">
                <img src="img/" alt="">
                    <h4 class="h4">¿No te gustó ninguna?</h4>
                    <p class="main-text medium text-dark"> No hay problema en Tua Pizza te ofrecemos la posibilidad de crear tu propia pizza desde cero, con todos los toppings que mas te guste.</p>
                    <button class="btn btn-red col-12 col-lg-4 mt-3">Comenzar</button>
                </div>
            </div>
        </div>
        </div>
    </section>       
@endsection