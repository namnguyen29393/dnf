<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dondathang extends Model
{
    protected $table = 'dondathangs';

    protected $fillable =['sdt','diachi','tongtien','user_id'];

    protected $primaryKey = 'id_ddh';

    public $timestamps = false;

    public function User(){
    	return $this->belongsTo('App\User', 'user_id');
    }

    public function chitiet(){
    	return $this->hasMany('App\chitiet', 'ddh_id');
    }

}
