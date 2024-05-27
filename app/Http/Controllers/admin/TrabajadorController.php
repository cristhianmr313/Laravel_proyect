<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trabajador;
use App\Models\User;

class TrabajadorController extends Controller
{
  /*   public function __construct() {
       $this->middleware("auth");
    } */
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $trabajadores=Trabajador::all();


         return view('admin.trabajador.index',compact('trabajadores' ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {    $users= User::all();
        return view('admin.trabajador.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


         $request->validate([
            'name'=>'required',
            'direc'=>'required',
            'message'=>'required',
            'phone_number'=>'required',
            'user_relacionado'=>'required',
        ]);

        $trabajadore= Trabajador::create($request->all());
     return redirect()->route('admin.trabajadores.index',compact('trabajadore'))->with('info','Se creo con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Trabajador $trabajadore)
    {
        return view('admin.trabajadores.show',compact('trabajadore'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trabajador $trabajadore)
    {
        $users= User::all();
        return view('admin.trabajador.edit',compact('trabajadore','users' ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trabajador $trabajadore)
    {
        $request->validate([
            'name'=>'required',
            'direc'=>'required',
            'message'=>'required',
            'phone_number'=>'numeric',
            'user_relacionado'=>'required',
        ]);
        $trabajadore->update($request->all());
        return redirect()->route('admin.trabajadores.index',compact('trabajadore'))->with('info','Se actualizo con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trabajador $trabajadore)
    {    $trabajadore->delete();

        return redirect()->route('admin.trabajadores.index')->with('info','La ruta se elimino con exito');
    }
}
