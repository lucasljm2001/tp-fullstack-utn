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

    public function modificarSuscripcion(Request $request)
    {
        $id = intval($request->post('id'));
        $dias = intval($request->post('dias'));
        $accion = $request->post('accion');
        $diasSub = Cliente::select('dias')
                            ->join('subscripcion', 'users.id', '=', 'subscripcion.id')
                            ->where('users.id', '=', $id)
                            ->first();
        if ($accion == 'sum') {
            $diasNuevos = $dias + $diasSub->dias;
        }else {
            $diasNuevos = $diasSub->dias -  $dias;
        }                    
        

        DB::table('subscripcion')
                ->where('id', $id)
                ->update(['dias'=> $diasNuevos]);

        $resp = [
            'ndias'=>$diasNuevos,
        ];
        return response()->json($resp);
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
        $dias = $request->post('dias');
        DB::table('subscripcion')->upsert([
        ['id' => $id, 'id_subscripcion' => $id, 'dias' => $dias],
        ], ['id', 'id_subscripcion'], ['dias']);

        $cliente = Cliente::select('name')
                    ->where('id',$id)
                    ->first();

        $resp =[
            'cliente' => $cliente->name,
            'dias' => $dias,
        ];

            return response()->json($resp);
    }
}
