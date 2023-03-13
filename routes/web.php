<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorIngredientes;
use App\Http\Controllers\controladorAlimentos;
use App\Http\Controllers\controladorApp;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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
//Store
Route::post('agregarIngrediente',[controladorIngredientes::class,'store'])->name('ingrediente.store');
//Edit
Route::get('ingredientes/editar/{id}',[controladorIngredientes::class,'edit'])->name('ingredientes.edit');
//Update
Route::put('ingredientes/actualizar/{id}',[controladorIngredientes::class,'update'])->name('ingredientes.update');
//Delete
Route::delete('ingredientes/eliminar/{id}',[controladorIngredientes::class,'destroy'])->name('ingredientes.destroy');

// Ajustes



// Alimentos
//show
Route::get('/ajustes/alimentos',[controladorAlimentos::class,'index'])->name('ajustesAlimentos');
//Create
Route::get('/agregarAlimento',[controladorAlimentos::class,'create'])->name('alimento.create');
//Store
Route::post('agregarAlimento',[controladorAlimentos::class,'store'])->name('alimento.store');
//Edit
Route::get('alimentos/editar/{id}',[controladorAlimentos::class,'edit'])->name('alimento.edit');
//Update
Route::put('alimentos/actualizar/{id}',[controladorAlimentos::class,'update'])->name('alimento.update');
//Delete
Route::delete('alimentos/eliminar/{id}',[controladorAlimentos::class,'destroy'])->name('alimento.destroy');