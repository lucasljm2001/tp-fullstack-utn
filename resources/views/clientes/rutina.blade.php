@extends('layouts.with-navbar')

@section('title', 'Rutinas')

@section('customCSS')
@parent
<link rel="stylesheet" href="{{asset('css/rutina.css')}}">
<!-- Favicons -->
<link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

@endsection


@section('customJS')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{asset('js/rutina.js')}}"></script>
    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/rutina.js"></script>
  </body>
@endsection


@section('body')

@parent
<main class="bg-dark h-100">
    <!-- Header -->
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
      <!-- End About Section -->


      </div>
    </footer>
    <!-- End Footer -->

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>


@endsection
