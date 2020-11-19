<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('models', function (Blueprint $table) {
            $table->id('model_id');

            /** the state should be an enum,
            * so the line should be like that
            * $table->enum('state',array(value1,value2,..))
            *but we'll start just with a string untill the things get clear */
            
            $table->string('state',255);
        });
    }

    // run this command to drop this table since we don't need it anymore
    // php artisan migrate:rollback
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('models');
    }
}
