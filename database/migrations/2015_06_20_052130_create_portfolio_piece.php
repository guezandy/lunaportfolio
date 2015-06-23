<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioPiece extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('portfolio_piece', function($table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('title');
            $table->longText('caption');
            $table->string('content_title_1');
            $table->longText('content_text_1');
            $table->string('content_title_2');
            $table->longText('content_text_2');
            $table->string('content_title_3');
            $table->longText('content_text_3');
            $table->string('content_title_4');
            $table->longText('content_text_4');
            $table->string('info_title_1');
            $table->longText('info_text_1');
            $table->string('info_title_2');
            $table->longText('info_text_2');
            $table->longText('extra_1');
            $table->longText('extra_2');
            $table->longText('extra_3');
            $table->longText('extra_4');                                                 
            $table->timestamp('deleted_at')->nullable();
            $table->string('view_on_url', 100);
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
        Schema::drop('portfolio_piece');
    }
}
