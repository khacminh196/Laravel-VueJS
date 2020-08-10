<?php

use Illuminate\Database\Seeder;

class ChiTietVanChuyen extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chi_tiet_van_chuyen')->insert([
            [
                'id_van_chuyen' => 1,
                'id_bao_hang' => 1
            ],
            [
                'id_van_chuyen' => 1,
                'id_bao_hang' => 3
            ],
            [
                'id_van_chuyen' => 2,
                'id_bao_hang' => 2
            ]
        ]);
    }
}
