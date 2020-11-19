<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id('MemberID'); // we can make sth like dz23568933
            $table->string('Email',320);
            $table->string('Password');
            $table->timestamp('email_verified_at')->nullable();

            $table->string('FirstName');
            $table->string('LastName');

            $table->char('Gender',1)->nullable(); // F or M
            $table->string('JobTitle')->nullable();
            $table->string('Country');
            $table->char('ZipPostalCode',5)->nullable();
            $table->text('Address')->nullable();

            $table->string('Tel',20);
            $table->string('Fax',20)->nullable();
            $table->string('Mobile',20)->nullable();

            $table->string('Facebook')->nullable();
            $table->string('Twitter')->nullable();

            $table->string('BusinessType')->nullable();
            // Profile image is a file!! ==> Type = ProfileImage            

            $table->string('Token')->nullable();
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
        Schema::dropIfExists('members');
    }
}
