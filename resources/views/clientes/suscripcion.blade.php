<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{asset('js/sus.js')}}"></script>
    <title>Document</title>
</head>
<body>
    <h1>{{$nombre}} {{$apellido}} tiene</h1> <h1 id="numer">{{$dias}}</h1> <h1>dias de suscripcion</h1>
    <input type="text" id="dias">
    <button class="conf" id="sum">Agregar dias</button>
    <button class="conf" id="res">Restar dias</button>
</body>
</html>