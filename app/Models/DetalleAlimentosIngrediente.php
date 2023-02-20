<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Alimentos;
use App\Models\Ingredientes;

class DetalleAlimentosIngrediente extends Model
{
    use HasFactory;

    protected $table ='detalle_alimentos-ingredientes';

    public function Alimentos (){

    }
    public function Ingredientes (){
        
    }

}
