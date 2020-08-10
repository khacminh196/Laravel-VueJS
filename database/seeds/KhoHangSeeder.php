<?php

use Illuminate\Database\Seeder;

class KhoHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kho_hang')->insert([
            [
                'ten' => 'Kho Hang Trung Quoc',
                'dia_chi' => 'Quang Chau - Trung Quoc'
            ],
            [
                'ten' => 'Kho Hang Viet Nam',
                'dia_chi' => 'Ha Noi - Viet Nam'
            ]
        ]);
    }
}
