<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trabajador;
use App\Models\Transporte;

class ListadoController extends Controller
{
    public function index(){

        $transportes= Transporte::paginate(5);
        $trabajadores= Trabajador::paginate(5);
        return view('listado.index',compact('trabajadores','transportes'));
    }
    public function lisTransporte(){

        $transportes= Transporte::paginate(5);
        return view('listado.lisTransporte',compact('transportes'));
    }
}
