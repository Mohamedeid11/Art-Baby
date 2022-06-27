<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('agent_id');
            $table->unsignedBigInteger('color_id');
            $table->string('name_ar', 100);
            $table->string('name_en', 100);
            $table->text('desc_ar');
            $table->text('desc_en');
            $table->integer('quantity');
            $table->decimal('price', 8, 3);
            $table->string('code');
            $table->string('cost');
            $table->decimal('discount', 8, 3)->nullable();
            $table->date('discount_from')->nullable();
            $table->date('discount_to')->nullable();
            $table->boolean('display')->default(1);
            $table->tinyInteger('deliverable')->default(1);
            $table->boolean('featured')->default(0);
            $table->foreign('category_id')->on('categories')->references('id');
            $table->foreign('agent_id')->on('agents')->references('id');
            // $table->foreign('color_id')->on('colors')->references('id');
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
        // Schema::dropIfExists('products');
    }
}
