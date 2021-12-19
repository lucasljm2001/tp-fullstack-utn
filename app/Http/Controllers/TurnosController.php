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
        $turnos = Turno::select('turnos.dia', 'turnos.horario', 'nombre_rutina')
                        ->join('rutinas', 'turnos.dsem', '=', 'rutinas.dia')
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
        $hora = $request->get('horarios');
        $turnos = Turno::select('*')
                        ->where('dia', '=', $fecha)
                        ->whereIn('horario', $hora)
                        ->get();

        $horarios = [
            '09:00:00'=> 0,
            '10:00:00'=> 0,
            '11:00:00'=> 0,
            '12:00:00'=> 0,
            '13:00:00'=> 0,
            '14:00:00'=> 0,
            '15:00:00'=> 0,
            '16:00:00'=> 0,
            '17:00:00'=> 0,
            '18:00:00'=> 0,
        ];

        for ($i=0; $i <count($turnos) ; $i++) { 
            $horarios[$turnos[$i]->horario] = $horarios[$turnos[$i]->horario] + 1;
        }

        $resp =[
            'fecha' => $fecha,
            'turnos' => $horarios
        ];
        
        return response()->json($resp);
    }

    public function agregarTurno(Request $request){
        $fecha = $request->post('fecha');
        $hora = $request->post('hora');
        $id = $request->post('id');
        $dsem = $request->post('dsem');


        DB::table('turnos')->insert([
            ['id_cliente' => $id, 'horario' => $hora, 'dia' => $fecha, 'dsem' => $dsem]
        ]);

        $resp =[
            'fecha' => $fecha,
            'hora' => $hora,
            'id' => $id
        ];
        
        return response()->json($resp);
    }
}

