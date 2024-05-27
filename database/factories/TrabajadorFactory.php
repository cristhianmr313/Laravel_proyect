<?php

namespace Database\Factories;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trabajador>
 */
class TrabajadorFactory extends Factory
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
            'direc'=>$this->faker->sentence(),
            'message'=>$this->faker->text(205),
            'phone_number'=>$this->faker->sentence(),
            'user_relacionado'=>$this->faker->name(),
        ];
    }
}
