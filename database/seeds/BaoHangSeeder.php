<?php

use Illuminate\Database\Seeder;

class BaoHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bao_hang')->insert([
            [
                'id_van_don' => 'VanDon1',
                'id_kho_hang' => 2,
                'so_luong' => 2,
                'tinh_trang_bao' => 3
            ],
            [
                'id_van_don' => 'VanDon2',
                'id_kho_hang' => 1,
                'so_luong' => 3,
                'tinh_trang_bao' => 2
            ],
            [
                'id_van_don' => 'VanDon3',
                'id_kho_hang' => 2,
                'so_luong' => 4,
                'tinh_trang_bao' => 3
            ]
        ]);
    }
}
