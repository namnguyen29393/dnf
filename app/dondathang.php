<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dondathang extends Model
{
    protected $table = 'dondathangs';

    protected $fillable =[
        'sdt',
        'diachi',
        'tongtien',
        'ghichu',
        'phivc',
        'user_id',
        'cuahang_id',
        'trangthai',
    ];

    protected $primaryKey = 'id_ddh';

    public function User(){
    	return $this->belongsTo('App\User', 'user_id');
    }

    public function chitiet(){
    	return $this->hasMany('App\chitiet', 'ddh_id');
    }

    public function thongtincuahang(){
        return $this->belongsTo('App\thongtincuahang', 'cuahang_id');
    }

}
