<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOurTradersNewsTechicalAnalysesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_traders_news__techical_analyses', function (Blueprint $table) {
            $table->increments('id');

            $table->string('image');
         $table->string('title');
    $table->integer('lang_id')->unsigned();
    $table->foreign('lang_id')->references('id')->on('languages')
        ->onUpdate('cascade')
        ->onDelete('cascade');


        $table->integer('categories_id')->unsigned();
        $table->foreign('categories_id')->references('id')->on('categories_techical_analyses')
            ->onUpdate('cascade')
            ->onDelete('cascade');


            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');


              $table->Text('description');

            $table->longText('body');


        $table->string('status');

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
        Schema::dropIfExists('our_traders_news__techical_analyses');
    }
}
