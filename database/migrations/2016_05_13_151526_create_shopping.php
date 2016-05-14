<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopping extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopping', function($deerfieldShopping) {
            $deerfieldShopping->increments('id');
            $deerfieldShopping->string('shoppingName', 250);
            $deerfieldShopping->string('shoppingAddress',500)->nullable;
            $deerfieldShopping->string('shoppingPhone')->nullable;
            $deerfieldShopping->string('shoppingWebsite', 500)->nullable;
            $deerfieldShopping->text('description',500)->nullable;
            $deerfieldShopping->string('image',500)->nullable;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shopping');
    }
}
