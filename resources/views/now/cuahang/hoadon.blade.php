<div class="popup-order" ng-app="ngAnimate">
    <div id="confirminfo" class="modal open" style="z-index: 1003; display: block; opacity: 1; transform: scaleX(1); top: 10%;">
        <div class="modal-content popup-order-detail" ng-show="detailCtrl.selection == 1">

            <div class="title-modal">
                Xác nhận đơn hàng
                <a class="modal-close btn-close-modal" ng-click="detailCtrl.shippingInfoModalOnClose()">x</a>
                <a class="btn-continue" href="#" ng-click="detailCtrl.validateInfoOrder()">Continue<img src="/content/images/icons/arrow-right.png" alt=""></a>
            </div>
            <div class="left-popup-order">
                <div class="map-order">
                    
                    <ng-map id="shipping-map" zoom="" disable-default-u-i="true" center="16.06665,108.210428" lazy-init="true" style="height: 100%; display: block;">
                        <!-- ngIf: detailCtrl.isShowPickupMap == false --><directions draggable="false" ng-if="detailCtrl.isShowPickupMap == false" polyline-options="{ strokeColor: '#d23c40'}" suppress-markers="true" travel-mode="WALKING" panel="directions-panel" origin="16.06665,108.210428" destination="[16.06665,108.210428]" avoid-tolls="false" on-directions_changed="detailCtrl.directionsChanged(e)" class="ng-scope">
                        </directions><!-- end ngIf: detailCtrl.isShowPickupMap == false -->
                        <custom-marker id="start" position="16.06665,108.210428" style="display: none;">
                            <div class="imgCircle">
                                <img src="/content/images/icons/here.png" style="width: 32px; height: 32px;">
                            </div>
                        </custom-marker>
                            <!-- ngIf: detailCtrl.isShowPickupMap == false --><marker position="[16.06665,108.210428]" ng-if="detailCtrl.isShowPickupMap == false" draggable="true" on-dragend="detailCtrl.dragEnd($event)" icon="/Content/images/icons/spotlight-poi.png" class="imgCircle ng-scope">

                            </marker><!-- end ngIf: detailCtrl.isShowPickupMap == false -->
                    <div style="width: 100%; height: 100%; position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"><div tabindex="0" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default;"><div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 1; transform: matrix(1, 0, 0, 1, -1, -90);"><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 30;"><div style="position: absolute; z-index: 1; transform: matrix(1, 0, 0, 1, -1, -90);"><div style="width: 256px; height: 256px; position: absolute; left: 0px; top: 0px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -256px; top: 0px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -256px; top: -256px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 0px; top: -256px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div style="position: absolute; z-index: 1; transform: matrix(1, 0, 0, 1, -1, -90);"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 0px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: -256px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: -256px;"></div></div></div><div style="width: 22px; height: 40px; overflow: hidden; position: absolute; left: -47px; top: -288px; z-index: -248;"><img alt="" src="/Content/images/icons/spotlight-poi.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; width: 22px; height: 40px; border: 0px; padding: 0px; margin: 0px; max-width: none; opacity: 1;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 1; transform: matrix(1, 0, 0, 1, -1, -90);"><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i22!2i3357895!3i1907460!4i256!2m3!1e0!2sm!3i432136160!3m9!2svi!3sVN!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2!23i1301875&amp;key=AIzaSyCQSVVPI1qhSF78idZHZv0Ur1HBJGGlQXg&amp;token=83164" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i22!2i3357894!3i1907460!4i256!2m3!1e0!2sm!3i432136160!3m9!2svi!3sVN!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2!23i1301875&amp;key=AIzaSyCQSVVPI1qhSF78idZHZv0Ur1HBJGGlQXg&amp;token=23737" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i22!2i3357894!3i1907459!4i256!2m3!1e0!2sm!3i432136160!3m9!2svi!3sVN!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2!23i1301875&amp;key=AIzaSyCQSVVPI1qhSF78idZHZv0Ur1HBJGGlQXg&amp;token=26137" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;"><img draggable="false" alt="" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i22!2i3357895!3i1907459!4i256!2m3!1e0!2sm!3i432136160!3m9!2svi!3sVN!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2!23i1301875&amp;key=AIzaSyCQSVVPI1qhSF78idZHZv0Ur1HBJGGlQXg&amp;token=85564" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0; transition-duration: 0.8s;"><p class="gm-style-pbt">Sử dụng ctrl + cuộn để thu phóng bản đồ</p></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"><div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"><div class="custom-marker imgCircle" style="display: inline-block; visibility: visible; position: absolute; left: -36px; top: -258px;">
                            <div class="imgCircle ng-scope">
                                <img src="/content/images/icons/here.png" style="width: 32px; height: 32px;">
                            </div>
                        </div><div title="" style="width: 38px; height: 56px; overflow: hidden; position: absolute; opacity: 0; cursor: pointer; left: -55px; top: -296px; z-index: -248;"><img alt="" src="/Content/images/icons/spotlight-poi.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 38px; height: 56px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; opacity: 1;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"><div style="z-index: -202; cursor: pointer; display: none;"><div style="width: 30px; height: 27px; overflow: hidden; position: absolute;"><img alt="" src="https://maps.gstatic.com/mapfiles/undo_poly.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 90px; height: 27px;"></div></div></div></div></div></div><iframe aria-hidden="true" frameborder="0" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;" src="about:blank"></iframe><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" rel="noopener" href="https://maps.google.com/maps?ll=16.06657,108.21044&amp;z=22&amp;t=m&amp;hl=vi&amp;gl=VN&amp;mapclient=apiv3" title="Nhấp để xem khu vực này trên Google Maps" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google4_hdpi.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 44px; top: 73px;"><div style="padding: 0px 0px 10px; font-size: 16px;">Dữ liệu Bản đồ</div><div style="font-size: 13px;">Dữ liệu bản đồ ©2018 Google</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><img alt="" src="https://maps.gstatic.com/mapfiles/transparent.png" draggable="false" style="width: 37px; height: 37px; user-select: none; border: 0px; padding: 0px; margin: 0px; position: absolute; right: 0px; top: 0px; z-index: 10001; cursor: pointer;"></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 0px; bottom: 0px; width: 12px;"><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="text-decoration: none; cursor: pointer; display: none;">Dữ liệu Bản đồ</a><span>Dữ liệu bản đồ ©2018 Google</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Dữ liệu bản đồ ©2018 Google</div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/vi_VN/help/terms_maps.html" target="_blank" rel="noopener" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Điều khoản sử dụng</a></div></div><button draggable="false" title="Chuyển đổi chế độ xem toàn màn hình" aria-label="Chuyển đổi chế độ xem toàn màn hình" type="button" class="gm-control-active gm-fullscreen-control" style="background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; display: none; top: 0px; right: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%20018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px; padding: 8px 3px 10px; margin-top: 3px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px; padding: 8px 3px 10px; margin-top: 3px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px; padding: 8px 3px 10px; margin-top: 3px;"></button></div></div></div></ng-map>
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
                            <div class="direction-name ng-binding">Trà Sữa House Of Cha - Hùng Vương</div>
                            <div class="direction-address ng-binding">341 Hùng Vương, P. Vĩnh Trung, Quận Thanh Khê, Đà Nẵng, Việt Nam</div>
                        </div>
                        <div class="direction-to">
                            <div ng-show="detailCtrl.shippingInfo.FullAddress != null" class="ng-hide">
                                <div class="direction-name" id="shipping-address">
                                    <span ng-show="detailCtrl.shippingInfo.FullName != ''" class="ng-binding ng-hide"> - </span><span ng-show="detailCtrl.shippingInfo.PhoneNumber != ''" class="ng-binding ng-hide"> </span>

                                </div>
                                <div class="direction-address">
                                    <span class="ng-binding"></span>
                                    
                                </div>
                            </div>
                            <div>
                                <a href="#" ng-show="detailCtrl.shippingInfo.FullAddress == null" ng-click="detailCtrl.changeShippingInfo()" class="">Thêm địa chỉ mới</a>
                            </div>
                        </div>
                    </div>
                    <div ng-show="detailCtrl.shippingInfo.FullAddress != null" class="ng-hide">
                        <div class="direction-time">
                            <span class="fa">
                                <img src="/content/images/icons/icon-clock.png" alt="clock">
                            </span>
                            <span class="bold ng-binding">Sớm nhất (ASAP) - 19/08 - </span>
                            <span class="txt-red ng-binding" ng-show="detailCtrl.distanceText != ''">1 km</span>
                            <span ng-show="detailCtrl.isASAP" class=""> - Dự kiến: <span class="bold ng-binding">20'</span></span>
                        </div>
                        <div class="change-info" ng-click="detailCtrl.changeShippingInfo()">
                            Thay đổi thông tin giao hàng
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="pickup-content ng-hide" ng-show="detailCtrl.shippingMethodSelected == 3">
                    <div class="info-res">
                        <div class="name txt-elipsis ng-binding">Trà Sữa House Of Cha - Hùng Vương</div>
                        <div class="address txt-elipsis ng-binding">341 Hùng Vương, P. Vĩnh Trung, Quận Thanh Khê, Đà Nẵng, Việt Nam</div>
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
                    <div class="change-info" ng-click="detailCtrl.changeShippingInfo()">
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
                <div class="order-list">
                    <!-- ngRepeat: item in detailCtrl.cart | orderBy:'OwerName' | groupBy:'OwerName'  track by $index --><!-- ngIf: $index < detailCtrl.ShowMaxItemDishInView --><div class="order-item ng-scope" ng-repeat="item in detailCtrl.cart | orderBy:'OwerName' | groupBy:'OwerName'  track by $index" ng-if="$index < detailCtrl.ShowMaxItemDishInView">
                        <span class="order-item-number ng-binding">2</span>
                        <div class="order-item-info">
                            <div class="order-item-name">
                                <span class="bold ng-binding">Sữa tươi trân châu đường đen (M)</span>
                                <span class="note-toping ng-binding ng-hide" ng-show="item.Attributes.length > 0" title="[]">
                                    []
                                </span>
                            </div>
                            <div class="order-item-note ng-binding">
                                
                            </div>
                        </div>
                        <div class="order-item-price ng-binding">
                            78,000 đ
                        </div>
                    </div><!-- end ngIf: $index < detailCtrl.ShowMaxItemDishInView --><!-- end ngRepeat: item in detailCtrl.cart | orderBy:'OwerName' | groupBy:'OwerName'  track by $index -->
                </div>
                <!-- ngIf: detailCtrl.cart.length > detailCtrl.ShowMaxItemDishInView -->

                <div class="info-order">
                    <div class="clearfix">
                        <div class="pull-left">Total <span class="bold ng-binding">2</span> món</div>
                        <div class="pull-right bold ng-binding">78,000 đ</div>
                    </div>
                    <!-- ngIf: detailCtrl.shippingMethodSelected != detailCtrl.ShippingMethodConstant.Pickup --><div class="clearfix ng-scope" ng-if="detailCtrl.shippingMethodSelected != detailCtrl.ShippingMethodConstant.Pickup">
                        <div class="pull-left">
                            Phí vận chuyển: <span class="txt-red ng-binding">1 km</span>
                            <a href="#" ng-show="detailCtrl.isFoodyDelivery" ng-click="detailCtrl.showInfoDeliveryFeeMin()" class="show-fee-min"><i class="fa fa-question"></i></a>
                        </div>
                        <div class="pull-right ng-binding">15,000 đ</div>
                    </div><!-- end ngIf: detailCtrl.shippingMethodSelected != detailCtrl.ShippingMethodConstant.Pickup -->
                    <div class="clearfix ng-hide" ng-show="detailCtrl.servicePercent > 0 || detailCtrl.showFixedService">
                        <div class="pull-left">
                            Phục vụ: <span class="txt-red ng-binding" ng-show="!detailCtrl.showFixedService">0%</span>
                            <a href="#" ng-show="detailCtrl.showFixedService" ng-click="detailCtrl.showInfoFixedService()" class="show-fee-min ng-hide"><i class="fa fa-question"></i></a>
                        </div>
                        <div class="pull-right ng-binding">
                            0 đ
                        </div>
                    </div>
                   
                    <div class="clearfix ng-hide" ng-show="detailCtrl.PackingFee > 0">
                        <div class="pull-left">Phí đóng gói:</div>
                        <div class="pull-right">
                            <span class="pull-right ng-binding">0 đ</span>
                        </div>
                    </div>

                    <div class="clearfix ng-hide" ng-show="detailCtrl.getFreeshipPrice() > 0 &amp;&amp; detailCtrl.shippingMethodSelected != detailCtrl.ShippingMethodConstant.Pickup">
                        <div class="pull-left">Khuyến mãi phí vận chuyển:</div>
                        <div class="pull-right">
                            <span class="pull-right ng-binding">-0 đ</span>
                        </div>
                    </div>
                    <div class="clearfix ng-hide" ng-show="detailCtrl.getDiscountFirstOrderPrice() > 0 &amp;&amp; detailCtrl.firstOrderCampainName != ''">
                        <div class="pull-left ng-binding" ng-bind-html="detailCtrl.firstOrderCampainName"></div>
                        <div class="pull-right">
                            <span class="pull-right ng-binding">-0 đ</span>
                        </div>
                    </div> 
                    <div class="clearfix ng-hide" ng-show="detailCtrl.getFrameDiscountPrice() > 0">
                        <div class="pull-left ng-binding" ng-bind-html="detailCtrl.frameDiscountCampainName"></div>
                        <div class="pull-right">
                            <span class="pull-right ng-binding">-0 đ</span>
                        </div>
                    </div>
                </div>
                <div class="discount-code clearfix">
                    <div class="pull-left">
                        <span class="text">
                            Mã khuyến mãi
                        </span>
                        <input type="text" class="input-code ng-pristine ng-untouched ng-valid ng-empty" placeholder="Nhập mã" ng-model="detailCtrl.promoCode" ng-show="detailCtrl.isHost">
                        <a href="" ng-click="detailCtrl.clearPromotionCode();"><i class="fa fa-times ng-hide" style="color:red;" ng-hide="!detailCtrl.promoIsValid"></i></a>
                        <span style="color:red;" ng-show="detailCtrl.discountValueType == 1" class="ng-binding ng-hide">-0%</span>
                        <button type="button" ng-click="detailCtrl.applyPromotionCode();">Áp dụng</button>
                    </div>
                    <div class="pull-right ng-binding ng-hide" ng-show="detailCtrl.getDiscountPrice()>0">
                        -0<span class="unit">đ</span>
                    </div>
                </div>

                <div class="note-order ">
                    <div class="clearfix ng-hide" ng-show="detailCtrl.isDeliveryInvoice == true">
                        <div class="pull-left">
                            <input type="checkbox" class="filled-in ng-pristine ng-untouched ng-valid ng-empty" id="vat-invoice" ng-model="detailCtrl.deliveryInvoiceCheckValue" ng-change="detailCtrl.deliveryInvoiceOnChanged()">
                            <label for="vat-invoice">VAT</label>
                            <!-- ngIf: detailCtrl.deliveryInvoiceCheckValue == true -->
                        </div>
                        <div class="pull-right" ng-click="detailCtrl.changeVatInfo()">
                            <span class="vat-number ng-binding">Num. </span>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="clearfix ng-hide" ng-show="detailCtrl.HandDeliverFeeSetting > 0 &amp;&amp; detailCtrl.shippingMethodSelected != detailCtrl.ShippingMethodConstant.Pickup">
                        <div class="pull-left">
                            <div>
                                <input type="checkbox" class="filled-in ng-pristine ng-untouched ng-valid ng-empty" id="order-now" ng-model="detailCtrl.handDeliverFeeValue">
                                <label for="order-now">Giao lên tận nơi</label>
                                <a href="#" ng-show="detailCtrl.isFoodyDelivery" ng-click="detailCtrl.showInfoHandDelivery()" class="show-fee-min"><i class="fa fa-question"></i></a>
                            </div>
                        </div>
                        <div class="pull-right">
                            <span class="ng-binding">0</span> đ
                        </div>
                    </div>
                </div>
                <div class="clearfix bold font16 pad10" style="padding-top: 7px;padding-bottom: 7px;">
                    <div class="pull-left">
                        <span>Tạm tính</span>
                    </div>
                    <div class="pull-right">
                        <span class="ng-binding">93,000 đ</span>
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
                    <textarea placeholder="Ví dụ: Tòa nhà ABC, lầu 8, cho thêm 2 ly nhựa...." id="note1" class="materialize-textarea ng-pristine ng-valid ng-empty ng-touched" ng-model="detailCtrl.orderNote"></textarea>
                    
                </div>
                <div class="clearfix" ng-show="detailCtrl.isDeliveryInvoice == false" style="padding: 10px">
                    <img src="/content/images/icons/vatnot.png" style="width: 20px; height: 20px;position: absolute">
                    <div style="padding-left: 25px; color: #A0A0A0" class="txt-red">Không xuất hoá đơn VAT</div>
                </div>
            </div>
            <div class="popup-footer">
                <a ng-click="detailCtrl.validateInfoOrder()">
                    Hoàn tất đơn hàng <img src="/content/images/icons/arrow-right.png" alt="">
                    <span class="total-price ng-binding">93,000 đ</span>
                </a>
            </div>
        </div>
        <div class="modal-content edit-info-order ng-hide" ng-show="detailCtrl.selection == 2">
            <p class="title-popup-order">
                Chỉnh sửa thông tin giao hàng
            </p>
            <div class="list-address-order">
                <div class="title">
                    <span>Chọn địa điểm giao hàng</span>
                    <!-- ngIf: detailCtrl.TempShippingInfoModal.shippingIndex > -1 && !detailCtrl.editMode -->
                    <span class="add-address ng-hide" ng-show="detailCtrl.listShippingInfoExists.length > 0 &amp;&amp; detailCtrl.TempShippingInfoModal.shippingIndex == -1 || detailCtrl.editMode" ng-click="detailCtrl.setShippingIndex(0)">
                        Chọn thông tin sẵn có
                    </span>
                </div>
                <div ng-show="detailCtrl.TempShippingInfoModal.shippingIndex > -1 &amp;&amp; !detailCtrl.editMode" class="ng-hide">
                    <!-- ngRepeat: info in detailCtrl.listShippingInfoExists track by $index -->
                </div>
                <!-- ngIf: detailCtrl.listShippingInfoViewMore.length > 0 && detailCtrl.TempShippingInfoModal.shippingIndex > -1 && !detailCtrl.editMode -->
                <div class="block-add-address" ng-hide="detailCtrl.TempShippingInfoModal.shippingIndex > -1 &amp;&amp; !detailCtrl.editMode">
                    <div class="row">
                        <div class="col s6">
                            <input placeholder="Họ tên" id="fullname" type="text" class="validate ng-dirty valid ng-touched ng-empty ng-invalid ng-invalid-required" ng-model="detailCtrl.TempShippingInfoModal.FullName" autocomplete="off" required="">
                        </div>
                        <div class="col s6">
                            <input placeholder="Số điện thoại" id="phone" type="text" class="validate ng-valid ng-valid-maxlength ng-dirty valid ng-touched ng-empty" ng-model="detailCtrl.TempShippingInfoModal.PhoneNumber" autocomplete="off" ng-number-only="" maxlength="11">

                        </div>
                        <div class="col s12">
                            <input places-auto-complete="" component-restrictions="{country:'vn'}" size="100" placeholder="Địa chỉ" id="address" type="text" class="validate ng-dirty valid ng-touched ng-empty ng-invalid ng-invalid-required" ng-model="detailCtrl.TempShippingInfoModal.FullAddress" required="" autocomplete="off">
                        </div>
                    </div>
                </div>

            </div>

            <div class="time-order">
                <div class="title">
                    Thời gian giao hàng
                </div>
                <div class="book-time-order">
                    <input type="text" class="datepicker picker__input ng-pristine ng-untouched ng-valid ng-not-empty" placeholder="" ng-model="detailCtrl.TempShippingInfoModal.deliveredDateText" readonly="" id="P614728457" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="P614728457_root"><div class="picker" id="P614728457_root" tabindex="0" aria-hidden="true"><div class="picker__holder"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__date-display"><div class="picker__weekday-display">Sunday</div><div class="picker__month-display"><div>Aug</div></div><div class="picker__day-display"><div>19</div></div><div class="picker__year-display"><div>2018</div></div></div><div class="picker__calendar-container"><div class="picker__header"><div class="picker__month">August</div><div class="picker__year">2018</div><div class="picker__nav--prev" data-nav="-1" role="button" aria-controls="P614728457_table" title="Previous month"> </div><div class="picker__nav--next" data-nav="1" role="button" aria-controls="P614728457_table" title="Next month"> </div></div><table class="picker__table" id="P614728457_table" role="grid" aria-controls="P614728457" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="Sunday">S</th><th class="picker__weekday" scope="col" title="Monday">M</th><th class="picker__weekday" scope="col" title="Tuesday">T</th><th class="picker__weekday" scope="col" title="Wednesday">W</th><th class="picker__weekday" scope="col" title="Thursday">T</th><th class="picker__weekday" scope="col" title="Friday">F</th><th class="picker__weekday" scope="col" title="Saturday">S</th></tr></thead><tbody><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1532797200000" role="gridcell" aria-label="29/07/2018">29</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1532883600000" role="gridcell" aria-label="30/07/2018">30</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1532970000000" role="gridcell" aria-label="31/07/2018">31</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1533056400000" role="gridcell" aria-label="01/08/2018">1</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1533142800000" role="gridcell" aria-label="02/08/2018">2</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1533229200000" role="gridcell" aria-label="03/08/2018">3</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1533315600000" role="gridcell" aria-label="04/08/2018">4</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1533402000000" role="gridcell" aria-label="05/08/2018">5</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1533488400000" role="gridcell" aria-label="06/08/2018">6</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1533574800000" role="gridcell" aria-label="07/08/2018">7</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1533661200000" role="gridcell" aria-label="08/08/2018">8</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1533747600000" role="gridcell" aria-label="09/08/2018">9</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1533834000000" role="gridcell" aria-label="10/08/2018">10</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1533920400000" role="gridcell" aria-label="11/08/2018">11</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1534006800000" role="gridcell" aria-label="12/08/2018">12</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1534093200000" role="gridcell" aria-label="13/08/2018">13</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1534179600000" role="gridcell" aria-label="14/08/2018">14</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1534266000000" role="gridcell" aria-label="15/08/2018">15</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1534352400000" role="gridcell" aria-label="16/08/2018">16</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1534438800000" role="gridcell" aria-label="17/08/2018">17</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1534525200000" role="gridcell" aria-label="18/08/2018">18</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus picker__day--today picker__day--selected picker__day--highlighted" data-pick="1534611600000" role="gridcell" aria-label="19/08/2018" aria-selected="true" aria-activedescendant="true">19</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1534698000000" role="gridcell" aria-label="20/08/2018">20</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1534784400000" role="gridcell" aria-label="21/08/2018">21</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1534870800000" role="gridcell" aria-label="22/08/2018">22</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1534957200000" role="gridcell" aria-label="23/08/2018">23</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1535043600000" role="gridcell" aria-label="24/08/2018">24</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1535130000000" role="gridcell" aria-label="25/08/2018">25</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1535216400000" role="gridcell" aria-label="26/08/2018">26</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1535302800000" role="gridcell" aria-label="27/08/2018">27</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1535389200000" role="gridcell" aria-label="28/08/2018">28</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1535475600000" role="gridcell" aria-label="29/08/2018">29</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1535562000000" role="gridcell" aria-label="30/08/2018">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1535648400000" role="gridcell" aria-label="31/08/2018">31</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1535734800000" role="gridcell" aria-label="01/09/2018">1</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1535821200000" role="gridcell" aria-label="02/09/2018">2</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1535907600000" role="gridcell" aria-label="03/09/2018">3</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1535994000000" role="gridcell" aria-label="04/09/2018">4</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1536080400000" role="gridcell" aria-label="05/09/2018">5</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1536166800000" role="gridcell" aria-label="06/09/2018">6</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1536253200000" role="gridcell" aria-label="07/09/2018">7</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1536339600000" role="gridcell" aria-label="08/09/2018">8</div></td></tr></tbody></table></div><div class="picker__footer"><button class="btn-flat picker__today" type="button" data-pick="1534611600000" disabled="" aria-controls="P614728457">Today</button><button class="btn-flat picker__clear" type="button" data-clear="1" disabled="" aria-controls="P614728457">Clear</button><button class="btn-flat picker__close" type="button" data-close="true" disabled="" aria-controls="P614728457">Close</button></div></div></div></div></div></div>
                    <select class="delivery-time browser-default ng-pristine ng-untouched ng-valid ng-not-empty" ng-model="detailCtrl.TempShippingInfoModal.deliveryHour" ng-options="opt as opt for opt in detailCtrl.deliveryHourOpts"><option label="Sớm nhất (ASAP)" value="string:Sớm nhất (ASAP)" selected="selected">Sớm nhất (ASAP)</option><option label="16:40" value="string:16:40">16:40</option><option label="16:45" value="string:16:45">16:45</option><option label="16:50" value="string:16:50">16:50</option><option label="16:55" value="string:16:55">16:55</option><option label="17:00" value="string:17:00">17:00</option><option label="17:05" value="string:17:05">17:05</option><option label="17:10" value="string:17:10">17:10</option><option label="17:15" value="string:17:15">17:15</option><option label="17:20" value="string:17:20">17:20</option><option label="17:25" value="string:17:25">17:25</option><option label="17:30" value="string:17:30">17:30</option><option label="17:35" value="string:17:35">17:35</option><option label="17:40" value="string:17:40">17:40</option><option label="17:45" value="string:17:45">17:45</option><option label="17:50" value="string:17:50">17:50</option><option label="17:55" value="string:17:55">17:55</option><option label="18:00" value="string:18:00">18:00</option><option label="18:05" value="string:18:05">18:05</option><option label="18:10" value="string:18:10">18:10</option><option label="18:15" value="string:18:15">18:15</option><option label="18:20" value="string:18:20">18:20</option><option label="18:25" value="string:18:25">18:25</option><option label="18:30" value="string:18:30">18:30</option><option label="18:35" value="string:18:35">18:35</option><option label="18:40" value="string:18:40">18:40</option><option label="18:45" value="string:18:45">18:45</option><option label="18:50" value="string:18:50">18:50</option><option label="18:55" value="string:18:55">18:55</option><option label="19:00" value="string:19:00">19:00</option><option label="19:05" value="string:19:05">19:05</option><option label="19:10" value="string:19:10">19:10</option><option label="19:15" value="string:19:15">19:15</option><option label="19:20" value="string:19:20">19:20</option><option label="19:25" value="string:19:25">19:25</option><option label="19:30" value="string:19:30">19:30</option><option label="19:35" value="string:19:35">19:35</option><option label="19:40" value="string:19:40">19:40</option><option label="19:45" value="string:19:45">19:45</option><option label="19:50" value="string:19:50">19:50</option><option label="19:55" value="string:19:55">19:55</option><option label="20:00" value="string:20:00">20:00</option><option label="20:05" value="string:20:05">20:05</option><option label="20:10" value="string:20:10">20:10</option><option label="20:15" value="string:20:15">20:15</option><option label="20:20" value="string:20:20">20:20</option><option label="20:25" value="string:20:25">20:25</option><option label="20:30" value="string:20:30">20:30</option><option label="20:35" value="string:20:35">20:35</option><option label="20:40" value="string:20:40">20:40</option><option label="20:45" value="string:20:45">20:45</option><option label="20:50" value="string:20:50">20:50</option><option label="20:55" value="string:20:55">20:55</option><option label="21:00" value="string:21:00">21:00</option><option label="21:05" value="string:21:05">21:05</option><option label="21:10" value="string:21:10">21:10</option><option label="21:15" value="string:21:15">21:15</option><option label="21:20" value="string:21:20">21:20</option></select>
                </div>
            </div>

















            <div class="footer-confirm clearfix">
                <button type="button" class="comeback" ng-click="detailCtrl.backToMainShippingInfo()">Quay lại</button>
                <button type="button" class="finish" ng-click="detailCtrl.updateShippingInfo()">Hoàn tất</button>
            </div>
            <script>
                $('.datepicker').pickadate({
                    format: 'dd/mm/yyyy'
                    ,
                    onStart: function () {
                        var date = new Date();
                        this.set('select', [date.getFullYear(), date.getMonth(), date.getDate()]);
                    }
                })
            </script>
        </div>
        <div class="modal-content method-payment ng-hide" ng-show="detailCtrl.selection == 4">
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
        <div class="modal-content order-detail ng-hide" ng-show="detailCtrl.selection == 3">
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

        <div class="modal-content invoice ng-hide" ng-show="detailCtrl.selection == 5">
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

        <div class="modal-content order-comple ng-hide" ng-show="detailCtrl.selection == 6">
            
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