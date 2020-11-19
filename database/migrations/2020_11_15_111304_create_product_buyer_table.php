<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductBuyerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_buyer', function (Blueprint $table) {
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('MemberID');
            $table->primary(['order_id','MemberID']);
            $table->foreign('order_id')  // FK 1
                    ->references('order_id')
                    ->on('orders')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreign('MemberID')  // FK 1
                    ->references('MemberID')
                    ->on('buyers')
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
        Schema::dropIfExists('product_buyer');
    }
}
