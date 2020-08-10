<?php

use Illuminate\Database\Seeder;

class KhachHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('khach_hang')->insert([
            [
                'ten' => 'Khach Hang 1',
                'sdt' => '0934577999',
                'dia_chi' => 'Nam Dinh - VN',
                'tai_khoan' => 'user1',
                'password' => bcrypt(123)
            ],
            [
                'ten' => 'Khach Hang 2',
                'sdt' => '0982657921',
                'dia_chi' => 'Hai Phong - VN',
                'tai_khoan' => 'user2',
                'password' => bcrypt(123)
            ],
        ]);
    }
}
