<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loaicuahang;

class MasterController extends Controller
{
    public static function getLoaicuahang()
    {
    	$loaicuahang = loaicuahang::all();

		return $loaicuahang;
	}
}
