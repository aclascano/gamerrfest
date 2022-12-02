<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscripcionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcion', function (Blueprint $table) {
            $table->integer('ID_INS')->primary();
            $table->integer('CODIGO_JUEGRU')->nullable();
            $table->integer('CODIGO_JUE')->nullable();
            $table->integer('ID_JUGADOR')->nullable();
            $table->string('PAGO_INS', 100)->nullable();
            $table->string('ESTADO_INS', 100)->nullable();
            
            $table->foreign('CODIGO_JUEGRU', 'FK_RELATIONSHIP_3')->references('CODIGO_JUEGRU')->on('juego_grupal');
            $table->foreign('ID_JUGADOR', 'FK_RELATIONSHIP_5')->references('ID_JUGADOR')->on('jugador');
            $table->foreign('CODIGO_JUE', 'FK_RELATIONSHIP_7')->references('CODIGO_JUE')->on('juego_individual');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscripcion');
    }
}
