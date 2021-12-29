@extends('layouts.with-navbar')

@section('title', 'Rutinas')

@section('customCSS')
@parent
<link rel="stylesheet" href="{{asset('css/rutina.css')}}"/>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"
/>
<link href="assets/img/favicon.png" rel="icon" />
<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

<link href="{{asset('css/aos.css')}}" rel="stylesheet" />
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"/>
@endsection


@section('customJS')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{asset('js/rutina.js')}}"></script>
<script src="{{asset('js/aos.js')}}"></script>
<script src="{{asset('js/glightbox.min.js')}}"></script>
<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('js/swiper-bundle.min.js')}}"></script>
@endsection


@section('body')

@parent
<main id="rutina">
      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container">
          <div class="row">
            <div class="col-lg-6" data-aos="zoom-in">
              <img src="assets\img\piernas.jpg" class="img-fluid" alt="" />
            </div>
            <div
              class="col-lg-6 d-flex flex-column justify-contents-center"
              data-aos="fade-left"
            >
              <div class="content pt-4 pt-lg-0">
                <h3>Rutina para Piernas</h3>
                <p class="fst-italic">
                  Frase motivacional
                </p>
                <ul>
                  <li>
                    <!--i class="bi bi-check-circle"></i> Ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.
                    div class="content"-->
                    <input type="checkbox" id="checkbox1" name="checkbox01">
                    <label for="checkbox1">Peso Muerto</label>

                  </li>
                  <li>

                    <input type="checkbox" id="checkbox1" name="checkbox01">
                    <label for="checkbox1">ejercicio 2</label>

                  </li>
                  <li>
                    <!--i class="bi bi-check-circle"></i> Ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.
                    div class="content"-->
                    <input type="checkbox" id="checkbox1" name="checkbox01">
                    <label for="checkbox1">Ejercicio 3</label>

                  </li>
                <!--p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                  aute irure dolor in reprehenderit in voluptate tera noden
                  carma palorp mades tera.
                </p-->
                <button type="button" class="btn btn-secondary">Agregar Rutina</button>
                <button type="button" class="btn btn-danger">Eliminar Rutina</button>

              </div>
            </div>
          </div>
        </div>
      </section>

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
          <div class="container">
            <div class="row">
              <div class="col-lg-6" data-aos="zoom-in">
                <img src="assets\img\brazo.jpg" class="img-fluid" alt="" />
              </div>
              <div
                class="col-lg-6 d-flex flex-column justify-contents-center"
                data-aos="fade-left"
              >
                <div class="content pt-4 pt-lg-0">
                  <h3>Rutina para Piernas</h3>
                  <p class="fst-italic">
                    Frase motivacional
                  </p>
                  <ul>
                    <li>
                      <!--i class="bi bi-check-circle"></i> Ullamco laboris nisi ut
                      aliquip ex ea commodo consequat.
                      div class="content"-->
                      <input type="checkbox" id="checkbox1" name="checkbox01">
                      <label for="checkbox1">Peso Muerto</label>

                    </li>
                    <li>

                      <input type="checkbox" id="checkbox1" name="checkbox01">
                      <label for="checkbox1">ejercicio 2</label>

                    </li>
                    <li>
                      <!--i class="bi bi-check-circle"></i> Ullamco laboris nisi ut
                      aliquip ex ea commodo consequat.
                      div class="content"-->
                      <input type="checkbox" id="checkbox1" name="checkbox01">
                      <label for="checkbox1">Ejercicio 3</label>

                    </li>
                  <!--p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                    aute irure dolor in reprehenderit in voluptate tera noden
                    carma palorp mades tera.
                  </p-->
                  <button type="button" class="btn btn-secondary">Agregar Rutina</button>
                  <button type="button" class="btn btn-danger">Eliminar Rutina</button>

                </div>
              </div>
            </div>
          </div>
        </section>
</main>
@endsection
