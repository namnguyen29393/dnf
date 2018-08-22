<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class taixe extends Model
{
    protected $table = 'taixe';

    protected $fillable =['ten','ngaysinh','sdt','diachi','anh'];

    protected $primaryKey = 'id_tx';

    public $timestamps = false;


    }
}
