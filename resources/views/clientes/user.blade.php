<div>
    <h1>Bienvenido {{$nombre}} {{$apellido}}</h1>
</div>
<div>
    <h2>Tiene {{$dias}} dias de suscripcion y es {{$tipo}}</h2>
</div>
<button><a href="{{ route('clientes.index') }}">Cerrar sesion</a></button> 