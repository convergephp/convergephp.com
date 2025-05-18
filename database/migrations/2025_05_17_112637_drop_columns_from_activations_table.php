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
        Schema::table('activations', function (Blueprint $table) {
            $table->dropColumn(['arch', 'platform', 'os_version']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('activations', function (Blueprint $table) {
             $table->string('arch')->nullable();
            $table->string('platform')->nullable(); 
            $table->string('os_version')->nullable(); 
        });
    }
};
