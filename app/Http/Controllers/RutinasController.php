<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \Illuminate\Support\Facades\DB;

use App\Models\Cliente;

class RutinasController extends Controller
{
    public function mostrar()
    {
        $rutinas = DB::table('rutinas')
                            ->join('ejercicios', 'rutinas.id', '=', 'ejercicios.id_rutina')
                            ->select('nombre_rutina', 'nombre_ejercicio', 'dia')
                            ->distinct()
                            ->get();
        $rutinasNombres = [];
        for ($i=0; $i <count($rutinas) ; $i++) { 
            array_push($rutinasNombres, $rutinas[$i]->nombre_rutina);
        }
        $params = [
            'rutinas' => array_unique($rutinasNombres),
            'ejercicios' => $rutinas,
        ];
        return view('clientes.rutinas', $params);
    }
    public function marcas()
    {
        $marcas = DB::table('marcas')
                        ->join('users', 'marcas.idcliente', '=', 'users.id')
                        ->select('idcliente', 'desafio', 'marca')
                        ->get();
        
        $params = [
            'marcas' => $marcas,
        ];


        return view('clientes.marcas', $params);
    }
    public function borrar(Request $request)
    {
        $nombre = $request->post('nombre');

        DB:: table('rutinas')
                ->where('nombre_rutina', $nombre)
                ->delete();
        $res =[
            'ok'=>'ok'
        ];

        return response()->json($res);
    }
    public function insertar(Request $request)
    {
        $nombre = $request->post('nombre');
        $ej1 = $request->post('ej1');
        $ej2 = $request->post('ej2');
        $dia = $request->post('dia');


        $idrut =DB::table('rutinas')->insertGetId([
            'nombre_rutina' => $nombre,
            'dia' => $dia
        ]);

        DB::table('ejercicios')->insert([
            'nombre_ejercicio' => $ej1,
            'id_rutina' => $idrut
        ]);
        DB::table('ejercicios')->insert([
            'nombre_ejercicio' => $ej2,
            'id_rutina' => $idrut
        ]);
        $res =[
            'nombre'=>$nombre,
            'ej1' => $ej1,
            'ej2' => $ej2,
            'dia' => $dia
        ];

        return response()->json($res);
    }
}
