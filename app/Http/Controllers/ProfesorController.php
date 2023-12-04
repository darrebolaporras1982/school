<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;
class ProfesorController extends Controller
{
    public function view_profesors(){
        $profesors=Profesor::all();
        foreach($profesors as $profesor){
            $profesor->cursos();
        }
        return view('profesores.profesors',compact('profesors'));
    }


}
