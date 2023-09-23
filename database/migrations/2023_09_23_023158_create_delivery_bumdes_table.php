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
        Schema::create('delivery_bumdes', function (Blueprint $table) {
            $table->id();
            $table->string('driver_name');
            $table->string('phone_number');
            $table->string('car_type');
            $table->string('charge');
            $table->foreignId('transaction_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_bumdes');
    }
};
