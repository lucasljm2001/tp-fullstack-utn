<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{asset('js/marcas.js')}}"></script>
    <title>Document</title>
</head>
<body>


    <table>
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Desafio</th>
                    <th>Marca</th>
                </tr>
            </thead>           
            <tbody>
                @foreach ($marcas as $marca)
                    <tr>
                        <td>
                            <span 
                        class="{{$marca->name}}{{$marca->apellido}}{{$marca->desafio}}"
                        id="nombre">{{$marca->name}}</span></td>
                        
                        <td>
                            <span class="{{$marca->name}}{{$marca->apellido}}{{$marca->desafio}}"
                                id="apellido">{{$marca->apellido}}</span>
                        </td>

                        <td><span
                        class="{{$marca->name}}{{$marca->apellido}}{{$marca->desafio}}"
                        id="desafio">{{$marca->nombre_desafio}}</span></td>

                        <td><span 
                        class="{{$marca->name}}{{$marca->apellido}}{{$marca->desafio}}"
                        id="marca">{{$marca->marca}}</span></td>
                        <td><button class="editar"
                        id="{{$marca->name}}{{$marca->apellido}}{{$marca->desafio}}"
                        >Editar marca</button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            <input type="text" id="nombrein">nombre del usuario
            <input type="text" id="apellidoin">apellido del usuario
            <select name="select" id="eleccion">
                @foreach ($desafios as $desafio)
                    <option value="{{$desafio->nombre_desafio}}">{{$desafio->nombre_desafio}}</option>
                @endforeach
            </select>desafio
            <input type="text" id="marcain">marca
        </div>
        
        <button class="agregar">Agregar marca</button>
        <button class="modificar">Modificar marca</button>
</body>
</html>