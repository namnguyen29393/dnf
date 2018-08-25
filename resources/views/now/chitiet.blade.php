@extends('now.master') 
@section('content')
<div id="detail-page" class="container-detail-restaurant  ng-scope" ng-controller="DetailController as detailCtrl">

    <script type="text/javascript" src="/now/Scripts/slick/slick.min.js"></script>
    <div class="info-detail-restaurant" data-id="749400" data-category1="Ăn vặt/vỉa hè">
        <div class="widget-detail-restaurant container-content clearfix">
            <div class="widget-hot-restaurant">
                <div class="box-hot-restaurant clearfix" itemscope="" itemtype="http://schema.org/Product">
                    <div class="img-hot-restaurant pull-left">
                        <img src="{{$cuahang->anhdaidien}}" itemprop="image" alt="" title="{{$cuahang->tencuahang}}">

                    </div>
                    <div class="info-basic-hot-restaurant pull-left">

                        <div class="breadcrum-microsite">
                            <span itemscope="" itemtype="http://schema.org/BreadcrumbList">
                            <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                <meta itemprop="position" content="1">
                                <a itemprop="item" href="https://www.deliverynow.vn">
                                    <span itemprop="name">Trang chủ</span> »
                            </a>
                            </span>
                            <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                <meta itemprop="position" content="2">
                                <a itemprop="item" href="https://www.deliverynow.vn/da-nang">
                                    <span itemprop="name">Đà Nẵng</span> »
                            </a>
                            </span>
                            <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                <meta itemprop="position" content="3">
                                <a itemprop="item" href="https://www.deliverynow.vn/da-nang/pho-co-ha-noi-3-thang-2">
                                    <span itemprop="name">Phố Cổ Hà Nội - 3 Tháng 2</span>
                            </a>
                            </span>
                            </span>
                        </div>

                        
                        <h1 style="font-size:22px;white-space: normal;line-height: normal;" class="name-hot-restaurant" itemprop="name">
                            {{$cuahang->tencuahang}}
                        </h1>
                        <p itemprop="description" style="margin-top: 5px;margin-bottom: 5px;">{{$cuahang->diachi}}</p>

                        <div class="rating">
                            <div class="stars">
                                <span class="empty"></span>
                                <span class="empty"></span>
                                <span class="empty"></span>
                                <span class="empty"></span>
                                <span class="empty"></span>
                            </div>
                            
                        </div>

                        <p style="margin-bottom: 5px;">
                            <span class="stt-shop shop-open">Mở cửa</span>
                            <i class="ico-deli ico-deli-time mar-right3"></i>
                            <span style="position: relative; top: -3px; font-size: 15px;">{{$cuahang->giomocua}} - {{$cuahang->giodongcua}}</span>
                        </p>
                        <p class="light-grey mar0" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                            <i class="ico-deli ico-deli-money mar-right3" itemprop="priceCurrency" content="USD"></i>
                            <span style="position: relative; top: -3px; font-size: 15px;" itemprop="price" content="6,000 ">6,000 - 37,000</span>
                        </p>
                        <div class="clearfix relative">
                            <div class="facebook-google-restaurant" style="float:left;">
                                <div class="facebook">
                                    <div id="fb-root" class=" fb_reset">
                                        <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
                                            <div>
                                                <iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="https://staticxx.facebook.com/connect/xd_arbiter/r/1e2RywyANNe.js?version=42#channel=f177151abacb07c&amp;origin=https%3A%2F%2Fwww.now.vn"
                                                    style="border: none;"></iframe>
                                            </div>
                                        </div>
                                        <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
                                            <div></div>
                                        </div>
                                    </div>
                                    <script>
                                        (function(d, s, id) {
                                            var js, fjs = d.getElementsByTagName(s)[0];
                                            if (d.getElementById(id)) return;
                                            js = d.createElement(s);
                                            js.id = id;
                                            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=938149792891368";
                                            fjs.parentNode.insertBefore(js, fjs);
                                        }(document, 'script', 'facebook-jssdk'));
                                    </script>
                                    <div id="fb" class="fb-like fb_iframe_widget" data-href="https://www.now.vn/da-nang/pho-co-ha-noi-3-thang-2" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=938149792891368&amp;container_width=0&amp;href=https%3A%2F%2Fwww.now.vn%2Fda-nang%2Fpho-co-ha-noi-3-thang-2&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=false"><span style="vertical-align: bottom; width: 106px; height: 20px;"><iframe name="f2d7ba562b79f18" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.3/plugins/like.php?action=like&amp;app_id=938149792891368&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2F1e2RywyANNe.js%3Fversion%3D42%23cb%3Df38eb2a3e1de9a%26domain%3Dwww.now.vn%26origin%3Dhttps%253A%252F%252Fwww.now.vn%252Ff177151abacb07c%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fwww.now.vn%2Fda-nang%2Fpho-co-ha-noi-3-thang-2&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=false" style="border: none; visibility: visible; width: 106px; height: 20px;" class=""></iframe></span></div>
                                </div>
                                <div class="google" style="float:left;width:100px;">
                                    <!-- Place this tag in your head or just before your close body tag. -->
                                    <script src="https://apis.google.com/js/platform.js" async="" defer="" gapi_processed="true"></script>
                                    <!-- Place this tag where you want the +1 button to render. -->
                                    <div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 38px; height: 24px;">
                                        <iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 38px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 24px;" tabindex="0" vspace="0"
                                            width="100%" id="I0_1531314933929" name="I0_1531314933929" src="https://apis.google.com/se/0/_/+1/fastbutton?usegapi=1&amp;annotation=bubble&amp;width=106&amp;height=24&amp;origin=https%3A%2F%2Fwww.now.vn&amp;url=https%3A%2F%2Fwww.now.vn%2Fda-nang%2Fpho-co-ha-noi-3-thang-2&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.vi.1ORgy4sn9fI.O%2Fam%3DwQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCPAPl9hvkuVcPCTApYWvDTktRXMDQ%2Fm%3D__features__#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1531314933929&amp;_gfid=I0_1531314933929&amp;parent=https%3A%2F%2Fwww.now.vn&amp;pfname=&amp;rpctoken=29371289"
                                            data-gapiattached="true" title="G+"></iframe>
                                    </div>

                                </div>
                            </div>
                            
                        </div>
                        <div class="info-delivery-restaurant clearfix slick-initialized slick-slider" data-slick-5="">

                            <!--  -->
                            <div aria-live="polite" class="slick-list draggable">
                                <div class="slick-track" role="listbox" style="opacity: 1; width: 500px; transform: translate3d(0px, 0px, 0px);">
                                    <div class="column-info-deli pull-left slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide00" style="width: 125px;">
                                        <p class="mar0">
                                            <a style="cursor:pointer" onclick="$('#idVeryfiedMerchantMessage').openModal({dismissible: false})" tabindex="0"><img src="/Content/images/verifiedMerchant.png" style="position: absolute;bottom: -38px;left: 0"></a>
                                            <span class="uppercase light-grey">Phí dịch vụ</span>
                                        </p>
                                        <span style="color: #cf2127; font-weight: bold; font-size: 14px;">0% phục vụ</span>
                                        <a href="#service-fee-modal" class="modal-trigger" tabindex="0">[?]</a>
                                    </div>
                                    <div class="column-info-deli pull-left slick-slide slick-active" data-slick-index="1" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide01" style="width: 135px;">
                                        <p class="mar0">
                                            <span class="uppercase light-grey">phí vận chuyển</span>
                                        </p>

                                        <span class="font14">

7,000đ<span>/km</span>

                                        <a href="javascript:void(0)" ng-click="detailCtrl.showInfoDeliveryFeeMinDefault('5000', '1.4', '15000')" tabindex="0">[?]</a>

                                        </span>

                                    </div>
                                    
                                    <div class="column-info-deli pull-left slick-slide slick-active" data-slick-index="3" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide03" style="width: 135px;">
                                        <p class="mar0">
                                            <span class="uppercase light-grey">Chuẩn bị</span>
                                        </p>
                                        <span class="font14">10 phút</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <script>
                            $(function() {
                                $("[data-slick-5]").slick({
                                    infinite: false,
                                    slidesToShow: 5,
                                    slidesToScroll: 1,
                                    touchMove: false
                                })
                            })
                        </script>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div id="service-delivery-milestone-fee-modal" class="modal charge-service">
        <div class="modal-content">
            <h4 class="modal-title"> Giá tiền ship theo kilomet</h4>
            <h5 class="type-deli"> Standard Service</h5>
            <p class="note-detail-restaurant">
                Còn lại -&gt; 7,000 đ/km
            </p>

            <span class="modal-close">x</span>
        </div>
    </div>
    <script>
        $(function() {
            document.getElementById('fb').setAttribute('data-href', window.location.href);
        })
    </script>

    <div class="popup-order">
        <div id="confirminfo" class="modal">
            {{-- popup 1 --}}
            <div id="popup-modal-1" class="modal-content popup-order-detail">

                <div class="title-modal">
                    Xác nhận đơn hàng
                    <a id="btn-close-modal" class="modal-close btn-close-modal">x</a>
                    <a class="btn-continue" href="#">Continue<img src="/content/images/icons/arrow-right.png" alt=""></a>
                </div>
                <div class="left-popup-order">
                    <div class="map-order">
                        {{-- map --}}
                        <div id="map" style="width: 100%; height: 100%; position: relative; overflow: hidden;"></div>
                    </div>
                    <div class="nav-delivery">
                        <div class="list-item">
                            <!-- ngRepeat: item in detailCtrl.ListDeliveryShippingFee --><div class="item-nav active" ng-repeat="item in detailCtrl.ListDeliveryShippingFee" ng-click="detailCtrl.shippingMethodOnChange(item.ShippingMethodId)">
                                Standard Service
                            </div><!-- end ngRepeat: item in detailCtrl.ListDeliveryShippingFee -->
                        </div>
                    </div>
                    <div class="direction-content" ng-show="detailCtrl.shippingMethodSelected != 3">
                        <div class="direction-info">
                            <div class="direction-from">
                                <div class="direction-name ng-binding">{{ $cuahang->tencuahang }}</div>
                                <div class="direction-address ng-binding">{{ $cuahang->diachi }}</div>
                            </div>
                            <div class="direction-to">
                                <div id="place-info" class="ng-hide" style="display: none">
                                    <div class="direction-name">
                                        <span class="ng-binding" id="shipping-address-name"> </span>
                                        -
                                        <span class="ng-binding" id="shipping-address-phone"> </span>

                                    </div>
                                    <div class="direction-address">
                                        <span class="ng-binding" id="shipping-address-place"></span>
                                        
                                    </div>
                                </div>
                                <div id="create-place">
                                    <a href="#" id="btn-add-address" class="">Thêm địa chỉ mới</a>
                                </div>
                            </div>
                        </div>
                        <div class="ng-hide" id="place-info-time">
                            <div class="direction-time">
                                <span class="fa">
                                    <img src="/content/images/icons/icon-clock.png" alt="clock">
                                </span>
                                <span class="txt-red ng-binding" id="shipping-address-distance">0 km</span>
                                <span class=""> - Dự kiến: <span class="bold ng-binding" id="shipping-address-duration">0</span></span>
                            </div>
                            <div class="change-info" id="change-info">
                                Thay đổi thông tin giao hàng
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="pickup-content ng-hide" ng-show="detailCtrl.shippingMethodSelected == 3">
                        <div class="info-res">
                            <div class="name txt-elipsis ng-binding">{{ $cuahang->tencuahang }}</div>
                            <div class="address txt-elipsis ng-binding">{{ $cuahang->diachi }}</div>
                        </div>
                        <div class="info-user">
                            <p class="txt-elipsis">
                                <span class="fa">
                                    <img src="/content/images/icons/ico-pickup.png" alt="pickup" style="width: 17px;">
                                </span>
                                <span class="bold ng-binding"> - </span>

                            </p>
                            <p>
                                <span class="fa">
                                    <img src="/content/images/icons/icon-clock.png" alt="clock" style="width: 15px;">
                                </span>
                                <span class="bold ng-binding">Sớm nhất (ASAP) - 19/08</span>
                            </p>
                        </div>
                        <div class="change-info">
                            Thay đổi thông tin nhận hàng
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="right-popup-order">
                    <p class="title-popup-order" ng-click="detailCtrl.viewOrderDetails()">
                        Chi tiết đơn hàng
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </p>
                    <div class="order-list" id="popup-order-list">
                        @if(Auth::check())
                            @foreach($infocart as $item)
                            <div class="order-item ng-scope">
                                <span class="order-item-number ng-binding">{{ $item->soluong }}</span>
                                <div class="order-item-info">
                                    <div class="order-item-name">
                                        <span class="bold ng-binding">{{ $item->tensp }}</span>
                                        <span class="note-toping ng-binding ng-hide" ng-show="item.Attributes.length > 0" title="[]">
                                            []
                                        </span>
                                    </div>
                                    <div class="order-item-note ng-binding">
                                        
                                    </div>
                                </div>
                                <div class="order-item-price ng-binding">
                                    {{ $item->giasp * $item->soluong }} đ
                                </div>
                            </div>
                            @endforeach
                        @endif
                    </div>

                    <div class="info-order" id="popup-order-sum">
                        <div class="clearfix">
                            <div class="pull-left">
                                Total <span class="bold ng-binding">{{ Auth::check() ? count($infocart) : '0' }}</span> món
                            </div>
                            <div class="pull-right bold ng-binding">{{ Auth::check() ? $sum : '0' }} đ</div>
                        </div>
                        <!-- ngIf: detailCtrl.shippingMethodSelected != detailCtrl.ShippingMethodConstant.Pickup -->
                        <div class="clearfix ng-scope">
                            <div class="pull-left">
                                Phí vận chuyển: <span class="txt-red ng-binding">1 km</span>
                                <a href="#" ng-show="detailCtrl.isFoodyDelivery" ng-click="detailCtrl.showInfoDeliveryFeeMin()" class="show-fee-min"><i class="fa fa-question"></i></a>
                            </div>
                            <div class="pull-right ng-binding">6000 đ</div>
                        </div>
                    </div>

                    
                    <div class="clearfix bold font16 pad10" style="padding-top: 7px;padding-bottom: 7px;">
                        <div class="pull-left">
                            <span>Tạm tính</span>
                        </div>
                        <div class="pull-right">
                            <span class="ng-binding" id="popup-order-total" data-value="{{ Auth::check() ? ($sum + 6000) : 0 }}">{{ Auth::check() ? ($sum + 6000) : 0 }} đ</span>
                        </div>
                    </div>
                    <div class="clearfix payment-methods" ng-click="detailCtrl.changePaymentMethod()">
                        <div class="pull-left">
                            <span class="bold font16 txt-black ng-binding"></span>
                            <span ng-show="detailCtrl.paymentMethod == detailCtrl.paymentType.visa" class="ng-binding ng-hide"> - </span>
                            <span ng-show="detailCtrl.paymentMethod == detailCtrl.paymentType.airpay_creadit" class="ng-binding ng-hide"> - </span>
                            <!-- ngIf: detailCtrl.tempPaymentMethod == detailCtrl.DiscountPrice.PaymentType && detailCtrl.getFreeshipPrice() > 0 && detailCtrl.shippingMethodSelected != detailCtrl.ShippingMethodConstant.Pickup -->
                        </div>
                        <div class="pull-right">
                            <span>Thay đổi</span>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="clearfix order-note">
                        <textarea placeholder="Ví dụ: Tòa nhà ABC, lầu 8, cho thêm 2 ly nhựa...." id="ghichu" class="materialize-textarea ng-pristine ng-valid ng-empty ng-touched"></textarea>
                        
                    </div>
                    <div class="clearfix" ng-show="detailCtrl.isDeliveryInvoice == false" style="padding: 10px">
                        <img src="/content/images/icons/vatnot.png" style="width: 20px; height: 20px;position: absolute">
                        <div style="padding-left: 25px; color: #A0A0A0" class="txt-red">Không xuất hoá đơn VAT</div>
                    </div>
                </div>
                <div class="popup-footer">
                    <a id="btn-info-order">
                        Hoàn tất đơn hàng <img src="/content/images/icons/arrow-right.png" alt="">
                        <span class="total-price ng-binding">93,000 đ</span>
                    </a>
                </div>
            </div>
            {{-- popup 2 --}}
            <div id="popup-modal-2" class="modal-content edit-info-order ng-hide">
                <p class="title-popup-order">
                    Chỉnh sửa thông tin giao hàng
                </p>
                <div class="list-address-order">
                    <div class="title">
                        <span>Chọn địa điểm giao hàng</span>
                    </div>
                    <div class="block-add-address">
                        <div class="row">
                            <div class="col s6">
                                <input placeholder="Họ tên" id="fullname" type="text" class="validate ng-dirty valid ng-touched ng-empty ng-invalid ng-invalid-required"required="">
                            </div>
                            <div class="col s6">
                                <input placeholder="Số điện thoại" id="phone" type="text" class="validate ng-valid ng-valid-maxlength ng-dirty valid ng-touched ng-empty"autocomplete="off" maxlength="11">

                            </div>
                            <div class="col s12">
                                <input id="pac-input" type="text" placeholder="Enter a location">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="footer-confirm clearfix">
                    <button type="button" class="comeback" id="popup-modal-2-btn-back">Quay lại</button>
                    <button type="button" class="finish" id="popup-modal-2-btn-continue">Hoàn tất</button>
                </div>
            </div>
            {{-- popup 3 --}}
            <div id="popup-modal-3" class="modal-content method-payment ng-hide">
                <p class="title-popup-order">
                    Chọn phương thức thanh toán
                </p>
                <div class="list-method-payment">
                    <!-- ngRepeat: method in detailCtrl.listPaymentMethodOnChange -->
                </div>
                <div class="footer-confirm clearfix">
                    <button type="button" class="comeback" ng-click="detailCtrl.closeChangePaymentMethod()">Quay lại</button>
                    <button type="button" class="finish" ng-click="detailCtrl.updatePaymentMethod()">Hoàn tất</button>
                </div>
            </div>
            {{-- popup 4 --}}
            <div id="popup-modal-4" class="modal-content order-detail ng-hide">
                <p class="title-popup-order">
                    Chi tiết đơn hàng
                </p>
                <div class="list-order-detail">
                    <!-- ngRepeat: item in detailCtrl.cart | orderBy:'OwerName' | groupBy:'OwerName' --><div class="item-order-detail ng-scope" ng-repeat="item in detailCtrl.cart | orderBy:'OwerName' | groupBy:'OwerName'">
                        <div class="user-info clearfix group-card-item" ng-show="item.group_by_CHANGED">
                            <img ng-src="https://media.foody.vn/usr/g212/2113186/avt/c30x30/foody-avatar-767-636702908393885234.jpg" alt="" src="https://media.foody.vn/usr/g212/2113186/avt/c30x30/foody-avatar-767-636702908393885234.jpg">
                            <span class="name-user ng-binding">
                                Kiến Tiềm
                            </span>
                            <span class="item ng-binding"> 2 món</span>
                        </div>
                        <div class="list-order">
                            <div class="order-item">
                                <span class="number ng-binding">2</span>
                                <span class="name ng-binding">
                                    Sữa tươi trân châu đường đen (M)
                                    <span ng-show="item.Attributes.length > 0" class="ng-binding ng-hide">
                                        []
                                    </span>
                                </span>
                                <span class="note ng-binding" ng-show="item.Note != ''">
                                    
                                </span>
                                <span class="price ng-binding">78,000 <span class="currency">đ</span></span>
                            </div>
                        </div>
                    </div><!-- end ngRepeat: item in detailCtrl.cart | orderBy:'OwerName' | groupBy:'OwerName' -->
                </div>
                <div class="footer-confirm clearfix center">
                    <button type="button" class="comeback" ng-click="detailCtrl.backToMainShippingInfo()">Quay lại</button>
                </div>
            </div>

            {{-- popup 5 --}}
            <div id="popup-modal-5" class="modal-content invoice ng-hide">
                <p class="title-popup-order">
                    Thông tin xuất hóa đơn VAT cho đơn hàng này
                </p>
                <div class="choose-vat">
                    <div class="title ng-hide" ng-show="detailCtrl.lstDeliveryInvoiceInfo.length > 0">
                        Chọn thông tin hóa đơn có sẵn
                    </div>
                    <div class="list-vat">
                        <!-- ngRepeat: item in detailCtrl.lstDeliveryInvoiceInfo -->
                    </div>
                </div>
                <div class="add-vat">
                    <div class="title">Tạo thông tin mới</div>
                    <div class="row">
                        <div class="col s8">
                            <input type="text" ng-model="detailCtrl.companyName" placeholder="Tên công ty" class="ng-pristine ng-untouched ng-valid ng-empty">
                        </div>
                        <div class="col s4">
                            <input type="text" ng-model="detailCtrl.companyTaxCode" placeholder="Mã số thuế" class="ng-pristine ng-untouched ng-valid ng-empty">
                        </div>
                        <div class="col s12">
                            <input type="text" ng-model="detailCtrl.companyAddress" placeholder="Địa chỉ công ty" class="ng-pristine ng-untouched ng-valid ng-empty">
                        </div>
                    </div>
                </div>
                <div class="note-vat" style="padding: 10px;">
                    Quán <span class="bold ng-binding">Trà Sữa House Of Cha - Hùng Vương</span> sẽ xuất hóa đơn đỏ mua hàng trong vòng <span class="bold ng-binding">1 ngày</span>
                    <br>
                    <span class="txt-red">Phí dịch vụ giao hóa đơn của <span class="bold">Now.vn</span> là <span class="bold ng-binding">20,000 đ.</span></span> Quý khách cân nhắc trước khi hoàn tất đơn hàng
                </div>
                <div class="footer-confirm clearfix">
                    <button type="button" class="comeback" ng-click="detailCtrl.backToMainShippingInfo()">Quay lại</button>
                    <button type="button" class="finish" ng-click="detailCtrl.updateVatInfo()">Hoàn tất</button>
                </div>
            </div>

            {{-- popup 6 --}}
            <div id="popup-modal-6" class="modal-content order-comple ng-hide">
                
                <p class="txt-center mar-bottom0">
                    <i class="fa fa-check-circle" aria-hidden="true" style="font-size: 70px;color: #3da842;"></i>
                </p>

                <p class="title-popup-order font20 txt-center pad-bottom0">
                    Đặt hàng thành công
                </p>
                <p class="font16 txt-center">
                     Cảm ơn bạn đã sử dụng dịch vụ của <span class="txt-red bold">Now</span>                 <br>                 đơn hàng của bạn đã được chúng tôi tiếp nhận. 
                </p>

                <div ng-show="detailCtrl.paymentMethod === 6 &amp;&amp; detailCtrl.directPaymentUrl.length > 0" style="text-align: center" class="ng-hide">
                    <div style="padding:10px;">
                        <span>Scan QR code bên dưới để thanh toán qua AirPay.</span>
                    </div>
                    <div style="padding:10px;">
                        <img id="toppay-qrcode" ng-src="">
                    </div>
                </div>

                <p class="clearfix">
                    <a href="/lich-su-dat-mon" class="btn-history">Lịch sử đặt món</a>
                    <button class="btn-confirm" type="button" ng-click="detailCtrl.reload()">Chờ xác nhận</button>
                </p>
                <div class="footer-confirm clearfix txt-center">
                    <sup class="txt-red">*</sup>Xin vui lòng kiểm tra kỹ hàng trước khi nhận
                </div>
            </div>

            

        </div>
    </div>
    
    <div class="lean-overlay" id="materialize-lean-overlay-5" style="z-index: 1002; display: none; opacity: 0.5;"></div>

    <div class="container-content">
        <div class="clearfix relative">
            <div class="all-info-restaurant pull-left">
                <ul class="tabs" style="width: 100%;">
                    <li class="tab">
                        <a href="#menu" class="active">
                            <h2 style="font-size:13px; margin-top:20px">thực đơn</h2>
                        </a>
                    </li>
                    <li class="tab">
                        <a href="#introduce">
                            <h2 style="font-size: 13px; margin-top: 20px">giới thiệu</h2>
                        </a>
                    </li>
                    <li class="tab" style="display: none;">
                        <a href="#discount">
                            <h2 style="font-size: 13px; margin-top: 20px">khuyến mãi</h2>
                        </a>
                    </li>

                    <div class="indicator" style="right: 560px; left: 0px;"></div>
                    <div class="indicator" style="right: 560px; left: 0px;"></div>
                </ul>

                <div id="menu" ng-controller="MenuController as mn" class="ng-scope">
                    <div class="container-menu-restaurant tab-detail clearfix">
                        <div class="kind-menu-restaurant" style="">
                            <ul class="section table-of-contents" style="margin: 0; padding: 0; overflow-y: auto; max-height: 590px;">
                                <!-- {{-- {{dd($cuahang->loaisanpham)}} --}}  -->

                                @foreach($cuahang->loaisanpham as $product)
                                <li>
                                    <a href="#{{$product->tenkhongdau}}" title="Foods" class="txt-elipsis">
                                        <div class="txt-elipsis" style="font-size:13px; padding:0px; margin:0px">{{$product->tenloaisp}}</div>
                                    </a>
                                </li>
                                @endforeach()
                            </ul>
                        </div>
                        <div class="detail-menu-kind">

                            <script src="/now/Scripts/offer/countingdown.js"></script>

                            @foreach($cuahang->loaisanpham as $type)
                            <div id="{{$type->tenkhongdau}}" class="scrollspy">

                                <h2 class="title-kind-food">
                                    <span>{{$type->tenloaisp}}</span>
                                </h2> 
                                @foreach($type->sanpham as $stores)
                                <div class="box-menu-detail clearfix">
                                    <div class="img-food-detail pull-left">
                                        <a href="#cb_0" class="inline cboxElement">
                                        <img src="{{$stores->hinhanh}}" alt="" width="60" height="60">
                                    </a>
                                    </div>
                                    <div class="name-food-detail pull-left">

                                        <span>
                                                <a class="title-name-food" href="javascript:void(0);" ng-click="detailCtrl.addToCartFromMenu('2684039', '0', '7000.0000','7000.0000', 1, $event)">
                                                    <h3 style="font-size: 16px; margin: 0px; padding: 0 130px 0 0; line-height: 1.3em; font-weight: bold">
                                                        {{$stores->tensp}}
                                                    </h3>
                                                </a>
                                        </span>
                                        <span class="desc">1 xiên</span>
                                        <div class="rating-food">

                                        </div>

                                        <p class="font11 light-grey" style="margin: 0;">
                                            <span>Đã được đặt <span class="bold" style="color:#464646;">34</span> lần</span>
                                            <span ng-show="mn.GetRemainingQty('2684039') < 10" ng-bind-html="mn.GetRemainingQtyText(true,2684039)" class="ng-binding"></span>
                                        </p>

                                    </div>
                                    <div class="more-info">
                                        <div class="adding-food-cart">
                                            <span>
                                                    <span class="btn-adding" onclick="addtoCart({{ $stores }})">+</span>
                                            </span>
                                        </div>
                                        <div class="product-price">

                                            <span>
                                                <a href="javascript:void(0);">
                                                    <p class="current-price">
                                                        <span class="txt-blue font16 bold">{{$stores->giasp}}</span>
                                            <span class="unit">đ</span>
                                            </p>
                                            </a>
                                            </span>

                                        </div>
                                    </div>
                                </div>
                                @endforeach() 
                                @endforeach()
                            </div>

                        </div>
                    </div>
                    <script type="text/javascript" src="/Scripts/colorbox/jquery.colorbox.js"></script>
                    <script>
                        $(document).ready(function() {
                            $(".inline").colorbox({
                                inline: true,
                                rel: 'inline',
                                fixed: true,
                                height: "600px",
                                width: "530px",
                                className: "colorbox-menu-kind"
                                    // ,
                                    // title: function () {
                                    //     var url = $(this).attr('href');
                                    //     return '<a href="' + url + '" title="Copy link and share" class="copylink">Copy link</a>';
                                    // }
                            });
                            // var checkid = window.location.hash;
                            // if ( $(checkid).length ){
                            //     $(".inline").attr("href",checkid).colorbox({open : true});
                            // }

                        });
                    </script>
                </div>
                <div id="duplicate-order" class="modal modal-duplicate-order">
                    <div class="modal-content">
                        <h4>Bạn có muốn thêm đơn đặt cuối cùng vào giỏ hàng?</h4>
                    </div>
                    <div class="modal-footer">
                        <a href="" class="modal-action modal-close btn red" ng-click="detailCtrl.duplicateLastOrder('0')">OK</a>
                        <a href="" class="modal-action modal-close btn red">Cancel</a>
                    </div>
                </div>
                <script src="/scripts/bundle/public.menu.min.js?54500d" type="text/javascript"></script>

                <style>
                    .color-remaining-qty {
                        color: #41A33C;
                        font-weight: bold;
                    }
                </style>

                <div id="introduce" class="tab-detail" style="display: none;">
                    <div class="no-discount-today">
                        <p class="txt-center" style="color:#e1e1e1;font-size:35px;margin:0;">
                            <i class="fa fa-tag"></i>
                        </p>
                        <p class="txt-center" style="margin:0 0 10px">
                            Hiện tại chưa có bài giới thiệu cho địa điểm này
                        </p>
                    </div>
                </div>

                <div id="discount" class="tab-detail bg-discount" style="display: none;">
                    <div class="no-discount-today">
                        <div class="bg-white" style="padding:10px 15px;">
                            <script>
                                $(window).ready(function() {
                                    $('.all-info-restaurant .tabs .tab a[href=#discount]').parents('.tab').hide();
                                })
                            </script>
                        </div>

                    </div>
                </div>

            </div>
            {{--bill--}}
                <div class="container-bill">
        <div class="row-bill clearfix">
        <a href="javascript:void(0);" ng-click="detailCtrl.showListUser();" class="cart-stats">
            <span id="cart-qty" class="bold font12 ng-binding">0</span>
            <span class="font12">phần</span>
            <span style="margin-right:2px;">-</span>
            <span class="bold font12 ng-binding">0</span>
            <span class="font12">người</span>
        </a>
        <a href="javascript:void(0)" class="btn-reset" ng-click="detailCtrl.clearCart();">Giỏ hàng</a>
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
        <div id="cartuser">
            @if(Auth::check())
                @foreach($infocart as $info)

                    <div class="row-bill clearfix ng-scope">
                        @if($loop->first)
                        <div class="group-card-item" >
                            <div class="cart-user">
                                <img  style="border-radius: 50%; vertical-align: middle;" >
                                <span class="name-user ng-binding">{{Auth::user()->name}}</span>
                                <div class="number-item ng-binding">
                                    {{count($infocart)}} món
                                </div>
                            </div>
                        
                        </div>
                        @endif

                        <p style="margin: 0;" class="clearfix">
                            <span class="fa fa-plus-square txt-green pull-left btn-add-cart" data-columns="{{$info->id_giohang}}"></span>
                            <span class="txt-red bold font12 ng-binding" style="display: inline-block; min-width: 18px; text-align: center; float: left;">{{$info->soluong}}</span>
                            <span class="fa fa-minus-square pull-left btn-remove-cart" data-columns="{{$info->id_giohang}}"></span>
                            <span class="bold font13 ng-binding">{{$info->tensp}}</span>
                            <span style="font-size: 11px; color: #666;" class="ng-binding">
                              
                            </span>

                        </p>
                        <div class="add-minus-food clearfix">
                            <input type="text" placeholder="Giá sản phẩm" class="pull-left note-order ng-pristine ng-untouched ng-valid ng-empty">
                            <span style="float: right;" class="ng-binding">{{$info->giasp*$info->soluong}}</span>               
                        </div>
                    </div>
                    
                @endforeach
            @endif
        </div>

    <div class="center-align ng-hide" ng-show="!detailCtrl.isHost">
        <i class="font11 ng-binding">Và 0 món khác đang được đặt.</i>
    </div>

    <!-- Tính tổng tiền sản phẩm-->
    <div id="total-item">

        <div class="row-bill-grey clearfix">
            <span>Cộng</span>
            <span class="bold pull-right ng-binding">{{Auth::check() ? $sum : '0'}}<span class="unit"> đ</span></span>
        </div>
    </div>

    <div class="row-bill-grey clearfix">
        <span>Phí vận chuyển (Est.)</span>
        
        <span class="pull-right">
            <span ng-show="!detailCtrl.hasMilestoneFee" class="ng-binding">6000<span class="unit"> đ</span>/km</span>
            <a href="#service-delivery-milestone-fee-modal" class="modal-trigger ng-hide" ng-show="detailCtrl.hasMilestoneFee">[?]</a>
        </span>
    </div>
    
    
    
    
    <a href="javascript:void(0)" id="btn-book" class="btn-book-first" >
        <i class="fa fa-check-circle"></i>
        Đặt trước
    </a>

    
</div>
            {{--endbill--}}
            



            <div id="fee-modal" class="modal">
                <div class="modal-content">
                    <p class="ng-binding">Khoảng cách đến địa chỉ của bạn ước tính khoảng ~ 15,000 đ. Phí này có thể được điều chỉnh cho phù hợp sau khi bạn hoàn tất đơn hàng. </p>
                </div>
            </div>

            <script>
                $(document).ready(function() {
                    $.ajax({
                        type: 'GET',
                        url: '/Delivery/GenerateQrCode?url=https%3A%2F%2Fwww.now.vn%2Fda-nang%2Fpho-co-ha-noi-3-thang-2'
                    }).success(function(data) {
                        if (data != undefined || data != '') {
                            console.log(data);
                            $('#qr-image').attr('src', data);
                        }
                    });

                    $('.block-tooltip .close').on("click", function() {
                        $(this).parent().hide();
                    });
                });
            </script>

        </div>



    <!-- End -->

    <div id="DesShippingInfo" class="modal DesShippingInfo">
        <div class="modal-content ng-binding" ng-bind-html="detailCtrl.ShowShippingDescription"></div>
    </div>

    <!-- Visa Password Prompt -->
    <div id="promptVisaPasswordModal" class="modal DesShippingInfo">
        <a class="modal-close btn-close-modal">
            <i class="fa fa-close fa-1x5"></i>
        </a>
        <div class="modal-content">
            <h6 class="bold">Bảo mật thông tin</h6>
            <label for="visa_password" style="font-size: 14px" class="active">Vui lòng nhập mật khẩu để xác nhận thanh toán!</label>
            <input placeholder="Vui lòng nhập mật khẩu" style="border: 1px solid rgb(204, 204, 204);border-radius: 3px;padding: 3px 5px;" type="password" id="visa_password" class="validate ng-pristine ng-untouched ng-valid ng-empty" ng-model="detailCtrl.confirmPasswordText">
        </div>
        <div class="modal-footer" style="height: 35px; margin: 0px; font-weight: 600">
            <a href="javascript:void(0);" ng-click="detailCtrl.validatePasswordConfirm()">OK</a>
        </div>
    </div>

    <div class="container-popup-modal-finish">
        <div id="detaildetailfinish" class="modal container-dealdetail-finish">
            <p class="mar0" style="border-bottom:1px solid #e1e1e1;padding:10px 15px;">
                <span class="capitalize bold" style="color: #cc0000;">Now</span>
                <span class="bold">thông báo</span>
            </p>
            <div class="container-bg-finish">
                <p class="mar0 font15" style="padding-top:30px;padding-left:70px;">
                    Bạn có chắc muốn hoàn tất đơn hàng này
                </p>
                <div class="img-driver"></div>
            </div>
            <div class="footer-modal modal-footer clearfix" style="background-color:#f2f2f2;position:relative;">
                <a href="javascript:void(0);" class="btn-footer-finish review-again border-radius4 modal-close">xem lại</a>
                <a href="javascript:void(0);" class="btn-footer-finish agree-order border-radius4" ng-click="detailCtrl.closeConfirm();">đồng ý</a>
            </div>
        </div>
    </div>
    <div class="container-popup-modal">
        <div id="statusorder" class="modal" style="height:600px;">
            <h4 class="txt-confirm">trạng thái đặt món theo nhóm</h4>
            <div class="container-info-member">
                <p style="background-color:#f2f2f2;margin:0;padding:15px;font-size:14px;">
                    <span class="bold ng-binding" style="margin-right:2px;">0</span>
                    <span>người đang đặt</span>
                    <span style="margin:0 5px;">|</span>
                    <span class="bold ng-binding" style="margin-right:2px;">0</span>
                    <span>người đã hoàn tất</span>
                </p>
                <div class="table-detail-bill" style="height: 440px; overflow: auto;">
                    <div class="header-table-status clearfix">
                        <div class="column-status-title" style="width:280px;">
                            <label class="bold">Người tham gia</label>
                        </div>
                        <div class="column-status-title" style="width:220px;">
                            <label class="bold">Số lượng</label>
                        </div>

                        <div class="column-status-title" style="width:140px;">
                            <label class="bold">Trạng thái</label>
                        </div>
                    </div>
                    <div ng-show="detailCtrl.shoppingCartMember.length == 0">
                        Chưa có món nào được đặt
                    </div>
                    <!-- ngRepeat: user in detailCtrl.shoppingCartMember -->
                </div>
            </div>
            <div class="footer-modal modal-footer modal-fixed-footer clearfix" style="background-color:#f2f2f2;position:relative; padding: 4px 15px">
                <a href="javascript:void(0);" style="margin-left:10px;" class=" modal-action waves-effect waves-light red btn" ng-click="detailCtrl.closeAndCheckout();" ng-show="detailCtrl.isHost">Đặt món ngay</a>
                <a href="javascript:void(0);" class=" modal-action waves-effect waves-light grey btn modal-close">Đóng lại</a>
            </div>
        </div>
    </div>

    <div class="container-popup-modal">
        <div id="topping-item-modal" class="modal font15">
            <div class="topping-item-modal-content">
                <div class="topping-item-modal-summary">
                    <div class="topping-item-modal-dish-img">
                        <img alt="" title="">
                    </div>
                    <div class="topping-item-modal-summary-right">
                        <h3 class="topping-item-modal-summary-name font20 ng-binding"></h3>
                        <p class="txt-grey ng-binding"></p>
                        <div class="font15">

                            <div class="topping-item-modal-summary-price">
                                Giá: <span class="price ng-binding"> đ</span>
                            </div>
                        </div>
                    </div>
                    <div class="clearboth"></div>
                </div>
                <div class="topping-item-modal-list">
                    <!-- ngRepeat: attr in detailCtrl.actionDish.Attributes -->
                </div>
            </div>
            <div class="topping-item-modal-footer font20">
                <div>

                    <span class="btn-minus" ng-click="detailCtrl.changeQty(-1)" style="width:25px; height:25px;">-</span>
                    <input type="text" value="1" ng-model="detailCtrl.qtyActionDish" class="light-input ng-pristine ng-untouched ng-valid ng-not-empty" style="width: 25px; height: 25px; text-align: center; margin: 0 10px; background: #fff; color: #333;" readonly="readonly">
                    <span class="btn-adding" ng-click="detailCtrl.changeQty(1)" style="width: 25px; height: 25px; margin-left: 0px; margin-right: 20px">+</span>
                    <a style="padding-right:20px" href="javascript:void(0);" class="btn-submit-inline txt-center font16 btn-submit-inline2 " ng-click="detailCtrl.insertShoppingCartItemInCludeAttribute($event)">
                        <span>Đồng ý</span>
                        <span style="" class="ng-binding">+0 đ</span>
                    </a>
                </div>
                <div class="clearboth"></div>
            </div>
        </div>
    </div>

    <div class="container-popup-modal-finish">
        <div id="idVeryfiedMerchant" class="modal container-dealdetail-finish" style="z-index:1000">
            <p class="mar0" style="border-bottom:1px solid #e1e1e1;padding:10px 15px;">
                <span class="capitalize bold" style="color: #cc0000;">Now</span>
                <span class="bold">thông báo</span>
            </p>
            <div class="container-bg-finish">
                <p class="mar0 font15" style="padding-top:30px;padding-left:70px;">
                    Code này chỉ áp dụng được với các quán là Verified Merchant <a style="cursor:pointer" onclick="$('#idVeryfiedMerchantMessage').openModal({dismissible: false});$('#idVeryfiedMerchant').closeModal()">[?]</a>
                </p>
                <div class="img-driver"></div>
            </div>
            <div class="footer-modal modal-footer clearfix" style="background-color:#fff;position:relative;">
                <a href="javascript:void(0);" class="btn-footer-finish border-radius4 btn-ok modal-close" id="confirm-modal-submit-btn-0">Đồng ý</a>
            </div>
        </div>
    </div>

    <div class="container-popup-modal-finish">
        <div id="idVeryfiedMerchantMessage" class="modal container-dealdetail-finish" style="z-index:1000; width:500px">
            <p class="mar0" style="border-bottom:1px solid #e1e1e1;padding:10px 15px;">
                <span class="bold">Verified Merchant</span>
            </p>
            <div>
                <p class="mar0 font15" style="padding-top: 11px;padding-left: 15px;padding-right: 15px;">
                    Verified Merchant là những quán có hợp tác với Now và do Now giao.
                </p>
            </div>
            <div class="footer-modal modal-footer clearfix" style="background-color:#fff;position:relative;">
                <a style="left: 15px;background-color: #959595;" href="javascript:void(0);" class="btn-footer-finish border-radius4" onclick="$('#idVeryfiedMerchantMessage').closeModal();">Đóng</a>
            </div>
        </div>
    </div>

    <div class="container-popup-modal-topping popup-sorry">
        <div id="busy-modal" class="modal">
            <h4 class="title-notification ng-binding">Now thông báo</h4>
            <div class="content-topping">
                <div style="min-height:170px;">
                    <div class="content-left">
                        <p ng-bind-html="detailCtrl.messageModal" class="ng-binding"></p>
                    </div>
                    <div class="content-right">
                        <img src="/Content/images/deliverySorry.png" alt="" width="250">
                    </div>
                    <div class="orther-shop ng-hide" ng-show="(detailCtrl.relatedRestaurant|filter:{IsAvailableDate:true}).length > 0">
                        <p class="title-order ng-binding">Hoặc chọn các quán tương tự đang hoạt động bên dưới.</p>
                        <div class="list-orther">
                            <!-- ngRepeat: relatedRes in detailCtrl.relatedRestaurant|filter:{IsAvailableDate:true}|limitTo:2 -->
                        </div>
                    </div>
                </div>
                <div class="pd10 txt-center">
                    <a href="/da-nang/danh-sach-dia-diem-giao-tan-noi" target="_blank" class="agree-btn modal-close ng-binding" style="background:#aaa;">Tìm quán khác</a>
                    <a href="javascript:void(0);" class="agree-btn modal-close ng-binding" ng-click="detailCtrl.acceptBusy()"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-popup-modal">
        <div id="sharegroupinfo" class="modal">
            <a class="modal-close btn-close-modal" ng-show="detailCtrl.selection < 4"><i class="fa fa-close fa-1x5"></i></a>
            <div class="modal-header">Chia sẻ cho nhóm</div>
            <div class="modal-content" ng-switch="" on="detailCtrl.selection" style="height:auto;background:#fff;padding:0px!important;">
                <div class="group-share-left">
                    <img src="" title="QR Code" alt="QR Code" id="group-qr-code">
                    <p><a href="" target="_blank">Open new tab</a></p>
                </div>
                <div class="group-share-content">
                    <div class="left info-link-wrapper">
                        <h5 class="group-share-title">Copy link và gửi cho nhóm</h5>
                        <input type="text" id="shareGroupOrderLink" readonly="" onclick="copyToClipboardMsg(this, this)">
                        <p>DeN_Web_Or_Share</p>
                        <ul class="list-social">
                            <li>
                                <a id="share-facebook" href="" target="_blank" title="Share on facebook"><img src="/Content/images/social-icons/facebook.png"></a>
                            </li>

                            <li>
                                <a id="share-mail" href="" target="_blank" title="Share on mail"><img src="/Content/images/social-icons/mail.png"></a>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>

            <div class="modal-footer" style="padding:5px 20px;">

            </div>
        </div>
    </div>

</div>


@if(Auth::check())
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var place_end = {};

    function renderCart (data) {
        var cartitem = '';
        $.each(data, function (index, item){
            var acc = '{{Auth::user()->name}}';

             cartitem += `
                <div class="row-bill clearfix ng-scope">
                    ${index == 0 ? `
                        <div class="group-card-item" >
                            <div class="cart-user">
                                <img ng-src="" style="border-radius: 50%; vertical-align: middle;" src="">
                                <span class="name-user ng-binding">${acc}</span>
                                <div class="number-item ng-binding">
                                    ${data.length} món
                                </div>
                            </div>
                        </div>
                    ` : ''}

                    <p style="margin: 0;" class="clearfix">
                        <span class="fa fa-plus-square txt-green pull-left btn-add-cart" data-columns="${item.id_giohang}></span>
                        <span class="txt-red bold font12 ng-binding" style="display: inline-block; min-width: 18px; text-align: center; float: left;">${item.soluong}</span>
                        <span class="fa fa-minus-square pull-left btn-remove-cart" data-columns="${item.id_giohang}></span>
                        <span class="bold font13 ng-binding">${item.tensp}</span>
                        <span style="font-size: 11px; color: #666;" class="ng-binding">
                          
                        </span>

                    </p>
                    <div class="add-minus-food clearfix">
                        <input type="text" placeholder="Giá sản phẩm" class="pull-left note-order ng-pristine ng-untouched ng-valid ng-empty">
                        <span style="float: right;" class="ng-binding">${item.giasp*item.soluong}</span>               
                    </div>
                </div>
            `;
        });
      
        return cartitem;
    }

    function renderTotalCart (data) {
        var totalitem = '';
        var sum =0;
        for (var i = 0; i < data.length; i++) 
        {
            sum += data[i].soluong*data[i].giasp;
        }
        $.each(data, function (index, item) {
            if(index == 0) {
                totalitem +=`
                <div class="row-bill-grey clearfix">
                    <span>Cộng</span>
                    <span class="bold pull-right ng-binding">${sum}<span class="unit"> đ</span></span>
                </div>`;
            }
        });

        return totalitem;
    }

    function renderPopupOrderList (data) {
        var cartitem = '';
        $.each(data, function (index, item){

             cartitem += `
                <div class="order-item ng-scope">
                    <span class="order-item-number ng-binding">${item.soluong}</span>
                    <div class="order-item-info">
                        <div class="order-item-name">
                            <span class="bold ng-binding">${item.tensp}</span>
                            <span class="note-toping ng-binding ng-hide" ng-show="item.Attributes.length > 0" title="[]">
                                []
                            </span>
                        </div>
                        <div class="order-item-note ng-binding">
                            
                        </div>
                    </div>
                    <div class="order-item-price ng-binding">
                        ${item.soluong * item.giasp} đ
                    </div>
                </div>
            `;
        });
      
        return cartitem;
    }

    function renderPopupOrderSum (data) {
        var cartitem = '';
        var sum =0;
        for (var i = 0; i < data.length; i++) 
        {
            sum += data[i].soluong*data[i].giasp;
        }

        cartitem += `
            <div class="clearfix">
                <div class="pull-left">
                    Total <span class="bold ng-binding">${data.length}</span> món
                </div>
                <div class="pull-right bold ng-binding">${sum} đ</div>
            </div>
            <!-- ngIf: detailCtrl.shippingMethodSelected != detailCtrl.ShippingMethodConstant.Pickup -->
            <div class="clearfix ng-scope">
                <div class="pull-left">
                    Phí vận chuyển: <span class="txt-red ng-binding">1 km</span>
                    <a href="#" ng-show="detailCtrl.isFoodyDelivery" ng-click="detailCtrl.showInfoDeliveryFeeMin()" class="show-fee-min"><i class="fa fa-question"></i></a>
                </div>
                <div class="pull-right ng-binding">6000 đ</div>
            </div>
        `;
      
        return cartitem;
    }

    function renderPopupOrderTotal (data, fee) {
        var cartitem = '';
        var sum =0;
        for (var i = 0; i < data.length; i++) 
        {
            sum += data[i].soluong*data[i].giasp;
        }

        return sum + fee + ' đ'
    }

    function addtoCart(item) 
    {
        item.cuahang_id = '{{ $cuahang->id_cuahang }}';
        // console.log(item)
        $.post("{{route('fls.giohang')}}", item, function(data) 
        {
            
            // Thêm sản phẩm
            $("#cartuser").html(renderCart(data));
            $("#total-item").html(renderTotalCart(data));
            $("#popup-order-list").html(renderPopupOrderList(data));
            $("#popup-order-sum").html(renderPopupOrderSum(data));
            $("#popup-order-total").html(renderPopupOrderTotal(data, 6000));
        });
    };

// Tăng sản phẩm
    $(document).on('click', '.btn-add-cart', function(){
        var id = $(this).data("columns")
        var data = {
            id_giohang: id,
            status: 1 //1 là tăng
        }
        $.ajax({
            type: "POST",
            url: '/updategiohang',
            data: data,
            success: function(response)
            {
                // ---Reg code----
                $("#cartuser").html(renderCart(response));
                $("#total-item").html(renderTotalCart(response));
                $("#popup-order-list").html(renderPopupOrderList(response));
                $("#popup-order-sum").html(renderPopupOrderSum(response));
                $("#popup-order-total").html(renderPopupOrderTotal(response, 6000));
                    
                //
                    
            },
        });
    })

// Tăng sản phẩm
    $(document).on('click', '.btn-remove-cart', function(){
        var id = $(this).data("columns")
        var data = {
            id_giohang: id,
            status: 0 //1 là tăng
        }
        $.ajax({
            type: "POST",
            url: '/updategiohang',
            data: data,
            success: function(response)
            {
                $("#cartuser").html(renderCart(response));
                $("#total-item").html(renderTotalCart(response));
                $("#popup-order-list").html(renderPopupOrderList(response));
                $("#popup-order-sum").html(renderPopupOrderSum(response));
                $("#popup-order-total").html(renderPopupOrderTotal(response, 6000));
            },
        });
    })

// booking show popup
    $(document).on('click', '#btn-book', function(){
        console.log($("#cartuser").html().trim())
        if ($("#cartuser").html().trim()) {
            $('#materialize-lean-overlay-5').css({
                'display': 'block',
            });
            $('#confirminfo').css({
                'z-index': '1003',
                'display': 'block',
                'opacity': '1',
                'transform': 'scaleX(1)',
                'top': '10%'
            });
            $('#confirminfo').addClass('open');
        } else {
            alert('Bạn chưa chọn món')
        }
    })

// booking hide popup
    $(document).on('click', '#btn-close-modal', function(){
        $('#materialize-lean-overlay-5').css({
            'display': 'none',
        });
        $('#confirminfo').css({
            'z-index': '1003',
            'display': 'none',
            'opacity': '0',
            'transform': 'scaleX(0.7)',
            'top': '4%'
        });
        $('#confirminfo').removeClass('open');
    })

// show modal 2, hide modal 1
    $(document).on('click', '#btn-add-address', function(){
        $('#popup-modal-1').addClass('ng-hide');
        $('#popup-modal-2').removeClass('ng-hide');
    })

// show modal 2, hide modal 1
    $(document).on('click', '#change-info', function(){
        $('#popup-modal-1').addClass('ng-hide');
        $('#popup-modal-2').removeClass('ng-hide');
    })

// hide modal 2, show modal 1
    $(document).on('click', '#popup-modal-2-btn-back', function(){
        $('#popup-modal-2').addClass('ng-hide');
        $('#popup-modal-1').removeClass('ng-hide');
    })

// click on 
    $(document).on('click', '#popup-modal-2-btn-continue', function(){
        var fullname = $('#fullname').val();
        var phone = $('#phone').val();
        var phone = $('#phone').val();

        $("#popup-order-total").text();
        if (fullname && phone && place_end.formatted_address) {
            var service = new google.maps.DistanceMatrixService();
            service.getDistanceMatrix(
                {
                    origins: [{lat: place_end.lat, lng: place_end.lng}, place_end.formatted_address],
                    destinations: ['{{$cuahang->diachi}}', { lat: {{$cuahang->lat}}, lng: {{$cuahang->long}} }],
                    travelMode: 'DRIVING'
                }, (response, status) => {
                        console.log(response, 'response')
                    if (status == 'OK') {   
                        // modal 2
                        $('#popup-modal-2').addClass('ng-hide');
                        // modal 1
                        $('#popup-modal-1').removeClass('ng-hide');
                        // hide button create
                        $('#create-place').addClass('ng-hide');
                        $('#create-place').css({
                            'display': 'none',
                        });
                        // show input info
                        $('#place-info').removeClass('ng-hide');
                        $('#place-info').css({
                            'display': 'block',
                        });
                        // show time
                        $('#place-info-time').removeClass('ng-hide');
                        $('#shipping-address-name').text(fullname)
                        $('#shipping-address-phone').text(phone)
                        $('#shipping-address-place').text(place_end.formatted_address)

                        var origins = response.originAddresses;
                        var destinations = response.destinationAddresses;
                        var distance = '';
                        var duration = '';
                        for (var i = 0; i < origins.length; i++) {
                            var results = response.rows[i].elements;
                            for (var j = 0; j < results.length; j++) {
                                var element = results[j];
                                if (element.distance) {
                                    distance = element.distance.text;
                                    duration = element.duration.text;
                                }
                            }
                        }
                        $('#shipping-address-distance').text(distance)
                        $('#shipping-address-duration').text(duration)
                        console.log(distance, 'distance')
                        console.log(duration, 'duration')
                        // change map
                        displayRoute()
                    }
                }
            );
        }
        console.log('fail')
    })

// hide modal 2, show modal 1
    $(document).on('click', '#btn-info-order', function(){
        console.log('order')
        var fullname = $('#fullname').val();
        var phone = $('#phone').val();
        var ghichu = $('#ghichu').val();
        var data = {
            id_cuahang: {{$cuahang->id_cuahang}},
            name: fullname,
            phone: phone,
            address: place_end.formatted_address,
            ghichu: ghichu,
            phivc: 6000
        }
        if (
            data.id_cuahang
            && data.name
            && data.phone
            && data.address
            && data.phivc
        ) {
            $.ajax({
                type: "POST",
                url: '/order',
                data: data,
                success: function(response) {
                    alert('đặt hàng thành công')
                    $('#cartuser').html('')
                    $('#shipping-address-distance').html('')
                    $("#total-item").html(renderTotalCart([]));
                    $('#popup-order-list').html('')
                    $("#popup-order-sum").html(renderPopupOrderSum([]));
                    $("#popup-order-total").html(renderPopupOrderTotal([], 6000));
                    $('#materialize-lean-overlay-5').css({
                        'display': 'none',
                    });
                    $('#confirminfo').css({
                        'z-index': '1003',
                        'display': 'none',
                        'opacity': '0',
                        'transform': 'scaleX(0.7)',
                        'top': '4%'
                    });
                    $('#confirminfo').removeClass('open');
                },
            });
    } else {
        alert('chưa nhập đủ thông tin')
    }
    })




    

//
    
  // This example requires the Places library. Include the libraries=places
  // parameter when you first load the API. For example:
  // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

  function initMap() {

    // The location of Uluru
    var uluru = { lat: {{$cuahang->lat}}, lng: {{$cuahang->long}} };
    // The map, centered at Uluru
    var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 16, center: uluru});
    // The marker, positioned at Uluru
    var marker = new google.maps.Marker({position: uluru, map: map});

    var input = document.getElementById('pac-input');

    var autocomplete = new google.maps.places.Autocomplete(input);

    // autocomplete.setFields(
    //     ['formatted_address', 'address_components', 'geometry', 'icon', 'name']
    // );

    autocomplete.addListener('place_changed', function() {
      var place = autocomplete.getPlace();
      if (!place.geometry) {
        window.alert("No details available for input: '" + place.name + "'");
        return;
      }
      console.log(place)
      place_end.formatted_address = place.formatted_address
      place_end.lat = place.geometry.location.lat()
      place_end.lng = place.geometry.location.lng()
      console.log(place_end)
    });
  }

  function displayRoute() {
    var pointA = new google.maps.LatLng({{$cuahang->lat}}, {{$cuahang->long}})
    var pointB = new google.maps.LatLng(place_end.lat, place_end.lng)
    var myOptions = {
        zoom: 7,
        center: pointB
    }
    var map = new google.maps.Map(document.getElementById('map'), myOptions)
        // Instantiate a directions service.
    var directionsService = new google.maps.DirectionsService
    var directionsDisplay = new google.maps.DirectionsRenderer({
        map: map
    })
    var markerA = new google.maps.Marker({
        position: pointA,
        title: "point A",
        label: "A",
        map: map
    })
    var markerB = new google.maps.Marker({
        position: pointB,
        title: "point B",
        label: "B",
        map: map
    });

    // get route from A to B
    calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB);

}

function calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB) {
    directionsService.route({
        origin: pointA,
        destination: pointB,
        avoidTolls: true,
        avoidHighways: false,
        travelMode: google.maps.TravelMode.DRIVING
    }, function (response, status) {
        if (status == google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
        } else {
            window.alert('Directions request failed due to ' + status);
        }
    });
}

</script>
@endif
@endsection()