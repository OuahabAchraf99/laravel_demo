<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipements', function (Blueprint $table) {
            $table->unsignedBigInteger('shipement_id'); // PK 1 :: NOT AUTO_INCREMENT
            $table->text('shipping_method');
            $table->date('shipement_date');
            $table->text('export_method');
            $table->text('shipping_adress');
            $table->unsignedBigInteger('order_id'); // PK 2 :: NOT AUTO_INCREMENT
            $table->primary(['shipement_id','order_id']);
            $table->foreign('order_id') // FK 1
                    ->references('order_id')
                    ->on('orders')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');  
            $table->softDeletes();
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
        Schema::dropIfExists('shipements');
    }
}
