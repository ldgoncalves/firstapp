<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThingsToDo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thingsToDo', function($deerfieldThingsToDo) {
            $deerfieldThingsToDo->increments('id');
            $deerfieldThingsToDo->string('thingstodoName', 250);
            $deerfieldThingsToDo->string('thingstodoAddress',500)->nullable;
            $deerfieldThingsToDo->string('thingstodoPhone')->nullable;
            $deerfieldThingsToDo->string('thingstodoWebsite', 500)->nullable;
            $deerfieldThingsToDo->text('description',500)->nullable;
            $deerfieldThingsToDo->string('image',500)->nullable;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('thingsToDo');
    }
}
