<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comentarios;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chats= Comentarios::all();
        return view('chat.index',compact('chats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('chat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
        $chats=Comentarios::create($request->all());

        session()->flash('notification', 'Se a enviado correctamente');
         return redirect()->route('chat.create');

    }

    /**
     * Display the specified resource.
     */
    public function show(Comentarios $chat)
    {
       return view('chat.show',compact('chat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comentarios $chat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comentarios $chat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comentarios $chat)
    {
        $chat->delete();

        return redirect()->route('chat.index')->with('info','Se elimino con exito');
    }
}
