<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funerals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('commentary');
            $table->text('quote');
            $table->string('ceremony');
            $table->string('burial_type');
            $table->string('location');
            $table->string('casket');
            $table->string('song_name');
            $table->integer('song_id')->unsigned();
            $table->string('song_link');
            $table->integer('picture_id')->unsigned();
            $table->string('picture_link');
            $table->string('picture_alt');
            $table->boolean('active');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('lock_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users');
            $table->foreign('lock_id')
                  ->references('id')
                  ->on('locks')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('funerals');
    }
}
