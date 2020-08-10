<?php

use Illuminate\Database\Seeder;

class ChatAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chat_admin')->insert([
            [
                'id_ad' => 1,
                'tin_nhan' => 'Xin chao',
                'thoi_gian' => '2020-07-31 18:35:30'
            ],
            [
                'id_ad' => 2,
                'tin_nhan' => 'Xin chao ban',
                'thoi_gian' => '2020-07-31 18:36:30'
            ],
            [
                'id_ad' => 3,
                'tin_nhan' => 'Xin chao ca 2',
                'thoi_gian' => '2020-07-31 18:37:30'
            ],
            [
                'id_ad' => 2,
                'tin_nhan' => 'Hnay troi dep',
                'thoi_gian' => '2020-07-31 18:38:30'
            ],
            [
                'id_ad' => 2,
                'tin_nhan' => 'lam',
                'thoi_gian' => '2020-07-31 18:45:30'
            ],
            [
                'id_ad' => 1,
                'tin_nhan' => 'Ashakjdhajksdh',
                'thoi_gian' => '2020-07-31 19:35:30'
            ],
            [
                'id_ad' => 3,
                'tin_nhan' => 'ldsa;kas;ldkas;lda',
                'thoi_gian' => '2020-07-31 20:14:30'
            ],
            [
                'id_ad' => 2,
                'tin_nhan' => 'ksaldksalsahdajsdh',
                'thoi_gian' => '2020-07-31 20:14:30'
            ],
            [
                'id_ad' => 1,
                'tin_nhan' => 'Xinskajdaskldjaslk',
                'thoi_gian' => '2020-07-31 20:14:30'
            ],
        ]);
    }
}
