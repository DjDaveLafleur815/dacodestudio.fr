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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');          // 🔹 Titre du service
            $table->text('description');      // 🔹 Description détaillée
            $table->string('price')->nullable(); // 🔹 Prix ou tarif de base
            $table->timestamps();             // 🔹 Dates de création / modification
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
