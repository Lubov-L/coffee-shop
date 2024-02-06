<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cart_products', function (Blueprint $table) {
            $table->foreignId('cart_id');
            $table->string('count');
            $table->string('price');

            $table->foreign('cart_id')->references('id')->on('carts');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cart_products');
    }
};
