<form method="get" action="{{ route('clientes.show', 1) }}">
    @csrf
    <label for="usuario">Ingrese su usuario</label><br>
    <input type="text" id="usuario" name="usuario"><br>
    <label for="contraseña">Ingrese su contraseña</label><br>
    <input type="text" id="contraseña" name="contraseña"><br>
    <input type="submit">
</form>