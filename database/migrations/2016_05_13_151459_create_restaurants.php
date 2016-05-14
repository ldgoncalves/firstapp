<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function($deerfieldRestaurants) {
            $deerfieldRestaurants->increments('id');
            $deerfieldRestaurants->string('restaurantsName', 250);
            $deerfieldRestaurants->string('restaurantsAddress',500)->nullable;
            $deerfieldRestaurants->string('restaurantsPhone')->nullable;
            $deerfieldRestaurants->string('restaurantsWebsite', 500)->nullable;
            $deerfieldRestaurants->text('description',500)->nullable;
            $deerfieldRestaurants->string('image',500)->nullable;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('restaurants');
    }
}
