<?php

use Illuminate\Database\Seeder;

class KienHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kien_hang')->insert([
            [
                'id_don_hang' => 1,
                'id_kho_hang' => 2,
                'tinh_trang_dong_bao' => 3
            ],
            [
                'id_don_hang' => 1,
                'id_kho_hang' => 2,
                'tinh_trang_dong_bao' => 3
            ],
            [
                'id_don_hang' => 2,
                'id_kho_hang' => 1,
                'tinh_trang_dong_bao' => 2
            ],
            [
                'id_don_hang' => 2,
                'id_kho_hang' => 1,
                'tinh_trang_dong_bao' => 2
            ],
            [
                'id_don_hang' => 2,
                'id_kho_hang' => 1,
                'tinh_trang_dong_bao' => 2
            ],
            [
                'id_don_hang' => 3,
                'id_kho_hang' => 2,
                'tinh_trang_dong_bao' => 2
            ],
            [
                'id_don_hang' => 3,
                'id_kho_hang' => 2,
                'tinh_trang_dong_bao' => 2
            ],
            [
                'id_don_hang' => 3,
                'id_kho_hang' => 2,
                'tinh_trang_dong_bao' => 2
            ],
            [
                'id_don_hang' => 3,
                'id_kho_hang' => 2,
                'tinh_trang_dong_bao' => 2
            ],
        ]);
    }
}
