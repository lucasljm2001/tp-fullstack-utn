@extends('layouts.with-navbar')

@section('title', 'Turnos')

@section('customCSS')
<link rel="stylesheet" href="{{asset('css/turnos.css')}}">
@endsection


@section('customJS')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{asset('js/turnos.js')}}"></script>
@endsection


@section('body')

@parent

<body>
    <!-- Header -->
    <section>
        <div class="container-fluid  bg-light mt-2 mb-1 rounded">
            <button class="btn btn-outline-success btn-floating flecha" data-mdb-ripple-color="success" id="izq"><i class="fas fa-arrow-up"></i></button>
            <p class="mt-1 mb-1">
                Semana: <small>del</small> <strong id="dia1">26/12/2021</strong> <small>al</small> <strong id="dia2">1/1/2022</strong>
            </p>
            <button class="btn btn-outline-success btn-floating flecha" data-mdb-ripple-color="success" id="der"><i class="fas fa-arrow-down"></i></button>
        </div>
    </section>

    <section>
        <div class="container">
            <table class="table table-borderless">
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
                        <th scope="row">Lunes</th>
                        <td>09:00</td>
                        <td>
                            <button class="btn btn-success btn-rounded">
                                <i class="far fa-check-circle"></i>
                                20
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Martes</th>
                        <td>11:00</td>
                        <td>
                            <button class="btn btn-success btn-rounded">
                                <i class="far fa-check-circle"></i>
                                17
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Miercoles</th>
                        <td>14:00</td>
                        <td>
                            <button class="btn btn-primary btn-rounded">
                                <i class="far fa-check-circle"></i>
                                14
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Jueves</th>
                        <td>16:00</td>
                        <td>
                            <button class="btn btn-warning btn-rounded">
                                <i class="far fa-check-circle"></i>
                                10
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Viernes</th>
                        <td>18:00</td>
                        <td>
                            <button class="btn btn-danger btn-rounded">
                                <i class="far fa-check-circle"></i>
                                5
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Sábado</th>
                        <td>20:00</td>
                        <td>
                            <button class="btn btn-rounded disabled">
                                <i class="far fa-check-circle"></i>
                                0
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>


    <div class="row">
        <div class="col-md-3 lista">
            <div class="row">
                <button class="btn btn-primary" id="turnos">Mis turnos</button>
            </div>
            <div class="row">
                elija su turno
            </div>
            <div class="row">
                <div class="row">
                    <button class="btn btn-primary dia domingo" id="0">domingo</button>
                </div>
                <button class="btn btn-primary dia lunes" id="1">lunes</button>
            </div>
            <div class="row">
                <button class="btn btn-primary dia martes" id="2">martes</button>
            </div>
            <div class="row">
                <button class="btn btn-primary dia miercoles" id="3">miercoles</button>
            </div>
            <div class="row">
                <button class="btn btn-primary dia jueves" id="4">jueves</button>
            </div>
            <div class="row">
                <button class="btn btn-primary dia viernes" id="5">viernes</button>
            </div>
            <div class="row">
                <button class="btn btn-primary dia sabado" id="6">sabado</button>
            </div>
        </div>
        <div class="col-md-9 lista" id="modificar">
            <div class="col es">
                <span>Horarios disponibles el </span><span id="diapantalla"></span>
            </div>
            <div class="col es">
                Elija su horario
            </div>
            <div class="col es">
                <button class="btn btn-primary hor" id="09:00:0">9:00
                    <span class="turnos" id="09:00:00">20</span>
                    <span>turnos disponibles</span>
                </button>
            </div>
            <div class="es">
                <div class="col">
                    <button class="btn btn-primary hor" id="10:00:0">10:00
                        <span class="turnos" id="10:00:00">20</span>
                        <span>turnos disponibles</span>
                    </button>

                </div>
            </div>
            <div class="es">
                <div class="col">
                    <button class="btn btn-primary hor" id="11:00:0">11:00
                        <span class="turnos" id="11:00:00">20</span>
                        <span>turnos disponibles</span>
                    </button>

                </div>
            </div>
            <div class="es">
                <div class="col">
                    <button class="btn btn-primary hor" id="15:00:0">15:00
                        <span class="turnos" id="15:00:00">20</span>
                        <span>turnos disponibles</span>
                    </button>

                </div>
            </div>
            <div class="es">
                <div class="col">
                    <button class="btn btn-primary hor" id="16:00:0">16:00
                        <span class="turnos" id="16:00:00">20</span>
                        <span>turnos disponibles</span>
                    </button>

                </div>
            </div>
            <div class="es">
                <div class="col">
                    <button class="btn btn-primary hor" id="17:00:0">17:00
                        <span class="turnos" id="17:00:00">20</span>
                        <span>turnos disponibles</span>
                    </button>

                </div>
            </div>
            <div class="es">
                <div class="col">
                    <button class="btn btn-primary hor" id="18:00:0">18:00
                        <span class="turnos" id="18:00:00">20</span>
                        <span>turnos disponibles</span>
                    </button>

                </div>
            </div>
        </div>

    </div>
</body>
@endsection
