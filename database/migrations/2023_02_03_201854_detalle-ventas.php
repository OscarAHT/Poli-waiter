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
        Schema::create('detalle-ventas', function (Blueprint $table) {
           
            // $table->id()->unisgned();
            // $table->integer('alimento')->unsigned();
            $table->integer('cantidad');
            $table->float('granTotal');
            $table->foreignId('id')->constrained('ventas'); 
            $table->foreignId('alimento')->constrained('alimentos'); 

            // $table->integer('id')->references('id')->on('ventas');
            // $table->integer('alimento')->references('id')->on('alimentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle-ventas');
    }
};
