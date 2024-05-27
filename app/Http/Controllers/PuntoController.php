<?php

namespace App\Http\Controllers;
use App\Models\Punto;

use Illuminate\Http\Request;

class PuntoController extends Controller
{
    public function index(){
        $puntos = Punto::all();

        return view('puntos.index', compact('puntos'));
    }

    public function description(Punto $punto){


        return view('puntos.description', compact('punto'));
    }
}
