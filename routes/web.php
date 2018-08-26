<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', 'TrangchuController@index');

// route::get('index', [
// 	'as'=>'trang-chu',
// 	'uses'=>'PageController@getIndex'
// ]);
// route::get('/', function(){
// 	return view('admin.index');
// });
route::get('table', function(){
	return view('admin.store.list');
});
// Route::get('admin/dangnhap','admin\UserController@getdangnhapAdmin')->name('admin.dangnhap');
// Route::post('admin/dangnhap','admin\UserController@postdangnhapAdmin')->name('admin.updatedangnhap');
// Route::post('admin/dangxuat','admiUserController@getdangxuatAdmin')->name('admin.dangxuat');

Route::group(['namespace'=>'admin', 'prefix'=>'admin', 'middleware' => ['auth', 'admin']], function(){
	route::group(['prefix'=>'thongtincuahang'],function(){
		Route::get('danhsach', 'ThongtincuahangController@getDanhsach')->name('admin.thongtincuahang.danhsach');

		Route::get('them','ThongtincuahangController@getThem')->name('admin.thongtincuahang.them');
		Route::post('them','ThongtincuahangController@postThem')->name('admin.thongtincuahang.updatethem');

		Route::get('sua/{id_cuahang}','ThongtincuahangController@getSua')->name('admin.thongtincuahang.sua');
		Route::post('sua/{id_cuahang}','ThongtincuahangController@postSua')->name('admin.thongtincuahang.updatesua');

		Route::get('xoa/{id_cuahang}', 'ThongtincuahangController@getXoa')->name('admin.thongtincuahang.xoa');
	});

	route::group(['prefix'=>'loaicuahang'],function(){
		Route::get('danhsach', 'LoaicuahangController@getDanhsach')->name('admin.loaicuahang.danhsach');

		Route::get('them','LoaicuahangController@getThem')->name('admin.loaicuahang.them');
		Route::post('them', 'LoaicuahangController@postThem')->name('admin.loaicuahang.updatethem');

		Route::get('sua/{id_loaicuahang}','LoaicuahangController@getSua')->name('admin.loaicuahang.sua');
		Route::post('sua/{id_loaicuahang}', 'LoaicuahangController@postSua')->name('admin.loaicuahang.updatesua');

		Route::get('xoa/{id_loaicuahang}','LoaicuahangController@getXoa')->name('admin.loaicuahang.xoa');
		
	});

	route::group(['prefix'=>'loaisanpham'],function(){
		Route::get('danhsach', 'LoaisanphamController@getDanhsach')->name('admin.loaisanpham.danhsach');

		Route::get('them','LoaisanphamController@getThem')->name('admin.loaisanpham.them');
		Route::post('them', 'LoaisanphamController@postThem')->name('admin.loaisanpham.updatethem');

		Route::get('sua/{id_loaisp}','LoaisanphamController@getSua')->name('admin.loaisanpham.sua');
		Route::post('sua/{id_loaisp}', 'LoaisanphamController@postSua')->name('admin.loaisanpham.updatesua');

		Route::get('xoa/{id_loaisp}','LoaisanphamController@getXoa')->name('admin.loaisanpham.xoa');
		
	});

	Route::group(['prefix'=>'sanpham'], function(){
		Route::get('them','SanphamController@getThem')->name('admin.sanpham.them');
		Route::post('them','SanphamController@postThem')->name('admin.sanpham.updatethem');

		Route::get('danhsach','SanphamController@getDanhsach')->name('admin.sanpham.danhsach');

		Route::get('sua/{id_sp}','SanphamController@getSua')->name('admin.sanpham.sua');
		Route::post('sua/{id_sp}','SanphamController@postSua')->name('admin.sanpham.updatesua');

		route::get('xoa/{id_sp}','SanphamController@getXoa')->name('admin.sanpham.xoa');
	});

	Route::group(['prefix'=>'user'], function(){
		Route::get('them','UserController@getThem')->name('admin.user.them');
		Route::post('them','UserController@postThem')->name('admin.user.updatethem');

		Route::get('danhsach','UserController@getDanhsach')->name('admin.user.danhsach');

		Route::get('sua/{id_user}','UserController@getSua')->name('admin.user.sua');
		Route::post('sua/{id_user}','UserController@postSua')->name('admin.user.updatesua');

		route::get('xoa/{id_user}','UserController@getXoa')->name('admin.user.xoa');
	});

	Route::group(['prefix'=>'taixe'],function(){
		Route::get('danhsach', 'TaixeController@getDanhsach')->name('admin.taixe.danhsach');

		Route::get('them','TaixeController@getThem')->name('admin.taixe.them');
		Route::post('them','TaixeController@postThem')->name('admin.taixe.updatethem');

		Route::get('sua/{id_tx}','TaixeController@getSua')->name('admin.taixe.sua');
		Route::post('sua/{id_tx}','TaixeController@postSua')->name('admin.taixe.updatesua');

		Route::get('xoa/{id_tx}', 'TaixeController@getXoa')->name('admin.taixe.xoa');
	});

	Route::group(['prefix'=>'don-dat-hang'],function(){
		Route::get('danhsach', 'DondathangController@index')->name('admin.dondathang.danhsach');

		Route::get('/{id_tx}','DondathangController@edit')->name('admin.dondathang.sua');
		Route::post('/accept/{id_tx}','DondathangController@accept')->name('admin.dondathang.accept');
		Route::post('/reject/{id_tx}','DondathangController@reject')->name('admin.dondathang.reject');

		Route::get('xoa/{id_tx}', 'DondathangController@getXoa')->name('admin.dondathang.xoa');
	});
});

Route::get('cuahang/{tencuahang}','CuahangController@getCuahang')->name('fls.chitiet');

//gio hang
Route::post('cuahang','GiohangController@postGiohang')->name('fls.giohang')->middleware('auth');
//tăng sản phẩm
Route::post('updategiohang','GiohangController@postUpdateGiohang')->name('fls.updategiohang')->middleware('auth');
//tăng sản phẩm
Route::post('order','GiohangController@order')->name('fls.order')->middleware('auth');
// show bill


Route::get('/dangnhap','admin\UserController@getDangnhap')->name('fls.dangnhap');
Route::post('/dangnhap','admin\UserController@postDangnhap')->name('fls.updatedangnhap');

Route::get('dangkycuahang','CuahangController@getDangky')->name('fls.dangkycuahang')->middleware('auth');
Route::post('dangkycuahang','CuahangController@postDangky')->name('fls.updatedangkycuahang')->middleware('auth');

Route::group(['prefix'=>'thongtinsanpham'], function(){
	Route::get('them', 'CuahangController@getThem')->name('thongtinsanpham.themsp');
	Route::post('them', 'CuahangController@postThem')->name('thongtinsanpham.updatethemsp');

	Route::get('doimatkhau', 'CuahangController@getDoimatkhau')->name('thongtinsanpham.doimatkhau');
	Route::post('doimatkhau', 'CuahangController@postDoimatkhau')->name('thongtinsanpham.updatedoimatkhau');

	Route::get('danhsach','CuahangController@getDanhsach')->name('thongtinsanpham.danhsach');
	Route::get('danhsachloaisp','CuahangController@getDanhsachloaisp')->name('thongtinsanpham.danhsachloaisp');

	Route::get('themloaisanpham', 'CuahangController@getThemloaisp')->name('thongtinsanpham.themloaisanpham');
	Route::post('themloaisanpham', 'CuahangController@postThemloaisp')->name('thongtinsanpham.updatethemloaisanpham');
});

Auth::routes();

Route::get('/lich-su-dat-mon', 'GiohangController@history');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/{type?}', 'TrangchuController@index')->name('type.store');
