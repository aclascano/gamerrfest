<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJuegoGrupalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juego_grupal', function (Blueprint $table) {
            $table->integer('CODIGO_JUEGRU')->primary();
            $table->integer('CODIGO_AUL')->nullable();
            $table->string('NOMBRE_JUEGRU', 100)->nullable();
            $table->time('DURACION_JUEGRU')->nullable();
            $table->string('INTEGRANTES_JUEGRU', 250)->nullable();
            
            $table->foreign('CODIGO_AUL', 'FK_RELATIONSHIP_1')->references('CODIGO_AUL')->on('aula');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('juego_grupal');
    }
}
