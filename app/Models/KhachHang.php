<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    protected $table = 'khach_hang';
    protected $fillable = ['ten', 'sdt', 'dia_chi', 'tai_khoan', 'mat_khau'];
    protected $hidden = ['password'];

    public $timestamps = false;

    public function DonHang()
    {
        return $this->hasMany('App\Models\DonHang', 'id_khach_hang');
    }
}
