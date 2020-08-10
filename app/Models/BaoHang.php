<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\KienHang;

class BaoHang extends Model
{
    protected $table = 'bao_hang';
    protected $fillable = ['id_bao_hang', 'so_luong', 'tinh_trang_kien'];
    protected $keyType = 'string';

    public $timestamps = false;

    public function DonHang($id)
    {
        $bao_hang = BaoHang::join('chi_tiet_bao_hang', 'bao_hang.id', '=', 'chi_tiet_bao_hang.id_bao_hang')->join('kien_hang', 'kien_hang.id', '=', 'chi_tiet_bao_hang.id_kien_hang')->where('bao_hang.id', [$id])->select('kien_hang.id_don_hang')->groupBy('kien_hang.id_don_hang')->get();
        return $bao_hang;
    }

    public function KienHang($id)
    {
        $bao_hang = BaoHang::join('chi_tiet_bao_hang', 'bao_hang.id', '=', 'chi_tiet_bao_hang.id_bao_hang')->where('bao_hang.id', [$id])->select('chi_tiet_bao_hang.id_kien_hang')->get();
        return $bao_hang;
    }

    public function KhoHang()
    {
        return $this->belongsTo('App\Models\KhoHang', 'id_kho_hang');
    }
}
