<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');           // Titre du projet
            $table->text('description');       // Description du projet
            $table->string('image')->nullable(); // Image (URL ou chemin)
            $table->string('link')->nullable();  // Lien externe vers le projet
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
