@extends('now.master')
@section('content')
<div class="container-bill">
    <div class="row-bill clearfix">
        <a href="javascript:void(0);" ng-click="detailCtrl.showListUser();" class="cart-stats">
            <span id="cart-qty" class="bold font12 ng-binding">0</span>
            <span class="font12">phần</span>
            <span style="margin-right:2px;">-</span>
            <span class="bold font12 ng-binding">0</span>
            <span class="font12">người</span>
        </a>
        <a href="javascript:void(0)" class="btn-reset" ng-click="detailCtrl.clearCart();">Reset</a>
        
        <a href="javascript:void(0);" ng-show="detailCtrl.isHost" ng-click="detailCtrl.showPopupGroupShareLink()" class="btn-order-group">Nhóm cùng đặt</a>
        <div style="background: #fff;display:none;float:left;" id="share-link-order">
            <div class="row">
                <div class="col-shareurl">
                    <div style="font-size: 11px; color: #888; float: left;">Copy link và gửi cho nhóm</div>
                    <input type="text" id="shareOrderLink" readonly="" onclick="copyToClipboardMsg(this, this)">
                </div>
                <div class="main-qr-code right">
                    <img id="qr-image" src="data:image/jpg;base64,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" title="QR Code" alt="Image QR Code">
                    <div id="qr-svg-image"></div>
                </div>
            </div>
        </div>
        <div style="padding: 6px 0 0 0;float: left;width: 100%;text-align: center;" ng-show="!detailCtrl.isHost" class="ng-hide">
            <div style="font-size:11px;color:#888;float: left;">Order được tạo bởi <i style="color:#0988f5;" class="ng-binding"></i></div>
        </div>
    </div>
    <div style="max-height:300px;overflow-y:auto;">
        <!-- ngRepeat: item in detailCtrl.cart | orderBy:'OwerName' | groupBy:'OwerName' -->
    </div>
    <div class="center-align ng-hide" ng-show="!detailCtrl.isHost">
        <i class="font11 ng-binding">Và 0 món khác đang được đặt.</i>
    </div>
    <div class="row-bill-grey clearfix">
        <span>Cộng</span>
        <span class="bold pull-right ng-binding">0<span class="unit"> đ</span></span>
    </div>
    <div class="row-bill-grey clearfix">
        <span>Phí vận chuyển (Est.)</span>
        
        <span class="pull-right">
            <span ng-show="!detailCtrl.hasMilestoneFee" class="ng-binding">7,000<span class="unit"> đ</span>/km</span>
            <a href="#service-delivery-milestone-fee-modal" class="modal-trigger ng-hide" ng-show="detailCtrl.hasMilestoneFee">[?]</a>
        </span>
    </div>
    
    
    
    
    
    
    <div class="row-bill-grey clearfix ng-hide" ng-show="detailCtrl.servicePercent > 0 || detailCtrl.showFixedService">
        <span>Phục vụ: <span class="bold ng-binding" ng-show="!detailCtrl.showFixedService">0%</span></span>
        <span class="pull-right ng-binding">0<span class="unit"> đ</span></span>
    </div>
    <div class="row-bill-grey clearfix ng-hide" ng-show="detailCtrl.vatPercent > 0">
        <span>VAT: <span class="bold ng-binding">0%</span></span>
        <span class="pull-right ng-binding">0<span class="unit"> đ</span></span>
    </div>
    <div class="row-bill-grey clearfix ng-hide" ng-show="detailCtrl.getDiscountPrice() > 0">
        <span class="pull-left">Mã khuyến mãi</span>
        <span class="txt-red ng-binding" ng-show="detailCtrl.isHost" style="margin-left:10px;">  </span>
        <a href="" ng-click="detailCtrl.applyPromotionCode();" class="btn-tiny ng-hide" style="width:80px;" ng-show="!detailCtrl.promoIsValid &amp;&amp; detailCtrl.isHost &amp;&amp; detailCtrl.promoCode.length > 0">Áp dụng</a>
        <a href="" ng-click="detailCtrl.clearPromotionCode();"><i class="fa fa-times ng-hide" style="color:red;" ng-hide="!detailCtrl.promoIsValid"></i></a>
        <span class="pull-right ng-binding ng-hide" ng-show="detailCtrl.getDiscountPrice() > 0">-0<span class="unit"> đ</span></span>
    </div>
    <div class="row-bill-grey clearfix bill" ng-hide="detailCtrl.getDiscountPrice() > 0">
        <span style="width: 100%;">Nhập mã khuyến mãi ở bước hoàn tất </span>
    </div>
    <div class="row-bill-grey clearfix relative">
        <span>Tạm tính</span>
        <span class="pull-right font16 txt-blue bold ng-binding" style="color: #085ffb;">0<span class="unit"> đ</span></span>
        <span class="pull-right ico-info-discount ng-hide" ng-click="detailCtrl.openToolTipFrameDiscount()" ng-show="detailCtrl.firstOrderCampainName == '' &amp;&amp; detailCtrl.frameDiscountAmount > 0"></span>
        <div class="tooltip-discount ng-hide" ng-show="detailCtrl.isShowTooltipFrameDiscount || detailCtrl.firstOrderToolTip != ''">
            <div ng-show="detailCtrl.firstOrderToolTip != ''" class="ng-hide">
                <span ng-bind-html="detailCtrl.firstOrderToolTip" class="ng-binding"></span>
                <span class="close-tooltip" ng-click="detailCtrl.closeToolTipFirsOrderDiscount()"></span>
            </div>
            <div ng-show="detailCtrl.isShowTooltipFrameDiscount" class="ng-hide">
                <div ng-show="detailCtrl.frameDiscountType == 1">
                    <span class="bold ng-binding">Giảm giá 0%</span> với đơn hàng hơn <span class="bold ng-binding">0 đ</span>
                </div>
                <div ng-show="detailCtrl.frameDiscountType == 2" class="ng-hide">
                    <span class="bold ng-binding">Giảm giá 0 đ</span> với đơn hàng hơn <span class="bold ng-binding">0 đ</span>
                </div>
            </div>
            <span class="close-tooltip" ng-click="detailCtrl.closeToolTipFrameDiscount()"></span>
        </div>
    </div>
    <a href="javascript:void(0)" class="btn-book-first ng-hide" ng-class="{idone:detailCtrl.isDone}" ng-disabled="detailCtrl.isDone" ng-show="!detailCtrl.isHost" ng-click="detailCtrl.updateCartIsDone();">
        <i class="fa fa-check-circle"></i>
        Tôi đã xong
    </a>
    <a href="javascript:void(0)" class="btn-book-first" ng-show="detailCtrl.isHost" ng-click="detailCtrl.checkout();">
        <i class="fa fa-check-circle"></i>
        Đặt trước
    </a>

    <div class="block-tooltip" ng-show="detailCtrl.isHost">
        <span class="close">x</span>
        <p>Nhiều người cùng đặt,<br> tiện lợi và nhanh hơn</p>
    </div>
</div>
@endsection()