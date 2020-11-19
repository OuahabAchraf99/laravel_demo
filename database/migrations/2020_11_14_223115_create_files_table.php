<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id('file_id');
            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id')->references('product_id')
                  ->on('products')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->unsignedBigInteger('member_id')->nullable();
            $table->foreign('member_id')->references('MemberID')
                                        ->on('members')
                                        ->onDelete('cascade')
                                        ->onUpdate('cascade');


            $table->text('description');
            $table->double('size');
            $table->enum('extension',array('jpeg','png','pdf','mp4'));
            $table->string('name',255);
            $table->text('url');
            $table->string('type',255);
        });
        DB::statement("ALTER TABLE files ADD CONSTRAINT chk_foreign_keys check (product_id <> null and member_id <> null)");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}
