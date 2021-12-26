<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cliente;

use \Illuminate\Support\Facades\DB;

class SuscripcionController extends Controller
{
    public function mostrarSuscripcion(Request $request, $id)
    {
        $cliente = Cliente::select('*')
            ->join('subscripcion', 'users.id', '=', 'subscripcion.id')
            ->where('users.id', '=', $id)
            ->first();

        $params = [
            'nombre' => $cliente->name,
            'apellido' => $cliente->apellido,
            'dias' => $cliente->dias,
        ];

        return view('clientes.suscripcion', $params);
    }

    public function modificarSuscripcion($id, Request $request)
    {
        $dias = intval($request->post('dias'));

        DB::table('subscripcion')
            ->where('id', $id)
            ->update(['dias' => $dias]);

        return redirect('/clientes/admin');
    }

    public function editarSuscripcion()
    {
        $clientesSus = Cliente::select('users.id')
            ->join('subscripcion', 'users.id', '=', 'subscripcion.id')
            ->get();

        $clientes = Cliente::select('*')
            ->whereNotIn('id', $clientesSus)
            ->get();

        $params = [
            'clientes' => $clientes,
        ];
        return view('clientes.agregar', $params);
    }

    public function agregarSuscripcion(Request $request)
    {
        $id = $request->post('id');
        $dias = 20;

        DB::table('subscripcion')->upsert([
            ['id' => $id, 'id_subscripcion' => $id, 'dias' => $dias],
        ], ['id', 'id_subscripcion'], ['dias']);

        return redirect('/clientes/admin');
    }
}
