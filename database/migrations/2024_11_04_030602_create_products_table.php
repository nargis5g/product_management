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
            $table->string('product_id')->unique()->notNullable(); 
            $table->string('name')->notNullable();
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2)->notNullable(); 
            $table->integer('stock')->nullable(); 
            $table->string('image')->nullable();
            $table->timestamps();
                    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};







Schema::create('products', function (Blueprint $table) {
    $table->id();
    $table->string('product_id')->unique()->notNullable(); 
    $table->string('name')->notNullable();
    $table->text('description')->nullable();
    $table->decimal('price', 10, 2)->notNullable(); 
    $table->integer('stock')->nullable(); 
    $table->string('image')->nullable();
    $table->timestamps();
});