<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhachHang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khach_hang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ten', 255)->nullable();
            $table->string('sdt', 50)->nullable();
            $table->string('dia_chi', 255)->nullable();
            $table->string('tai_khoan', 255);
            $table->string('password', 255)->default(bcrypt('123'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khach_hang');
    }
}
