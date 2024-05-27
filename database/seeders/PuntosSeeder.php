<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Punto;
use App\Models\Image;

class PuntosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $puntos= Punto::factory(10)->create();
        foreach($puntos as $punto){
            Image::factory(1)->create([
                'imageable_id'=>$punto->id,
                'imageable_type'=>Punto::class
            ]);
        }
    }
}
