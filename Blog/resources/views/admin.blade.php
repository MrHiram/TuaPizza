@extends('layout')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
@section('title','Perfil')
@section('navPerfil')
    <li class="nav-item active"><a href="#" onClick="receipt()" class="nav-link mx-3 d-block d-lg-none"><i class="fas fa-file-invoice-dollar"></i>&#160; &#160; Facturas</a></li>
    <li class="nav-item active"><a href="#" onClick="history()" class="nav-link mx-3 d-block d-lg-none"><i class="fas fa-history"></i>&#160; &#160; Historial</a></li>
    <li class="nav-item active"><a href="#" onClick="favorites()" class="nav-link mx-3 d-block d-lg-none"><i class="fas fa-star"></i>&#160; &#160; Favoritas</a></li>
    <li class="d-block d-lg-none"><hr class="col-10"></li> 
@endsection
@section('header')
</header> 
@endsection  
@section('content')
    <section>
    <div class="container-fluid row pr-0">
        <div class="col-2 bg-dark text-white d-none d-lg-block py-5">
            <div class="row mb-3 justify-content-center">
                <div class="h4 text-white bg-danger rounded-circle text-center btn width"><i class="far fa-user pt-2"></i></div>
                <p class="m-3">Administrador</p>
            </div>
            <div class="row ">
            </div>
        </div>
        <div class="col-12 col-lg-10">
            <div class="row bg-white shadow-sm margin-right">
                <h2 id="indicator" class="h3 pl-5 pt-2">Ingredientes</h2>
            </div>
            <div id="receipt" class="card-columns">

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
