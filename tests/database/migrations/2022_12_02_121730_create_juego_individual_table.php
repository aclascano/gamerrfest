<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJuegoIndividualTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juego_individual', function (Blueprint $table) {
            $table->integer('CODIGO_JUE')->primary();
            $table->integer('CODIGO_AUL')->nullable();
            $table->string('NOMBRE_JUE', 100)->nullable();
            $table->time('DURACION_JUE')->nullable();
            $table->decimal('PRECIO_JUE', 5, 2)->nullable();
            
            $table->foreign('CODIGO_AUL', 'FK_RELATIONSHIP_2')->references('CODIGO_AUL')->on('aula');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('juego_individual');
    }
}
