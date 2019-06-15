@extends('/../layout')
@section('title', 'Iniciar sesion')
@section('recoverlogo', '/')
<body class="bg--img__wall">
@section('activeInicio','active')
@section('content')
    <section>
        <h1 class="text-center h1 text-white" id="title">{{ __('Restablece tu contraseña') }}</h1>
        <div class="d-flex justify-content-center mt-5">
            <div class="card col-10 col-sm-7 col-lg-4 px-5 mt-4">
                <div class="rounded-circle user-icon text-center pt-3">
                    <i class="far fa-user"></i>
                </div>
                <form method="POST" action="{{ route('password.update') }}" class="form-group pt-5">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <label class="main-text" for="email">Correo electronico</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus >                    
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror


                    <label for="password" class="main-text pt-3">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    
                    <label for="password-confirm" class="main-text pt-3">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                    
                    <button type="submit" class="btn btn-red bold col-12 mt-3">
                        {{ __('Recuperar contraseña') }}
                    </button>   
                              
                </form>
            </div>
        </div>
    </section>    
@endsection