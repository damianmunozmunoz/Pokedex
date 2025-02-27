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
        Schema::create('pokemons', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->double('peso');
            $table->double('altura');
            $table->string('genero');
            $table->unsignedBigInteger('id_tipo');
            $table->unsignedBigInteger('id_generacion');
            $table->unsignedBigInteger('id_objeto')->nullable();
            $table->unsignedBigInteger('id_equipo')->nullable();

            $table->foreign('id_tipo')->references('id')->on('tipos')->onDelete('cascade');
            $table->foreign('id_generacion')->references('id')->on('generacion')->onDelete('cascade');
            $table->foreign('id_objeto')->references('id')->on('objetos')->onDelete('cascade');
            $table->foreign('id_equipo')->references('id')->on('equipos')->onDelete('cascade');
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemons');
    }
};
