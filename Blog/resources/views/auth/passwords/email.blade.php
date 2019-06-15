@extends('/../layout')
@section('title', 'Iniciar sesion')
@section('recoverlogo', '/')
<body class="bg--img__wall">
@section('activeInicio','active')
@section('content')
    <section>
        <h1 class="text-center h1 text-white mt-5" id="title">{{ __('Recuperar tu contraseña') }}</h1>
        <div class="d-flex justify-content-center mt-5 pb-5">
            <div class="card col-10 col-sm-7 col-lg-4 px-5 mt-4">
                @if (session('status'))
                    <div class="alert alert-success mt-4" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form class="pb-5" method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <label for="email" class="main-text pt-3">{{ __('Correo electronico') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    <button type="submit" class="btn btn-red bold col-12 mt-3">
                        {{ __('Enviar cambio de contraseña') }}
                    </button>   
                              
                </form>
            </div>
        </div>
    </section>    
@endsection