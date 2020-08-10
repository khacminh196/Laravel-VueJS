<?php

use Illuminate\Database\Seeder;

class VanChuyen extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('van_chuyen')->insert([
            [
                'id_loai_hinh_van_chuyen' => 2,
                'id_kho_nhan' => 2,
                'ngay_van_chuyen' => '2020-07-02',
                'ngay_den_kho' => '2020-07-06',
                'tinh_trang_van_chuyen' => 2,
                'tong_so_bao' => 2
            ],
            [
                'id_loai_hinh_van_chuyen' => 1,
                'id_kho_nhan' => 2,
                'ngay_van_chuyen' => '2020-07-05',
                'ngay_den_kho' => null,
                'tinh_trang_van_chuyen' => 1,
                'tong_so_bao' => 1
            ],
        ]);
    }
}
