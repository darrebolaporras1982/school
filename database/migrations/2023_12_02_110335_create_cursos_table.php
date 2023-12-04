<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',255);
            $table->enum('nivel',['iniciacion','intermedio','avanzado']);
            $table->integer('horas_academicas');

            //en la relacion de 1:N pasamos a la tabla muchos la clave primaria de la tabla 1
            //creamos la columna profesors_id como clave foranea de la tabla profesors
            $table->unsignedBigInteger('profesors_id');
            $table->foreign('profesors_id')->references('id')->on('profesors');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
