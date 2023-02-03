<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->float('monto');
            $table->int('tipoDePago');
            $table->date('fecha');
            $table->int('tipoUsuario');
            $table->int('empleado'); 
            $table->int('tipoDePago')->references('id')->on('tiposDePago');
            $table->int('empleado')->references('id')->on('personas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
};
