<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id',false,true);
            $table->string('image');
            $table->integer('discount')->nullable();
            $table->boolean('display')->default(1);
            // $table->foreign('category_id')>references('id')->on('categories');
            // $table->foreign('category_id')->on('categories')->references('id')->onDelete('cascade');;
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
        // Schema::dropIfExists('sliders');
    }
}
