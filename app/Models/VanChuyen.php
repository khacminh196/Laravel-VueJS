<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VanChuyen extends Model
{
    protected $table = 'van_chuyen';
    protected $fillable = ['id_loai_hinh_van_chuyen', 'id_kho_nhan', 'ngay_van_chuyen', 'ngay_den_kho', 'tinh_trang_van_chuyen', 'tong_so_bao'];

    public $timestamps = false;

    public function KhoNhan()
    {
        return $this->belongsTo('App\Models\KhoHang', 'id_kho_nhan');
    }

    public function LoaiHinhVanChuyen()
    {
        return $this->belongsTo('App\Models\LoaiHinhVanChuyen', 'id_loai_hinh_van_chuyen');
    }

    public function BaoHang($id)
    {
        $van_chuyen = VanChuyen::join('chi_tiet_van_chuyen', 'van_chuyen.id', '=', 'chi_tiet_van_chuyen.id_van_chuyen')->select('chi_tiet_van_chuyen.id_bao_hang')->where('van_chuyen.id', [$id])->get();
        return $van_chuyen;
    }
}
