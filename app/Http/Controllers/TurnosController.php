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

    public function turnosDia(Request $request){
        $fecha = $request->get('fecha');
        $hora = $request->get('hora');
        $turnos = Turno::select('*')
                        ->where('dia', '=', $fecha)
                        ->where('horario', $hora)
                        ->get();
        $cturnos= $turnos->count();

        $resp =[
            'fecha' => $fecha,
            'turnos' => $cturnos
        ];
        
        return response()->json($resp);
    }

    public function agregarTurno(Request $request){
        $fecha = $request->post('fecha');
        $hora = $request->post('hora');
        $id = $request->post('id');


        DB::table('turnos')->upsert([
            ['id_cliente' => $id, 'horario' => $hora, 'dia' => $fecha]
        ], ['id_cliente', 'horario'], ['dia']);

        $resp =[
            'fecha' => $fecha,
            'hora' => $hora,
            'id' => $id
        ];
        
        return response()->json($resp);
    }
}

