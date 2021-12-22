@extends('layouts.bootstrap5')

@section('title', 'Log In')

@section('customCSS')
<link rel="stylesheet" href="{{asset('css/style.css')}}" />
@endsection


@section('body')
<div class="flex-container">
    <div class="table">
        <div class="container text-center border-2 mt-2">
            <img src="{{asset('images/mus.png')}}" height="300" width="120" class="img-fluid" />
        </div>
        <div class="container">
            <!--div class="abs-center"-->
            <form action="{{ route('clientes.inicio') }}" method="post">
                @csrf
                <div class="form-outline my-3">
                    <input type="email" class="form-control form-control-lg" id="floatingInput" placeholder="tu@mail.com" name="usuario" />
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <label for="floatingInput" class="form-label">Mail</label>
                </div>
                <div class="form-outline my-1">
                    <input type="password" class="form-control form-control-lg {{ Session::get('invalidPw') ?? '' }}" id="floatingPassword" placeholder="Contraseña" name="contraseña" />
                    <span class="invalid-feedback" role="alert">
                        <strong>Contraseña incorrecta</strong>
                    </span>
                    <label for="floatingPassword" class="form-label">Contraseña</label>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-secondary mb-2" id="iniciar">
                        Iniciar Sesión
                    </button>
                    @if (Route::has('password.request'))
                    <a class="btn btn-link mb-2" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                    @if (Route::has('register'))
                    <a class="btn btn-link mb-2" href="{{ route('register') }}">{{ __('Registrarme') }}</a>
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
