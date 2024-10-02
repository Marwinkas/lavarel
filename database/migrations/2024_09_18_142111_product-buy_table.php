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

        Schema::create('product_buy', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('amount');
            $table->integer('cost');
        });
        Schema::connection('mysql')->create('product_buy', function (Blueprint $table) {
            $table->id();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_buy');
    }
};
