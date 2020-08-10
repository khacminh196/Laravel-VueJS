<?php

use Illuminate\Database\Seeder;

class LoaiHinhVanChuyen extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loai_hinh_van_chuyen')->insert([
            [
                'ten' => 'Tau Thuy',
                'gia_tien' => 0
            ],
            [
                'ten' => 'Container',
                'gia_tien' => 40
            ],
        ]);
    }
}
