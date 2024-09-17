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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('customer_name');
            $table->string('phone_number');
            $table->string('service_type');
            $table->decimal('weight', 8, 2);
            $table->date('pickup_date');
            $table->text('special_instructions')->nullable();
            $table->unsignedInteger('price')->default(0);
            $table->decimal('total_price', 10, 2)->default(0);
            $table->enum('status', ['pending', 'processing', 'ready', 'done'])->default('pending');
            $table->foreignId('user_id')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
