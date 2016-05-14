<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function($deerfieldHotels) {
            $deerfieldHotels->increments('id');
            $deerfieldHotels->string('hotelName', 250);
            $deerfieldHotels->string('hotelAddress',500)->nullable;
            $deerfieldHotels->string('hotelPhone')->nullable;
            $deerfieldHotels->string('hotelWebsite', 500)->nullable;
            $deerfieldHotels->text('description',500)->nullable;
            $deerfieldHotels->string('image',500)->nullable;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hotels');
    }
}
