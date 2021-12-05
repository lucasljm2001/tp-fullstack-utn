<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login de usuarios</title>
    <style>
        a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
    <form method="post" action="{{ route('clientes.inicio') }}">
        @csrf
        <label for="usuario">Ingrese su usuario</label><br>
        <input type="text" id="usuario" name="usuario"><br>
        <label for="contraseña">Ingrese su contraseña</label><br>
        <input type="text" id="contraseña" name="contraseña"><br>
        <input type="submit">
    </form>
<button><a href="{{ route('clientes.create') }}">Quiero registrarme</a></button> 
</body>
</html>


