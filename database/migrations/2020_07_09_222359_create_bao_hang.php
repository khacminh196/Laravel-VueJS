<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaoHang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bao_hang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_van_don')->nullable();
            $table->bigInteger('id_kho_hang')->unsigned()->default(1);
            $table->tinyInteger('so_luong')->nullable()->unsigned();
            $table->tinyInteger('tinh_trang_bao')->default(0)->comment('0: Chờ tạo đợt vận chuyển, 1: Chờ xuất kho, 2: Đang vận chuyển, 3: Đã đến kho, 4: Đã kiểm');
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
        Schema::dropIfExists('bao_hang');
    }
}
