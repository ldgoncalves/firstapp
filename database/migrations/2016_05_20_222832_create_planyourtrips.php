<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanyourtrips extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planyourtrips', function($thePlanyourtrip)
        {
            $thePlanyourtrip->increments('id');
            $thePlanyourtrip->integer('userid');
            $thePlanyourtrip->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('planyourtrips');
    }
}
