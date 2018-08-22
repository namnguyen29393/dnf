<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaicuahang extends Model
{
    protected $table = 'loaicuahangs';

    protected $fillable =['tenloaicuahang','tenkhongdau'];

    protected $primaryKey = 'id_loaicuahang';

    public $timestamps = false;

    public function setTenloaicuahangAttribute($value)
    {
        $this->attributes['tenloaicuahang'] = $value;
        $this->attributes['tenkhongdau'] = str_slug($value, '-');
    }

    public function thongtincuahang(){
    	return $this->belongsToMany('App\thongtincuahang', 'thongtin_loaicuahangs', 'loaicuahang_id', 'cuahang_id');
    }
}
//t có cái function ni rồi nè lôi ra dùng
// ko can
// roi
// cai ten khong dau no la deer tao url ha
// uk
// rua thi phai tao vo phan mo m
// tạo chi nuywax
// ý là làm cái tên không dấu nớ ở sản phẩm thôi hả
// .cái mô m cần làm đường dẫn thì tạo
// ko thì thôi uk