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
        $table->unsignedBigInteger('idRaza');
        //Clave foranea
        $table->unsignedBigInteger('idTitular');
        $table->foreign('idTitular')->references('id')->on('titular');
    
        

        

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
