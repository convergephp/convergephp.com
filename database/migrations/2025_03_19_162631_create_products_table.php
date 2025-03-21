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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // component toolkit, themes toolkit... 
            $table->string('slug')->unique();
            $table->string('thmubnail');
            $table->mediumText('description');
            $table->timestamps();
        });
    }

    // component 
        // 29
        // 99
    
    // layouts 50 
        // 50
        // 150
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
