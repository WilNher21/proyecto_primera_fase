<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaestrosGrados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maestros_grados', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('maestros_id');
            $table->unsignedBigInteger('grados_id');

            $table->foreign('maestros_id')->references('id')->on('maestros')->onDelate('cascade');
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
        Schema::dropIfExists('maestros_grados');
    }
}
