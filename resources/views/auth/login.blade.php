@extends('layouts.bootstrap5')

@section('title', 'Log In')

@section('customCSS')
<link rel="stylesheet" href="{{asset('css/style.css')}}" />
@endsection


@section('body')
<div class="flex-container">
    <div class="table">
        <div class="container text-center border-2 mt-2">
            <a href="/">
                <img src="{{asset('assets/brand.png')}}" height="300" width="120" class="img-fluid mt-2" />
            </a>
        </div>
        <div class="container">
            <!--div class="abs-center"-->
            <form action="{{ route('clientes.inicio') }}" method="post">
                @csrf
                <div class="form-outline my-3 form-white">
                    <input type="email" class="form-control form-control-lg text-light" id="floatingInput" placeholder="tu@mail.com" name="usuario" required autocomplete="email" autofocus />
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <label for="floatingInput" class="form-label text-light">Mail</label>
                </div>
                <div class="form-outline my-1 form-white">
                    <input type="password" class="form-control form-control-lg {{ Session::get('invalidPw') ?? '' }} text-light" id="floatingPassword" placeholder="Contraseña" name="contraseña" required autocomplete="password" />
                    <span class="invalid-feedback" role="alert">
                        <strong>Contraseña incorrecta</strong>
                    </span>
                    <label for="floatingPassword" class="form-label text-light">Contraseña</label>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-secondary btn-rounded mb-2" id="iniciar">
                        Iniciar Sesión
                    </button>
                    @if (Route::has('password.request'))
                    <a class="mt-2 mb-2 text-light" href="{{ route('password.request') }}">
                        {{ __('Olvidó Contraseña?') }}
                    </a>
                    @endif
                    @if (Route::has('register'))
                    <a class="mb-2 text-light" href="{{ route('register') }}">{{ __('Registrarme') }}</a>
                    @endif
                </div>
            </form>
            <!--/div-->
        </div>
    </div>
</div>
@endsection

@section('customJS')
<script src="{{asset('js/login.js')}}"></script>
@endsection
