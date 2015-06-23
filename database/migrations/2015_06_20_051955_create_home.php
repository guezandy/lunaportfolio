<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHome extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('home', function($newtable) {
          $newtable->increments('id');
          $newtable->integer('user_id');
          $newtable->string('title', 100);
          $newtable->longText('caption');
          $newtable->integer('image_id');
          $newtable->string('video_url', 100);
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
        Schema::drop('home');
    }
}
