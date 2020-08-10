<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVanChuyen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('van_chuyen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_loai_hinh_van_chuyen')->unsigned();
            $table->bigInteger('id_kho_nhan')->unsigned();
            $table->date('ngay_van_chuyen');
            $table->date('ngay_den_kho')->nullable();
            $table->tinyInteger('tinh_trang_van_chuyen')->default(0)->comment('0: Chờ vận chuyển, 1: Đang vận chuyển, 2: Đã đến kho');
            $table->Integer('tong_so_bao')->nullable();
            $table->foreign('id_loai_hinh_van_chuyen')->references('id')->on('loai_hinh_van_chuyen');
            $table->foreign('id_kho_nhan')->references('id')->on('kho_hang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('van_chuyen');
    }
}
