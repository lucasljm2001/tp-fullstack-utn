@extends('layouts.bootstrap5')


@section('title', 'Registrarse')

@section('customCSS')
<link rel="stylesheet" href="{{asset('css/register.css')}}" />
@endsection

@section('customJS')
<script type="text/javascript" src="{{asset('js/register.js')}}"></script>
@endsection

@section('body')
<section class="vh-100 register-form">
    <div class="container h-100 text-light">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-8 register-container">
                <!-- Logo Image -->
                <div class="container text-center border-2 mt-2 mb-2">
                    <img src="{{asset('assets/brand.png')}}" height="300" width="120" class="img-fluid mt-2" />
                    <h3>Registrate</h3>
                </div>
                <!-- Register Form -->
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Personal Data -->
                    <div class="row mb-4">
                        <div class="form-outline form-white col me-1">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Lucas" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="name" class="form-label text-md-right">{{ __('Nombre') }}</label>
                        </div>

                        <div class="form-outline form-white col ms-1">
                            <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="{{ old('apellido') }}" required autocomplete="surname" placeholder="Esperanza" autofocus>
                            @error('apellido')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="apellido" class="form-label text-md-right">{{ __('Apellido') }}</label>
                        </div>
                    </div>
                    <hr />
                    <!-- Contact Data -->
                    <div class="row mb-3">
                        <div class="form-outline form-white col">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="tu@mail.com" required autocomplete="email">
                            <label for="email" class="form-label">{{ __('E-Mail') }}</label>
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <hr />
                    <!-- Passwords -->
                    <div class="row mb-3">
                        <div class="form-outline form-white col">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" onblur="checkPassword();">
                            <span id="messagePassword" class="text-danger" role="alert"></span>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for="password" class="form-label">{{ __('Contraseña') }}</label>
                        </div>
                        <div class="small text-muted mt-2">La contraseña debe contener al menos 8 caracteres, incluyendo un número, una mayúscula y una mínuscula</div>
                    </div>

                    <div class=" row mb-3">
                        <div class="form-outline form-white col">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            <label for="password-confirm" class="form-label">{{ __('Confirmar Contraseña') }}</label>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col">
                            <button type="submit" class="btn btn-secondary btn-rounded">
                                {{ __('Registrarme') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
