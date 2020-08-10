<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoaiHinhVanChuyen extends Model
{
    protected $table = 'loai_hinh_van_chuyen';
    protected $fillable = ['ten', 'gia_tien'];

    public $timestamps = false;
}
