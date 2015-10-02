<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'),
            $table->string('email'),
            $table->string('phone_mob'),
            $table->string('phone_home'),
            $table->string('adress_street'),
            $table->string('adress_city'),
            $table->string('adress_postalcode'),
            $table->string('adress_country'),
            $table->string('note'),
            $table->string('user_id'),
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string(''),
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
        Schema::drop('guests');
    }
}