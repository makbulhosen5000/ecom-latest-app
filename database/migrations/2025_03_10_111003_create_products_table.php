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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title',100);
            $table->string('short_desc',500);
            $table->string('price',50);
            $table->string('discount',50);
            $table->string('discount_price',20);
            $table->string('image',200);
            $table->boolean('stock');
            $table->float('star');
            $table->enum('remark',allowed: ['popular','new','top','special','trending','regular']);
        
            $table->unsignedBigInteger(column: 'category_id');
            $table->unsignedBigInteger('brand_id');

             
          
            $table->foreign('category_id')->references('id')->on('categories')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('brand_id')->references('id')->on('brands')->restrictOnDelete()->cascadeOnUpdate();
           
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp(column: 'updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
