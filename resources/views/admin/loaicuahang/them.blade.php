@extends('admin.master')

@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Loại cửa hàng
                            <small>Thêm</small>
                        </h1>
                    </div>
</div>
<div class="col-lg-7" style="padding-bottom:120px">
    @if (count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{!!$error!!}</li>
    @endforeach
        </ul>
    </div>
    @endif
    @if (session('thongbao'))
            <div class="alert alert-success">
                {{session('thongbao')}}
            </div>
    @endif
    <form action="{!! route('admin.loaicuahang.them') !!}" method="POST" " enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{!! csrf_token()!!}" />
   <!--     <div class="form-group">
            <label>Loại cửa hàng</label>
            <select class="form-control">
                <option value="0">Please Choose Category</option>
                {{-- <option value="">Tin Tức</option> --}}
            </select>
        </div>-->
        <div class="form-group">
            <label>Tên loại cửa hàng</label>
            <input class="form-control" name="txtTenloaicuahang" placeholder="Nhập vào tên loại cửa hàng" />
        </div>
       
        <button type="submit" class="btn btn-default">Thêm loại cửa hàng</button>
        <button type="reset" class="btn btn-default">Làm mới</button>
    <form>
</div>
@endsection()