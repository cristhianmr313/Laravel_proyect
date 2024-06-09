<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\TransporteController;
use App\Http\Controllers\Admin\TrabajadorController;
use App\Http\Controllers\Admin\PuntoController;
use App\Http\Controllers\Admin\ChatController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RelacionPTTController;


Route::get('', [AdminController::class,'index'])->name('admin.index');

Route::resource('transportes', TransporteController::class)->names('admin.transportes');

Route::resource('trabajadores', TrabajadorController::class)->names('admin.trabajadores');

Route::resource('puntos', PuntoController::class)->names('admin.puntos');

Route::resource('users', UserController::class)->names('admin.users');

Route::resource('chat', ChatController::class)->names('chat');


