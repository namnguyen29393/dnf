<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitiet extends Model
{
    protected $table = 'chitiets';

    protected $fillable = ['giasp','ddh_id','sp_id','cuahang_id'];

    protected $primaryKey = 'id_chitiet';

    public $timestamps = false;

    public function dondathang(){
    	return $this->belongsTo('App\dondathang','ddh_id');
    }

    public function sanpham(){
    	return $this->belongsTo('App\sanpham','sp_id');
    }

    public function thongtincuahang(){
    	return $this->belongsTo('App\thongtincuahang','cuahang_id');
    }
}
