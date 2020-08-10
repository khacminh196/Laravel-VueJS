<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_kho_hang')->unsigned()->nullable();
            $table->string('ten', 255);
            $table->string('sdt', 50);
            $table->string('image');
            $table->string('dia_chi', 255);
            $table->string('cmnd_hochieu', 50);
            $table->string('tai_khoan', 255);
            $table->string('password', 255);
            $table->tinyInteger('cap_do')->default(0);
            $table->foreign('id_kho_hang')->references('id')->on('kho_hang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
    }
}
