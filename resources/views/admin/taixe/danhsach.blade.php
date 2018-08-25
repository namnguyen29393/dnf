@extends('admin.master')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thông tin Tài xế
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
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
            
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Tên tài xế</th>
                        <th>Ngày sinh</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Ảnh</th>
                        <th>Xóa</th>
                        <th>Sửa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 0?> 
                    @foreach ($taixe as $tx)
                        <!-- {{-- expr --}} -->
                        <?php
                                $stt+=1;
                            ?>
                    
                        <tr class="odd gradeX" align="center">
                            
                            <td>{{$stt}}</td>
                            <td>{{$tx->ten}}</td>
                            <td>{{$tx->ngaysinh}}</td>
                            <td>{{$tx->sdt}}</td>
                            <td>{{$tx->diachi}}</td>
                            <td><img src="{{$tx->anh}}" height="50"></td>                           
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="/admin/taixe/xoa/{{$tx->id_tx}}"> Xóa</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="/admin/taixe/sua/{{$tx->id_tx}}">Sửa</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection()
