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
        Schema::create('detalle_alimentos-ingredientes', function (Blueprint $table) {
            $table->foreign('idAlimentos')->references('id')->on('alimentos'); 
            $table->foreign('idIngredientes')->references('id')->on('ingredientes'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_alimentos-ingredientes');
    }
};
