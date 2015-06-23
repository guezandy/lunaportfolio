<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('contact', function($newtable)
        {
              $newtable->increments('id');
              $newtable->integer('user_id');
              $newtable->string('first_title', 100);
              $newtable->longText('first_caption');
              $newtable->string('second_title', 100);
              $newtable->longText('second_caption');
              $newtable->string('email', 100);
              $newtable->string('phone', 20);
              $newtable->string('address', 200);
              $newtable->string('latitude', 20);
              $newtable->string('longitude', 20);
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
        Schema::drop('contact');
    }
}
