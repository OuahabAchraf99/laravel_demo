<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberNotificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_notification', function (Blueprint $table) {
            $table->unsignedBigInteger('NotificationID');
            $table->foreign('NotificationID')
                ->references('NotificationID')
                ->on('notifications')
                ->onDelete('cascade')
                ->onUpdate('cascade');  

                $table->unsignedBigInteger('MemberID');
                $table->foreign('MemberID')
                    ->references('MemberID')
                    ->on('members')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');  

            $table->primary(['MemberID', 'NotificationID']);

            $table->date('ReadDate')->nullable();
            
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
        Schema::dropIfExists('member_notification');
    }
}
