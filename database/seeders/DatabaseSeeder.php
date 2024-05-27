<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Trabajador;
use App\Models\Transporte;
use App\Models\Punto;
use Illuminate\Support\Facades\Storage;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Storage::makeDirectory('puntos');

          User::factory(10)->create();
          Transporte::factory(10)->create();
          Trabajador::factory(10)->create();
          $this->call(PuntosSeeder::class);

         /*  User::factory()->create([
            'name' => 'cristhian martinez',
            'email' => 'cristhianmr313@gmail.com',
            'password'=>bcrypt('12345678'),
         ]); */
    }
}
