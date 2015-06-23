<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeSlider extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('home_slider', function($newtable) {
          $newtable->increments('id');
          $newtable->integer('user_id');
          $newtable->integer('image_id');
          $newtable->string('title', 100);
          $newtable->longText('caption');
          $newtable->timestamp('deleted_at')->nullable();
          $newtable->longText('extra_1');
          $newtable->longText('extra_2');
          $newtable->timestamps();
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
        Schema::drop('home_slider');
    }
}
