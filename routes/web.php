<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorIngredientes;

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






// Alimentos
Route::get('/agregarAlimento', function () {
    return view('Alimentos/registrarComida');
})->name('registrarComida');

//Status
Route::post('agregarIngrediente',[controladorIngredientes::class,'store'])->name('ingrediente.store');