<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('to')->unsigned()->index();
            $table->integer('from')->unsigned()->index();
            $table->integer('reciever_id')->unsigned()->index();
            $table->integer('dipatcher_id')->unsigned()->index();
            $table->enum('status', ['dispatched', 'transit', 'delivered', 'undelivered']);
            $table->foreign('to')->references('id')->on('locations')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('from')->references('id')->on('locations')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('reciever_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('dispatcher_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('histories');
    }
}
