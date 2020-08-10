<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChiTietVanChuyen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_van_chuyen', function (Blueprint $table) {
            $table->bigInteger('id_van_chuyen')->unsigned();
            $table->bigInteger('id_bao_hang')->unsigned();
            $table->primary(['id_van_chuyen', 'id_bao_hang']);
            $table->foreign('id_van_chuyen')->references('id')->on('van_chuyen');
            $table->foreign('id_bao_hang')->references('id')->on('bao_hang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chi_tiet_van_chuyen');
    }
}
