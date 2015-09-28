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
            $table->timestamps();
        });

        Schema::create('acts_funerals', function(Blueprint $table)
        {
            $table->integer('act_id')->unsigned()->index();
            $table->foreign('act_id')->references('id')->on('acts')->onDelete('cascade');
            $table->integer('funeral_id')->unsigned()->index();
            $table->foreign('funeral_id')->references('id')->on('funerals')->onDelete('cascade');
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
        Schema::drop('funerals');
    }
}
