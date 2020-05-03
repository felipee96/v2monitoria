<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportarFallasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportar_fallas', function (Blueprint $table) {
            $table->id();
            $table->string('monitor',50);
            $table->string('sede',50);
            $table->string('sala',50);
            $table->string('equipo',50);
            $table->string('descripcion',200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reportar_fallas');
    }
}
