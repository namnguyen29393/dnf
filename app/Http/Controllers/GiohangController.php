<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sanpham;
use App\thongtincuahang;
use App\Giohang;
use App\dondathang;
use Auth;
use DB;

class GiohangController extends Controller
{
    public function postGiohang(Request $request){
    	$info = Giohang::where('sp_id',$request->id_sp)
                            ->where('cuahang_id',$request->cuahang_id)
                            ->where('user_id', Auth::user()->id_user)->first();
        if(isset($info))
        {
            $info->update(['soluong'=>$info->soluong+1]);
        }else
        {
            $info = new Giohang;
            $info->sp_id = $request->id_sp;
            $info->tensp = $request->tensp;
            $info->user_id = Auth::user()->id_user;
            $info->cuahang_id = $request->cuahang_id;
            $info->soluong = 1;
            $info->giasp = $request->giasp;
            $info->save();
        }


        // $info->sp_id = Auth::user()->sanpham->id_sp;
        // $info->cuahang_id = Auth::user()->thongtincuahangs->id_cuahang;
        // $info->user_id = Auth::user()->id_user;

    	// $giohang->tensp = $request->;
    	// $giohang->phivc = $request->;
    	// $giohang->tongtien = $request->;

    	// $giohang = Giohang::firstOrCreate([$sp_id=>$info->id_sp],
    	// 									[$cuahang_id=>$info->id_cuahang],
    	// 									[$user_id=>$info->id_user]
    	// );

    	// return route('fls.giohang');

        $infocart = Giohang::where('cuahang_id',$request->cuahang_id)
                            ->where('user_id', Auth::user()->id_user)->get();
                            return Response()->json($infocart);

    }
    public function postUpdateGiohang(Request $request)
    {
        $product = Giohang::find($request->id_giohang);
        
        // dd($product);
        if($request->status == 1) {    
            $product->update(['soluong'=> $product->soluong + 1]);
        }
        else if($request->status == 0) {
            if ($product->soluong == 1) {
                // remove item in cart
                $product->delete();
            } else {
                $product->update(['soluong'=> $product->soluong - 1]);
            }
        }

        $infocart = Giohang::where('cuahang_id',$product->cuahang_id)
            ->where('user_id', Auth::user()->id_user)->get();
        
        return Response()->json($infocart);
    }

    public function order (Request $request)
    {
        // $sum = Giohang::where('cuahang_id',$request->id_cuahang)
        //     ->where('user_id', Auth::user()->id_user)
        //     ->select(DB::raw('sum(giasp) as total'))
        //     ->first();
        $sum = 0;
        $chitiet = [];
        $infocart = Giohang::where('cuahang_id',$request->id_cuahang)
            ->where('user_id', Auth::user()->id_user)->get();
        foreach ($infocart as $value) {
            $sum += $value->soluong * $value->giasp;
            $chitiet[] = [
                'soluong' => $value->soluong,
                'giasp' => $value->giasp,
                'sp_id' => $value->sp_id,
            ];
        }

        $data = [
            'sdt' => $request->phone,
            'diachi' => $request->address,
            'tongtien' => $sum,
            'user_id' => Auth::user()->id_user,
            'ghichu' => $request->ghichu,
            'phivc' => $request->phivc * $request->distance,
            'cuahang_id' =>$request->id_cuahang,
        ];
        $dondathang = dondathang::create($data);
        $dondathang->chitiet()->createMany($chitiet);
        Giohang::where('cuahang_id',$request->id_cuahang)
            ->where('user_id', Auth::user()->id_user)
            ->delete();

        return $data;
    }

    public function history ()
    {
        $ddh = dondathang::with([
            'chitiet' => function ($query) {
                $query->with('sanpham');
            }, 
            'thongtincuahang'
        ])
            ->where('user_id', '=', Auth::user()->id_user)
            ->get();

        return view('now.customer.lichsu',['ddh'=>$ddh]);
    }
}
