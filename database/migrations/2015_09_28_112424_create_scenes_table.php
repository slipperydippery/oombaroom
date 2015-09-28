<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scenes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('artist');
            $table->text('comment');
            $table->string('media_link');
            $table->integer('media_id')->unsigned();
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('lock');
            $table->integer('lock_id')->unsigned()->index();
            $table->foreign('lock_id')->references('id')->on('locks')->onDelete('cascade');
            $table->integer('act_id')->unsigned()->index();
            $table->foreign('act_id')->references('id')->on('acts')->onDelete('cascade');
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
        Schema::drop('scenes');
    }
}
