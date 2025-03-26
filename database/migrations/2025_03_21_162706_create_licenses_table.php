<?php

use App\Models\Product;
use App\Models\User;
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
        Schema::create('licenses', function (Blueprint $table) {

            $table->id();

            $table->foreignId('user_id')
                ->constrained()
                ->restrictOnUpdate()
                ->restrictOnDelete();

            $table->foreignId('product_id')
                ->constrained()
                ->restrictOnUpdate()
                ->restrictOnDelete();

            $table->foreignId('product_price_id')
                ->constrained()
                ->restrictOnUpdate()
                ->restrictOnDelete();

            $table->string('key', 64)->unique(); 

            // we don't actually need those paddle ids in these license table but maybe the product id and price id are nullable
            // (while this not possible) but we don't have controle over paddle APIs so we can excepect anything and
            // we must do our fallback, and at least setting the paddle level ids

            /** FALL_BACK_STARTS */
            
            $table->string('paddle_product_id')->nullable(); 

            $table->string('paddle_product_price_id')->nullable(); 
            
            /** FALL_BACK_ENDS */

            
            $table->integer('satis_authentication_count')->default(0); // current activations

            $table->integer('quantity')->default(1);

            $table->unsignedBigInteger('activation_limit')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('licenses');
    }
};
