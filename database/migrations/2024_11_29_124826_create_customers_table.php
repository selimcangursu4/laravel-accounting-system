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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_type_id');
            $table->string('name');
            $table->string('phone');
            $table->string('alternative_phone');
            $table->string('email');
            $table->string('website');
            $table->string('current_code');
            $table->integer('country_id');
            $table->integer('city_id');
            $table->integer('district_id');
            $table->string('fax_number');
            $table->text('address');
            $table->string('postal_code');
            $table->string('tax_office');
            $table->string('tax_number');
            $table->string('iban');
            $table->boolean('marketing_consent');
            $table->integer('status_id');
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
