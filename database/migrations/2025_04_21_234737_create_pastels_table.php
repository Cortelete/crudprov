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
        Schema::create('pastels', function (Blueprint $table) {
            $table->id();
            $table->string('sabor');
            $table->string('tamanho');
            $table->unsignedBigInteger('acompanhamento_id');
            $table->timestamps();

            $table->foreign('acompanhamento_id')->references('id')->on('acompanhamentos')->onDelete('cascade');    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pastels');
    }
};
