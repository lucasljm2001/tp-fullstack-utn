@extends('layouts.with-navbar')

@section('title', 'Inicio')

@section('customJS')
<script type="text/javascript" src="{{asset('js/landing.js')}}"></script>
@endsection

@section('customCSS')
@parent
<link rel="stylesheet" type="text/css" href="{{asset('css/landing.css')}}">
@endsection

@section('body')
<!-- Navbar -->
@parent
<!-- Content -->
<main class="bg-dark">

    <section id="section1" class="container-fluid">
        <div class="row space-between align-items-center">
            <div class="col-md-6 text-white">
                <h1 id="title">FitBox</h1>
                <h2> La suerte es proporcional al sudor </h2>
            </div>
            <div id="animacion" class="col-md-4">
                <iframe src='https://my.spline.design/cylindersanimationcopy-43c0e5e1ed68a1131b25d698596a2193/' class="embed-responsive-item" frameborder='0' width='100%' height='700px'></iframe>
            </div>
        </div>
    </section>

    <section id="section2">
        <div class="container-fluid pt-5 mx-auto align-items-center">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4 align-items-end ">
                    <h1 class=" display-1 mx-auto text-center mt-5">
                        Rafa Arretegui
                    </h1>
                    <h2>
                        Mi trabajo es hacerte mejorar
                        tanto en tu físico como en tu mente. <br> <br>
                        Empecé este proyecto gracias a mi pasión por el deporte
                        Hoy contamos con algunos de los mejores profesores
                        de Argentina para que te acompañen en tu camino.
                    </h2>
                </div>
                <div class="col-md-4 align-items-start text-center">
                    <img id="entrenador" src="{{asset('assets/entrenador.png')}}" class="img-fluid mx-auto" alt="entrenador">
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>

    <section id="subscriptions" class="container-fluid">
        <h1 class="text-center display-1 py-5 text-light">Suscripciones</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Rookie -->
            <div class="col mt-3">
                <div class="card">
                    <img src="{{asset('assets/susc-1.png')}}" class="card-img-top" alt="Sub 1">
                    <div class="card-body">
                        <h1 class="card-title display-2">Rookie</h1>
                        <h1 class="card-title pricing-card-title">$2200<small class="text-muted fw-light">/mes</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>2 veces por semana</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Standard -->
            <div class="col mt-3">
                <div class="card">
                    <img src="{{asset('assets/susc-2.png')}}" height="50px" width="auto" class="card-img-top" alt="Sub 2">
                    <div class="card-body">
                        <h1 class="card-title display-2">Estándar</h1>
                        <h1 class="card-title pricing-card-title">$2500<small class="text-muted fw-light">/mes</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>3 veces por semana</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Pro -->
            <div class="col mt-3">
                <div class="card">
                    <img src="{{asset('assets/susc-3.png')}}" height="50px" width="auto" class="card-img-top" alt="Sub 3">
                    <div class="card-body">
                        <h1 class="card-title display-2">Pro</h1>
                        <h1 class="card-title pricing-card-title">$3000<small class="text-muted fw-light">/mes</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Te venís cuando quieras</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr />
        <div class="container justify-content-center align-items-center my-3">
            <a type="button" class="btn btn-light btn-rounded btn-lg" href="{{ route('register') }}">
                <h3>Unite ahora!</h3>
            </a>
        </div>
        <div class="container align-items-center justify-content-center text-white">
            <h3 class="py-5">Antes de suscribirte podés venir a hacer una clase de prueba!</h2>
                <h2 class="m-0 pb-5">NO PAIN NO GAIN
            </h3>
        </div>

    </section>
</main>

<footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
        <!-- Section: Social media -->
        <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

            <!-- Google -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

            <!-- Linkedin -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

            <!-- Github -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
        </section>
        <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © Desarrollo Web Fullstack UTN - Neoris 2021  -  Lucas Martínez, Melanie Martínez, Franco Parente, Tomás Sánchez
    </div>
    <!-- Copyright -->
</footer>

<!-- <section id="section4">

</section> -->
<!-- <footer id="footer">
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, dolorem.
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, laborum?
    </p>
</footer> -->
@endsection
