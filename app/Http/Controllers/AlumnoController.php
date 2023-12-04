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
    public function store(Request $alumnos){
        $alumno= new Alumno();
        $alumno->nom_ape=$alumnos->name;
        $alumno->edad=$alumnos->edad;
        $alumno->telefono=$alumnos->telephone;
        $alumno->direccion=$alumnos->address;
        $alumno->save();
    }
    public function edit($id){
        $alumno=Alumno::find($id);
        return view('editar',compact('alumno'));//["alumno"=>$alumno]
    }
    public function update(Request $alumnos, Alumno $alumno){
        $alumno->nom_ape=$alumnos->name;
        $alumno->edad=$alumnos->edad;
        $alumno->telefono=$alumnos->telephone;
        $alumno->direccion=$alumnos->address;
        $alumno->save();
    }
    public function delete($id){
        $alumno=Alumno::find($id);
        $alumno->delete();
        return redirect()->route('alumnos');
        //otra manera seria pasando un alumno
        /*podriamos pasar el alumno completo de la la siguiente manera
        public function delete(Alumno $alumno){
            $alumno->deleted();
            return redirect()->route('a la pagina que queramos')*/
    }
    public function confirmar($id){
        return view('confirmar',compact('id'));
    }
}
