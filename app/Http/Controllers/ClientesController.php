<?php

namespace App\Http\Controllers;

use \Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Cliente;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return view('auth.login');
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
        
        $usuarioLogeado = Cliente::select('*')
                                ->where('email', '=', $usuario)
                                ->first();

        $credentials = [
                            'email' => $usuario,
                            'password' => $contraseñaIngresada,
                                ];

        $dias = Cliente::select('dias')
                        ->join('subscripcion', 'users.id', '=', 'subscripcion.id')
                        ->first();
        
        if ($usuarioLogeado == null) {
            return 'Debe ingresar un usuario';
        }
        $parametros =[
                'nombre' => $usuarioLogeado->name,
                'id' => $usuarioLogeado->id,
                'apellido' => $usuarioLogeado->apellido,
                'user' => $usuarioLogeado->user,
                'dias' => $dias->dias,
                'tipo' => $usuarioLogeado->tipo,
            ];
        
        if (Auth::attempt($credentials)) {
            return view('clientes.user', $parametros);
        }

        return 'El usuario y/o la contraseña son incorrectos';
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
