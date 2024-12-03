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
        Schema::create('stock_movements', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->integer('movement_type_id');
            $table->integer('source_warehouse');
            $table->integer('customer_id');
            $table->integer('receiving_warehouse');
            $table->decimal('quantity');
            $table->decimal('total_value');
            $table->integer('status_id');
            $table->text('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_movements');
    }
};
