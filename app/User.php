<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','level'
    ];
    protected $primaryKey = 'id_user';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function thongtincuahang(){
        return $this->hasOne('App\thongtincuahang', 'user_id', 'id_user');
    }

    public function dondathang(){
        return $this->hasMany('App\dondathang', 'user_id');
    }

    public function Giohangs(){
        return $this->hasMany('App\Giohang', 'user_id');
    }
}
