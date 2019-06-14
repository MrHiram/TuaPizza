@extends('layout')
@section('title', 'Tua Pizza') 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
@section('activeIndex','active')
@section('content')
        <div class="container-fluid">
            <div class="row main-padding text-center text-lg-left">
                <div class="col-lg-5 offset-lg-1 col-sm-12 py-5">
                    <p class="p--spacing pt-5">Dele viaje y empezá a</p>
                    <h1 class="h1 large">Crear tu Pizza</h1>
                    <a href="/create" class="btn btn-danger btn-rounded mt-3 px-5 mb-5">Comenzar</a>
                    <a href="/signin" class="btn btn-outline-light btn-rounded mt-3 px-5 mb-5">Iniciar Sesion</a>
                </div>
                <div class="col-lg-6 col-12 d-flex justify-content-start justify-content-md-center justify-content-lg-around p-0">
                    <div class="container-pizza">
                        <picture>
                            <source srcset="img/plato_pizza.webp" type="image/webp">
                            <img src="img/plato_pizza.png" class="img-fluid wow fadeInUp pizza_plate" alt="">
                        </picture>
                        <picture>
                            <source srcset="img/pizza_index.webp" type="image/webp">
                            <img src="img/pizza_index.png" class="img-fluid wow fadeInUp delay-1s pizza_home" alt="">
                        </picture>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-4 col-sd-4 my-5">
                <h2 class="text-center h3">Descubre más</h2>
                <p class="text-center">Fácil, comodo, y sencillo todo en línea</p>
            </div>
        </div>
        <div class="row main_images">
            <div class="col-lg-6 col-md-6 col-sd-12 text-right p-0 pr-3">
                <a href=""><img src="img/menu2.jpg" class="wow fadeIn image-fluid gallery main_image w-100" alt=""></a>
            </div>
            <div class="col-lg-6 col-md-6 col-sd-12">
                <img src="img/masa.jpg" class="wow delay fadeIn delay-1s image-fluid gallery secondary_image w-75" alt="">
                <img src="img/personas.jpg" class="wow fadeIn delay-2s image-fluid gallery third_image w-50" alt="">
            </div>
        </div>
    </div>       
@endsection
@section('scripts')
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
@endsection
    