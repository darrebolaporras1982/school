<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;
class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //$this->call(AlumnoSeeder::class);//este es para llamar a los seeder
        Alumno::factory(20)->create();//este llamara a la funcion de factory
    }
}
