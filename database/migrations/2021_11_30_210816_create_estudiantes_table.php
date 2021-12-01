<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
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

            $table->string('nombreAlumno');
            $table->string('apellidoAlumno');
            $table->string('identidad')->unique(); 
            $table->integer('Promedio');
            $table->string('direccion');

            $table->unsignedBigInteger('grados_id');
            $table->foreign('grados_id')->references('id')->on('grados')->onDelate('cascade');

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
}
