<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('nombre',50);            
            $table->string('apellido',50);
            $table->string('facultad',50);
            $table->string('programa',50);
            $table->string('semestre',50);
            $table->string('computador',50);
            $table->string('monitor',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_estudiantes');
    }
}
