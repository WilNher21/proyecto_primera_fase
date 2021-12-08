<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradoMaestro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grado_maestro', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('maestro_id');
            $table->unsignedBigInteger('grado_id');

            $table->foreign('maestro_id')->references('id')->on('maestros')->onDelate('cascade');
            $table->foreign('grado_id')->references('id')->on('grados')->onDelate('cascade');

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
        Schema::dropIfExists('grado_maestro');
    }
}
