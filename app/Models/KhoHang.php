<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KhoHang extends Model
{
    protected $table = 'kho_hang';
    protected $fillable = ['ten', 'dia_chi'];

    public $timestamps = false;

    public function Admin()
    {
        return $this->hasMany('App\Models\Admin', 'id_kho_hang');
    }
}
