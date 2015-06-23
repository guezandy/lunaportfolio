<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('entity', function($newtable)
        {
            $newtable->increments('id');
            $newtable->integer('user_id');
            $newtable->integer('logo_id');
            $newtable->string('company_name', 100);
            $newtable->longText('company_slogan');
            $newtable->string('facebook', 100);
            $newtable->string('linkedin', 100);
            $newtable->string('dribble', 100);
            $newtable->string('twitter', 100);
            $newtable->string('instagram', 100);
            $newtable->string('behance', 100);
            $newtable->string('email', 100);
            $newtable->string('github', 100);
            $newtable->timestamp('deleted_at')->nullable();
            $newtable->longText('extra_1');
            $newtable->longText('extra_2');
            $newtable->string('website', 100);
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
        Schema::drop('entity');
    }
}
