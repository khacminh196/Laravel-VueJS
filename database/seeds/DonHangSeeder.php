<?php

use Illuminate\Database\Seeder;

class DonHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('don_hang')->insert([
            [
                'id_khach_hang' => null,
                'sdt_nguoi_dat' => '0934284761',
                'id_kho_hang' => 2,
                'can_nang' => 50,
                'phi_noi_dia' => 300,
                'tong_tien' => 900,
                'tien_dat_coc' => 200,
                'ngay_dat_hang' => '2020-07-01',
                'tinh_trang_don' => 3
            ],
            [
                'id_khach_hang' => null,
                'sdt_nguoi_dat' => '0934284458',
                'id_kho_hang' => 1,
                'can_nang' => 65,
                'phi_noi_dia' => 450,
                'tong_tien' => 1100,
                'tien_dat_coc' => 500,
                'ngay_dat_hang' => '2020-07-04',
                'tinh_trang_don' => 2
            ],
            [
                'id_khach_hang' => 1,
                'sdt_nguoi_dat' => '0934284111',
                'id_kho_hang' => 2,
                'can_nang' => 65,
                'phi_noi_dia' => 110,
                'tong_tien' => 1300,
                'tien_dat_coc' => 900,
                'ngay_dat_hang' => '2020-07-07',
                'tinh_trang_don' => 3
            ]
        ]);
    }
}
