<?php

namespace App\Http\Controllers;

use \Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Cliente;
use Error;
use Illuminate\Support\Facades\Session;

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
        return redirect('/login');
    }

    public function administrar(Request $request)
    {
        /*$sus = Cliente::select('*')
                        ->join('subscripcion', 'users.id', '=', 'subscripcion.id')
                        ->first();*/
        $sus = DB::table('users')
            ->join('subscripcion', 'users.id', '=', 'subscripcion.id')
            ->select('name', 'dias', 'apellido', 'users.id')
            ->get();
        $params = [
            'sus' => $sus
        ];
        return view('clientes.admin', $params);
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

        DB::insert('insert into cliente (nombre, apellido, user, password) VALUES (?, ?, ?, ?)', [
            $nombre,
            $apellido, $usuario, $contraseña
        ]);

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


        $profile = null;


        try {
            $profile = $usuarioLogeado->profile_url;
        } catch (Error $e) {
        }

        $marcas = Cliente::select('desafio', 'marca', 'nombre_desafio')
            ->join('marcas', 'users.id', '=', 'marcas.idcliente')
            ->join('desafios', 'marcas.desafio', '=', 'desafios.id')
            ->where('users.email', $usuario)
            ->distinct()
            ->get();;

        $rutinas = Cliente::select('nombre_rutina', 'nombre_ejercicio', 'turnos.dsem')
            ->join('turnos', 'users.id', '=', 'turnos.id_cliente')
            ->join('rutinas', 'turnos.dsem', '=', 'rutinas.dia')
            ->join('ejercicios', 'rutinas.id', '=', 'ejercicios.id_rutina')
            ->where('users.email', $usuario)
            ->distinct()
            ->get();

        $semana = Cliente::select('nombre_rutina', 'turnos.dsem')
            ->join('turnos', 'users.id', '=', 'turnos.id_cliente')
            ->join('rutinas', 'turnos.dsem', '=', 'rutinas.dia')
            ->join('ejercicios', 'rutinas.id', '=', 'ejercicios.id_rutina')
            ->where('users.email', $usuario)
            ->distinct()
            ->get();
        $rutinasNombres = [];
        for ($i = 0; $i < count($rutinas); $i++) {
            array_push($rutinasNombres, $rutinas[$i]->nombre_rutina);
        }

        $rutinasUnicas = array_unique($rutinasNombres);


        if ($usuarioLogeado == null) {
            return redirect('/login');
        }


        $parametros = [
            'nombre' => $usuarioLogeado->name,
            'id' => $usuarioLogeado->id,
            'apellido' => $usuarioLogeado->apellido,
            'user' => $usuarioLogeado->user,
            'dias' => $dias->dias,
            'tipo' => $usuarioLogeado->tipo,
            'rutinas' => $rutinasUnicas,
            'ejercicios' => $rutinas,
            'marcas' => $marcas,
            'semanas' => $semana,
            'profile' => $profile
        ];

        if (Auth::attempt($credentials)) {

            foreach ($parametros as $key => $value) {
                Session::put($key, $value);
            }

            $this->viewModel =   array_merge($this->viewModel, Session::all());

            Session::remove('invalidPw');

            return redirect('/');
        } else {
            Session::put('invalidPw', 'is-invalid');
        }


        return redirect('/login');
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
