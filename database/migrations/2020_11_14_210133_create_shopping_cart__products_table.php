<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShoppingCartProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopping_cart_product', function (Blueprint $table) {
            $table->unsignedBigInteger('shopping_cart_id');
            $table->unsignedBigInteger('product_id');
            $table->primary(['shopping_cart_id','product_id']);
            $table->foreign('shopping_cart_id')  // FK 1
                    ->references('shopping_cart_id')
                    ->on('shopping_carts')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreign('product_id')  // FK 1
                    ->references('product_id')
                    ->on('products')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');        
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shopping_cart__products');
    }
}
