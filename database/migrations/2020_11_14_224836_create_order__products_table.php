<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_product', function (Blueprint $table) {
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('product_id');
            $table->primary(['order_id','product_id']);
            $table->foreign('order_id')  // FK 1
                    ->references('order_id')
                    ->on('orders')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreign('product_id')  // FK 1
                    ->references('product_id')
                    ->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');        
            $table->timestamps();
            $table->softDeletes();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order__products');
    }
}
