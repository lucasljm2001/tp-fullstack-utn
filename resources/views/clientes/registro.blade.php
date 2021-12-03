<form method="post" action="{{ route('clientes.store') }}">
    @csrf
    <label for="nombre">Ingrese su nombre</label><br>
    <input type="text" id="nombre" name="nombre"><br>
    <label for="apellido">Ingrese su apellido</label><br>
    <input type="text" id="apellido" name="apellido"><br>
    <label for="usuario">Ingrese su usuario</label><br>
    <input type="text" id="usuario" name="usuario"><br>
    <label for="contraseña">Ingrese su contraseña</label><br>
    <input type="text" id="contraseña" name="contraseña"><br>
    <input type="submit">
</form>