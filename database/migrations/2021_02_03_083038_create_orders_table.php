<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('address_id');
            $table->unsignedBigInteger('payment_id');
            $table->decimal('sub_total', 9,3);
            $table->decimal('discount', 9,3);
            $table->decimal('coupon', 9,3);
            $table->decimal('vat', 9,3);
            $table->decimal('delivery_charge', 9,3);
            $table->decimal('net_total', 9,3);
            $table->tinyInteger('status')->default(0);
            $table->foreign('client_id')->on('clients')->references('id');
            $table->foreign('address_id')->on('addresses')->references('id');
            $table->foreign('payment_id')->on('payment_methods')->references('id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('orders');
    }
}
