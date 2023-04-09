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
        Schema::create('solicitud', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_actividad');
            $table->foreign('id_actividad')->references('id')->on('cp_actividad');
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
