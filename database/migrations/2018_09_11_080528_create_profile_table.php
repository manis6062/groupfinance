<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');  
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone' , 30)->nullable();
            $table->string('mobile' , 30)->nullable();
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('job_title')->nullable();
            $table->text('bio')->nullable();
            $table->string('gender')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('licence')->nullable();
            $table->text('family_details')->nullable();
            $table->string('education')->nullable();
            $table->string('city')->nullable();
            $table->string('country_1')->nullable();
            $table->string('country_2')->nullable();
            $table->string('post_code')->nullable();
            $table->string('dob')->nullable();
            $table->string('profile_pic')->nullable();
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
        Schema::dropIfExists('profile');
    }
}
