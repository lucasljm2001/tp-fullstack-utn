@extends('layouts.with-navbar')

@section('title', 'Administrar Rutinas')


@section('customCSS')
@parent
<link rel="stylesheet" href="{{asset('css/turnos.css')}}">
<link rel="stylesheet" href="{{asset('css/rutinas.css')}}">
@endsection

@section('customJS')
@parent
<script src="{{asset('js/rutinas.js')}}"></script>
@endsection


@section('body')
@parent
<main class="container-fluid pb-3">
    <!-- Header -->
    <section id="frontHeader" class="container-fluid front-header-section">
        <div class="row space-between align-items-center">
            <div class="col text-light py-4" style='font-family: "Bebas Neue", cursive;'>
                <h1 class="display-1">Gestionar Rutinas</h1>
            </div>
        </div>
    </section>
    <!-- Table-->
    <section id="table-section">
        <div class="container mt-3 rounded">
            <div class="row">
                <div class="user-dashboard-info-box table-responsive mb-0 bg-white p-4 shadow-sm rounded">
                    <table class="table manage-candidates-top mb-0">
                        <thead>
                            <tr>
                                <th>Rutina</th>
                                <th class="text-center">Dia</th>
                                <th class="action text-right">Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rutinas as $rutina)
                            <tr class="candidates-list">
                                <td class="title">
                                    <div class="candidate-list-details">
                                        <div class="candidate-list-info">
                                            <div class="candidate-list-title">
                                                <h5 class="mb-0 rutina-{{$rutina->id}}-value">{{$rutina->nombre_rutina}}</h5>
                                            </div>
                                            <div class="candidate-list-option">
                                                <ul class="list-unstyled">
                                                    @foreach ($ejercicios as $ejercicio)
                                                    @if($rutina->id == $ejercicio->id_rutina)
                                                    <li class="rutina-{{$rutina->id}}-value">{{$ejercicio->nombre_ejercicio}}</li>
                                                    @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="candidate-list-favourite-time text-center">
                                    <a class="candidate-list-favourite order-2 text-danger" href="#"><i class="far fa-calendar"></i></a>
                                    <span class="candidate-list-time order-1 rutina-{{$rutina->id}}-value">{{$rutina->dia}}</span>
                                </td>
                                <td>
                                    <form action=" {{route('rutinas.delete', ['id' => $rutina->id])}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="#" class="btn btn-outline-info btn btn-floating" data-toggle="tooltip"><i class="fas fa-pencil-alt editar" id="{{$rutina->id}}"></i></a>
                                        <button class="btn btn-danger btn btn-floating" type="submit"><i class="far fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <section id="form-routine">
        <div class="container bg-light my-4 py-3 rounded">
            <!-- Form -->
            <form method="post" action="{{ route('rutinas.post') }}">
                @csrf
                <h1>Rutina</h1>
                <!-- Id Modifier -->
                <input type="hidden" class="form-control" id="rutina-id" name="rutina" value="-1" />
                <!-- Routine Name -->
                <div class="form-outline">
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de la Rutina" required />
                    <label class="form-label" for="nombre">Rutina</label>
                </div>
                <!-- Ejercicios -->
                <div class="row my-4">
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" class="form-control" id="ej1" name="ej1" placeholder="Clean & Jerk" required />
                            <label class="form-label" for="ej1">Ejercicio 1</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <input type="text" class="form-control" id="ej2" name="ej2" placeholder="Hand-Realease Push Up" required />
                            <label class=" form-label" for="ej2">Ejercicio 2</label>
                        </div>
                    </div>
                </div>
                <!-- Día -->
                <div class="form-group">
                    <label for="formGroupExampleInput2">Dia</label>
                    <input type="text" class="form-control inp" id="dia" name="dia" placeholder="Dia">
                </div>
                <button type="submit" class="btn btn-success btn-lg btn-floating">
                    <i class="fas fa-plus"></i>
                </button>
                <button type="reset" class="btn btn-primary btn-lg btn-floating">
                    <i class="fas fa-undo"></i>
                </button>
            </form>
        </div>
    </section>
</main>
@endsection
