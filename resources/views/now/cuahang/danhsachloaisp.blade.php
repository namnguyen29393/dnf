@extends('now.cuahang.master')
@section('content')
<div ng-controller="ManageAddressCtrl" ng-init="Init()" class="ng-scope">
    <h3>
        Quản lý loại sản phẩm
        <a style="float:right" class="btn btn-success" ng-click="Create()">+ Tạo mới</a>
    </h3>
    <table class="table table-bordered table-hover table-responsive">
        <thead>
            <tr>
                <th class="hide-mobile">ID</th>
                <th>Loại sản phẩm</th>
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
                            <td>{{$ds->tenloaisp}}</td>
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