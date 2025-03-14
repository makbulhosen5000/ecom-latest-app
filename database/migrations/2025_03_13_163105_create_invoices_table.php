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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'total');
            $table->string(column: 'discount');
            $table->string('vat');
            $table->string('payable');
            $table->string('cost_details');
            $table->string('ship_details');
            $table->string('shipping_method');
            $table->string('tran_id');
            $table->string('val_id')->default(0);
            $table->enum('delivery_status',['success','processing','completed']);
            $table->string('payment_status');
            
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->restrictOnDelete()->cascadeOnUpdate();
           
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp(column: 'updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
