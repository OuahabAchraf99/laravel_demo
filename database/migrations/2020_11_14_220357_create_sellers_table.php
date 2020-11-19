<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            

            $table->text('Description');
            $table->string('CompanyName');
            $table->text('OfficialWebSite')->nullable(); // Because it can reach 2048 characters

            $table->date('DateEstablished')->nullable(); // Date when the Seller started working.
            $table->double('AnnualIncome')->nullable();

            $table->float('Rating',1,1);
            $table->float('ResponseRate',3,2); // 100.00 or 0.00 

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
        Schema::dropIfExists('sellers');
    }
}
