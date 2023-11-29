<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    public function alumnos(){
        $alumnos=Alumno::all();
        return view('index',compact('alumnos'));
    }
    public function show($id){
        $alumno=Alumno::find($id);
        return view('show',compact('alumno'));
    }
    public function create(){
        return view('create');
    }
}
