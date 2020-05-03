<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFallaEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('falla_equipos', function (Blueprint $table) {
            $table->id();
            $table->string('monitor',50);
            $table->string('sede',50);
            $table->string('sala',50);
            $table->string('equipo',50);
            $table->string('descripcion',200);
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
        Schema::dropIfExists('falla_equipos');
    }
}
