@extends('admin.master')
@section('content')


<!-- Page Content -->
<div id="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thông tin đơn đặt hàng
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
            <h4 class="txt-confirm">Chi tiết đơn hàng cần thanh toán</h4>
        <div class="container-info-member">
            <p class="font14  clearfix">
              <span class="pull-left">Đặt món tại</span>
              <span class="bold capitalize pull-left ng-binding" style="margin-left: 5px;">
                {{ $order->thongtincuahang->tencuahang }}
              </span>
              <span class="bold pull-right font16 red-text ng-binding" style="margin-left: 5px;">
                {{ $order->tongtien + $order->phivc }} <span class="uppercase red-text"> đ</span>
              </span>
              <span class="pull-right font16 bold red-text">Tổng tiền: </span>
          </p>
          <div class="table-detail-bill">
              <div class="title-table-bill clearfix">
                  <div class="col-bill w1-bill pull-left">
                      <span class="bold">Thành viên</span>
                  </div>
                  <div class="col-bill w2-bill pull-left">
                      <span class="bold">Món ăn</span>
                  </div>
                  <div class="col-bill w3-bill pull-left">
                      <span class="bold">Số lượng</span>
                  </div>
                  <div class="col-bill w4-bill pull-left">
                      <span class="bold">Giá</span>
                  </div>

                  <div class="col-bill w5-bill pull-left">
                      <span class="bold">Phí</span>
                  </div>
                  <div class="col-bill w6-bill pull-left">
                      <span class="bold">Tổng cộng</span>
                  </div>
              </div>
              <div class="container-table-content-bill">
                <div class="table-content-bill clearfix">
                  <div class="col-content-bill w1-bill pull-left">
                      <div class="user-bill clearfix">
                          <div class="pull-left">
                              <img width="40" height="40" class="circle" src="/upload/icon/userlogin.png">
                          </div>
                          <p class="user-name-bill bold font14 capitalize mar0 ng-binding">
                            {{ $order->User->name }}
                          </p>
                      </div>
                  </div>
                  <div class="col-content-bill w2-bill pull-left">
                      <!-- ngRepeat: dish in user.Items -->
                        <div class="count-number-food clearfix ng-scope" ng-tool-tip="">
                            <span class="pull-left">
                            <a href="javascript:void(0)" class="topping-food pull-left circle ng-scope"></a>
                              <span class="">
                              </span>
                            </span>
                        </div>
                  </div>
                      <div class="col-content-bill w3-bill pull-left">
                          <span class="ng-binding">{{ count($order->chitiet) }} Món</span>
                      </div>
                      <div class="col-content-bill w4-bill pull-left">
                          <span class="ng-binding">{{ $order->tongtien }} đ</span>
                      </div>

                      <div class="col-content-bill w5-bill pull-left">
                          <span class="ng-binding">{{ $order->phivc }} đ</span>
                      </div>
                      <div class="col-content-bill w6-bill pull-left">
                          <span class="bold red-text ng-binding">{{ $order->tongtien + $order->phivc }} đ</span>
                      </div>
                  </div>
              </div>
          </div>
        </div>
            <form action="{{ route('admin.dondathang.accept', $order->id_ddh) }}" method="POST">
                <input type="hidden" name="_token" value="{!! csrf_token()!!}">
                <div class="form-group">
                    <label>Tên tài xế</label>
                    <select class="form-control" name="id_tx">
                        <option value="">Chọn tài xế</option>
                        @foreach ($taixe as $tx)
                       
                        <option value="{{$tx->id_tx}}" {{ $tx->id_tx == ($order->taixe ? $order->taixe->id_tx : '') ? 'selected' : '' }}>{{$tx->ten}}</option>

                        @endforeach
                    </select>
                </div>
                <a href="{{ route('admin.dondathang.danhsach') }}" class="btn btn-default">Quay lại</a>
                <button type="submit" class="btn btn-default">Chấp nhận</button>
            </form>
            <form action="{{ route('admin.dondathang.reject', $order->id_ddh) }}" method="POST">
                <input type="hidden" name="_token" value="{!! csrf_token()!!}">
                <button type="submit" class="btn btn-default">Hủy đơn</button>
            </form>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection()

