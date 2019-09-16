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

        //// Change this if details are incomplete /////



        ////////////////////// FOR USERS or the EEDMO Staffs /////////////////////////////
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
        


        ////////////////////// FOR MARKET /////////////////////////////
        Schema::dropIfExists('stall_applicant');
        Schema::create('stall_applicant', function(Blueprint $table){
            $table->bigIncrements('applicant_id');
            $table->string('name');
            $table->date('birthdate');
            $table->string('gender');
            $table->integer('phone_number');
            $table->string('address');
            $table->string('market_address');
            $table->string('stall_name');
            $table->string('stall_category');
            $table->string('stall_id');
            $table->string('stall_description');
            $table->timestamps();
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
            $table->string('stall_code');
            $table->string('market_address');
            $table->string('tenant_id');
            $table->boolean('availability');
        });
        ////////////////////// FOR MARKET /////////////////////////////

        Schema::dropIfExists('slaughterhouse_transaction');
        Schema::create('slaughterhouse_transaction', function (Blueprint $table){
            $table->bigIncrements('transaction_id');
            $table->string('client_name');
            $table->string('client_address');
            $table->string('species');
            $table->bigInteger('unit');
            $table->bigInteger('client_number');            
        });

        Schema::dropIfExists('slaughterhouse_prices');
        Schema::create('slaughterhouse_prices', function (Blueprint $table){
            $table->bigIncrements('price_id');
            $table->string('species');
            $table->bigInteger('price');
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
