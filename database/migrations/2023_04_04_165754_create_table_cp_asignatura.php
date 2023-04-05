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
        Schema::create('cp_asignatura', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_escenario');
            $table->foreign('id_escenario')->references('id')->on('cp_escenario');

            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('usuario');

            $table->string('nombre',200);
            $table->string('cod',200)->nullable();
            $table->string('descripcion',500)->nullable();

            $table->integer('estado')->default(0);
            $table->json('config')->nullable();
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
        Schema::dropIfExists('cp_asignatura');
    }
};
