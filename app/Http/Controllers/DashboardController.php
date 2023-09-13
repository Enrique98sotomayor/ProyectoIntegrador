<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Asistencia;
use App\Models\Curso;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(('auth'));
    }
    public function index(Request $request){
        if($request->filled('curso_id')){
            $asistencia=Asistencia::where('curso_id',$request->curso_id)->get();
        }else{
            $asistencia= Asistencia::all();
        }
        $cursos=Curso::all();
        if(auth()->user()->role=='decano'){
            return view('dashboard', compact('asistencia','cursos'));
        }elseif(auth()->user()->role=='profesor'){
            return view('dashboard2', compact('asistencia','cursos'));
        }elseif(auth()->user()->role=='secretaria'){
            return view('dashboard3', compact('asistencia','cursos'));
        }
    }
    public function pdf(){
        $asistencia= Asistencia::all();
        $pdf = Pdf::loadView('dashboardpdf', compact('asistencia','cursos'));
        return $pdf->stream();
    }
    public function pdf2(){
        $asistencia= Asistencia::all();
        $pdf = Pdf::loadView('dashboardpdf2', compact('asistencia','cursos'));
        return $pdf->stream();
    }
    public function pdf3(){
        $asistencia= Asistencia::all();
        $pdf = Pdf::loadView('dashboardpdf3', compact('asistencia','cursos'));
        return $pdf->stream();
    }

}
