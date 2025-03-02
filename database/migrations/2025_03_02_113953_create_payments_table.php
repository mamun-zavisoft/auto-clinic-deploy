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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->enum('transaction_type', ['purchase', 'sale']); // 'purchase' or 'sale'
            $table->unsignedBigInteger('transaction_id'); // Purchase/Sale ID
            $table->decimal('grand_total', 15, 2);
            $table->decimal('due_amount', 15, 2)->default(0);
            $table->decimal('paid_amount', 15, 2)->default(0);
            $table->enum('paid_status', ['full_due', 'partial_paid', 'full_paid', 'in_house'])->default('full_due');

            $table->timestamps();

            $table->index(['transaction_type', 'transaction_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
