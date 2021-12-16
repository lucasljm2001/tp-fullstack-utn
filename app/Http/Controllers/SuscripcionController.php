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
        $accion = $request->post('acc');
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
}
