<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('users');
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();            
            $table->timestamp('email_verified_at')->nullable();
            $table->string('username');
            $table->string('password');
            $table->string('dept');
            $table->rememberToken();
            $table->timestamps();
        });
        //// Change this if details are incomplete /////


        ////////////////////// FOR MARKET /////////////////////////////
        Schema::dropIfExists('stall_applicant');
        Schema::create('stall_applicant', function(Blueprint $table){
            $table->bigIncrements('applicant_id');
            $table->string('name');
            $table->date('birthdate');
        });
        Schema::dropIfExists('rental');
        Schema::create('rental', function (Blueprint $table){
            $table->bigIncrements('stall_id');
            $table->string('stall_owner');
            $table->timestamp('date_aquired');
        });
        Schema::dropIfExists('stall_details');
        Schema::create('stall_details', function (Blueprint $table){
            $table->bigIncrements('stall_id');
            $table->string('stall_type');
            $table->boolean('availability');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
