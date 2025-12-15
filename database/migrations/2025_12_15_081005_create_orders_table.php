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
    $table->foreignId('product_id')->constrained()->onDelete('cascade');  // ← MUST have
    $table->integer('quantity');  // ← MUST have
    $table->decimal('total_price', 8, 2);  // ← MUST have
    $table->string('customer_name');  // ← MUST have
    $table->string('customer_email');  // ← MUST have
    $table->string('customer_phone')->nullable();  // ← MUST have
    $table->text('shipping_address');  // ← MUST have
    $table->enum('status', ['pending', 'processing', 'completed', 'cancelled'])->default('pending');  // ← MUST have
    $table->timestamps();
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
