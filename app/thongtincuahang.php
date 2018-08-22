<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class thongtincuahang extends Model
{
    protected $table = 'thongtincuahangs';

    protected $fillable =[
        'tencuahang',
        'tenkhongdau',
        'diachi',
        'giomocua',
        'giodongcua',
        'anhdaidien',
        'trangthai', // 0: hủy, 1: đang chờ, 2: đã xác nhận
        'lat',
        'long',
        'user_id'
    ];

    protected $primaryKey = 'id_cuahang';

    //public $timestamps = false;

    public function loaisanpham(){
    	return $this->hasMany('App\loaisanpham', 'cuahang_id');
    }

    public function user(){
    	return $this->hasOne('App\User', 'user_id');
    }

    public function chitiet(){
    	return $this->hasMany('App\chitiet', 'cuahang_id');
    }

     public function sanpham(){
        return $this->hasMany('App\sanpham', 'cuahang_id');
    }

    public function loaicuahang(){
    	return $this->belongsToMany('App\loaicuahang', 'thongtin_loaicuahangs', 'cuahang_id', 'loaicuahang_id');
    }

    public function setTencuahangAttribute($value)
    {
        $this->attributes['tencuahang'] = $value;
        $this->attributes['tenkhongdau'] = str_slug($value, '-');
    }

    public function Giohang(){
        return $this->belongsTo('App\Giohang', 'cuahang_id');
    }
}
