<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonHang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('don_hang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_khach_hang')->nullable()->unsigned();
            $table->string('sdt_nguoi_dat', 20);
            $table->bigInteger('id_kho_hang')->unsigned()->default(1);
            $table->bigInteger('can_nang')->unsigned();
            $table->bigInteger('phi_noi_dia')->nullable()->unsigned();
            $table->bigInteger('tong_tien')->nullable()->unsigned();
            $table->bigInteger('tien_dat_coc')->default(0);
            $table->date('ngay_dat_hang');
            $table->tinyInteger('tinh_trang_don')->default(0)->comment('0: Đang xử lý, 1: Đã đóng kiện, 2: Đang vận chuyển, 3: Đã đến kho, 4: Tồn kho, 5: Đã giao hàng');
            $table->foreign('id_khach_hang')->references('id')->on('khach_hang');
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
        Schema::dropIfExists('don_hang');
    }
}
