<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistromonitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registromonitors', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->string('codigo');
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
        Schema::dropIfExists('registromonitors');
    }
}
