@extends('layouts.with-navbar')

@section('title', 'Inicio')

@section('customJS')
<script type="text/javascript" src="{{asset('js/landing.js')}}"></script>
@endsection

@section('customCSS')
<link rel="stylesheet" href="{{asset('css/landing.css')}}">
@endsection

@section('body')
<!-- Navbar -->
@parent
<!-- Content -->

<section id="section1">
    <div class="container">
        <div class="row space-between align-items-center">
            <div class="col-8 text-white">
                <h1>My Gym</h1>
                <h2>Queremos hacerte lindo y fuerte papito</h2>
            </div>
            <div id="animacion" class="col-4">
                <iframe src='https://my.spline.design/cylindersanimationcopy-43c0e5e1ed68a1131b25d698596a2193/' frameborder='0' width='100%' height='700px'></iframe>
            </div>
        </div>
    </div>
</section>

<section id="section2">
    <div class="container align-items-center">
        <div class="row align-items-center">
            <div class="col">
                <h1 style="font-size:50px">
                    Voy a ser tu entrenador personal. Quedate tranquilo que conmigo te vas para arriba rey. Vas a ser una locura de músculos.
                </h1>
            </div>
            <div class="col">
                <img src="../../public/assets/entrenador.png" alt="entrenador">
            </div>
        </div>
    </div>
</section>

<section id="section3">

<div class="row row-cols-1 row-cols-md-3 mb-3 p-5 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Rookie</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$2200<small class="text-muted fw-light">/mes</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>2 veces por semana</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Pro</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$2500<small class="text-muted fw-light">/mes</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>3 veces por semana</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">Yeah Buddeeee</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$3000<small class="text-muted fw-light">/mes</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Te venís cuando quieras padre</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
          </div>
        </div>
      </div>
</div>

<div class="container align-items-center justify-content-center text-white">
    <h2>Antes de suscribirte podés venir a hacer una clase de prueba! Sin compromiso BRO</h2>
    <h3>Pero, acordate... NO PAIN NO GAIN BUDDEEEEEEEEEE</h3>
</div>
    
</section>


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