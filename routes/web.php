<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorIngredientes;
use App\Http\Controllers\controladorAlimentos;

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/menuBebidas', function () {
    return view('menuBebidas');
})->name('menuBebidas');

Route::get('/menuSnacks', function () {
    return view('menuSnacks');
})->name('menuSnacks');

Route::get('/miCuenta', function () {
    return view('userAccount');
})->name('miCuenta');

Route::get('/comprarEnchiladas', function () {
    return view('comprarEnchiladas');
})->name('comprarEnchiladas');

Route::get('/comprarTacos', function () {
    return view('comprarTacos');
})->name('comprarTacos');

Route::get('/comprarBurritos', function () {
    return view('comprarBurritos');
})->name('comprarBurritos');

Route::get('/status', function () {
    return view('statusPedido');
})->name('status');






// Alimentos
Route::get('/agregarComida',[controladorAlimentos::class,'create'])->name('alimento.create');

//Status
Route::post('agregarIngrediente',[controladorIngredientes::class,'store'])->name('ingrediente.store');