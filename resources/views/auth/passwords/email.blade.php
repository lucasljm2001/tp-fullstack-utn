@extends('layouts.bootstrap5')

@section('title', 'Resetear Contraseña')

@section('customCSS')
<link rel="stylesheet" href="{{asset('css/style.css')}}" />
@endsection

@section('body')
<div class="flex-container">
    <div class="table">
        <div class="container text-center border-2 mt-2">
            <img src="{{asset('assets/brand.png')}}" height="300" width="120" class="img-fluid mt-2" />
            <h2 class="text-light">Olvidé mi Contraseña</h2>
        </div>
        <div class="container">
            <!--div class="abs-center"-->
            <form action="{{ route('password.email') }}" method="post">
                @csrf
                <!--Email-->
                <div class="form-outline my-3 form-white">
                    <input id="email" type="email" class="form-control form-control-lg text-light" name="email" value="{{ $email ?? old('email') }}" placeholder="tu@mail.com" required autocomplete="email" autofocus />
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <label for="email" class="form-label text-light">Mail</label>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-secondary btn-rounded mb-2" id="updatePassword">
                        Reestablecer
                    </button>
                    @if (Route::has('login'))
                    <a class="mb-2 text-light" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                    @endif
                    @if (Route::has('register'))
                    <a class="mb-2 text-light" href="{{ route('register') }}">{{ __('No poseo cuenta, Registrarme') }}</a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
