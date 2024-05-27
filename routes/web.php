<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PuntoController;



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


});
