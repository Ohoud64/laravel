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
        Schema::create('products__details', function (Blueprint $table) {
            $table->id();
            $table->integer('products_id');
            $table->decimal('price');
            $table->integer('qty');
            $table->string('img',150);
            $table->string('color',30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products__details');
    }
};
