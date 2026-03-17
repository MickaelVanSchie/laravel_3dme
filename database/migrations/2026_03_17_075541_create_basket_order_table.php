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
        Schema::create('address', function (Blueprint $table) {
            $table->id();
            $table->string('street');
            $table->string('houseNumber');
            $table->string('postalCode');
            $table->string('city');
            $table->string('country');
        });
        Schema::create('basket_order', function (Blueprint $table) {
            $table->id();
            $table->integer('addressId')->references('id')->on('address');
            $table->integer('invoiceAddressId')->references('id')->on('address');
            $table->string('email');
            $table->string('name');
            $table->string('lastName');
            $table->string('phoneNumber');
            $table->string('status');
            $table->dateTime('orderDate');
            $table->string('shippingMethod');
            $table->string('trackAndTrace');
            $table->string('molliePaymentId');
            $table->string('mollieOrderId');
            $table->integer('shippingCostCents');
            $table->integer('discountCents');
            $table->string('actiecode');
            $table->integer('paymentFee');
            $table->string('paymentMethod');
            $table->string('invoiceId');
            $table->boolean('invoiceSent');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('basket_order');
        Schema::dropIfExists('address');
    }
};
