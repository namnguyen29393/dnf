<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class thongtin_loaicuahang extends Model
{

	protected $table = 'thongtin_loaicuahangs';
    protected $fillable = ['cuahang_id', 'loaicuahang_id'];
}
