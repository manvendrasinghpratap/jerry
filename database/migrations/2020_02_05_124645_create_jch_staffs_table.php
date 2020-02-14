<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJchStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('middle_name')->nullable(true);
            $table->string('last_name')->nullable(true);
            $table->dateTime('hired_date')->nullable(true);
            $table->string('street_no')->nullable(true);
            $table->string('street_name')->nullable(true);
            $table->string('apartment')->nullable(true);
            $table->string('address')->nullable(true);
            $table->string('city')->nullable(true);
            $table->unsignedBigInteger('state_id');
            $table->foreign('state_id')->references('id')->on('states');
            $table->string('zipcode')->nullable(true);
            $table->string('email')->unique();
            $table->string('social_security',100)->nullable(true);
            $table->integer('phone_no')->nullable(true);
            $table->unsignedBigInteger('region_id');
            $table->foreign('region_id')->references('id')->on('regions');  
            $table->unsignedBigInteger('job_title_id');
            $table->foreign('job_title_id')->references('id')->on('job_titles');           
            $table->integer('emergency_contact_name')->nullable(true);
            $table->integer('emergency_contact_number')->nullable(true);
            $table->unsignedBigInteger('profession_id');
            $table->foreign('profession_id')->references('id')->on('professions');  
            $table->string('licence',100)->nullable(true);
            $table->dateTime('licence_exp_date')->nullable(true);
            $table->dateTime('cpr_card_exp_date')->nullable(true);
            $table->dateTime('first_aid_card_exp_date')->nullable(true);
            $table->dateTime('assignment_date')->nullable(true);
            $table->time('assignment_time')->nullable(true);
            $table->tinyInteger('status')->default(0);
            $table->dateTime('status_change_date')->nullable(true);
            $table->softdeletes();
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
        Schema::dropIfExists('staffs');
    }
}
