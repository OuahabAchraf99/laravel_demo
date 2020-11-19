<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->id('price_id');
            $table->bigInteger('min_quantity');
            $table->bigInteger('max_quantity');
            $table->double('price_dzd');
            $table->double('price_eur');
            $table->double('price_dollar');

        });
            // Add the constraint
        DB::statement('ALTER TABLE prices ADD CONSTRAINT chk_quantity_amount CHECK (max_quantity>=min_quantity)');
        DB::statement('ALTER TABLE prices ADD CONSTRAINT chk_price CHECK(price_dzd > 0 AND price_eur >0 AND price_dollar > 0)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prices');
    }
}
