<?php

namespace App\Http\Controllers;

use App\Http\Requests\AsistenciaPostRequest;
use App\Models\Asistencia;
use Illuminate\Http\Request;

class RegistroAsistenciaController extends Controller
{
    public function index(){
        $asistencia= Asistencia::all();
        return response()->json($asistencia);
    }

    public function store(AsistenciaPostRequest $request){
        $validator = $request->validated();

        $asistencia = new Asistencia([
            'nombres' => $validator['nombres'],
            'apellidos' => $validator['apellidos'],
            'codAlumno' => $validator['codAlumno'],
            'curso_id' => $validator['curso_id'],
            'fecha' => $validator['fecha'],
            'coordX' => $validator['coordX'],
            'coordY' => $validator['coordY'],
            'valor' => $validator['valor']
        ]);
        $asistencia->save();
        return response()->json($asistencia);
    }
}
