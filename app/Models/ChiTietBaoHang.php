<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use CoenJacobs\EloquentCompositePrimaryKeys\HasCompositePrimaryKey;

class ChiTietBaoHang extends Model
{
    use HasCompositePrimaryKey;

    protected $table = 'chi_tiet_bao_hang';
    protected $fillable = ['id_bao_hang', 'id_kien_hang'];
    protected $primaryKey = array('id_bao_hang', 'id_kien_hang');
    protected $keyType = array();

    public $incrementing = false;
    public $timestamps = false;

}
