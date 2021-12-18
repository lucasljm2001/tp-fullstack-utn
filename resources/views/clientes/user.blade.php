
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Bienvenido {{$nombre}} {{$apellido}}</h1>
    </div>
    <div>
        <h2>Tiene {{$dias}} dias de suscripcion y es {{$tipo}}</h2>
    </div>
    <a href="{{ route('turnos.mostrar', ['id'=>$id]) }}">Mis turnos</a>
    <h1>Mis rutinas</h1>
    
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
                                    {{$ejercicio->nombre_ejercicio}}/{{$ejercicio->dsem}}
                                @endif
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h1>Mis marcas</h1>

            <table>
                <thead>
                    <tr>
                        <th>Desafio</th>
                        <th>Marca</th>
                    </tr>
                </thead>           
                <tbody>
                    @foreach ($marcas as $marca)
                        <tr>
                            <td>{{$marca->desafio}}</td>
                            <td>{{$marca->marca}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    
    <button><a href="{{ route('clientes.index') }}">Cerrar sesion</a></button>
    @if ($tipo=='admin')
        <a href="{{ route('clientes.administrar') }}">Modificar clientes</a>
        <a href="{{ route('rutinas.mostrar') }}">Modificar rutinas</a>
        <a href="{{ route('rutinas.marcas') }}">Modificar marcas</a>
    @endif
</body>
</html>