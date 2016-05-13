<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function($deerfieldUsers) {
            $deerfieldUsers->increments('id');
            $deerfieldUsers->string('users');
            $deerfieldUsers->string('password');
            $deerfieldUsers->string('email');
            $deerfieldUsers->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
