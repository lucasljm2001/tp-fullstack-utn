<?php

namespace App\Http\Controllers;

use \Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Cliente;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('clientes.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.registro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nombre = $request->post('nombre');
        $apellido = $request->post('apellido');
        $usuario = $request->post('usuario');
        $contraseña = $request->post('contraseña');

        DB::insert('insert into cliente (nombre, apellido, user, password) VALUES (?, ?, ?, ?)', [$nombre, 
        $apellido, $usuario, $contraseña]);

        //return redirect()->back();
        return 'registro exitoso';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function inicio(Request $request)
    {
        $usuario = $request->post('usuario');
        $contraseñaIngresada = $request->post('contraseña');
        $contraseñaCorrecta = Cliente::select('password')
                                ->where('user', '=', $usuario)
                                ->first();
        $usuarioLogeado = Cliente::select('*')
                                ->where('user', '=', $usuario)
                                ->first();
        $parametros =[
            'nombre' => $usuarioLogeado->nombre,
            'apellido' => $usuarioLogeado->apellido,
            'user' => $usuarioLogeado->user,

        ];
        if ($contraseñaCorrecta == '') {
            return 'El usuario es incorrecto';
        }
        if ($contraseñaIngresada == $contraseñaCorrecta->password) {
            return view('clientes.user', $parametros);
        }

        return 'La contraseña es incorrecta';
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
