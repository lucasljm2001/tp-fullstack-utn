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
            {{ $desafio }}
        </div>
        @endforeach
    </div>
</body>
@endsection
