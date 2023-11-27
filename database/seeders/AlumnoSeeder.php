<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;

class AlumnoSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alumno=new Alumno();
        $alumno->nom_ape='David Arrebola';
        $alumno->edad=41;
        $alumno->telefono='661773819';
        $alumno->direccion="c/txotena 12";
        $alumno->save();

        $alumno=new Alumno();
        $alumno->nom_ape='aniel Souchar';
        $alumno->edad=25;
        $alumno->telefono='111111111';
        $alumno->direccion="Berriz";
        $alumno->save();

        $alumno=new Alumno();
        $alumno->nom_ape='Unai Cabo';
        $alumno->edad=20;
        $alumno->telefono='222222222';
        $alumno->direccion="Altamira";
        $alumno->save();
    }
}
