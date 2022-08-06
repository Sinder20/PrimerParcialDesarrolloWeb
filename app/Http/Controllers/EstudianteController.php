<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EstudianteController extends Controller
{
    public function index(){
        $estudiantes=DB::table('estudiante as e')
            ->select('e.id','e.nombre','e.apellido','e.telefono','e.edad','e.direccion')->get()

        ;
        return view('estudiante.index', compact('estudiantes'));
    }


}
