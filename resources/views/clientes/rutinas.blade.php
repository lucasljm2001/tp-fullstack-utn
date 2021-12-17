<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/turnos.css')}}">
    <script src="{{asset('js/rutinas.js')}}"></script>
    <title>Document</title>
</head>
<body>
<table>
            <thead>
                <tr>
                    <th>Rutina</th>
                    <th>Dia</th>
                </tr>
            </thead>           
            <tbody>
                @foreach ($rutinas as $rutina)
                    <tr>
                        <td>{{$rutina}}
                            @foreach ($ejercicios as $ejercicio)
                                @if($rutina == $ejercicio->nombre_rutina)
                                    {{$ejercicio->nombre_ejercicio}}/{{$ejercicio->dia}}
                                @endif
                            @endforeach
                            <button class="eliminar" id="{{$rutina}}">Eliminar rutina</button>
                            <button>Editar rutina</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            <input type="text" id="nombre">nombre de rutina
            <input type="text" id="ej1">ejercicio
            <input type="text" id="ej2">ejercicio
            <input type="text" id="dia">dia
        </div>
        
        <button class="agregar">Agregar rutina</button>
</body>
</html>