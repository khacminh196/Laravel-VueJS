<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use Notifiable;
    // protected $guard = 'admin';
    protected $table = 'admin';
    protected $fillable = ['id_kho_hang', 'ten', 'ten', 'sdt', 'dia_chi', 'cmnd_hochieu', 'tai_khoan', 'password'];
    protected $hidden = ['password'];

    public $timestamps = false;

    public function KhoHang()
    {
        return $this->BelongsTo('App\Models\KhoHang', 'id_kho_hang');
    }

    public function Messages()
    {
        return $this->hasMany('App\Models\MessagesAdmin', 'id_ad');
    }
}
