<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJugadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugador', function (Blueprint $table) {
            $table->integer('ID_JUGADOR')->primary();
            $table->string('CEDULA_JUGADOR', 10)->nullable();
            $table->string('ESTADO_JUGADOR', 100)->nullable();
            $table->string('CORREO_JUGADOR', 250)->nullable();
            $table->string('TELEFONO_JUGADOR', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jugador');
    }
}
