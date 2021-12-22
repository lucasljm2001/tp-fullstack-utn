@extends('layouts.bootstrap5')

@section('body')
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top user-select-none">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0" href="#">
                <img src="{{asset('assets/brand.png')}}" height="45" width="45" alt="App logo" loading="lazy" />
            </a>
            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-start">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ||  Request::is('home') ? 'active' : ''}}" href="#">Home</a>
                </li>
                <li class="nav-item {{ Request::is('team') ? 'active' : ''}}">
                    <a class="nav-link" href="#">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('projects') ? 'active' : ''}}" href="#">Projects</a>
                </li>
                @auth
                @else
                <li class="nav-item">
                    <a class="btn btn-outline-warning" href="{{ route('login') }}">Log In</a>
                </li>
                @endauth
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="d-flex align-items-center">
            <!-- Icon
            <a class="text-reset me-3" href="#">
                <i class="fas fa-shopping-cart"></i>
            </a> -->

            @auth
            <!-- Notifications -->
            <a class="text-reset me-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-calendar-week fs-lg"></i>
                <span class="badge rounded-pill badge-notification bg-danger">{{ Session::get('dias')?? '0'}}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                <li>
                    <a class="dropdown-item" href="{{ route('turnos.mostrar', ['id'=>Session::get('id')])}}">Mis turnos</a>
                </li>
            </ul>

            <!-- Avatar -->
            <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                <img src="{{Session::get('profile') ?? 'https://upload.wikimedia.org/wikipedia/commons/f/f4/User_Avatar_2.png'}}" width="45" height="45" class="rounded-circle" loading="lazy" alt="Black and White Portrait of a Man" />
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                <li>
                    <a class="dropdown-item disabled" href="#">Mi perfil</a>
                </li>
                <li>
                    <a class="dropdown-item disabled" href="#">Ajustes</a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('clientes.index') }}">Cerrar sesion</a>
                </li>
            </ul>
            @else
            @endauth
        </div>
        <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->
@endsection
