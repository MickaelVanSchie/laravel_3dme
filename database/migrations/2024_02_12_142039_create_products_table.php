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
        Schema::create('main_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('product_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->integer('main_category_id')->references('id')->on('main_categories');
            $table->timestamps();
        });
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->string('name');
            $table->text('description');
            $table->integer('category_id')->references('id')->on('product_categories');
            $table->float('price');
            $table->float('production_price');
            $table->float('minimum_selling_price');
            $table->integer('stock');
            $table->text('shipment_type');
            $table->text('image');
            $table->boolean('active');
            $table->json('variants');
            $table->json('related_products');
            $table->boolean('google_feed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('main_categories');
        Schema::dropIfExists('product_categories');
    }
};
