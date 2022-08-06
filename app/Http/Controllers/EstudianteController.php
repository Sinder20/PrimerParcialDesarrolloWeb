<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index(){
        $estudiantes = $this->read();
        return view('estudiante.index', compact('estudiantes'));
    }

    public function read(){
        return Estudiante::all();
    }
}
