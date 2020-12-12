<?php

use App\Http\Livewire\DashboardHcs;
use App\Http\Livewire\ProductosHcs;
use App\Http\Livewire\ControlVehicular;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\UsuariosHcs;
use App\Http\Livewire\TrabajadoresHcs;

Route::get('/', function () {
    return view('auth.login');
});



Route::middleware(['auth:sanctum', 'verified'])
    ->get('/dashboard', DashboardHcs::class)
    ->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])
    ->get('/products', ProductosHcs::class)
    ->name('products');


Route::middleware(['auth:sanctum', 'verified'])
    ->get('/users', UsuariosHcs::class)
    ->name('users');

Route::middleware(['auth:sanctum', 'verified'])
    ->get('/vehiculos', ControlVehicular::class)
    ->name('vehiculos');

Route::middleware(['auth:sanctum', 'verified'])
    ->get('/workers', TrabajadoresHcs::class)
    ->name('workers');
