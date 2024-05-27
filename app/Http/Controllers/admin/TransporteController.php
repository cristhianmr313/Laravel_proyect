<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\TransporteController;
use App\Models\Transporte;
use App\Models\Trabajador;

class TransporteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $transportes=Transporte::all();


         return view('admin.transporte.index',compact('transportes' ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { $trabajador_name= Trabajador::all();

        return view('admin.transporte.create',compact('trabajador_name'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'tipo_transporte'=>'required',
             'jefe'=>'required',
        ]);

        $transporte= Transporte::create($request->all());
     return redirect()->route('admin.transportes.index',compact('transporte'))->with('info','Se creo con exito');

    }

    /**
     * Display the specified resource.
     */
    public function show(Transporte $transporte)
    {
        return view('admin.transporte.show',compact('transporte'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transporte $transporte)

    {

        $trabajador_name= Trabajador::all();
        return view('admin.transporte.edit',compact('transporte','trabajador_name'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transporte $transporte)
    {
        $request->validate([
            'name'=>'required',
            'tipo_transporte'=>'required',
             'jefe'=>'required',
        ]);

        $transporte->update($request->all());
        return redirect()->route('admin.transportes.index')->with('info','La ruta se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transporte $transporte)
    {
       $transporte->delete();
       return redirect()->route('admin.transportes.index')->with('info','La ruta se elimino con exito');
    }
}
