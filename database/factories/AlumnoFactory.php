<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Alumno;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    protected $model=Alumno::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom_ape'=>$this->faker->sentence(),
            'edad'=>$this->faker->numberBetween(0,100),
            'telefono'=>$this->faker->phoneNumber(),
            'direccion'=>$this->faker->address()
        ];
    }
}
