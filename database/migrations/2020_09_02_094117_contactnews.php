<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contactnews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('contactnews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->longText('name');
            $table->string('email');
            $table->longText('content');
            $table->foreignId('news_id')->references('id')->on('news');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contactnews');
    }
}
