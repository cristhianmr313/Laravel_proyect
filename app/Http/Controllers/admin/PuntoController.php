<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Livewire\WithPagination;
use Illuminate\Http\Request;
use App\Models\Punto;
use App\Models\Trabajador;
use App\Models\Transporte;
use Illuminate\Support\Facades\Storage;

class PuntoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */

     use WithPagination;
     protected $paginationTheme = "bootstrap";
    public function index()

    {

       $puntos=Punto::all();
       $trabajadores=Trabajador::all();
       $transportes=Transporte::all();

       return view('admin.punto.index',compact('puntos','trabajadores','transportes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        $trabajadores=Trabajador::all();
        $transportes=Transporte::all();
       return view('admin.punto.create',compact('trabajadores','transportes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       return Storage::disk('public')->put('image', 'puntos');
      /*  $request->validate([
        'name'=>'required',
        'direccion'=>'required',
        'descripcion'=>'required',
        'status'=>'required',
       ]);
       $puntos=Punto::create($request->all());
       return redirect()->route('admin.puntos.index',compact('puntos'))->with('info','Se creo con exito'); */
    }

    /**
     * Display the specified resource.
     */
    public function show(Punto $punto)
    {
       return view('admin.punto.show',compact('punto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Punto $punto)
    {
       return view('admin.punto.edit',compact('punto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Punto $punto)
    {
        $request->validate([
            'name'=>'required',
            'image'=>'required',
            'direccion'=>'required',
            'descripcion'=>'required',
            'status'=>'required',
           ]);
           $punto->update($request->all());
           return redirect()->route('admin.puntos.index',compact('punto'))->with('info','Se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Punto $punto)
    {
         $punto->delete();

         return redirect()->route('admin.puntos.index',compact('punto'))->with('info','Se elimino con exito');
    }
}
