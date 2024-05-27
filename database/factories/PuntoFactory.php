<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Punto>
 */
class PuntoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->name(),
            'direccion'=>$this->faker->sentence(),
            'descripcion'=>$this->faker->text(205),
            'status'=>$this->faker->randomElement($array=['1','2']),
            'jefe'=>$this->faker->name(),
            'transporte'=> $this->faker->name(),
        ];
    }
}
