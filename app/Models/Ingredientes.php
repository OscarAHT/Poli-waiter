<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredientes extends Model
{
    use HasFactory;

    protected $table = 'ingredientes';

    protected $fillable = [
        'descripcion',
        'disponibilidad',
        'ingredienteExtra',
        'precioVenta'
    ];



}