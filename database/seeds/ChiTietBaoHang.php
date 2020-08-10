<?php

use Illuminate\Database\Seeder;

class ChiTietBaoHang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chi_tiet_bao_hang')->insert([
            [
                'id_bao_hang' => 1,
                'id_kien_hang' => 1
            ],
            [
                'id_bao_hang' => 1,
                'id_kien_hang' => 2
            ],
            [
                'id_bao_hang' => 2,
                'id_kien_hang' => 3
            ],
            [
                'id_bao_hang' => 2,
                'id_kien_hang' => 4
            ],
            [
                'id_bao_hang' => 2,
                'id_kien_hang' => 5
            ],
            [
                'id_bao_hang' => 3,
                'id_kien_hang' => 6
            ],
            [
                'id_bao_hang' => 3,
                'id_kien_hang' => 7
            ],
            [
                'id_bao_hang' => 3,
                'id_kien_hang' => 8
            ],
            [
                'id_bao_hang' => 3,
                'id_kien_hang' => 9
            ],
        ]);
    }
}
