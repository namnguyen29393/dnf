<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\thongtincuahang;
use App\sanpham;
use App\loaisanpham;
use App\loaicuahang;
use App\User;
use Auth;
use App\Giohang;

class CuahangController extends Controller
{
    public function getCuahang($tencuahang)
	{
		// dd($tencuahang);
		$cuahang = thongtincuahang::with(['loaisanpham' => function ($query) {
            $query->with('sanpham');
        }])->where('tenkhongdau','=',$tencuahang)->first();
        // dd($cuahang->id_cuahang, Auth::user()->id_user);

        if(Auth::check())
        {
            $infocart = Giohang::where('cuahang_id',$cuahang->id_cuahang)
                                ->where('user_id', Auth::user()->id_user)->get();
            $sum = 0;
            for ($i=0; $i < count($infocart); $i++) { 
                $sum += $infocart[$i]->soluong*$infocart[$i]->giasp;
            }
    		return view('now.chitiet',['cuahang'=>$cuahang,
    									'infocart'=>$infocart,
                                        'sum'=>$sum
    									]);
        }
        else{
            
            return view('now.chitiet',['cuahang'=>$cuahang]);
        }

        
	}
	public function getDangky()
	{
		$loaicuahang = loaicuahang::select('id_loaicuahang','tenloaicuahang')->get();
        //dd($tenloaicuahang);
    	return view('now.dangkycuahang',['loaicuahang'=>$loaicuahang]);
	}
	public function postDangky(Request $request)
    {

    	// dd($request->all());
    	$rules = [
            'txtTencuahang' => 'required|unique:thongtincuahangs,tencuahang',
            'txtDiachi'     => 'required:thongtincuahangs, diachi',
            'txtGiomo'      => 'required:thongtincuahangs, giomocua',
            'txtGiodong'    => 'required:thongtincuahangs, giodongcua',
            'loai'        => 'required:loaicuahang, tenloaicuahang',
            'chonanh'       => 'required:thongtincuahangs, anhdaidien'

        ];
    	$messages = [
            'txtTencuahang.required'    => 'Chưa nhập tên cửa hàng',
            'txtTencuahang.unique'      => 'Tên cửa hàng bị trùng',
            'txtDiachi.required'        => 'Chưa nhập địa chỉ',
            'txtGiomo.required'         => 'Chưa nhập giờ mở cửa',
            'txtGiodong.required'       => 'Chưa nhập giờ đóng cửa',
            'loai.required'            => 'Hãy chọn loại cửa hàng',
            'chonanh.required'          => 'Chọn ảnh đại diện'
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
                    $filePath = "upload/anhdaidien/"; // thay doi cai ni
                    $file->move($filePath, $name);
                    // gan cai ten file vo data ma m lưu db
                    $store->anhdaidien = "/upload/anhdaidien/" . $name;
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
    	return redirect()->route('thongtinsnpham.danhsach');
    }

    // public function getThongtin()
    // {
    // 	return view('now.thongtintaikhoan');
    // }

    public function getThem()
    {
        $id_cuahang = Auth::user()->thongtincuahang->id_cuahang;
        $loaisanpham = loaisanpham::select('id_loaisp','tenloaisp')->where('cuahang_id', '=', $id_cuahang)->get();
    	return view('now.cuahang.themsp',['loaisanpham'=>$loaisanpham]);
    }
    public function postThem(Request $request)
    {
        $rules = [
                'txtTensp'=>'required|unique:sanphams,tensp',
                'txtGia' =>'numeric:sanphams,giasp'
            ];
        $messages=[
                'txtTensp.required'=>'Nhập tên sản phẩm!',
                'txtTensp.unique'=> 'Tên sản phẩm bị trùng!',
                
                'txtGia.numeric' => 'Giá sản phẩm là số!'
                ];
                $validator = \Validator::make($request->all(), $rules, $messages);

                if ($validator->fails()) {
                    // dd($validator->messages());
                    return redirect()->back()
                                ->withErrors($validator)
                                ->withInput();
                }


        
        $sanpham = new sanpham;
        // $cuahang = thongtincuahang::find($id_cuahang);
        //$loaisp = loaisanpham::select('id_loaisp')->get();
        // dd(Auth::user()->thongtincuahang->id_cuahang);
        $sanpham->cuahang_id = Auth::user()->thongtincuahang->id_cuahang;
        $sanpham->tensp = $request->txtTensp;
        $sanpham->giasp = $request->txtGia;
        $sanpham->loaisp_id =$request->loai;
        
        if($request->hasFile('chonanh')){
        // gan file up len vao 1 bien
                    $file = $request->file('chonanh');   
                    // dat lai ten file
                    $name = time().'_'.$file->getClientOriginalName();
                    // di chuyen anh vo public/upload/tintuc/
                    // m co the di chuyen vo cho khac
                    $filePath = "upload/anhsanpham/"; // thay doi cai ni
                    $file->move($filePath, $name);
                    // gan cai ten file vo data ma m lưu db
                    $sanpham->hinhanh = "/upload/anhsanpham/" . $name;
         }
        
        //
        //$sanpham->loaisanpham()->associate($request->loai);
        $sanpham->save();
        
        return redirect()->route('thongtinsanpham.themsp')->with('thongbao','Thêm thành công');
    }


    public function getDoimatkhau()
    {
        return view('now.cuahang.doimatkhau');
    }
    public function postDoimatkhau(Request $request)
    {
        $this->validate($request,
        [          
            'txtmk'=>'required|min:6|max:32',
            'txtmkxn'=>'required|same:txtmk'
        ],
        [
            
            'txtmk.required'=>'Chưa nhập mật khẩu!',
            'txtmk.min'=>'Mật khẩu phải có ít nhất 3 ký tự!',
            'txtmk.max'=>'Mật khẩu phải có tối đa 32 ký tự!',
            'txtmkxn.required'=>'Mật vào nhập khẩu',
            'txtmkxn.same'=>'Mật khẩu không trùng khớp!'
        ]);
        $user = User::select('password')->first();
        
        $user->password = bcrypt($request->txtmk);
        $user->save();

        return redirect()->route('thongtinsanpham.doimatkhau')->with('thongbao','Sửa thành công');

    }

    public function getThemloaisp()
    {
        return view('now.cuahang.loaisanpham');
    }
    public function postThemloaisp(Request $request)
    {
        $this->validate($request,
        [          
            'txtTenloaisp'=>'required|unique:loaisanphams,tenloaisp'
            
        ],
        [
            
            'txtTenloaisp.required'=>'Chưa nhập tên loại sản phấm!',
            'txtTenloaisp.unique'=>'Tên sản phẩm đã tồn tại!'
        ]);
        $loaisanpham = new loaisanpham;
        
        $loaisanpham->cuahang_id = Auth::user()->thongtincuahang->id_cuahang;
        $loaisanpham->tenloaisp = $request->txtTenloaisp;
        $loaisanpham->save();

        return redirect()->route('thongtinsanpham.themloaisanpham')->with('thongbao','Sửa thành công');

    }

    public function getDanhsach()
    {
        $danhsach = sanpham::with('loaisanpham')->whereHas('thongtincuahang',function($query){
                $query->where('cuahang_id', '=', Auth::user()->thongtincuahang->id_cuahang );
        })->get();

        return view('now.cuahang.danhsach',['danhsach'=>$danhsach]);
    }

    public function getDanhsachloaisp()
    {
        $danhsach = loaisanpham::whereHas('thongtincuahang',function($query){
                $query->where('cuahang_id', '=', Auth::user()->thongtincuahang->id_cuahang );
        })->get();

        return view('now.cuahang.danhsachloaisp',['danhsach'=>$danhsach]);
    }

    public function postGiohang($id_cuahang)
    {
        $cuahang = giohang::find('id_cuahang')->first();
        
        dd($cuahang);
        return ['cuahang'=>$cuahang, $cuahang->tensp];
    }

}
