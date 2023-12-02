<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profesor;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profesor=new Profesor();
        $profesor->nom_ape='David Arrebola';
        $profesor->profesion='FullStack';
        $profesor->grado_academico='Ingeniero de Software';
        $profesor->telefono='661773819';
        $profesor->save();

        $profesor=new Profesor();
        $profesor->nom_ape='Daniel Souchar';
        $profesor->profesion='FullStack';
        $profesor->grado_academico='Ingeniero';
        $profesor->telefono='111111111';
        $profesor->save();

        $profesor=new Profesor();
        $profesor->nom_ape='Ibai ';
        $profesor->profesion='FullStack';
        $profesor->grado_academico='Software';
        $profesor->telefono='222222222';
        $profesor->save();

    }
}

