<?php

use App\Models\PlacaQR;
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
        Schema::create('lecturas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('celular');
            $table->dateTime('fechaHora');
            $table->timestamps();
            $table->unsignedBigInteger('PlacaQR_id');
            $table->foreign('PlacaQR_id')->references('id')->on('placa_q_r_s');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lecturas');
    }
};
