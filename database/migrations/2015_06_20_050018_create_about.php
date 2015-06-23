<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbout extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('about', function($newtable)
        {
              $newtable->increments('id');
              $newtable->integer('user_id');
              $newtable->string('first_title', 100);
              $newtable->longText('first_caption');
              $newtable->string('second_title', 100);
              $newtable->longText('second_caption');
              $newtable->string('third_title', 100);
              $newtable->longText('third_caption');
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
        Schema::drop('about');
    }
}
