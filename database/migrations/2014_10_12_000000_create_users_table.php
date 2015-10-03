<?php

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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone_mob');
            $table->string('phone_home');
            $table->string('adress_street');
            $table->string('adress_city');
            $table->string('adress_postalcode');
            $table->string('adress_country');
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('user_user', function(Blueprint $table)
        {
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('friend_id')->unsigned()->index();
            $table->foreign('friend_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::drop('user_user');
        Schema::drop('users');
    }
}
