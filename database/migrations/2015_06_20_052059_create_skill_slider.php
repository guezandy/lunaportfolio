<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillSlider extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('skill_slider', function($newtable)
        {
              $newtable->increments('id');
              $newtable->integer('user_id');
              $newtable->string('skill_title', 100);
              $newtable->longText('skill_caption');
              $newtable->string('value', 100);
              $newtable->timestamp('deleted_at')->nullable();
              $newtable->longText('extra_1')->nullable();
              $newtable->longText('extra_2')->nullable();
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
        Schema::drop('skill_slider');
    }
}
