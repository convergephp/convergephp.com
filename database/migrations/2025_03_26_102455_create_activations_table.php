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
        Schema::create('activations', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique(); // Unique activation ID
            $table->foreignId('license_id')->constrained()->cascadeOnDelete();
            $table->json('signed_activation')->nullable(); // Signed verification data
            $table->string('current_version')->nullable();
            $table->string('arch')->nullable(); 
            $table->string('platform')->nullable(); 
            $table->string('os_version')->nullable();
            $table->timestamps();
        });
    }

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activations');
    }
};
