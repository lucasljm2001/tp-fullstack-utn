@extends('layouts.bootstrap5')

@section('customJS')
<script type="text/javascript" src="{{asset('js/desafios.js')}}"></script>
@endsection

@section('body')
<body>
    <div class="container">
        <div class="row">
            Desafíos
        </div>
        @foreach ($desafios as $desafio)
        <div class="row">
            <div class="col">
                {{ $desafio->nombre_desafio }}
            </div>
            <div class="col">
                <button class="eliminar" desafio="{{ $desafio->nombre_desafio }}">Eliminar desafio</button>
                <!--<button class="editar" desafio="{{ $desafio->nombre_desafio }}">Editar desafio</button>-->
            </div>
        </div>
        
        @endforeach
    </div>
    <input type="text" id="input">
    <button class="insertar">Insertar desafio</button>
</body>
@endsection
