<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stories', function (Blueprint $table) {

          $table->increments('id');
          $table->string('name');
          $table->string('description');
          $table->string('image');
          $table->integer('lang_id')->unsigned();
          $table->foreign('lang_id')->references('id')->on('languages')
              ->onUpdate('cascade')
              ->onDelete('cascade');


          $table->longText('body');    
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
        Schema::dropIfExists('stories');
    }
}
