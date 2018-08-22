@extends('admin.master') @section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách
                            <small>loại cửa hàng</small>
                        </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="row">
                @if (Session::has('thongbao'))
                <div class="alert alert-{!! Session::get('thongbao_level') !!}">
                    {!!Session::get('thongbao')!!}
                </div>
                @endif
            </div>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên loại cửa hàng</th>
                        <th>Xóa</th>
                        <th>Sửa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 0?> 
                    @foreach ($loaicuahang as $lch)
                        <?php $stt = $stt+1?>
                        <tr class="odd gradeX" align="center">
                            <td>{{$stt}}</td>
                            <td>{{$lch->tenloaicuahang}}</td>
                            <td class="center">
                                <i class="fa fa-trash-o  fa-fw"></i>
                                <a onclick="return xacnhanxoa('Bạn có muốn xóa không?')" href="/admin/loaicuahang/xoa/{{$lch->id_loaicuahang}}">
                                    Xóa
                                </a>
                            </td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="/admin/loaicuahang/sua/{{$lch->id_loaicuahang}}">Sửa</a></td>
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