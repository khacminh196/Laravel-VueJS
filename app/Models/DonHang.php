<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    protected $table = 'don_hang';
    protected $fillable = ['id_don_hang' ,'id_khach_hang', 'sdt_nguoi_dat', 'can_nang', 'phi_noi_dia', 'tong_tien', 'ngay_dat_hang', 'tinh_trang_don'];
    protected $keyType = 'string';

    public $timestamps = false;

    public function KhachHang()
    {
        return $this->belongsTo('App\Models\KhachHang', 'id_khach_hang');
    }

    public function KienHang()
    {
        return $this->hasMany('App\Models\KienHang', 'id_don_hang');
    }

    public function BaoHang()
    {
        return $this->hasManyThrough('App\Models\ChiTietBaoHang', 'App\Models\KienHang', 'id_don_hang', 'id_kien_hang');
    }

    public function KhoHang()
    {
        return $this->belongsTo('App\Models\KhoHang', 'id_kho_hang');
    }
}
