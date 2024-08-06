<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /*public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }*/
    public function up()
    {
    Schema::create('equipos', function (Blueprint $table) {
        $table->id('id_equipo');
        $table->string('nombre', 50);
        $table->integer('integrantes');
        $table->date('fecha_creacion');
        $table->string('lider', 50);
        $table->timestamps();
    });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipos');
    }
}
