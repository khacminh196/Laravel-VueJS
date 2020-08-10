<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MessagesAdmin extends Model
{
    protected $table = 'chat_admin';
    protected $fillable = ['id_ad', 'tin_nhan', 'thoi_gian'];

    public $timestamps = false;

    public function Admin()
    {
        return $this->belongsTo('App\Models\Admin', 'id_ad');
    }
}
