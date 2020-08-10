<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKienHang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kien_hang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_don_hang')->unsigned();
            $table->bigInteger('id_kho_hang')->unsigned()->default(1);
            $table->tinyInteger('tinh_trang_dong_bao')->default(1)->comment('1: Chưa đóng bao, 2: Đã đóng bao, 3: Đã dỡ bao');
            $table->foreign('id_don_hang')->references('id')->on('don_hang');
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
        Schema::dropIfExists('kien_hang');
    }
}
