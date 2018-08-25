@extends('admin.master')
@section('content')


<!-- Page Content -->
<div id="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thông tin tài xế
                <small>Sửa</small>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-7" style="padding-bottom:120px">
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{!!$error!!}</li>
                    @endforeach
                </div>
            @endif
            @if (session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif
            <form action="{{ route('admin.taixe.sua', $taixe->id_tx) }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{!! csrf_token()!!}">
                <div class="form-group">
                    <label>Tên tài xế</label>
                    <input class="form-control" name="txtTen" placeholder="Nhập tên tài xế" value="{{$taixe->ten}}"/>
                </div>
                <div class="form-group">
                    <label>Ngày Sinh</label>
                    <input class="form-control" name="txtngaysinh" placeholder="Nhập ngày sinh" type="date" value="{{$taixe->ngaysinh}}"/>
                </div>
                <div class="form-group">
                    <label>Số điện thoại</label>
                    <input class="form-control" name="txtsdt" placeholder="Nhập số điện thoại" value="{{$taixe->sdt}}"/>
                </div>
                <div class="form-group">
                    <label>Địa chỉ</label>
                    <input class="form-control" name="txtdc" placeholder="Nhập địa chỉ" value="{{$taixe->diachi}}"/>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4">Ảnh</label>
                    <div class="col-md-8">
                        <input  name="chonanh" type="file">
                    </div>
                </div>
                
                <button type="submit" class="btn btn-default">Sửa</button>
                <button type="reset" class="btn btn-default">Làm lại</button>
            <form>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection()

