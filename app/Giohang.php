<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Giohang extends Model
{
    protected $table = 'giohang';

    protected $fillable =['tensp','soluong', 'giasp','tongtiensp','tongtien','cuahng_id','user_id', 'tx_id'];

    protected $primaryKey = 'id_giohang';

    public function User(){
    	return $this->belongsTo('App\User', 'user_id');
    }

    public function cuahang(){
    	return $this->hasMany('App\thongtincuahang', 'cuahang_id');
    }

    public function sanpham(){
        return $this->hasMany('App\sanpham', 'sp_id');
    }
}
