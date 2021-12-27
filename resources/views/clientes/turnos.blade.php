@extends('layouts.with-navbar')

@section('title', 'Turnos')

@section('customCSS')
@parent
<link rel="stylesheet" href="{{asset('css/turnos.css')}}">
@endsection


@section('customJS')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{asset('js/turnos.js')}}"></script>
@endsection


@section('body')
@parent
<main class="bg-dark h-100">
    <!-- Header -->
    <section id="frontHeader" class="container-fluid front-header-section">
        <div class="row space-between align-items-center">
            <div class="col text-white py-4">
                <p class="display-1">Mis Turnos</p>
                <button class="btn btn-outline-success btn-floating flecha" data-mdb-ripple-color="success" id="izq"><i class="fas fa-arrow-up"></i></button>
                <p class="mt-1 mb-1">
                    Semana: <small>del</small> <strong id="dia1">26/12/2021</strong> <small>al</small> <strong id="dia2">1/1/2022</strong>
                </p>
                <button class="btn btn-outline-success btn-floating flecha" data-mdb-ripple-color="success" id="der"><i class="fas fa-arrow-down"></i></button>
            </div>
        </div>
    </section>
    <!-- Table -->
    <section class="bg-dark py-5">
        <div class="container-fluid table-responsive-md">
            <table class="table table-borderless bg-light">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">
                            <h5>Día</h5>
                        </th>
                        <th scope="col">
                            <h5>Horarios</h5>
                        </th>
                        <th scope="col">
                            <h5>Disponibles</h5>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><button class="btn btn-outline-secondary dia domingo" id="0" codigo="0">Domingo</button></th>
                        <td class="es">09:00</td>
                        <td>
                            <button class="btn btn-success btn-rounded hor" id="09:00:0">
                                <i class="far fa-check-circle"></i>
                                <span id="turnos 09:00:00" horario="09:00:00">20</span>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><button class="btn btn-outline-secondary dia lunes" id="1" codigo="1">Lunes</button></th>
                        <td class="es">10:00</td>
                        <td>
                            <button class="btn btn-success btn-rounded hor" id="10:00:0">
                                <i class="far fa-check-circle"></i>
                                <span id="10:00:00" class="turnos 10:00:00">20</span>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><button class="btn btn-outline-secondary dia martes" id="2" codigo="2">Martes</button></th>
                        <td class="es" class="turnos">11:00</td>
                        <td>
                            <button class="btn btn-success btn-rounded hor" id="11:00:0">
                                <i class="far fa-check-circle"></i>
                                <span id="11:00:00" class="turnos 11:00:00">20</span>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><button class="btn btn-outline-secondary dia miercoles" id="3" codigo="3">Miercoles</button></th>
                        <td class="es" class="turnos">15:00</td>
                        <td>
                            <button class="btn btn-primary btn-rounded hor" id="15:00:0">
                                <i class="far fa-check-circle"></i>
                                <span id="15:00:00" class="turnos 15:00:00">20</span>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><button class="btn btn-outline-secondary dia jueves" id="4" codigo="4">Jueves</button></th>
                        <td class="es">16:00</td>
                        <td>
                            <button class="btn btn-warning btn-rounded hor" id="16:00:0">
                                <i class="far fa-check-circle"></i>
                                <span class="turnos 16:00:00" id="16:00:00">20</span>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><button class="btn btn-outline-secondary dia viernes" id="5" codigo="5">Viernes</button></th>
                        <td class="es">17:00</td>
                        <td>
                            <button class="btn btn-danger btn-rounded hor" id="17:00:0">
                                <i class="far fa-check-circle"></i>
                                <span id="17:00:00" class="turnos 17:00:00">20</span>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><button class="btn btn-outline-secondary dia sabado" id="6" codigo="6">Sábado</button></th>
                        <td class="es">18:00</td>
                        <td>
                            <button class="btn btn-rounded disabled hor" id="18:00:0">
                                <i class="far fa-check-circle"></i>
                                <span id="18:00:00" class="turnos 18:00:00">20</span>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</main>
@endsection
