<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_category', function (Blueprint $table) {
            $table->unsignedBigInteger('CategoryID');
            $table->foreign('CategoryID')
                ->references('CategoryID')
                ->on('categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');  

                $table->unsignedBigInteger('MemberID');
                $table->foreign('MemberID')
                    ->references('MemberID')
                    ->on('members')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');  

            $table->primary(['MemberID', 'CategoryID']);

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
        Schema::dropIfExists('buyer_category');
    }
}
