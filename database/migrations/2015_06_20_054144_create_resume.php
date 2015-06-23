<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResume extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
      Schema::create('resume',function($table)
      {
        $table->increments('id');
        $table->Integer('user_id');
        $table->string('company');
        $table->string('position');
        $table->string('location');
        $table->longText('description');
        $table->tinyInteger('is_present')->default('0');
        $table->timestamp('from');
        $table->timestamp('to');
        $table->timestamp('deleted_at')->nullable();
        $table->timestamps();
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
        Schema::drop('resume');

    }
}
