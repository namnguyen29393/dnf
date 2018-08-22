<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\thongtincuahang;
use App\User;
use App\loaicuahang;


class ThongtincuahangController extends Controller
{
    public function getDanhsach ()
	{
		// danh sach la cai chi rua
		$danhsach = thongtincuahang::with('loaicuahang')->get();
        //$loaicuahang = loaicuahang::find('id_loaicuahang','tenloaicuahang');
		return view('admin.thongtincuahang.danhsach',['danhsach'=>$danhsach]);
	}
    public function getThem(){

    	$loaicuahang = loaicuahang::select('id_loaicuahang','tenloaicuahang')->get();
        //dd($tenloaicuahang);
    	return view('admin.thongtincuahang.them',['loaicuahang'=>$loaicuahang]);
    }

    public function postThem(Request $request)
    {

    	// dd($request->all());
    	$rules = [
            'txtTencuahang' => 'required|unique:thongtincuahangs,tencuahang',
        ];
    	$messages = [
            'txtTencuahang.required' => 'Hãy nhập tên cửa hàng',
            'txtTencuahang.unique' => 'Tên cửa hàng bị trùng'
        ];
    	$validator = \Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
        	// dd($validator->messages());
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
    	$store = new thongtincuahang;


    	$store->tencuahang = $request->txtTencuahang;
    	$store->diachi = $request->txtDiachi;
    	$store->giomocua = $request->txtGiomo;
    	$store->giodongcua = $request->txtGiodong;
                // check xem co upfile hay ko
        if($request->hasFile('chonanh')){
        // gan file up len vao 1 bien
                    $file = $request->file('chonanh');   
                    // dat lai ten file
                    $name = time().'_'.$file->getClientOriginalName();
                    // di chuyen anh vo public/upload/tintuc/
                    // m co the di chuyen vo cho khac
                    $filePath = "upload/tintuc/"; // thay doi cai ni
                    $file->move($filePath, $name);
                    // gan cai ten file vo data ma m lưu db
                    $store->anhdaidien = "/upload/tintuc/" . $name;
                    // dd($data);
                }

        // xong up file
        //cho hắn hiện ảnh lên chỗ khung giao diện nớ đc k?
        

    	$store->user_id = \Auth::user()->id_user;

    	
    	// $store->loai = [
    	// 	$request->
    	// ];
    	$store->save();
        $store->loaicuahang()->sync($request->loai);
    	return redirect()->route('admin.thongtincuahang.danhsach');
    }

    public function getSua($id_cuahang){

        $cuahang = thongtincuahang::with('loaicuahang')->find($id_cuahang);
        $loaicuahang = loaicuahang::select('id_loaicuahang','tenloaicuahang')->get();
        //dd($tenloaicuahang);
        return view('admin.thongtincuahang.sua',['loaicuahang'=>$loaicuahang, 'cuahang'=>$cuahang]);
    }

    public function postSua(Request $request, $id_cuahang)
    {
        $cuahang = thongtincuahang::find($id_cuahang);
        $this->validate($request,
            [
                'txtTencuahang'=>'required|unique:thongtincuahangs,tencuahang'
            ],
            [
                'txtTencuahang.required'=>'Nhập tên của hàng.',
                'txtTencuahang.unique'=>'Tên cửa hàng đã tồn tại.'
            ]);
        $cuahang->tencuahang = $request->txtTencuahang;
        $cuahang->diachi = $request->txtDiachi;
        $cuahang->giomocua = $request->txtGiomo;
        $cuahang->giodongcua = $request->txtGiodong;
                // check xem co upfile hay ko
        if($request->hasFile('chonanh')){
        // gan file up len vao 1 bien
                    $file = $request->file('chonanh');   
                    // dat lai ten file
                    $name = time().'_'.$file->getClientOriginalName();
                    // di chuyen anh vo public/upload/tintuc/
                    // m co the di chuyen vo cho khac
                    $filePath = "upload/tintuc/"; // thay doi cai ni
                    $file->move($filePath, $name);
                    // gan cai ten file vo data ma m lưu db
                    $cuahang->anhdaidien = "/upload/tintuc/" . $name;
                    // dd($data);
                }

        // xong up file
        //cho hắn hiện ảnh lên chỗ khung giao diện nớ đc k?
        

        $cuahang->user_id = \Auth::user()->id_user;

        
        // $cuahang->loai = [
        //  $request->
        // ];
        $cuahang->save();
        $cuahang->loaicuahang()->sync($request->loai);
        return redirect()->route('admin.thongtincuahang.danhsach')->with(['thongbao_level'=>'success', 'thongbao'=>'Sửa thành công']);
    }

    public function getXoa($id_cuahang){
        $cuahang = thongtincuahang::find($id_cuahang);
        $cuahang->delete();
        return redirect()->route('admin.thongtincuahang.danhsach')->with(['thongbao_level'=>'success', 'thongbao'=>'Xóa thành công']);
    }
}
