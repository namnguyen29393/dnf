<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\dondathang;
use App\taixe;

class DondathangController extends Controller
{
    public function index()
    {
    	$orders = dondathang::with([
    		'User',
    		'taixe',
    	])->get();

    	return view('admin.order.danhsach', [
    		'orders' => $orders,
    	]);
    }

    public function edit(Request $request, $id)
    {
    	$order = dondathang::with([
    		'User',
    		'chitiet',
    		'thongtincuahang',
    		'taixe',
    	])->find($id);
    	$taixe = taixe::all();

    	return view('admin.order.sua', [
    		'order' => $order,
    		'taixe' => $taixe,
    	]);
    }

    public function accept(Request $request, $id)
    {
    	$tx_id = $request->id_tx;
    	$order = dondathang::find($id);
    	$order->update([
    		'trangthai' => 1,
    		'tx_id' => $tx_id,
    	]);

    	$orders = dondathang::with('User')->get();

    	return view('admin.order.danhsach', [
    		'orders' => $orders,
    	]);
    }

    public function reject(Request $request, $id)
    {

    	$order = dondathang::find($id);
    	$order->update([
    		'trangthai' => 2
    	]);

    	$orders = dondathang::with('User')->get();

    	return view('admin.order.danhsach', [
    		'orders' => $orders,
    	]);
    }
}
