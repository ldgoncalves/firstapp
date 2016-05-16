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
        Schema::create('deerfieldUsers', function($deerfieldUsers) {
            $deerfieldUsers->increments('id');
            $deerfieldUsers->string('username', 20)->unique();
            $deerfieldUsers->string('firstname',250)->nullable;
            $deerfieldUsers->string('lastname',250)->nullable;
            $deerfieldUsers->string('password', 20);
            $deerfieldUsers->string('email',100)->unique();
            $deerfieldUsers->rememberToken();
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
        Schema::drop('deerfieldUsers');
    }
}
