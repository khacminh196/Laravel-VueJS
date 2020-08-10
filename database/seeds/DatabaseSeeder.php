<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(KhoHangSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(KhachHangSeeder::class);
        $this->call(DonHangSeeder::class);
        $this->call(KienHangSeeder::class);
        $this->call(BaoHangSeeder::class);
        $this->call(ChiTietBaoHang::class);
        $this->call(LoaiHinhVanChuyen::class);
        $this->call(VanChuyen::class);
        $this->call(ChiTietVanChuyen::class);
        $this->call(ChatAdminSeeder::class);
    }
}
