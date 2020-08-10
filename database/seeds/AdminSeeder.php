<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            [
                'id_kho_hang' => 1,
                'ten' => 'Nguyen Van A',
                'sdt' => '0988877999',
                'image' => 'dog1',
                'dia_chi' => 'Quang Chau - TQ',
                'cmnd_hochieu' => '5456456487111',
                'tai_khoan' => 'admin',
                'password' => bcrypt(123),
                'cap_do' => 1
            ],
            [
                'id_kho_hang' => 2,
                'ten' => 'Nguyen Hoang',
                'sdt' => '0988877339',
                'image' => 'dog2',
                'dia_chi' => 'Ha Noi - VN',
                'cmnd_ho_chieu' => '54568798787878',
                'tai_khoan' => 'adminvn',
                'password' => bcrypt(123),
                'cap_do' => 0
            ],
            [
                'id_kho_hang' => 1,
                'ten' => 'Tran Van A',
                'sdt' => '0988815742',
                'image' => 'dog3',
                'dia_chi' => 'Bac Kinh - TQ',
                'cmnd_ho_chieu' => '54465478972131',
                'tai_khoan' => 'admintq',
                'password' => bcrypt(123),
                'cap_do' => 0
            ],

        ]);
    }
}
