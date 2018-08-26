@extends('now.master') 
@section('content')
<div class="container-restaurant-home">
    <div class="main-content">
        <section class="news-deal clearfix ng-scope" ng-controller="TopRestaurantController as topresCtrl">
            <div class="nav-deals">

                <div class="filter-tab">
                    <ul class="tabs" style="width: 100%;">
                        <li class="tab"><a class="active" href="#tab-recent" ng-click="topresCtrl.loadDeal(0, 1)">Thực đơn</a></li>
                        <div class="indicator" style="right: 211.5px; left: 0px;"></div>
                        <div class="indicator" style="right: 211.5px; left: 0px;"></div>
                    </ul>
                </div>
                <div class="tab-recent" id="tab-recent">
                    <ul class="nav-list-deals" data-simplebar="init">
                        <div class="simplebar-track vertical" style="visibility: hidden;">
                            <div class="simplebar-scrollbar"></div>
                        </div>
                        <div class="simplebar-track horizontal" style="visibility: hidden;">
                            <div class="simplebar-scrollbar"></div>
                        </div>
                        <div class="simplebar-scroll-content" style="padding-right: 17px; margin-bottom: -34px;">
                            <div class="simplebar-content" style="padding-bottom: 17px; margin-right: -17px;">
                                <li class="local-deal active">
                                    <a ng-click="topresCtrl.loadDeal(0, topresCtrl.resTab.RecentOrder)">Tất cả</a>
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </li>
                                 @foreach($loaicuahang as $item)
                                    
                                <li class="local-deal">
                                    <a href="{{ route('type.store', $item->tenkhongdau) }}">
                                        {{ $item->tenloaicuahang }}
                                    </a>

                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </li>
                                @endforeach

                            </div>
                        </div>
                    </ul>
                </div>

            </div>
            <div class="slide-deal">
                <div class="list-news-res clearfix  animate-show-hide">
                    <button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Previous" role="button" aria-disabled="false" style="display: block;">Previous</button>
                    <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;">Next</button>

                    <!-- ngRepeat: item in topresCtrl.offerRestaurant track by $index -->

                    <!--Sản phẩm-->
                    <div class="item-slide ng-scope">
                        
                        @foreach ($stores as $item)
                            {{-- expr --}}
                        {{-- {{dd($stores->all())}} --}}
                        <div class="item-news-res">
                            <div class="content-news-res hoverable">
                                <a href="{{route('fls.chitiet',$item->tenkhongdau)}}" target="_blank">
                                    <div class="img-restaurant">
                                        <img alt="{{$item->tencuahang}}" title="{{$item->tencuahang}}" src="{{$item->anhdaidien}}">
                                    </div>
                                    <div class="info-res">
                                        <div class="info-basic-res">
                                            <h4 rel="dofollow" class="name-res txt-elipsis ng-binding">
                                            <span ng-show="item.IsQualityMerchant == true" class="quality-merchant ng-hide" title="Đây là một trong những địa điểm được đánh giá tốt nhất trên hệ thống DeliveryNow"></span>
                                            {{$item->tencuahang}}
                                        </h4>
                                            <div class="address-res txt-elipsis ng-binding" title="178 Bạch Đằng, Quận Hải Châu, Đà Nẵng">{{$item->diachi}}</div>
                                        </div>
                                        <!-- ngIf: item.OfferId <= 0 -->
                                        <!-- ngIf: item.OfferId > 0 -->
                                        <p class="content-promotion txt-elipsis ng-binding ng-scope" ng-if="item.OfferId > 0">
                                            <i class="fa fa-tag" aria-hidden="true"></i> Giảm 55% trên tổng món
                                        </p>
                                        <!-- end ngIf: item.OfferId > 0 -->
                                    </div>
                                </a>
                                <div class="opentime-status" ng-show="item.IsAvailableDate" title="Mở cửa">
                                    <span class="online" title="Mở cửa"></span>
                                </div>
                                <div class="opentime-status ng-hide" ng-hide="item.IsAvailableDate" title="Đã đóng cửa">
                                    <span class="offline" title="Đã đóng cửa"></span>
                                </div>
                            </div>
                        </div>
                        
                        @endforeach

                    </div>

                        
                    
                    <!-- end ngRepeat: item in topresCtrl.offerRestaurant track by $index -->

                </div>

                <div class="list-news-res clearfix animate-show-hide ng-hide" ng-show="topresCtrl.IsProcess || topresCtrl.offerRestaurant == null || topresCtrl.offerRestaurant.length <= 0">
                    <div class="item-slide">
                        <div class="block-loading offer">
                            <div class="box-loading">
                                <div class="box-thumbnail"></div>
                                <div class="box-line-df"></div>
                                <div class="box-line-lgx"></div>
                                <div class="box-line-lg"></div>
                            </div>
                            <div class="box-loading">
                                <div class="box-thumbnail"></div>
                                <div class="box-line-df"></div>
                                <div class="box-line-lgx"></div>
                                <div class="box-line-lg"></div>
                            </div>
                            <div class="box-loading">
                                <div class="box-thumbnail"></div>
                                <div class="box-line-df"></div>
                                <div class="box-line-lgx"></div>
                                <div class="box-line-lg"></div>
                            </div>
                            <div class="box-loading">
                                <div class="box-thumbnail"></div>
                                <div class="box-line-df"></div>
                                <div class="box-line-lgx"></div>
                                <div class="box-line-lg"></div>
                            </div>
                            <div class="box-loading">
                                <div class="box-thumbnail"></div>
                                <div class="box-line-df"></div>
                                <div class="box-line-lgx"></div>
                                <div class="box-line-lg"></div>
                            </div>
                            <div class="box-loading">
                                <div class="box-thumbnail"></div>
                                <div class="box-line-df"></div>
                                <div class="box-line-lgx"></div>
                                <div class="box-line-lg"></div>
                            </div>
                            <div class="box-loading">
                                <div class="box-thumbnail"></div>
                                <div class="box-line-df"></div>
                                <div class="box-line-lgx"></div>
                                <div class="box-line-lg"></div>
                            </div>
                            <div class="box-loading">
                                <div class="box-thumbnail"></div>
                                <div class="box-line-df"></div>
                                <div class="box-line-lgx"></div>
                                <div class="box-line-lg"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    {{ $stores->links() }}
                </div>
            </div>
        </section>
    </div>
</div>
@endsection