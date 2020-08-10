<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChiTietBaoHang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_bao_hang', function (Blueprint $table) {
            $table->bigInteger('id_bao_hang')->unsigned();
            $table->bigInteger('id_kien_hang')->unsigned();
            $table->primary(['id_bao_hang', 'id_kien_hang']);
            $table->foreign('id_bao_hang')->references('id')->on('bao_hang');
            $table->foreign('id_kien_hang')->references('id')->on('kien_hang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chi_tiet_bao_hang');
    }
}
