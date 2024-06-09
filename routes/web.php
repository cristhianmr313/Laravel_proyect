<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PuntoController;
use App\Http\Controllers\ListadoController;
use App\Http\Controllers\Admin\ChatController;



Route::get('/', function () {
    return view('welcome');
});




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [PuntoController::class,'index'])->name('puntos.index');
    Route::get('/dashboard/{punto}', [PuntoController::class,'description'])->name('puntos.description');
    Route::get('/listado', [ListadoController::class,'index'])->name('listado.index');
    Route::get('/listado/lisTransporte', [ListadoController::class,'lisTransporte'])->name('listado.lisTransporte');
    Route::get('/chat', [chatController::class,'create'])->name('chat.create');


});
