<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EstudianteController extends Controller
{
    public function index(Request $request){
        $post=new Post;
        $post->nombre=$request->nombre;
        $post->apellido=$request->apellido;
        $post->telefono=$request->telefono;
        $post->edad=$request->edad;
        $post->direccion=$request->direccion;
        $post->save();
        return view('estudiante.index', compact('post'));
    }


}
