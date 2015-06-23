<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('skill_list', function($table) {
            $table->increments('id');
            $table->Integer('user_id');
            $table->Integer('skill_parent');
            $table->string('skill', 100);
            $table->string('value', 10);
            $table->longText('extra_1');
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
        Schema::drop('skill_list');

    }
}
