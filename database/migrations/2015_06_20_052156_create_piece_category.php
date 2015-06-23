<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePieceCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Joint table for pieces and categories
        Schema::create('piece_category', function($table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->integer('piece_id');
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
        Schema::drop('piece_category');
    }
}
