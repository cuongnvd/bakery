<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->longText('name');
            $table->string('phonenumber');
            $table->string('email');
            $table->longText('address');
            $table->longText('content');
             $table->integer('amount');
            $table->boolean('payment')->default(false);
            $table->foreignId('product_id')->references('id')->on('product');
            $table->foreignId('users_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
