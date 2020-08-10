<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChiTietVanChuyen extends Model
{
    protected $table = 'chi_tiet_van_chuyen';
    protected $fillable = ['id_van_chuyen', 'id_bao_hang'];

    public $timestamps = false;
}
