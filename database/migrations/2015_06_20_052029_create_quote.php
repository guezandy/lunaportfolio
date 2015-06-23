<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuote extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('quote', function($newtable) {
          $newtable->increments('id');
          $newtable->integer('user_id');
          $newtable->string('author', 100);
          $newtable->longText('text');
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
        Schema::drop('quote');
    }
}
