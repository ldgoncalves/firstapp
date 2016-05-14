<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function($deerfieldEvents) {
            $deerfieldEvents->increments('id');
            $deerfieldEvents->string('eventName', 250);
            $deerfieldEvents->datetime('datetime');
            $deerfieldEvents->string('eventAddress',500)->nullable;
            $deerfieldEvents->string('eventPhone')->nullable;
            $deerfieldEvents->string('eventWebsite', 500)->nullable;
            $deerfieldEvents->text('description',500)->nullable;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('events');
    }
}
