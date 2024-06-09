<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trabajador;
use App\Models\Transporte;

class ListadoController extends Controller
{
    public function index(){


        $trabajadores= Trabajador::paginate(10);
        return view('listado.index',compact('trabajadores'));
    }
    public function lisTransporte(){

        $transportes= Transporte::paginate(10);
        return view('listado.lisTransporte',compact('transportes'));
    }
}
