<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_admin', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_ad')->unsigned();
            $table->text('tin_nhan')->nullable();
            $table->dateTime('thoi_gian');
            $table->foreign('id_ad')->references('id')->on('admin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chat_admin');
    }
}
