<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\User;

class UsuariosController extends Controller
{
    public function index (){
        $usuarios = User::get();
        return redirect('usuarios.agregar',compact('usuarios'));
    }
    public function create (){

        return redirect('usuarios.index');
    }
    
    public function updateshow (){

        return redirect('usuarios.show');
    }
    public function update (){

        return redirect('usuarios.index');
    }
    public function delete (){

        return redirect('usuarios.index');
    }
}
