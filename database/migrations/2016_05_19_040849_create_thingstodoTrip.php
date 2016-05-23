<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThingstodoTrip extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thingstodoTrip', function($newtable) {
            $newtable->increments('id');
            $newtable->integer('tripid')->unique();
            $newtable->integer('thingstodoid')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('thingstodoTrip');
    }
}
