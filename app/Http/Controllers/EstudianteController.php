<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index(){
        $estudiante=DB::table('estudiante as e')
            ->select('e.id','e.nombre','e.apellido','e.telefono','e.edad','e.direccion')->get()

        ;
        return view('student.index', compact('students'));
    }


}
