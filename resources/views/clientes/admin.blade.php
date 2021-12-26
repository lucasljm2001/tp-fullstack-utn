@extends('layouts.with-navbar')

@section('title', 'Panel Admin')

@section('customCSS')
@parent
<!-- Data Tables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" crossorigin="anonymous" />
@endsection


@section('body')
@parent
<main class="container-fluid">
    <div class="container pb-5">
        <h1 class="h1 mt-5">Administrar Clientes</h1>
        <div class="table-responsive">
            <table id="dataTable" class="table">
                <thead>
                    <tr>
                        <th>
                            <h5>Clientes</h5>
                        </th>
                        <th>
                            <h5>Días restantes</h5>
                        </th>
                        <th>
                            <h5>Modificar</h5>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sus as $su)
                    <tr>
                        @isset($su->dias)
                        <form method="POST" action="{{route('suscripcion.modificarSuscripcion', ['id'=>$su->id])}}">
                            @csrf
                            <th>{{$su->name}}, {{$su->apellido}}</th>
                            <td>
                                <!-- Order Value -->
                                <span style="display: none">
                                    {{$su->dias}}
                                </span>
                                <div class="form-outline text-center">
                                    <i class="fas fa-calendar-plus trailing"></i>
                                    <input class="form-control form-icon-trailing" type="number" value="{{$su->dias}}" name="dias" min="0" max="20" />
                                </div>
                            </td>
                            <td>
                                <span style="display: none">1</span>
                                <button class="btn btn-info btn-lg btn-floating" type="submit">
                                    <i class="fas fa-user-edit"></i>
                                </button>
                            </td>
                        </form>
                        @else
                        <form method="POST" action="{{route('suscripcion.agregarSuscripcion')}}">
                            @csrf
                            <th>{{$su->name}}, {{$su->apellido}}</th>
                            <td>
                                <!-- Order Value -->
                                <span style="display: none">
                                    -1
                                </span>
                                <input type="hidden" name="id" value="{{$su->id}}" />
                                <div class="form-outline">
                                    <p>No posee subscripción</p>
                                </div>
                            </td>
                            <td>
                                <span style="display: none">2</span>
                                <button class="btn btn-success btn-lg btn-floating" type="submit">
                                    <i class="fas fa-user-plus"></i>
                                </button>
                            </td>
                        </form>
                        @endisset
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</main>
@endsection

@section('customJS')
@parent
<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- JQuery Datatables-->
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<!-- Boostrap DataTables -->
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<!--Datatables-->
<script src="{{asset('js/datatables.js')}}"> </script>
@endsection
