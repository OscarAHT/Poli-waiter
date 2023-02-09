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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            // $table->integer('tipoUsuario')->unsigned();
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno')->nullable();
            $table->foreignId('tipoUsuario')->constrained('tiposUsuarios'); 

            // $table->foreign('tipoUsuario')->references('id')->on('tiposUsuarios'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
};
