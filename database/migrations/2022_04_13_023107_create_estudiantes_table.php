<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();

            $table->string('foto');
            $table->string('nombreestudiante');
            $table->string('apellidoestudiante');
            $table->string('identificacionestudiante');
            $table->date('fechanac');
            $table->text('discapacidad');
            $table->string('direccion');
            $table->string('barrio');
            $table->string('estrato');
            $table->string('eps');
            $table->string('curso');
            $table->string('nombrepadre');
            $table->string('telefonopadre');
            $table->string('correopadre');
            $table->string('identificacionpadre');
            $table->string('nombremadre');
            $table->string('telefonomadre');
            $table->string('correomadre');
            $table->string('identificacionmadre');

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
        Schema::dropIfExists('estudiantes');
    }
};
