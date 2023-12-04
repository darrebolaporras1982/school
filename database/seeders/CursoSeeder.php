<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $curso=new Curso();
        $curso->nombre='html';
        $curso->nivel='iniciacion';
        $curso->horas_academicas=50;
        $curso->save();

        $curso=new Curso();
        $curso->nombre='css';
        $curso->nivel='avanzado';
        $curso->horas_academicas=150;
        $curso->save();

        $curso=new Curso();
        $curso->nombre='Laravel';
        $curso->nivel='iniciacion';
        $curso->horas_academicas=50;
        $curso->save();
    }
}
