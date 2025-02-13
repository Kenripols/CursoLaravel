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
    Schema::create('mascotas', function (Blueprint $table) {
        $table->id();
        $table->string('foto');
        $table->string('nombre');
        $table->string('tipo');
        $table->date('fechaNac');
        //Clave foranea de Raza
        $table->unsignedBigInteger('idRaza');
        $table->foreign('idRaza')->references('id')->on('razas');
        //Clave foranea
        $table->unsignedBigInteger('titular_id');
        $table->foreign('titular_id')->references('id')->on('titular');
    
        

        

        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mascotas');
    }
};
