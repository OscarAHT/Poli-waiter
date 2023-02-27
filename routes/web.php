<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorIngredientes;
use App\Http\Controllers\controladorAlimentos;
use App\Http\Controllers\controladorApp;

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



//Ingredientes
//show
Route::get('/ajustes/ingredientes',[controladorIngredientes::class,'index'])->name('ajustesIngredientes');
//Edit
Route::get('ingredientes/editar/{id}',[controladorIngredientes::class,'edit'])->name('ingredientes.edit');
//Update
Route::put('ingredientes/actualizar/{id}',[controladorIngredientes::class,'update'])->name('ingredientes.update');
//Delete
Route::delete('ingredientes/eliminar/{id}',[controladorIngredientes::class,'destroy'])->name('ingredientes.destroy');

// Ajustes
Route::get('/ajustes/alimentos',[controladorAlimentos::class,'index'])->name('ajustesAlimentos');


// Alimentos
Route::get('/agregarComida',[controladorAlimentos::class,'create'])->name('alimento.create');

//Status
Route::post('agregarIngrediente',[controladorIngredientes::class,'store'])->name('ingrediente.store');