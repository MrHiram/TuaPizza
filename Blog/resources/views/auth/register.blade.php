@extends('layout')
@section('title', 'Iniciar sesion')
<body class="bg--img__wall">
@section('activeInicio','active')
@section('content')
    <section>
        <h1 class="text-center h1 text-white" id="title">{{ __('Iniciar sesión') }}</h1>
        <div class="d-flex justify-content-center mt-5">
            <div class="card col-10 col-sm-7 col-lg-4 px-5 mt-4">
                <div class="rounded-circle user-icon text-center pt-3">
                    <i class="far fa-user"></i>
                </div>
                <form id="formLogin" method="post"action="{{ route('login') }}" class="form-group pt-5">
                    @csrf
        	        <label class="main-text pt-3" for="email">Correo electronico</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="correo@email.com"> 

        	        <label class="main-text pt-3" for="Password">Contraseña</label>
                    <input id="password" type="password" class="form-control @error('email') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <button class="btn btn-red bold col-12 mt-3">Ingresar</button>                 
                    
                    @if (Route::has('password.request'))
                        <p class="text-center main-text light mt-2">¿Olvidaste tu contraseña?
                                <a href="{{ route('password.request') }}">
                                    {{ __(' Recuperar') }}
                                </a>
                        </p>    
                    @endif
                    <p class="text-center main-text light mt-2">¿Aun no tienes cuenta? <a href="register" onClick="return false;" id="register">Registrate</a></p>                    
                </form>
                <form id="formRegister" method="post" action="{{ route('register') }}" class="form-group pt-5">
                    @csrf
        	        <label class="main-text pt-3"for="name">Nombre de usuario</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Nombre" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

        	        <label class="main-text pt-3" for="email">Correo electronico</label>
                    <input id="email" type="email" name="email" class="form-control  @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email"  placeholder="correo@email.com">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

        	        <label class="main-text pt-3" for="password">Contraseña</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror


        	        <label class="main-text pt-3" for="password-confirm">Confirmar contraseña</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="password">


                    <button class="btn btn-red bold col-12 mt-3">{{ __('Registrarse') }}</button>
                    <p class="text-center main-text light mt-2">¿Aun no tienes cuenta? <a href="login" onClick="return false;" id="login">Registrate</a></p>
                </form>
            </div>
        </div>
    </section>    
@endsection
@section('scripts')   
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
            $('#title').text('Crear Cuenta')
            $('#formLogin').css('display', 'none');
            $('#formRegister').css('display', 'block');
        }
        function loadLogin() {
            $('#title').text('Inicio de Sesión')
            $('#formLogin').css('display', 'block');
            $('#formRegister').css('display', 'none');            
        }
    </script>
@endsection
