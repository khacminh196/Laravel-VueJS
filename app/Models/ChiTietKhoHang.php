<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChiTietKhoHang extends Model
{
    protected $table = 'chi_tiet_kho_hang';
    protected $fillable = ['id_kho_hang', 'id_don_hang', 'id_kien_hang', 'id_bao_hang'];

    public $timestamps = false;
}
