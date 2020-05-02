<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroMonitor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_monitor', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->string('codigo');
            $table->string('apellido',50);
            $table->string('facultad',50);
            $table->string('programa',50);
            $table->string('semestre',50);
            $table->string('sala',50);
            $table->string('horario',50);
            $table->string('administrador',50);
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
        Schema::dropIfExists('registro_monitor');
    }
}
