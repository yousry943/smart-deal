<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTechicalAnalysesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_techical_analyses', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->string('showname');

       $table->integer('lang_id')->unsigned();
       $table->foreign('lang_id')->references('id')->on('languages')
           ->onUpdate('cascade')
           ->onDelete('cascade');
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
        Schema::dropIfExists('categories_techical_analyses');
    }
}
