<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \Illuminate\Support\Facades\DB;

use App\Models\Cliente;

use function PHPUnit\Framework\isEmpty;

class RutinasController extends Controller
{
    public function mostrar()
    {
        $rutinas = DB::table('rutinas')
            ->select()
            ->distinct()
            ->get();

        $ejercicios = DB::table('ejercicios')->select()->get();


        $params = [
            'rutinas' => $rutinas,
            'ejercicios' => $ejercicios,
        ];

        return view('clientes.rutinas', $params);
    }

    public function marcas()
    {
        $marcas = DB::table('marcas')
            ->join('users', 'marcas.idcliente', '=', 'users.id')
            ->join('desafios', 'marcas.desafio', '=', 'desafios.id')
            ->select('name', 'apellido', 'idcliente', 'nombre_desafio', 'marca', 'desafio')
            ->get();

        $desafios = DB::table('desafios')
            ->select('nombre_desafio')
            ->get();

        $params = [
            'marcas' => $marcas,
            'desafios' => $desafios
        ];


        return view('clientes.marcas', $params);
    }

    public function borrar(Request $request)
    {
        $nombre = $request->post('nombre');

        DB::table('rutinas')
            ->where('nombre_rutina', $nombre)
            ->delete();
        $res = [
            'ok' => 'ok'
        ];

        return response()->json($res);
    }

    public function modificar(Request $request)
    {
        $data = $request->post('datos');
        $nombre = $request->post('nombre');

        $rutinas = DB::table('rutinas')
            ->select('nombre_rutina', 'dia', 'id')
            ->where('nombre_rutina', $nombre)
            ->distinct()
            ->get();
        if (count($rutinas) == 0) {
            $res = [
                'error' => 'error'
            ];
            return response()->json($res);
        }

        DB::table('rutinas')
            ->updateOrInsert(
                ['nombre_rutina' => $nombre],
                ['dia' => $data[2]]
            );

        DB::table('ejercicios')
            ->where('id_rutina', $rutinas[0]->id)
            ->delete();

        DB::table('ejercicios')
            ->insert([
                'nombre_ejercicio' => $data[0],
                'id_rutina' => $rutinas[0]->id
            ]);
        DB::table('ejercicios')
            ->insert([
                'nombre_ejercicio' => $data[1],
                'id_rutina' => $rutinas[0]->id
            ]);

        $res = [
            'dia' => $rutinas[0]->dia,
            //'ejercicios' => $ejercicios,
            'rutina' => $rutinas[0]->id,
            'data' => $data
        ];

        return response()->json($res);
    }

    // API
    public function insertar(Request $request)
    {
        $nombre = $request->post('nombre');
        $ej1 = $request->post('ej1');
        $ej2 = $request->post('ej2');
        $dia = $request->post('dia');


        $idrut = DB::table('rutinas')->insertGetId([
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


        $res = [
            'nombre' => $nombre,
            'ej1' => $ej1,
            'ej2' => $ej2,
            'dia' => $dia
        ];

        return response()->json($res);
    }


    public function renderUpsert(Request $request)
    {

        $nombre = $request->post('nombre');
        $ej1 = $request->post('ej1');
        $ej2 = $request->post('ej2');
        $dia = $request->post('dia');
        $id = $request->post('rutina');


        if ($id == -1) {
            $this->createRutinaFrom($nombre, [$ej1, $ej2], $dia);
        } else {
            $this->updateRutina($id, $nombre, [$ej1, $ej2], $dia);
        }

        return redirect('/clientes/rutinas');
    }

    public function renderDelete($id)
    {
        $this->deleteRutina($id);

        return redirect('/clientes/rutinas');
    }

    /**
     * Crea una rutina dado un nombre, una lista de ejercicios y un dia.
     */
    private function createRutinaFrom(string $name, array $ejs, string $day)
    {
        $id = DB::table('rutinas')->insertGetId([
            'nombre_rutina' => $name,
            'dia' => $day
        ]);

        foreach ($ejs as $ejercicio) {
            DB::table('ejercicios')->insert([
                'nombre_ejercicio' => $ejercicio,
                'id_rutina' => $id
            ]);
        }
    }

    /**
     * Actualiza una rutina.
     */
    private function updateRutina(string $id, string $name, array $ejs, string $day)
    {
        DB::table('rutinas')->where('id', $id)->update(
            ['dia' => $day, 'nombre_rutina' => $name]
        );

        foreach ($ejs as $ej) {
            DB::table('ejercicios')->updateOrInsert(
                ['nombre_ejercicio' => $ej, 'id_rutina' => $id],
                ['nombre_ejercicio' => $ej, 'id_rutina' => $id]
            );
        }
    }

    private function deleteRutina($id)
    {
        DB::table('ejercicios')->where('id_rutina', $id)->delete();
        DB::table('rutinas')->delete($id);
    }


    public function insertarMarca(Request $request)
    {
        $nombre = $request->post('nombre');
        $apellido = $request->post('apellido');
        $desafio = $request->post('desafio');
        $marca = $request->post('marca');

        $idDesafio = DB::table('desafios')
            ->where('nombre_desafio', $desafio)
            ->select('id')
            ->get();

        $users = DB::table('users')
            ->select('id')
            ->where('name', $nombre)
            ->where('apellido', $apellido)
            ->get();

        if (count($users) == 0) {
            $res = [
                'error' => 'error'
            ];
            return response()->json($res);
        }

        DB::table('marcas')->updateOrInsert([
            'idcliente' => $users[0]->id,
            'desafio' => $idDesafio[0]->id,
        ], [
            'marca' => $marca,
        ]);

        $res = [
            'nombre' => $nombre,
            'idcliente' => $users[0]->id,
            'desafio' => $desafio,
            'marca' => $marca,
            'error' => 'no',
            'iddesafio' => $idDesafio[0]->id
        ];

        return response()->json($res);
    }

    public function desafios(Request $request)
    {
        $desafios = DB::table('desafios')
            ->select('nombre_desafio')
            ->get();
        $params = [
            'desafios' => $desafios
        ];
        return view('clientes.desafios', $params);
    }

    public function insertarDesafio(Request $request)
    {
        $desafio = $request->post('desafio');
        $res = [
            'desafio' => $desafio
        ];

        DB::table('desafios')
            ->insert([
                'nombre_desafio' => $desafio,
            ]);
        return response()->json($res);
    }

    public function eliminarDesafio(Request $request)
    {
        $desafio = $request->post('desafio');
        $res = [
            'desafio' => $desafio
        ];

        DB::table('desafios')
            ->where('nombre_desafio', $desafio,)
            ->delete();
        return response()->json($res);
    }
}
