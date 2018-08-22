@extends('now.cuahang.master')
@section('content')
<div ng-controller="ManageAddressCtrl" ng-init="Init()" class="ng-scope">
    <h3>
        Quản lý sản phẩm
        <a style="float:right" class="btn btn-success" ng-click="Create()">+ Tạo mới</a>
    </h3>
    <table class="table table-bordered table-hover table-responsive">
        <thead>
            <tr>
                <th class="hide-mobile">ID</th>
                <th class="hide-mobile">Tên sản phẩm</th>
                <th>Giá</th>
                <th>Loại sản phẩm</th>
                <th class="hide-mobile">Hình ảnh</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
          
          <?php $stt = 0?> 
                    @foreach ($danhsach as $ds)
                        {{-- expr --}}
                        <?php
                                $stt+=1;
                            ?>
                    
                        <tr class="odd gradeX" align="center">
                            
                            <td>{{$stt}}</td>
                            <td>{{$ds->tensp}}</td>
                            <td>{{$ds->giasp}}</td>
                            <td>{{$ds->loaisanpham->tenloaisp}}</td>
                            <td><img src="{{$ds->hinhanh}}" height="50"></td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="/admin/sanpham/xoa/{{$ds->id_sp}}"> Xóa</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="/admin/sanpham/sua/{{$ds->id_sp}}">Sửa</a></td>
                        </tr>
                    @endforeach

          
            <!-- ngRepeat: item in DeliverAddress -->
        </tbody>
        <!-- ngIf: Total>DeliverAddress.length -->
    </table>
    

    
</div>
@endsection()