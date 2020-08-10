<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KienHang extends Model
{
    protected $table = 'kien_hang';
    protected $fillable = ['id_kien_hang' ,'id_don_hang'];
    protected $keyType = 'string';

    public $timestamps = false;

    public function DonHang()
    {
        return $this->belongsTo('App\Models\DonHang', 'id_don_hang');
    }

    public function BaoHang()
    {
        return $this->hasOne('App\Models\ChiTietBaoHang', 'id_kien_hang');
    }

    public function KhoHang()
    {
        return $this->belongsTo('App\Models\KhoHang', 'id_kho_hang');
    }
}
