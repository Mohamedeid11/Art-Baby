<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('region_id')->default(0);
            $table->string('city')->nullable();
            $table->string('name')->nullable();
            $table->string('lat');
            $table->string('long');
            $table->string('phone');
            $table->string('block', 100);
            $table->string('road', 100);
            $table->string('floor_no', 100);
            $table->string('apartment', 100);
            $table->enum('type', ['flat', 'office']);
            $table->text('additional_directions')->nullable();
            $table->foreign('client_id')->on('clients')->references('id');
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
        // Schema::dropIfExists('addresses');
    }
}
