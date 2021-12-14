<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TurnosController extends Controller
{
    public function mostrar(Request $request){
        return view('clientes.turnos');
    }

    public function misTurnos(Request $request){
        $user = $request->post('user');
        $resp =[
            'user' => $user,
        ];
        return response()->json($resp);
    }
}
