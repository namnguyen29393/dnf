<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    protected $table = 'sanphams';

    protected $fillable =['tensp','giasp','loaisp_id','hinhanh','tenkhongdau'];

    protected $primaryKey = 'id_sp';

    public $timestamps = false;

    public function loaisanpham(){
    	return $this->belongsTo('App\loaisanpham','loaisp_id');
    }
    public function chitiet(){
    	return $this->hasMany('App\chitiet','sp_id');
    }
    public function thongtincuahang(){
        return $this->belongsTo('App\thongtincuahang','cuahang_id');
    }

    public function setTenspAttribute($value)
    {
        $this->attributes['tensp'] = $value;
        $this->attributes['tenkhongdau'] = str_slug($value, '-');
    }

    public function giohang(){
        return $this->belongsTo('App\Giohang','sp_id');
    }

}
