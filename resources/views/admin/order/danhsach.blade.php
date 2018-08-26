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
                        <th>Tên Khách hàng</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Tổng tiền</th>
                        <th>Phí vận chuyển</th>
                        <th>Tài xế</th>
                        <th>Trạng thái</th>
                        <th>Chi tiết</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 0?> 
                    @foreach ($orders as $order)
                        <!-- {{-- expr --}} -->
                        <?php
                                $stt+=1;
                            ?>
                    
                        <tr class="odd gradeX" align="center">
                            
                            <td>{{$stt}}</td>
                            <td>{{$order->User->name}}</td>
                            <td>{{$order->sdt}}</td>
                            <td>{{$order->diachi}}</td>
                            <td>{{$order->tongtien}}</td>
                            <td>{{$order->phivc}}</td>
                            <td>{{$order->taixe ? $order->taixe->ten : ''}}</td>
                            <td>{{$order->trangthai == 0 ? 'Đang chờ' : ($order->trangthai == 1 ? 'đã nhận' : 'đã hủy')}}</td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ route('admin.dondathang.sua', $order->id_ddh) }}">Xem</a></td>
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
