<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProdsModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_prods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_order');
            $table->foreign('id_order')->references('id')->on('orders')->onDelete('cascade');
            $table->integer('id_product');
            $table->foreign('id_product')->references('id')->on('products')->onDelete('cascade');
            $table->integer('quantity');
            $table->double('price_out');
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
        Schema::dropIfExists('order_prods_models');
    }
}
