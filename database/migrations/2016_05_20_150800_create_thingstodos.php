<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThingstodos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thingstodos', function($theThingstodo)
        {
            $theThingstodo->increments('id');
            $theThingstodo->string('name');
            $theThingstodo->string('address')->nullable();
            $theThingstodo->string('phone')->nullable();
            $theThingstodo->string('website')->nullable();
            $theThingstodo->text('description')->nullable();
            $theThingstodo->string('image')->nullable();
            $theThingstodo->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('thingstodos');
    }
}
