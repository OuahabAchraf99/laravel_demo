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
            $table->id('product_id');  
            /*$table->unsignedBigInteger('model_id');
            $table->foreign('model_id')
                    ->references('model_id')
                    ->on('models')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');*/       
            $table->string('brand_name');
            $table->bigInteger('nb_in_stock');
            $table->bigInteger('nb_out_stock');
            $table->bigInteger('quantity');
            $table->softDeletes();
            $table->timestamps();
        });
        DB::statement("ALTER TABLE products ADD CONSTRAINT check_quantity CHECK ( quantity >= 0 )");
        /*Schema::table('products',($table){
            $table->bigInteger('nb_in_stock')->nullable()->change(); // this field may be null since it is not required
            $table->bigInteger('nb_out_stock')->nullable()->change(); // this field may be null since it is not required
            $table->dropColumn('model_id');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
