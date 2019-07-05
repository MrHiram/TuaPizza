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
                    <img src='/img/casa.jpeg' alt="" class="card-img-top">
                    <div class="card-body">
                        <h4 class="h4 card-title">Especial de la casa</h4>
                        <p class="card-text main-text medium text-dark">Nuestra pizza especial de la casa es la mejor combinación para todos los gustos.</p>
                        <form class='mt-3'action='/create' method='post'>
                            <input type='hidden' name='ingredients0' value='5'>
                            <input type='hidden' name='ingredients1' value='13'>
                            <input type='hidden' name='ingredients2' value='11'>
                            <input type='hidden' name='price' value='$ 11'>
                            @csrf
                            <button class='btn btn-red col-12 mt-3' type='submit'>Probar</button>
                        </form>
                    </div>
                </div>
                <div class="card p-0 my-5">
                    <img class="card-img-top" src='/img/peperroni.jpeg' alt="">
                    <div class="card-body">
                        <h4 class="h4 card-title">Pepperoni</h4>
                        <p class="card-text main-text medium text-dark">Nuestra pizza de pepperoni, un clasico y Tua Pizza ofrece la de mejor calidad.</p>
                        <form class='mt-3'action='/create' method='post'>
                            <input type='hidden' name='ingredients0' value='16'>
                            <input type='hidden' name='ingredients1' value='18'>
                            <input type='hidden' name='price' value='$ 11'>
                            @csrf
                            <button class='btn btn-red col-12 mt-3' type='submit'>Probar</button>
                        </form>
                    </div>
                </div>
                <div class="card p-0 my-5">
                    <img class="card-img-top" src='/img/simple.jpeg' alt="">
                    <div class="card-body">
                        <h4 class="h4 card-title">Simple</h4>
                        <p class="card-text main-text medium text-dark">Nuestra pizza simple es especial para aquellos que prefieren una pizza sencilla.</p>
                        <form class='mt-3'action='/create' method='post'>
                            <input type='hidden' name='ingredients0' value='10'>
                            <input type='hidden' name='price' value='$ 6'>
                            @csrf
                            <button class='btn btn-red col-12 mt-3' type='submit'>Probar</button>
                        </form>
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