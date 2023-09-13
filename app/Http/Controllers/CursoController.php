<?php

namespace App\Http\Controllers;

use App\Http\Requests\CursoPostRequest;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        $curso= Curso::all();
        return response()->json($curso);
    }

    public function store(CursoPostRequest $request){
        $validator =$request->validated();

        $curso = new Curso([
            'nombreCurso'=>$validator['nombreCurso']
        ]);
        $curso->save();
        return response()->json($curso);
    }
}
