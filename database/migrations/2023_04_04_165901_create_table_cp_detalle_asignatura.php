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
        Schema::create('cp_detalle_asignatura', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_asignatura');
            $table->foreign('id_asignatura')->references('id')->on('cp_asignatura');
            $table->date('fecha');
            $table->integer('semana');
            $table->integer('dia');
            $table->integer('modulo');
            $table->json('info')->nullable();
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
        Schema::dropIfExists('cp_detalle_asignatura');
    }
};
