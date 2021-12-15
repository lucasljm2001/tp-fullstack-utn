<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Turno;

use \Illuminate\Support\Facades\DB;

class TurnosController extends Controller
{
    public function mostrar(Request $request){
        return view('clientes.turnos');
    }

    public function misTurnos(Request $request){
        $id = $request->get('id');
        $turnos = Turno::select('*')
                        ->where('id_cliente', '=', $id)
                        ->get();
        $cturnos= $turnos->count();

        $resp =[
            'turnos' => $turnos
        ];
        
        return response()->json($resp);
    }
}
