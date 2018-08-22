<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaisanpham extends Model
{
    protected $table = 'loaisanphams';

    protected $fillable =['tenloaisp','tenkhongdau','cuahang_id'];

    protected $primaryKey = 'id_loaisp';

    public $timestamps = false;

    public function thongtincuahang(){
    	return $this->belongsTo('App\thongtincuahang', 'cuahang_id');
    }

    public function sanpham(){
    	return $this->hasMany('App\sanpham','loaisp_id');
    }

    public function setTenloaispAttribute($value)
    {
        $this->attributes['tenloaisp'] = $value;
        $this->attributes['tenkhongdau'] = str_slug($value, '-');
    }
}
