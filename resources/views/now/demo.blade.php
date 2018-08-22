@extends('now.master')
@section('content')
<div class="container-content">
                <div class="clearfix relative">
                    <div class="all-info-restaurant pull-left">
    <ul class="tabs" style="width: 100%;">
        <li class="tab">
            <a href="#menu" class="active"><h2 style="font-size:13px; margin-top:20px">thực đơn</h2></a>
        </li>
        <li class="tab">
            <a href="#introduce"><h2 style="font-size: 13px; margin-top: 20px">giới thiệu</h2></a>
        </li>
        <li class="tab" style="display: none;">
            <a href="#discount"><h2 style="font-size: 13px; margin-top: 20px">khuyến mãi</h2></a>
        </li>
        
    <div class="indicator" style="right: 560px; left: 0px;"></div><div class="indicator" style="right: 560px; left: 0px;"></div></ul>

    
    <div id="menu" ng-controller="MenuController as mn" class="ng-scope">
        <div class="container-menu-restaurant tab-detail clearfix">
            <div class="kind-menu-restaurant">
                <ul class="section table-of-contents" style="margin: 0; padding: 0; overflow-y: auto; max-height: 590px;">
                        <li>
                            <a href="#item_265933" title="Trending" class="txt-elipsis"><div class="txt-elipsis" style="font-size:13px; padding:0px; margin:0px">Trending</div></a>
                        </li>
                        <li>
                            <a href="#item_91425" title="Trà trái cây" class="txt-elipsis"><div class="txt-elipsis" style="font-size:13px; padding:0px; margin:0px">Trà trái cây</div></a>
                        </li>
                        <li>
                            <a href="#item_53483" title="Trà nguyên chất" class="txt-elipsis"><div class="txt-elipsis" style="font-size:13px; padding:0px; margin:0px">Trà nguyên chất</div></a>
                        </li>
                        <li>
                            <a href="#item_24795" title="Trà sữa" class="txt-elipsis"><div class="txt-elipsis" style="font-size:13px; padding:0px; margin:0px">Trà sữa</div></a>
                        </li>
                        <li>
                            <a href="#item_40166" title="Phô mai đá xay" class="txt-elipsis"><div class="txt-elipsis" style="font-size:13px; padding:0px; margin:0px">Phô mai đá xay</div></a>
                        </li>
                        <li>
                            <a href="#item_53484" title="Ăn vặt" class="txt-elipsis"><div class="txt-elipsis" style="font-size:13px; padding:0px; margin:0px">Ăn vặt</div></a>
                        </li>
                        <li>
                            <a href="#item_24801" title="Chocolate &amp; cookies đá xay" class="txt-elipsis"><div class="txt-elipsis" style="font-size:13px; padding:0px; margin:0px">Chocolate &amp; cookies đá xay</div></a>
                        </li>
                </ul>
            </div>
            <div class="detail-menu-kind">

                
<script src="/Scripts/offer/countingdown.js"></script>
        <div class="news-promotion">
                <div class="promotion-item">
                    <span class="icon-discount icon-discount-code"></span>
                    <div class="title">
                        <span class="bold">Giảm giá</span>
                        <span class="txt-red bold">30%</span>
                        - Nhập mã:
                        <span class="txt-red bold" id="code-copy-EZI">EZI</span>
                        <div class="code-copy">
                            <a href="javascript:void(0)" class="copy-promotion-code" onclick="copyPromotionCode('#code-copy-EZI','EZI')">
                                <span id="code-msg-EZI">Copy code</span>
                                <span class="fa fa-copy"></span>
                            </a>
                        </div>
                    </div>
                    <p>
                        Thời gian còn lại: <span class="bold">
                            <span id="txt_h_52255">00</span> <span class="text-discount">:</span>
                            <span id="txt_m_52255">36</span> <span class="text-discount">:</span>
                            <span id="txt_s_52255">02</span>
                        </span>
                        <script>
                        start_counting_down(0,40,15,'txt_h_52255','txt_m_52255','txt_s_52255');
                        </script>
                    </p>
                    <p>
                        Đặt tối thiểu:
                        <span class="bold">0 đ</span>
                        - Giảm tối đa:
                            <span class="bold">Không giới hạn</span>
                    </p>
                </div>

            <div ng-show="detailCtrl.listPromotion.length > 0" class="">
                <!-- ngRepeat: item in detailCtrl.listPromotion --><!-- ngIf: item.DiscountType !== detailCtrl.DeliveryDiscountType.FrameDiscount --><div class="promotion-item ng-scope" ng-repeat="item in detailCtrl.listPromotion" ng-if="item.DiscountType !== detailCtrl.DeliveryDiscountType.FrameDiscount">
                    
                    <span class="icon-discount icon-discount-new ng-hide" ng-show="item.DiscountType == detailCtrl.DeliveryDiscountType.FirstOrder"></span>
                    <span class="icon-discount icon-discount-airpay" ng-show="item.DiscountType == detailCtrl.DeliveryDiscountType.FreeShip"></span>
                    <div class="title">
                        
                        <span ng-bind-html="item.CampaignName" class="ng-binding">Khuyến mãi qua ví AirPay</span>
                        <span ng-show="item.DiscountType == detailCtrl.DeliveryDiscountType.FreeShip">
                            <!-- ngIf: item.ValueTypeId == 2 -->
                            <!-- ngIf: item.ValueTypeId == 1 --><span class="txt-red bold ng-binding ng-scope" ng-if="item.ValueTypeId == 1">100%</span><!-- end ngIf: item.ValueTypeId == 1 -->
                        </span>
                    </div>
                    <p>
                        Thời gian còn lại:
                        <span class="bold countdown ng-isolate-scope" data-val="item.CampaignId" data-val1="item.TotalHours" data-val2="item.TotalMinutes" data-val3="item.TotalSeconds">
                            <span id="txt_h_CampaignId_41">3627</span> <span class="text-discount">:</span>
                            <span id="txt_m_CampaignId_41">55</span> <span class="text-discount">:</span>
                            <span id="txt_s_CampaignId_41">49</span>
                        </span>
                        
                    </p>
                    <p>
                        Đặt tối thiểu:
                        <!-- ngIf: item.MinOrderValue > 0 -->
                        <!-- ngIf: item.MinOrderValue <= 0 --><span class="bold ng-scope" ng-if="item.MinOrderValue <= 0">0 đ</span><!-- end ngIf: item.MinOrderValue <= 0 -->
                        - Giảm tối đa:
                        <!-- ngIf: item.MaxDiscount > 0 --><span class="bold ng-binding ng-scope" ng-if="item.MaxDiscount > 0">15,000đ</span><!-- end ngIf: item.MaxDiscount > 0 -->
                        <!-- ngIf: item.MaxDiscount <= 0 -->
                    </p>

                </div><!-- end ngIf: item.DiscountType !== detailCtrl.DeliveryDiscountType.FrameDiscount --><!-- end ngRepeat: item in detailCtrl.listPromotion -->

                <!-- ngIf: detailCtrl.firstItemFrameDiscount != null -->
                <div class="discount-expand ng-hide" ng-show="detailCtrl.isExpandFrameDiscount == true" ng-click="detailCtrl.collapseListFrameDiscount()">
                    Thu lại
                    <span class="arr-collapse"></span>
                </div>
            </div>
        </div>




                    <div id="item_265933" class="scrollspy">
                        <h2 class="title-kind-food">
                            
                            <span>Trending</span>
                        </h2>
                            <div class="box-menu-detail clearfix">
                                <div class="img-food-detail pull-left">
                                    <a href="#cb_0" class="inline cboxElement">
                                        <img src="https://media.foody.vn/res/g19/184588/s600x600/2018510172459-delitcdd.jpg" alt="sua-tuoi-tran-chau-duong-den" width="60" height="60">
                                    </a>
                                </div>
                                <div class="name-food-detail pull-left">
                                        <span ng-show="mn.IsOutOfStockRemainingQty('2319704',false)" class="ng-hide">
                                            <a class="title-name-food" href="javascript:void(0);">
                                                <h3 style="font-size: 16px; margin: 0px; padding: 0 130px 0 0; line-height: 1.3em; font-weight: bold">
                                                    Sữa tươi trân châu đường đen
                                                </h3>
                                            </a>
                                        </span>
                                        <span ng-hide="mn.IsOutOfStockRemainingQty('2319704',false)">
                                                <a class="title-name-food" href="javascript:void(0);" ng-click="detailCtrl.addToCartFromMenu('2319704', '0', '25000.0000','25000.0000', 1, $event)">
                                                    <h3 style="font-size: 16px; margin: 0px; padding: 0 130px 0 0; line-height: 1.3em; font-weight: bold">
                                                        Sữa tươi trân châu đường đen
                                                    </h3>
                                                </a>
                                        </span>
                                    <span class="desc"></span>
                                    <div class="rating-food">
                                        
                                    </div>
                                    
                                    <p class="font11 light-grey" style="margin: 0;">
                                            <span>Đã được đặt <span class="bold" style="color:#464646;">6843</span> lần</span>
                                        <span ng-show="mn.GetRemainingQty('2319704') < 10" ng-bind-html="mn.GetRemainingQtyText(true,2319704)" class="ng-binding"></span>
                                    </p>
                                    
                                </div>
                                <div class="more-info">
                                    <div class="adding-food-cart">
                                        <span ng-show="mn.IsOutOfStockRemainingQty('2319704',false)" class="ng-hide">
                                            <span class="btn-over">Món đã hết</span>
                                        </span>
                                        <span ng-hide="mn.IsOutOfStockRemainingQty('2319704',false)">
                                                    <span class="btn-adding" ng-click="detailCtrl.addToCartFromMenu('2319704', '0', '25000.0000','25000.0000', 1, $event)">+</span>
                                        </span>
                                    </div>
                                    <div class="product-price">

                                            <span ng-show="mn.IsOutOfStockRemainingQty('2319704',false)" class="ng-hide">
                                                <a href="javascript:void(0);">
                                                    <p class="current-price">
                                                        <span class="txt-blue font16 bold">25,000</span>
                                                        <span class="unit">đ</span>
                                                    </p>
                                                </a>
                                            </span>
                                            <span ng-hide="mn.IsOutOfStockRemainingQty('2319704',false)">
                                                <a href="javascript:void(0);" ng-click="detailCtrl.addToCartFromMenu('2319704', '0', '25000.0000','25000.0000', 1, $event)">
                                                    <p class="current-price">
                                                        <span class="txt-blue font16 bold">25,000</span>
                                                        <span class="unit">đ</span>
                                                    </p>
                                                </a>
                                            </span>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div id="item_91425" class="scrollspy">
                        <h2 class="title-kind-food">
                            
                            <span>Trà trái cây</span>
                        </h2>
                            <div class="box-menu-detail clearfix">
                                <div class="img-food-detail pull-left">
                                    <a href="#cb_1" class="inline cboxElement">
                                        <img src="https://media.foody.vn/res/g19/184588/s600x600/2017122715321-2.jpg" alt="tra-dao-thach-tuoi" width="60" height="60">
                                    </a>
                                </div>
                                <div class="name-food-detail pull-left">
                                        <span ng-show="mn.IsOutOfStockRemainingQty('568429',false)" class="ng-hide">
                                            <a class="title-name-food" href="javascript:void(0);">
                                                <h3 style="font-size: 16px; margin: 0px; padding: 0 130px 0 0; line-height: 1.3em; font-weight: bold">
                                                    Trà đào thạch tươi
                                                </h3>
                                            </a>
                                        </span>
                                        <span ng-hide="mn.IsOutOfStockRemainingQty('568429',false)">
                                                <a class="title-name-food" href="javascript:void(0);" ng-click="detailCtrl.addToCartFromMenu('568429', '0', '30000.0000','30000.0000', 1, $event)">
                                                    <h3 style="font-size: 16px; margin: 0px; padding: 0 130px 0 0; line-height: 1.3em; font-weight: bold">
                                                        Trà đào thạch tươi
                                                    </h3>
                                                </a>
                                        </span>
                                    <span class="desc"></span>
                                    <div class="rating-food">
                                        
                                    </div>
                                    
                                    <p class="font11 light-grey" style="margin: 0;">
                                            <span>Đã được đặt <span class="bold" style="color:#464646;">2991</span> lần</span>
                                        <span ng-show="mn.GetRemainingQty('568429') < 10" ng-bind-html="mn.GetRemainingQtyText(true,568429)" class="ng-binding"></span>
                                    </p>
                                    
                                </div>
                                <div class="more-info">
                                    <div class="adding-food-cart">
                                        <span ng-show="mn.IsOutOfStockRemainingQty('568429',false)" class="ng-hide">
                                            <span class="btn-over">Món đã hết</span>
                                        </span>
                                        <span ng-hide="mn.IsOutOfStockRemainingQty('568429',false)">
                                                    <span class="btn-adding" ng-click="detailCtrl.addToCartFromMenu('568429', '0', '30000.0000','30000.0000', 1, $event)">+</span>
                                        </span>
                                    </div>
                                    <div class="product-price">

                                            <span ng-show="mn.IsOutOfStockRemainingQty('568429',false)" class="ng-hide">
                                                <a href="javascript:void(0);">
                                                    <p class="current-price">
                                                        <span class="txt-blue font16 bold">30,000</span>
                                                        <span class="unit">đ</span>
                                                    </p>
                                                </a>
                                            </span>
                                            <span ng-hide="mn.IsOutOfStockRemainingQty('568429',false)">
                                                <a href="javascript:void(0);" ng-click="detailCtrl.addToCartFromMenu('568429', '0', '30000.0000','30000.0000', 1, $event)">
                                                    <p class="current-price">
                                                        <span class="txt-blue font16 bold">30,000</span>
                                                        <span class="unit">đ</span>
                                                    </p>
                                                </a>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="box-menu-detail clearfix">
                                <div class="img-food-detail pull-left">
                                    <a href="#cb_2" class="inline cboxElement">
                                        <img src="https://media.foody.vn/res/g19/184588/s600x600/2018118096-_bu_6604.jpg" alt="tra-dao-truyen-thong" width="60" height="60">
                                    </a>
                                </div>
                                <div class="name-food-detail pull-left">
                                        <span ng-show="mn.IsOutOfStockRemainingQty('568430',false)" class="ng-hide">
                                            <a class="title-name-food" href="javascript:void(0);">
                                                <h3 style="font-size: 16px; margin: 0px; padding: 0 130px 0 0; line-height: 1.3em; font-weight: bold">
                                                    Trà đào truyền thống
                                                </h3>
                                            </a>
                                        </span>
                                        <span ng-hide="mn.IsOutOfStockRemainingQty('568430',false)">
                                                <a class="title-name-food" href="javascript:void(0);" ng-click="detailCtrl.addToCartFromMenu('568430', '0', '25000.0000','25000.0000', 1, $event)">
                                                    <h3 style="font-size: 16px; margin: 0px; padding: 0 130px 0 0; line-height: 1.3em; font-weight: bold">
                                                        Trà đào truyền thống
                                                    </h3>
                                                </a>
                                        </span>
                                    <span class="desc"></span>
                                    <div class="rating-food">
                                        
                                    </div>
                                    
                                    <p class="font11 light-grey" style="margin: 0;">
                                            <span>Đã được đặt <span class="bold" style="color:#464646;">1677</span> lần</span>
                                        <span ng-show="mn.GetRemainingQty('568430') < 10" ng-bind-html="mn.GetRemainingQtyText(true,568430)" class="ng-binding"></span>
                                    </p>
                                    
                                </div>
                                <div class="more-info">
                                    <div class="adding-food-cart">
                                        <span ng-show="mn.IsOutOfStockRemainingQty('568430',false)" class="ng-hide">
                                            <span class="btn-over">Món đã hết</span>
                                        </span>
                                        <span ng-hide="mn.IsOutOfStockRemainingQty('568430',false)">
                                                    <span class="btn-adding" ng-click="detailCtrl.addToCartFromMenu('568430', '0', '25000.0000','25000.0000', 1, $event)">+</span>
                                        </span>
                                    </div>
                                    <div class="product-price">

                                            <span ng-show="mn.IsOutOfStockRemainingQty('568430',false)" class="ng-hide">
                                                <a href="javascript:void(0);">
                                                    <p class="current-price">
                                                        <span class="txt-blue font16 bold">25,000</span>
                                                        <span class="unit">đ</span>
                                                    </p>
                                                </a>
                                            </span>
                                            <span ng-hide="mn.IsOutOfStockRemainingQty('568430',false)">
                                                <a href="javascript:void(0);" ng-click="detailCtrl.addToCartFromMenu('568430', '0', '25000.0000','25000.0000', 1, $event)">
                                                    <p class="current-price">
                                                        <span class="txt-blue font16 bold">25,000</span>
                                                        <span class="unit">đ</span>
                                                    </p>
                                                </a>
                                            </span>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div id="item_53483" class="scrollspy">
                        <h2 class="title-kind-food">
                            
                            <span>Trà nguyên chất</span>
                        </h2>
                            <div class="box-menu-detail clearfix">
                                <div class="img-food-detail pull-left">
                                    <a href="#cb_3" class="inline cboxElement">
                                        <img src="https://media.foody.vn/res/g19/184588/s600x600/20171227152313-deli-tea1.jpg" alt="hong-tra" width="60" height="60">
                                    </a>
                                </div>
                                <div class="name-food-detail pull-left">
                                        <span ng-show="mn.IsOutOfStockRemainingQty('653113',false)" class="ng-hide">
                                            <a class="title-name-food" href="javascript:void(0);">
                                                <h3 style="font-size: 16px; margin: 0px; padding: 0 130px 0 0; line-height: 1.3em; font-weight: bold">
                                                    Hồng trà
                                                </h3>
                                            </a>
                                        </span>
                                        <span ng-hide="mn.IsOutOfStockRemainingQty('653113',false)">
                                                <a class="title-name-food" href="javascript:void(0);" ng-click="detailCtrl.addToCartFromMenu('653113', '0', '17000.0000','17000.0000', 1, $event)">
                                                    <h3 style="font-size: 16px; margin: 0px; padding: 0 130px 0 0; line-height: 1.3em; font-weight: bold">
                                                        Hồng trà
                                                    </h3>
                                                </a>
                                        </span>
                                    <span class="desc"></span>
                                    <div class="rating-food">
                                        
                                    </div>
                                    
                                    <p class="font11 light-grey" style="margin: 0;">
                                            <span>Đã được đặt <span class="bold" style="color:#464646;">657</span> lần</span>
                                        <span ng-show="mn.GetRemainingQty('653113') < 10" ng-bind-html="mn.GetRemainingQtyText(true,653113)" class="ng-binding"></span>
                                    </p>
                                    
                                </div>
                                <div class="more-info">
                                    <div class="adding-food-cart">
                                        <span ng-show="mn.IsOutOfStockRemainingQty('653113',false)" class="ng-hide">
                                            <span class="btn-over">Món đã hết</span>
                                        </span>
                                        <span ng-hide="mn.IsOutOfStockRemainingQty('653113',false)">
                                                    <span class="btn-adding" ng-click="detailCtrl.addToCartFromMenu('653113', '0', '17000.0000','17000.0000', 1, $event)">+</span>
                                        </span>
                                    </div>
                                    <div class="product-price">

                                            <span ng-show="mn.IsOutOfStockRemainingQty('653113',false)" class="ng-hide">
                                                <a href="javascript:void(0);">
                                                    <p class="current-price">
                                                        <span class="txt-blue font16 bold">17,000</span>
                                                        <span class="unit">đ</span>
                                                    </p>
                                                </a>
                                            </span>
                                            <span ng-hide="mn.IsOutOfStockRemainingQty('653113',false)">
                                                <a href="javascript:void(0);" ng-click="detailCtrl.addToCartFromMenu('653113', '0', '17000.0000','17000.0000', 1, $event)">
                                                    <p class="current-price">
                                                        <span class="txt-blue font16 bold">17,000</span>
                                                        <span class="unit">đ</span>
                                                    </p>
                                                </a>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="box-menu-detail clearfix">
                                <div class="img-food-detail pull-left">
                                    <a href="#cb_4" class="inline cboxElement">
                                        <img src="https://media.foody.vn/res/g19/184588/s600x600/20171210152624-22159359_1437980112922533_8251252987368833024_n.jpg" alt="tra-xanh-hoa-nhai" width="60" height="60">
                                    </a>
                                </div>
                                <div class="name-food-detail pull-left">
                                        <span ng-show="mn.IsOutOfStockRemainingQty('863543',false)" class="ng-hide">
                                            <a class="title-name-food" href="javascript:void(0);">
                                                <h3 style="font-size: 16px; margin: 0px; padding: 0 130px 0 0; line-height: 1.3em; font-weight: bold">
                                                    Trà xanh hoa nhài
                                                </h3>
                                            </a>
                                        </span>
                                        <span ng-hide="mn.IsOutOfStockRemainingQty('863543',false)">
                                                <a class="title-name-food" href="javascript:void(0);" ng-click="detailCtrl.addToCartFromMenu('863543', '0', '17000.0000','17000.0000', 1, $event)">
                                                    <h3 style="font-size: 16px; margin: 0px; padding: 0 130px 0 0; line-height: 1.3em; font-weight: bold">
                                                        Trà xanh hoa nhài
                                                    </h3>
                                                </a>
                                        </span>
                                    <span class="desc"></span>
                                    <div class="rating-food">
                                        
                                    </div>
                                    
                                    <p class="font11 light-grey" style="margin: 0;">
                                            <span>Đã được đặt <span class="bold" style="color:#464646;">168</span> lần</span>
                                        <span ng-show="mn.GetRemainingQty('863543') < 10" ng-bind-html="mn.GetRemainingQtyText(true,863543)" class="ng-binding"></span>
                                    </p>
                                    
                                </div>
                                <div class="more-info">
                                    <div class="adding-food-cart">
                                        <span ng-show="mn.IsOutOfStockRemainingQty('863543',false)" class="ng-hide">
                                            <span class="btn-over">Món đã hết</span>
                                        </span>
                                        <span ng-hide="mn.IsOutOfStockRemainingQty('863543',false)">
                                                    <span class="btn-adding" ng-click="detailCtrl.addToCartFromMenu('863543', '0', '17000.0000','17000.0000', 1, $event)">+</span>
                                        </span>
                                    </div>
                                    <div class="product-price">

                                            <span ng-show="mn.IsOutOfStockRemainingQty('863543',false)" class="ng-hide">
                                                <a href="javascript:void(0);">
                                                    <p class="current-price">
                                                        <span class="txt-blue font16 bold">17,000</span>
                                                        <span class="unit">đ</span>
                                                    </p>
                                                </a>
                                            </span>
                                            <span ng-hide="mn.IsOutOfStockRemainingQty('863543',false)">
                                                <a href="javascript:void(0);" ng-click="detailCtrl.addToCartFromMenu('863543', '0', '17000.0000','17000.0000', 1, $event)">
                                                    <p class="current-price">
                                                        <span class="txt-blue font16 bold">17,000</span>
                                                        <span class="unit">đ</span>
                                                    </p>
                                                </a>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="box-menu-detail clearfix">
                                <div class="img-food-detail pull-left">
                                    <a href="#cb_5" class="inline cboxElement">
                                        <img src="https://media.foody.vn/res/g19/184588/s600x600/20171227145856-7.jpg" alt="tra-oolong" width="60" height="60">
                                    </a>
                                </div>
                                <div class="name-food-detail pull-left">
                                        <span ng-show="mn.IsOutOfStockRemainingQty('863541',false)" class="ng-hide">
                                            <a class="title-name-food" href="javascript:void(0);">
                                                <h3 style="font-size: 16px; margin: 0px; padding: 0 130px 0 0; line-height: 1.3em; font-weight: bold">
                                                    Trà Oolong
                                                </h3>
                                            </a>
                                        </span>
                                        <span ng-hide="mn.IsOutOfStockRemainingQty('863541',false)">
                                                <a class="title-name-food" href="javascript:void(0);" ng-click="detailCtrl.addToCartFromMenu('863541', '0', '17000.0000','17000.0000', 1, $event)">
                                                    <h3 style="font-size: 16px; margin: 0px; padding: 0 130px 0 0; line-height: 1.3em; font-weight: bold">
                                                        Trà Oolong
                                                    </h3>
                                                </a>
                                        </span>
                                    <span class="desc"></span>
                                    <div class="rating-food">
                                        
                                    </div>
                                    
                                    <p class="font11 light-grey" style="margin: 0;">
                                            <span>Đã được đặt <span class="bold" style="color:#464646;">161</span> lần</span>
                                        <span ng-show="mn.GetRemainingQty('863541') < 10" ng-bind-html="mn.GetRemainingQtyText(true,863541)" class="ng-binding"></span>
                                    </p>
                                    
                                </div>
                                <div class="more-info">
                                    <div class="adding-food-cart">
                                        <span ng-show="mn.IsOutOfStockRemainingQty('863541',false)" class="ng-hide">
                                            <span class="btn-over">Món đã hết</span>
                                        </span>
                                        <span ng-hide="mn.IsOutOfStockRemainingQty('863541',false)">
                                                    <span class="btn-adding" ng-click="detailCtrl.addToCartFromMenu('863541', '0', '17000.0000','17000.0000', 1, $event)">+</span>
                                        </span>
                                    </div>
                                    <div class="product-price">

                                            <span ng-show="mn.IsOutOfStockRemainingQty('863541',false)" class="ng-hide">
                                                <a href="javascript:void(0);">
                                                    <p class="current-price">
                                                        <span class="txt-blue font16 bold">17,000</span>
                                                        <span class="unit">đ</span>
                                                    </p>
                                                </a>
                                            </span>
                                            <span ng-hide="mn.IsOutOfStockRemainingQty('863541',false)">
                                                <a href="javascript:void(0);" ng-click="detailCtrl.addToCartFromMenu('863541', '0', '17000.0000','17000.0000', 1, $event)">
                                                    <p class="current-price">
                                                        <span class="txt-blue font16 bold">17,000</span>
                                                        <span class="unit">đ</span>
                                                    </p>
                                                </a>
                                            </span>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div id="item_24795" class="scrollspy">
                        <h2 class="title-kind-food">
                            
                            <span>Trà sữa</span>
                        </h2>
                            <div class="box-menu-detail clearfix">
                                <div class="img-food-detail pull-left">
                                    <a href="#cb_6" class="inline cboxElement">
                                        <img src="https://media.foody.vn/res/g19/184588/s600x600/2017122715918-4.jpg" alt="tra-sua-hong-tra" width="60" height="60">
                                    </a>
                                </div>
                                <div class="name-food-detail pull-left">
                                        <span ng-show="mn.IsOutOfStockRemainingQty('444485',false)" class="ng-hide">
                                            <a class="title-name-food" href="javascript:void(0);">
                                                <h3 style="font-size: 16px; margin: 0px; padding: 0 130px 0 0; line-height: 1.3em; font-weight: bold">
                                                    Trà sữa hồng trà
                                                </h3>
                                            </a>
                                        </span>
                                        <span ng-hide="mn.IsOutOfStockRemainingQty('444485',false)">
                                                <a class="title-name-food" href="javascript:void(0);" ng-click="detailCtrl.addToCartFromMenu('444485', '0', '17000.0000','17000.0000', 1, $event)">
                                                    <h3 style="font-size: 16px; margin: 0px; padding: 0 130px 0 0; line-height: 1.3em; font-weight: bold">
                                                        Trà sữa hồng trà
                                                    </h3>
                                                </a>
                                        </span>
                                    <span class="desc"></span>
                                    <div class="rating-food">
                                        
                                    </div>
                                    
                                    <p class="font11 light-grey" style="margin: 0;">
                                            <span>Đã được đặt <span class="bold" style="color:#464646;">1778</span> lần</span>
                                        <span ng-show="mn.GetRemainingQty('444485') < 10" ng-bind-html="mn.GetRemainingQtyText(true,444485)" class="ng-binding"></span>
                                    </p>
                                    
                                </div>
                                <div class="more-info">
                                    <div class="adding-food-cart">
                                        <span ng-show="mn.IsOutOfStockRemainingQty('444485',false)" class="ng-hide">
                                            <span class="btn-over">Món đã hết</span>
                                        </span>
                                        <span ng-hide="mn.IsOutOfStockRemainingQty('444485',false)">
                                                    <span class="btn-adding" ng-click="detailCtrl.addToCartFromMenu('444485', '0', '17000.0000','17000.0000', 1, $event)">+</span>
                                        </span>
                                    </div>
                                    <div class="product-price">

                                            <span ng-show="mn.IsOutOfStockRemainingQty('444485',false)" class="ng-hide">
                                                <a href="javascript:void(0);">
                                                    <p class="current-price">
                                                        <span class="txt-blue font16 bold">17,000</span>
                                                        <span class="unit">đ</span>
                                                    </p>
                                                </a>
                                            </span>
                                            <span ng-hide="mn.IsOutOfStockRemainingQty('444485',false)">
                                                <a href="javascript:void(0);" ng-click="detailCtrl.addToCartFromMenu('444485', '0', '17000.0000','17000.0000', 1, $event)">
                                                    <p class="current-price">
                                                        <span class="txt-blue font16 bold">17,000</span>
                                                        <span class="unit">đ</span>
                                                    </p>
                                                </a>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="box-menu-detail clearfix">
                                <div class="img-food-detail pull-left">
                                    <a href="#cb_7" class="inline cboxElement">
                                        <img src="https://media.foody.vn/res/g19/184588/s600x600/20171227151552-deli-tstx.jpg" alt="tra-sua-thai-xanh" width="60" height="60">
                                    </a>
                                </div>
                                <div class="name-food-detail pull-left">
                                        <span ng-show="mn.IsOutOfStockRemainingQty('623937',false)" class="ng-hide">
                                            <a class="title-name-food" href="javascript:void(0);">
                                                <h3 style="font-size: 16px; margin: 0px; padding: 0 130px 0 0; line-height: 1.3em; font-weight: bold">
                                                    Trà sữa Thái xanh
                                                </h3>
                                            </a>
                                        </span>
                                        <span ng-hide="mn.IsOutOfStockRemainingQty('623937',false)">
                                                <a class="title-name-food" href="javascript:void(0);" ng-click="detailCtrl.addToCartFromMenu('623937', '0', '17000.0000','17000.0000', 1, $event)">
                                                    <h3 style="font-size: 16px; margin: 0px; padding: 0 130px 0 0; line-height: 1.3em; font-weight: bold">
                                                        Trà sữa Thái xanh
                                                    </h3>
                                                </a>
                                        </span>
                                    <span class="desc"></span>
                                    <div class="rating-food">
                                        
                                    </div>
                                    
                                    <p class="font11 light-grey" style="margin: 0;">
                                            <span>Đã được đặt <span class="bold" style="color:#464646;">1285</span> lần</span>
                                        <span ng-show="mn.GetRemainingQty('623937') < 10" ng-bind-html="mn.GetRemainingQtyText(true,623937)" class="ng-binding"></span>
                                    </p>
                                    
                                </div>
                                <div class="more-info">
                                    <div class="adding-food-cart">
                                        <span ng-show="mn.IsOutOfStockRemainingQty('623937',false)" class="ng-hide">
                                            <span class="btn-over">Món đã hết</span>
                                        </span>
                                        <span ng-hide="mn.IsOutOfStockRemainingQty('623937',false)">
                                                    <span class="btn-adding" ng-click="detailCtrl.addToCartFromMenu('623937', '0', '17000.0000','17000.0000', 1, $event)">+</span>
                                        </span>
                                    </div>
                                    <div class="product-price">

                                            <span ng-show="mn.IsOutOfStockRemainingQty('623937',false)" class="ng-hide">
                                                <a href="javascript:void(0);">
                                                    <p class="current-price">
                                                        <span class="txt-blue font16 bold">17,000</span>
                                                        <span class="unit">đ</span>
                                                    </p>
                                                </a>
                                            </span>
                                            <span ng-hide="mn.IsOutOfStockRemainingQty('623937',false)">
                                                <a href="javascript:void(0);" ng-click="detailCtrl.addToCartFromMenu('623937', '0', '17000.0000','17000.0000', 1, $event)">
                                                    <p class="current-price">
                                                        <span class="txt-blue font16 bold">17,000</span>
                                                        <span class="unit">đ</span>
                                                    </p>
                                                </a>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="box-menu-detail clearfix">
                                <div class="img-food-detail pull-left">
                                    <a href="#cb_8" class="inline cboxElement">
                                        <img src="https://media.foody.vn/res/g19/184588/s600x600/2017122715131-untitled.jpg" alt="tra-sua-tra-xanh-hoa-nhai" width="60" height="60">
                                    </a>
                                </div>
                                <div class="name-food-detail pull-left">
                                        <span ng-show="mn.IsOutOfStockRemainingQty('1096889',false)" class="ng-hide">
                                            <a class="title-name-food" href="javascript:void(0);">
                                                <h3 style="font-size: 16px; margin: 0px; padding: 0 130px 0 0; line-height: 1.3em; font-weight: bold">
                                                    Trà sữa trà xanh hoa nhài
                                                </h3>
                                            </a>
                                        </span>
                                        <span ng-hide="mn.IsOutOfStockRemainingQty('1096889',false)">
                                                <a class="title-name-food" href="javascript:void(0);" ng-click="detailCtrl.addToCartFromMenu('1096889', '0', '19000.0000','19000.0000', 1, $event)">
                                                    <h3 style="font-size: 16px; margin: 0px; padding: 0 130px 0 0; line-height: 1.3em; font-weight: bold">
                                                        Trà sữa trà xanh hoa nhài
                                                    </h3>
                                                </a>
                                        </span>
                                    <span class="desc"></span>
                                    <div class="rating-food">
                                        
                                    </div>
                                    
                                    <p class="font11 light-grey" style="margin: 0;">
                                            <span>Đã được đặt <span class="bold" style="color:#464646;">371</span> lần</span>
                                        <span ng-show="mn.GetRemainingQty('1096889') < 10" ng-bind-html="mn.GetRemainingQtyText(true,1096889)" class="ng-binding"></span>
                                    </p>
                                    
                                </div>
                                <div class="more-info">
                                    <div class="adding-food-cart">
                                        <span ng-show="mn.IsOutOfStockRemainingQty('1096889',false)" class="ng-hide">
                                            <span class="btn-over">Món đã hết</span>
                                        </span>
                                        <span ng-hide="mn.IsOutOfStockRemainingQty('1096889',false)">
                                                    <span class="btn-adding" ng-click="detailCtrl.addToCartFromMenu('1096889', '0', '19000.0000','19000.0000', 1, $event)">+</span>
                                        </span>
                                    </div>
                                    <div class="product-price">

                                            <span ng-show="mn.IsOutOfStockRemainingQty('1096889',false)" class="ng-hide">
                                                <a href="javascript:void(0);">
                                                    <p class="current-price">
                                                        <span class="txt-blue font16 bold">19,000</span>
                                                        <span class="unit">đ</span>
                                                    </p>
                                                </a>
                                            </span>
                                            <span ng-hide="mn.IsOutOfStockRemainingQty('1096889',false)">
                                                <a href="javascript:void(0);" ng-click="detailCtrl.addToCartFromMenu('1096889', '0', '19000.0000','19000.0000', 1, $event)">
                                                    <p class="current-price">
                                                        <span class="txt-blue font16 bold">19,000</span>
                                                        <span class="unit">đ</span>
                                                    </p>
                                                </a>
                                            </span>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div id="item_40166" class="scrollspy">
                        <h2 class="title-kind-food">
                            
                            <span>Phô mai đá xay</span>
                        </h2>
                            <div class="box-menu-detail clearfix">
                                <div class="img-food-detail pull-left">
                                    <a href="#cb_9" class="inline cboxElement">
                                        <img src="https://media.foody.vn/res/g19/184588/s600x600/pmvq1.jpg" alt="pho-mai-da-xay-vi-viet-quat" width="60" height="60">
                                    </a>
                                </div>
                                <div class="name-food-detail pull-left">
                                        <span ng-show="mn.IsOutOfStockRemainingQty('444171',false)" class="ng-hide">
                                            <a class="title-name-food" href="javascript:void(0);">
                                                <h3 style="font-size: 16px; margin: 0px; padding: 0 130px 0 0; line-height: 1.3em; font-weight: bold">
                                                    Phô mai đá xay vị Việt quất
                                                </h3>
                                            </a>
                                        </span>
                                        <span ng-hide="mn.IsOutOfStockRemainingQty('444171',false)">
                                                <a class="title-name-food" href="javascript:void(0);" ng-click="detailCtrl.addToCartFromMenu('444171', '0', '35000.0000','35000.0000', 1, $event)">
                                                    <h3 style="font-size: 16px; margin: 0px; padding: 0 130px 0 0; line-height: 1.3em; font-weight: bold">
                                                        Phô mai đá xay vị Việt quất
                                                    </h3>
                                                </a>
                                        </span>
                                    <span class="desc"></span>
                                    <div class="rating-food">
                                        
                                    </div>
                                    
                                    <p class="font11 light-grey" style="margin: 0;">
                                            <span>Đã được đặt <span class="bold" style="color:#464646;">1026</span> lần</span>
                                        <span ng-show="mn.GetRemainingQty('444171') < 10" ng-bind-html="mn.GetRemainingQtyText(true,444171)" class="ng-binding"></span>
                                    </p>
                                    
                                </div>
                                <div class="more-info">
                                    <div class="adding-food-cart">
                                        <span ng-show="mn.IsOutOfStockRemainingQty('444171',false)" class="ng-hide">
                                            <span class="btn-over">Món đã hết</span>
                                        </span>
                                        <span ng-hide="mn.IsOutOfStockRemainingQty('444171',false)">
                                                    <span class="btn-adding" ng-click="detailCtrl.addToCartFromMenu('444171', '0', '35000.0000','35000.0000', 1, $event)">+</span>
                                        </span>
                                    </div>
                                    <div class="product-price">

                                            <span ng-show="mn.IsOutOfStockRemainingQty('444171',false)" class="ng-hide">
                                                <a href="javascript:void(0);">
                                                    <p class="current-price">
                                                        <span class="txt-blue font16 bold">35,000</span>
                                                        <span class="unit">đ</span>
                                                    </p>
                                                </a>
                                            </span>
                                            <span ng-hide="mn.IsOutOfStockRemainingQty('444171',false)">
                                                <a href="javascript:void(0);" ng-click="detailCtrl.addToCartFromMenu('444171', '0', '35000.0000','35000.0000', 1, $event)">
                                                    <p class="current-price">
                                                        <span class="txt-blue font16 bold">35,000</span>
                                                        <span class="unit">đ</span>
                                                    </p>
                                                </a>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="box-menu-detail clearfix">
                                <div class="img-food-detail pull-left">
                                    <a href="#cb_10" class="inline cboxElement">
                                        <img src="https://media.foody.vn/res/g19/184588/s600x600/pmpbt.jpg" alt="pho-mai-da-xay-phuc-bon-tu" width="60" height="60">
                                    </a>
                                </div>
                                <div class="name-food-detail pull-left">
                                        <span ng-show="mn.IsOutOfStockRemainingQty('444165',false)" class="ng-hide">
                                            <a class="title-name-food" href="javascript:void(0);">
                                                <h3 style="font-size: 16px; margin: 0px; padding: 0 130px 0 0; line-height: 1.3em; font-weight: bold">
                                                    Phô mai đá xay Phúc bồn tử
                                                </h3>
                                            </a>
                                        </span>
                                        <span ng-hide="mn.IsOutOfStockRemainingQty('444165',false)">
                                                <a class="title-name-food" href="javascript:void(0);" ng-click="detailCtrl.addToCartFromMenu('444165', '0', '35000.0000','35000.0000', 1, $event)">
                                                    <h3 style="font-size: 16px; margin: 0px; padding: 0 130px 0 0; line-height: 1.3em; font-weight: bold">
                                                        Phô mai đá xay Phúc bồn tử
                                                    </h3>
                                                </a>
                                        </span>
                                    <span class="desc"></span>
                                    <div class="rating-food">
                                        
                                    </div>
                                    
                                    <p class="font11 light-grey" style="margin: 0;">
                                            <span>Đã được đặt <span class="bold" style="color:#464646;">401</span> lần</span>
                                        <span ng-show="mn.GetRemainingQty('444165') < 10" ng-bind-html="mn.GetRemainingQtyText(true,444165)" class="ng-binding"></span>
                                    </p>
                                    
                                </div>
                                <div class="more-info">
                                    <div class="adding-food-cart">
                                        <span ng-show="mn.IsOutOfStockRemainingQty('444165',false)" class="ng-hide">
                                            <span class="btn-over">Món đã hết</span>
                                        </span>
                                        <span ng-hide="mn.IsOutOfStockRemainingQty('444165',false)">
                                                    <span class="btn-adding" ng-click="detailCtrl.addToCartFromMenu('444165', '0', '35000.0000','35000.0000', 1, $event)">+</span>
                                        </span>
                                    </div>
                                    <div class="product-price">

                                            <span ng-show="mn.IsOutOfStockRemainingQty('444165',false)" class="ng-hide">
                                                <a href="javascript:void(0);">
                                                    <p class="current-price">
                                                        <span class="txt-blue font16 bold">35,000</span>
                                                        <span class="unit">đ</span>
                                                    </p>
                                                </a>
                                            </span>
                                            <span ng-hide="mn.IsOutOfStockRemainingQty('444165',false)">
                                                <a href="javascript:void(0);" ng-click="detailCtrl.addToCartFromMenu('444165', '0', '35000.0000','35000.0000', 1, $event)">
                                                    <p class="current-price">
                                                        <span class="txt-blue font16 bold">35,000</span>
                                                        <span class="unit">đ</span>
                                                    </p>
                                                </a>
                                            </span>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div id="item_53484" class="scrollspy">
                        <h2 class="title-kind-food">
                            
                            <span>Ăn vặt</span>
                        </h2>
                            <div class="box-menu-detail clearfix">
                                <div class="img-food-detail pull-left">
                                    <a href="#cb_11" class="inline cboxElement">
                                        <img src="https://media.foody.vn/res/g19/184588/s600x600/20177722024-kho-ga-xe-soi.jpg" alt="kho-ga-la-chanh" width="60" height="60">
                                    </a>
                                </div>
                                <div class="name-food-detail pull-left">
                                        <span ng-show="mn.IsOutOfStockRemainingQty('749907',false)" class="ng-hide">
                                            <a class="title-name-food" href="javascript:void(0);">
                                                <h3 style="font-size: 16px; margin: 0px; padding: 0 130px 0 0; line-height: 1.3em; font-weight: bold">
                                                    Khô gà lá chanh
                                                </h3>
                                            </a>
                                        </span>
                                        <span ng-hide="mn.IsOutOfStockRemainingQty('749907',false)">
                                                <a class="title-name-food" href="javascript:void(0);" ng-click="detailCtrl.addToCartFromMenu('749907', '0', '24000.0000','24000.0000', 1, $event)">
                                                    <h3 style="font-size: 16px; margin: 0px; padding: 0 130px 0 0; line-height: 1.3em; font-weight: bold">
                                                        Khô gà lá chanh
                                                    </h3>
                                                </a>
                                        </span>
                                    <span class="desc"></span>
                                    <div class="rating-food">
                                        
                                    </div>
                                    
                                    <p class="font11 light-grey" style="margin: 0;">
                                            <span>Đã được đặt <span class="bold" style="color:#464646;">502</span> lần</span>
                                        <span ng-show="mn.GetRemainingQty('749907') < 10" ng-bind-html="mn.GetRemainingQtyText(true,749907)" class="ng-binding"></span>
                                    </p>
                                    
                                </div>
                                <div class="more-info">
                                    <div class="adding-food-cart">
                                        <span ng-show="mn.IsOutOfStockRemainingQty('749907',false)" class="ng-hide">
                                            <span class="btn-over">Món đã hết</span>
                                        </span>
                                        <span ng-hide="mn.IsOutOfStockRemainingQty('749907',false)">
                                                    <span class="btn-adding" ng-click="detailCtrl.addToCartFromMenu('749907', '0', '24000.0000','24000.0000', 1, $event)">+</span>
                                        </span>
                                    </div>
                                    <div class="product-price">

                                            <span ng-show="mn.IsOutOfStockRemainingQty('749907',false)" class="ng-hide">
                                                <a href="javascript:void(0);">
                                                    <p class="current-price">
                                                        <span class="txt-blue font16 bold">24,000</span>
                                                        <span class="unit">đ</span>
                                                    </p>
                                                </a>
                                            </span>
                                            <span ng-hide="mn.IsOutOfStockRemainingQty('749907',false)">
                                                <a href="javascript:void(0);" ng-click="detailCtrl.addToCartFromMenu('749907', '0', '24000.0000','24000.0000', 1, $event)">
                                                    <p class="current-price">
                                                        <span class="txt-blue font16 bold">24,000</span>
                                                        <span class="unit">đ</span>
                                                    </p>
                                                </a>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="box-menu-detail clearfix">
                                <div class="img-food-detail pull-left">
                                    <a href="#cb_12" class="inline cboxElement">
                                        <img src="https://media.foody.vn/res/g19/184588/s600x600/2017223165152-bo-kho.jpg" alt="bo-kho" width="60" height="60">
                                    </a>
                                </div>
                                <div class="name-food-detail pull-left">
                                        <span ng-show="mn.IsOutOfStockRemainingQty('568438',false)" class="ng-hide">
                                            <a class="title-name-food" href="javascript:void(0);">
                                                <h3 style="font-size: 16px; margin: 0px; padding: 0 130px 0 0; line-height: 1.3em; font-weight: bold">
                                                    Bò khô
                                                </h3>
                                            </a>
                                        </span>
                                        <span ng-hide="mn.IsOutOfStockRemainingQty('568438',false)">
                                                <a class="title-name-food" href="javascript:void(0);" ng-click="detailCtrl.addToCartFromMenu('568438', '0', '19000.0000','19000.0000', 1, $event)">
                                                    <h3 style="font-size: 16px; margin: 0px; padding: 0 130px 0 0; line-height: 1.3em; font-weight: bold">
                                                        Bò khô
                                                    </h3>
                                                </a>
                                        </span>
                                    <span class="desc"></span>
                                    <div class="rating-food">
                                        
                                    </div>
                                    
                                    <p class="font11 light-grey" style="margin: 0;">
                                            <span>Đã được đặt <span class="bold" style="color:#464646;">349</span> lần</span>
                                        <span ng-show="mn.GetRemainingQty('568438') < 10" ng-bind-html="mn.GetRemainingQtyText(true,568438)" class="ng-binding"></span>
                                    </p>
                                    
                                </div>
                                <div class="more-info">
                                    <div class="adding-food-cart">
                                        <span ng-show="mn.IsOutOfStockRemainingQty('568438',false)" class="ng-hide">
                                            <span class="btn-over">Món đã hết</span>
                                        </span>
                                        <span ng-hide="mn.IsOutOfStockRemainingQty('568438',false)">
                                                    <span class="btn-adding" ng-click="detailCtrl.addToCartFromMenu('568438', '0', '19000.0000','19000.0000', 1, $event)">+</span>
                                        </span>
                                    </div>
                                    <div class="product-price">

                                            <span ng-show="mn.IsOutOfStockRemainingQty('568438',false)" class="ng-hide">
                                                <a href="javascript:void(0);">
                                                    <p class="current-price">
                                                        <span class="txt-blue font16 bold">19,000</span>
                                                        <span class="unit">đ</span>
                                                    </p>
                                                </a>
                                            </span>
                                            <span ng-hide="mn.IsOutOfStockRemainingQty('568438',false)">
                                                <a href="javascript:void(0);" ng-click="detailCtrl.addToCartFromMenu('568438', '0', '19000.0000','19000.0000', 1, $event)">
                                                    <p class="current-price">
                                                        <span class="txt-blue font16 bold">19,000</span>
                                                        <span class="unit">đ</span>
                                                    </p>
                                                </a>
                                            </span>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div id="item_24801" class="scrollspy">
                        <h2 class="title-kind-food">
                            
                            <span>Chocolate &amp; cookies đá xay</span>
                        </h2>
                            <div class="box-menu-detail clearfix">
                                <div class="img-food-detail pull-left">
                                    <a href="#cb_13" class="inline cboxElement">
                                        <img src="https://media.foody.vn/res/g19/184588/s600x600/2017122715334-deli-scldx.jpg" alt="socola-da-xay-cookie" width="60" height="60">
                                    </a>
                                </div>
                                <div class="name-food-detail pull-left">
                                        <span ng-show="mn.IsOutOfStockRemainingQty('252793',false)" class="ng-hide">
                                            <a class="title-name-food" href="javascript:void(0);">
                                                <h3 style="font-size: 16px; margin: 0px; padding: 0 130px 0 0; line-height: 1.3em; font-weight: bold">
                                                    Socola đá xay cookie
                                                </h3>
                                            </a>
                                        </span>
                                        <span ng-hide="mn.IsOutOfStockRemainingQty('252793',false)">
                                                <a class="title-name-food" href="javascript:void(0);" ng-click="detailCtrl.addToCartFromMenu('252793', '0', '32000.0000','32000.0000', 1, $event)">
                                                    <h3 style="font-size: 16px; margin: 0px; padding: 0 130px 0 0; line-height: 1.3em; font-weight: bold">
                                                        Socola đá xay cookie
                                                    </h3>
                                                </a>
                                        </span>
                                    <span class="desc"></span>
                                    <div class="rating-food">
                                        
                                    </div>
                                    
                                    <p class="font11 light-grey" style="margin: 0;">
                                            <span>Đã được đặt <span class="bold" style="color:#464646;">695</span> lần</span>
                                        <span ng-show="mn.GetRemainingQty('252793') < 10" ng-bind-html="mn.GetRemainingQtyText(true,252793)" class="ng-binding"></span>
                                    </p>
                                    
                                </div>
                                <div class="more-info">
                                    <div class="adding-food-cart">
                                        <span ng-show="mn.IsOutOfStockRemainingQty('252793',false)" class="ng-hide">
                                            <span class="btn-over">Món đã hết</span>
                                        </span>
                                        <span ng-hide="mn.IsOutOfStockRemainingQty('252793',false)">
                                                    <span class="btn-adding" ng-click="detailCtrl.addToCartFromMenu('252793', '0', '32000.0000','32000.0000', 1, $event)">+</span>
                                        </span>
                                    </div>
                                    <div class="product-price">

                                            <span ng-show="mn.IsOutOfStockRemainingQty('252793',false)" class="ng-hide">
                                                <a href="javascript:void(0);">
                                                    <p class="current-price">
                                                        <span class="txt-blue font16 bold">32,000</span>
                                                        <span class="unit">đ</span>
                                                    </p>
                                                </a>
                                            </span>
                                            <span ng-hide="mn.IsOutOfStockRemainingQty('252793',false)">
                                                <a href="javascript:void(0);" ng-click="detailCtrl.addToCartFromMenu('252793', '0', '32000.0000','32000.0000', 1, $event)">
                                                    <p class="current-price">
                                                        <span class="txt-blue font16 bold">32,000</span>
                                                        <span class="unit">đ</span>
                                                    </p>
                                                </a>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="box-menu-detail clearfix">
                                <div class="img-food-detail pull-left">
                                    <a href="#cb_14" class="inline cboxElement">
                                        <img src="https://media.foody.vn/res/g19/184588/s600x600/20171227153113-deli-oreo.jpg" alt="oreo-da-xay" width="60" height="60">
                                    </a>
                                </div>
                                <div class="name-food-detail pull-left">
                                        <span ng-show="mn.IsOutOfStockRemainingQty('444192',false)" class="ng-hide">
                                            <a class="title-name-food" href="javascript:void(0);">
                                                <h3 style="font-size: 16px; margin: 0px; padding: 0 130px 0 0; line-height: 1.3em; font-weight: bold">
                                                    Oreo đá xay
                                                </h3>
                                            </a>
                                        </span>
                                        <span ng-hide="mn.IsOutOfStockRemainingQty('444192',false)">
                                                <a class="title-name-food" href="javascript:void(0);" ng-click="detailCtrl.addToCartFromMenu('444192', '0', '32000.0000','32000.0000', 1, $event)">
                                                    <h3 style="font-size: 16px; margin: 0px; padding: 0 130px 0 0; line-height: 1.3em; font-weight: bold">
                                                        Oreo đá xay
                                                    </h3>
                                                </a>
                                        </span>
                                    <span class="desc"></span>
                                    <div class="rating-food">
                                        
                                    </div>
                                    
                                    <p class="font11 light-grey" style="margin: 0;">
                                            <span>Đã được đặt <span class="bold" style="color:#464646;">328</span> lần</span>
                                        <span ng-show="mn.GetRemainingQty('444192') < 10" ng-bind-html="mn.GetRemainingQtyText(true,444192)" class="ng-binding"></span>
                                    </p>
                                    
                                </div>
                                <div class="more-info">
                                    <div class="adding-food-cart">
                                        <span ng-show="mn.IsOutOfStockRemainingQty('444192',false)" class="ng-hide">
                                            <span class="btn-over">Món đã hết</span>
                                        </span>
                                        <span ng-hide="mn.IsOutOfStockRemainingQty('444192',false)">
                                                    <span class="btn-adding" ng-click="detailCtrl.addToCartFromMenu('444192', '0', '32000.0000','32000.0000', 1, $event)">+</span>
                                        </span>
                                    </div>
                                    <div class="product-price">

                                            <span ng-show="mn.IsOutOfStockRemainingQty('444192',false)" class="ng-hide">
                                                <a href="javascript:void(0);">
                                                    <p class="current-price">
                                                        <span class="txt-blue font16 bold">32,000</span>
                                                        <span class="unit">đ</span>
                                                    </p>
                                                </a>
                                            </span>
                                            <span ng-hide="mn.IsOutOfStockRemainingQty('444192',false)">
                                                <a href="javascript:void(0);" ng-click="detailCtrl.addToCartFromMenu('444192', '0', '32000.0000','32000.0000', 1, $event)">
                                                    <p class="current-price">
                                                        <span class="txt-blue font16 bold">32,000</span>
                                                        <span class="unit">đ</span>
                                                    </p>
                                                </a>
                                            </span>
                                    </div>
                                </div>
                            </div>
                    </div>
                
                <div class="colorbox" style="display: none;">
                            <div id="cb_0" class="content-popup">
                                <img src="https://media.foody.vn/res/g19/184588/s600x600/2018510172459-delitcdd.jpg" alt="Sữa tươi trân châu đường đen - EZI Coffee">
                                <div class="extra">
                                    <div class="caption">
                                        <div class="name-food-detail pull-left">
                                            <h3 class="title-name-food">
                                                Sữa tươi trân châu đường đen
                                            </h3>
                                            <span class="desc"></span>
                                            <div class="rating-food">
                                            </div>
                                                <p class="font11 placed" style="margin: 0;">
                                                    Đã được đặt <span class="bold" style="color:#464646;">6843</span> lần
                                                </p>
                                        </div>
                                        <div class="more-info">
                                            <div class="product-price">


                                                <p class="current-price">
                                                    <span class="font16">25,000</span>
                                                    <span class="unit">đ</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="adding-food-cart">
                                            <span ng-show="mn.IsOutOfStockRemainingQty('2319704',false)" class="ng-hide">
                                                <span class="btn-over">Món đã hết</span>
                                            </span>
                                            <span ng-hide="mn.IsOutOfStockRemainingQty('2319704',false)">
                                                    <span class="btn-adding" ng-click="detailCtrl.addToCartFromMenu('2319704', '0', '25000.0000','25000.0000', 1, $event)"><span class="bold">+</span>Thêm món</span>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div id="cb_1" class="content-popup">
                                <img src="https://media.foody.vn/res/g19/184588/s600x600/2017122715321-2.jpg" alt="Trà đào thạch tươi - EZI Coffee">
                                <div class="extra">
                                    <div class="caption">
                                        <div class="name-food-detail pull-left">
                                            <h3 class="title-name-food">
                                                Trà đào thạch tươi
                                            </h3>
                                            <span class="desc"></span>
                                            <div class="rating-food">
                                            </div>
                                                <p class="font11 placed" style="margin: 0;">
                                                    Đã được đặt <span class="bold" style="color:#464646;">2991</span> lần
                                                </p>
                                        </div>
                                        <div class="more-info">
                                            <div class="product-price">


                                                <p class="current-price">
                                                    <span class="font16">30,000</span>
                                                    <span class="unit">đ</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="adding-food-cart">
                                            <span ng-show="mn.IsOutOfStockRemainingQty('568429',false)" class="ng-hide">
                                                <span class="btn-over">Món đã hết</span>
                                            </span>
                                            <span ng-hide="mn.IsOutOfStockRemainingQty('568429',false)">
                                                    <span class="btn-adding" ng-click="detailCtrl.addToCartFromMenu('568429', '0', '30000.0000','30000.0000', 1, $event)"><span class="bold">+</span>Thêm món</span>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div id="cb_2" class="content-popup">
                                <img src="https://media.foody.vn/res/g19/184588/s600x600/2018118096-_bu_6604.jpg" alt="Trà đào truyền thống - EZI Coffee">
                                <div class="extra">
                                    <div class="caption">
                                        <div class="name-food-detail pull-left">
                                            <h3 class="title-name-food">
                                                Trà đào truyền thống
                                            </h3>
                                            <span class="desc"></span>
                                            <div class="rating-food">
                                            </div>
                                                <p class="font11 placed" style="margin: 0;">
                                                    Đã được đặt <span class="bold" style="color:#464646;">1677</span> lần
                                                </p>
                                        </div>
                                        <div class="more-info">
                                            <div class="product-price">


                                                <p class="current-price">
                                                    <span class="font16">25,000</span>
                                                    <span class="unit">đ</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="adding-food-cart">
                                            <span ng-show="mn.IsOutOfStockRemainingQty('568430',false)" class="ng-hide">
                                                <span class="btn-over">Món đã hết</span>
                                            </span>
                                            <span ng-hide="mn.IsOutOfStockRemainingQty('568430',false)">
                                                    <span class="btn-adding" ng-click="detailCtrl.addToCartFromMenu('568430', '0', '25000.0000','25000.0000', 1, $event)"><span class="bold">+</span>Thêm món</span>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div id="cb_3" class="content-popup">
                                <img src="https://media.foody.vn/res/g19/184588/s600x600/20171227152313-deli-tea1.jpg" alt="Hồng trà - EZI Coffee">
                                <div class="extra">
                                    <div class="caption">
                                        <div class="name-food-detail pull-left">
                                            <h3 class="title-name-food">
                                                Hồng trà
                                            </h3>
                                            <span class="desc"></span>
                                            <div class="rating-food">
                                            </div>
                                                <p class="font11 placed" style="margin: 0;">
                                                    Đã được đặt <span class="bold" style="color:#464646;">657</span> lần
                                                </p>
                                        </div>
                                        <div class="more-info">
                                            <div class="product-price">


                                                <p class="current-price">
                                                    <span class="font16">17,000</span>
                                                    <span class="unit">đ</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="adding-food-cart">
                                            <span ng-show="mn.IsOutOfStockRemainingQty('653113',false)" class="ng-hide">
                                                <span class="btn-over">Món đã hết</span>
                                            </span>
                                            <span ng-hide="mn.IsOutOfStockRemainingQty('653113',false)">
                                                    <span class="btn-adding" ng-click="detailCtrl.addToCartFromMenu('653113', '0', '17000.0000','17000.0000', 1, $event)"><span class="bold">+</span>Thêm món</span>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div id="cb_4" class="content-popup">
                                <img src="https://media.foody.vn/res/g19/184588/s600x600/20171210152624-22159359_1437980112922533_8251252987368833024_n.jpg" alt="Trà xanh hoa nhài - EZI Coffee">
                                <div class="extra">
                                    <div class="caption">
                                        <div class="name-food-detail pull-left">
                                            <h3 class="title-name-food">
                                                Trà xanh hoa nhài
                                            </h3>
                                            <span class="desc"></span>
                                            <div class="rating-food">
                                            </div>
                                                <p class="font11 placed" style="margin: 0;">
                                                    Đã được đặt <span class="bold" style="color:#464646;">168</span> lần
                                                </p>
                                        </div>
                                        <div class="more-info">
                                            <div class="product-price">


                                                <p class="current-price">
                                                    <span class="font16">17,000</span>
                                                    <span class="unit">đ</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="adding-food-cart">
                                            <span ng-show="mn.IsOutOfStockRemainingQty('863543',false)" class="ng-hide">
                                                <span class="btn-over">Món đã hết</span>
                                            </span>
                                            <span ng-hide="mn.IsOutOfStockRemainingQty('863543',false)">
                                                    <span class="btn-adding" ng-click="detailCtrl.addToCartFromMenu('863543', '0', '17000.0000','17000.0000', 1, $event)"><span class="bold">+</span>Thêm món</span>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div id="cb_5" class="content-popup">
                                <img src="https://media.foody.vn/res/g19/184588/s600x600/20171227145856-7.jpg" alt="Trà Oolong - EZI Coffee">
                                <div class="extra">
                                    <div class="caption">
                                        <div class="name-food-detail pull-left">
                                            <h3 class="title-name-food">
                                                Trà Oolong
                                            </h3>
                                            <span class="desc"></span>
                                            <div class="rating-food">
                                            </div>
                                                <p class="font11 placed" style="margin: 0;">
                                                    Đã được đặt <span class="bold" style="color:#464646;">161</span> lần
                                                </p>
                                        </div>
                                        <div class="more-info">
                                            <div class="product-price">


                                                <p class="current-price">
                                                    <span class="font16">17,000</span>
                                                    <span class="unit">đ</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="adding-food-cart">
                                            <span ng-show="mn.IsOutOfStockRemainingQty('863541',false)" class="ng-hide">
                                                <span class="btn-over">Món đã hết</span>
                                            </span>
                                            <span ng-hide="mn.IsOutOfStockRemainingQty('863541',false)">
                                                    <span class="btn-adding" ng-click="detailCtrl.addToCartFromMenu('863541', '0', '17000.0000','17000.0000', 1, $event)"><span class="bold">+</span>Thêm món</span>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div id="cb_6" class="content-popup">
                                <img src="https://media.foody.vn/res/g19/184588/s600x600/2017122715918-4.jpg" alt="Trà sữa hồng trà - EZI Coffee">
                                <div class="extra">
                                    <div class="caption">
                                        <div class="name-food-detail pull-left">
                                            <h3 class="title-name-food">
                                                Trà sữa hồng trà
                                            </h3>
                                            <span class="desc"></span>
                                            <div class="rating-food">
                                            </div>
                                                <p class="font11 placed" style="margin: 0;">
                                                    Đã được đặt <span class="bold" style="color:#464646;">1778</span> lần
                                                </p>
                                        </div>
                                        <div class="more-info">
                                            <div class="product-price">


                                                <p class="current-price">
                                                    <span class="font16">17,000</span>
                                                    <span class="unit">đ</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="adding-food-cart">
                                            <span ng-show="mn.IsOutOfStockRemainingQty('444485',false)" class="ng-hide">
                                                <span class="btn-over">Món đã hết</span>
                                            </span>
                                            <span ng-hide="mn.IsOutOfStockRemainingQty('444485',false)">
                                                    <span class="btn-adding" ng-click="detailCtrl.addToCartFromMenu('444485', '0', '17000.0000','17000.0000', 1, $event)"><span class="bold">+</span>Thêm món</span>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div id="cb_7" class="content-popup">
                                <img src="https://media.foody.vn/res/g19/184588/s600x600/20171227151552-deli-tstx.jpg" alt="Trà sữa Thái xanh - EZI Coffee">
                                <div class="extra">
                                    <div class="caption">
                                        <div class="name-food-detail pull-left">
                                            <h3 class="title-name-food">
                                                Trà sữa Thái xanh
                                            </h3>
                                            <span class="desc"></span>
                                            <div class="rating-food">
                                            </div>
                                                <p class="font11 placed" style="margin: 0;">
                                                    Đã được đặt <span class="bold" style="color:#464646;">1285</span> lần
                                                </p>
                                        </div>
                                        <div class="more-info">
                                            <div class="product-price">


                                                <p class="current-price">
                                                    <span class="font16">17,000</span>
                                                    <span class="unit">đ</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="adding-food-cart">
                                            <span ng-show="mn.IsOutOfStockRemainingQty('623937',false)" class="ng-hide">
                                                <span class="btn-over">Món đã hết</span>
                                            </span>
                                            <span ng-hide="mn.IsOutOfStockRemainingQty('623937',false)">
                                                    <span class="btn-adding" ng-click="detailCtrl.addToCartFromMenu('623937', '0', '17000.0000','17000.0000', 1, $event)"><span class="bold">+</span>Thêm món</span>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div id="cb_8" class="content-popup">
                                <img src="https://media.foody.vn/res/g19/184588/s600x600/2017122715131-untitled.jpg" alt="Trà sữa trà xanh hoa nhài - EZI Coffee">
                                <div class="extra">
                                    <div class="caption">
                                        <div class="name-food-detail pull-left">
                                            <h3 class="title-name-food">
                                                Trà sữa trà xanh hoa nhài
                                            </h3>
                                            <span class="desc"></span>
                                            <div class="rating-food">
                                            </div>
                                                <p class="font11 placed" style="margin: 0;">
                                                    Đã được đặt <span class="bold" style="color:#464646;">371</span> lần
                                                </p>
                                        </div>
                                        <div class="more-info">
                                            <div class="product-price">


                                                <p class="current-price">
                                                    <span class="font16">19,000</span>
                                                    <span class="unit">đ</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="adding-food-cart">
                                            <span ng-show="mn.IsOutOfStockRemainingQty('1096889',false)" class="ng-hide">
                                                <span class="btn-over">Món đã hết</span>
                                            </span>
                                            <span ng-hide="mn.IsOutOfStockRemainingQty('1096889',false)">
                                                    <span class="btn-adding" ng-click="detailCtrl.addToCartFromMenu('1096889', '0', '19000.0000','19000.0000', 1, $event)"><span class="bold">+</span>Thêm món</span>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div id="cb_9" class="content-popup">
                                <img src="https://media.foody.vn/res/g19/184588/s600x600/pmvq1.jpg" alt="Phô mai đá xay vị Việt quất - EZI Coffee">
                                <div class="extra">
                                    <div class="caption">
                                        <div class="name-food-detail pull-left">
                                            <h3 class="title-name-food">
                                                Phô mai đá xay vị Việt quất
                                            </h3>
                                            <span class="desc"></span>
                                            <div class="rating-food">
                                            </div>
                                                <p class="font11 placed" style="margin: 0;">
                                                    Đã được đặt <span class="bold" style="color:#464646;">1026</span> lần
                                                </p>
                                        </div>
                                        <div class="more-info">
                                            <div class="product-price">


                                                <p class="current-price">
                                                    <span class="font16">35,000</span>
                                                    <span class="unit">đ</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="adding-food-cart">
                                            <span ng-show="mn.IsOutOfStockRemainingQty('444171',false)" class="ng-hide">
                                                <span class="btn-over">Món đã hết</span>
                                            </span>
                                            <span ng-hide="mn.IsOutOfStockRemainingQty('444171',false)">
                                                    <span class="btn-adding" ng-click="detailCtrl.addToCartFromMenu('444171', '0', '35000.0000','35000.0000', 1, $event)"><span class="bold">+</span>Thêm món</span>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div id="cb_10" class="content-popup">
                                <img src="https://media.foody.vn/res/g19/184588/s600x600/pmpbt.jpg" alt="Phô mai đá xay Phúc bồn tử - EZI Coffee">
                                <div class="extra">
                                    <div class="caption">
                                        <div class="name-food-detail pull-left">
                                            <h3 class="title-name-food">
                                                Phô mai đá xay Phúc bồn tử
                                            </h3>
                                            <span class="desc"></span>
                                            <div class="rating-food">
                                            </div>
                                                <p class="font11 placed" style="margin: 0;">
                                                    Đã được đặt <span class="bold" style="color:#464646;">401</span> lần
                                                </p>
                                        </div>
                                        <div class="more-info">
                                            <div class="product-price">


                                                <p class="current-price">
                                                    <span class="font16">35,000</span>
                                                    <span class="unit">đ</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="adding-food-cart">
                                            <span ng-show="mn.IsOutOfStockRemainingQty('444165',false)" class="ng-hide">
                                                <span class="btn-over">Món đã hết</span>
                                            </span>
                                            <span ng-hide="mn.IsOutOfStockRemainingQty('444165',false)">
                                                    <span class="btn-adding" ng-click="detailCtrl.addToCartFromMenu('444165', '0', '35000.0000','35000.0000', 1, $event)"><span class="bold">+</span>Thêm món</span>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div id="cb_11" class="content-popup">
                                <img src="https://media.foody.vn/res/g19/184588/s600x600/20177722024-kho-ga-xe-soi.jpg" alt="Khô gà lá chanh - EZI Coffee">
                                <div class="extra">
                                    <div class="caption">
                                        <div class="name-food-detail pull-left">
                                            <h3 class="title-name-food">
                                                Khô gà lá chanh
                                            </h3>
                                            <span class="desc"></span>
                                            <div class="rating-food">
                                            </div>
                                                <p class="font11 placed" style="margin: 0;">
                                                    Đã được đặt <span class="bold" style="color:#464646;">502</span> lần
                                                </p>
                                        </div>
                                        <div class="more-info">
                                            <div class="product-price">


                                                <p class="current-price">
                                                    <span class="font16">24,000</span>
                                                    <span class="unit">đ</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="adding-food-cart">
                                            <span ng-show="mn.IsOutOfStockRemainingQty('749907',false)" class="ng-hide">
                                                <span class="btn-over">Món đã hết</span>
                                            </span>
                                            <span ng-hide="mn.IsOutOfStockRemainingQty('749907',false)">
                                                    <span class="btn-adding" ng-click="detailCtrl.addToCartFromMenu('749907', '0', '24000.0000','24000.0000', 1, $event)"><span class="bold">+</span>Thêm món</span>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div id="cb_12" class="content-popup">
                                <img src="https://media.foody.vn/res/g19/184588/s600x600/2017223165152-bo-kho.jpg" alt="Bò khô - EZI Coffee">
                                <div class="extra">
                                    <div class="caption">
                                        <div class="name-food-detail pull-left">
                                            <h3 class="title-name-food">
                                                Bò khô
                                            </h3>
                                            <span class="desc"></span>
                                            <div class="rating-food">
                                            </div>
                                                <p class="font11 placed" style="margin: 0;">
                                                    Đã được đặt <span class="bold" style="color:#464646;">349</span> lần
                                                </p>
                                        </div>
                                        <div class="more-info">
                                            <div class="product-price">


                                                <p class="current-price">
                                                    <span class="font16">19,000</span>
                                                    <span class="unit">đ</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="adding-food-cart">
                                            <span ng-show="mn.IsOutOfStockRemainingQty('568438',false)" class="ng-hide">
                                                <span class="btn-over">Món đã hết</span>
                                            </span>
                                            <span ng-hide="mn.IsOutOfStockRemainingQty('568438',false)">
                                                    <span class="btn-adding" ng-click="detailCtrl.addToCartFromMenu('568438', '0', '19000.0000','19000.0000', 1, $event)"><span class="bold">+</span>Thêm món</span>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div id="cb_13" class="content-popup">
                                <img src="https://media.foody.vn/res/g19/184588/s600x600/2017122715334-deli-scldx.jpg" alt="Socola đá xay cookie - EZI Coffee">
                                <div class="extra">
                                    <div class="caption">
                                        <div class="name-food-detail pull-left">
                                            <h3 class="title-name-food">
                                                Socola đá xay cookie
                                            </h3>
                                            <span class="desc"></span>
                                            <div class="rating-food">
                                            </div>
                                                <p class="font11 placed" style="margin: 0;">
                                                    Đã được đặt <span class="bold" style="color:#464646;">695</span> lần
                                                </p>
                                        </div>
                                        <div class="more-info">
                                            <div class="product-price">


                                                <p class="current-price">
                                                    <span class="font16">32,000</span>
                                                    <span class="unit">đ</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="adding-food-cart">
                                            <span ng-show="mn.IsOutOfStockRemainingQty('252793',false)" class="ng-hide">
                                                <span class="btn-over">Món đã hết</span>
                                            </span>
                                            <span ng-hide="mn.IsOutOfStockRemainingQty('252793',false)">
                                                    <span class="btn-adding" ng-click="detailCtrl.addToCartFromMenu('252793', '0', '32000.0000','32000.0000', 1, $event)"><span class="bold">+</span>Thêm món</span>
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div id="cb_14" class="content-popup">
                                <img src="https://media.foody.vn/res/g19/184588/s600x600/20171227153113-deli-oreo.jpg" alt="Oreo đá xay - EZI Coffee">
                                <div class="extra">
                                    <div class="caption">
                                        <div class="name-food-detail pull-left">
                                            <h3 class="title-name-food">
                                                Oreo đá xay
                                            </h3>
                                            <span class="desc"></span>
                                            <div class="rating-food">
                                            </div>
                                                <p class="font11 placed" style="margin: 0;">
                                                    Đã được đặt <span class="bold" style="color:#464646;">328</span> lần
                                                </p>
                                        </div>
                                        <div class="more-info">
                                            <div class="product-price">


                                                <p class="current-price">
                                                    <span class="font16">32,000</span>
                                                    <span class="unit">đ</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="adding-food-cart">
                                            <span ng-show="mn.IsOutOfStockRemainingQty('444192',false)" class="ng-hide">
                                                <span class="btn-over">Món đã hết</span>
                                            </span>
                                            <span ng-hide="mn.IsOutOfStockRemainingQty('444192',false)">
                                                    <span class="btn-adding" ng-click="detailCtrl.addToCartFromMenu('444192', '0', '32000.0000','32000.0000', 1, $event)"><span class="bold">+</span>Thêm món</span>
                                            </span>
                                    </div>
                                </div>
                            </div>
                </div>
                    <div class="menu-provider">
                        Menu is provided by <a href="http://www.foodypos.vn" target="_blank" rel="nofollow">Phần mềm quản lý bán hàng FoodyPOS</a> - More than just POS
                    </div>

            </div>
        </div>
        <script type="text/javascript" src="/Scripts/colorbox/jquery.colorbox.js"></script>
        <script>
            $(document).ready(function () {
                $(".inline").colorbox({
                    inline: true, rel: 'inline', fixed: true, height: "600px", width: "530px", className: "colorbox-menu-kind"
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
<script src="/scripts/bundle/public.menu.min.js?54a873" type="text/javascript"></script>    <script>
        var menuData = {"DishType":[{"Id":265933,"Name":"Trending","Dishes":[{"Id":2319704,"RestaurantId":184588,"Name":"Sữa tươi trân châu đường đen","Description":"","ImageUrl":"https://media.foody.vn/res/g19/184588/s600x600/2018510172459-delitcdd.jpg","Price":25000.0000,"OldPrice":0,"TotalRating":0,"TotalOrder":6843,"OutOfStock":false,"Attributes":[{"AttributeId":4110,"AttributeName":"CHỌN SIZE","Values":[{"ValueId":20546,"ValueName":"Size M","Price":0,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":1,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":37034,"ValueName":"Size L","Price":8000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":1,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1}],"MinSelect":1,"MaxSelect":1,"NTop":null},{"AttributeId":1672,"AttributeName":"THÊM TOPPING","Values":[{"ValueId":193859,"ValueName":"Thêm 1 phần Trân châu","Price":8000,"PartnerAttributeValueId":"","NumberChoosed":0,"MaxQty":1,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":0}],"MinSelect":0,"MaxSelect":1,"NTop":null}],"RangeTime":null,"IsValidRange":false,"IsDayOff":false,"NTop":0,"RemainingQty":-1,"LimitPerOrder":null}]},{"Id":91425,"Name":"Trà trái cây","Dishes":[{"Id":568429,"RestaurantId":184588,"Name":"Trà đào thạch tươi","Description":"","ImageUrl":"https://media.foody.vn/res/g19/184588/s600x600/2017122715321-2.jpg","Price":30000.0000,"OldPrice":0,"TotalRating":0,"TotalOrder":2991,"OutOfStock":false,"Attributes":[{"AttributeId":4110,"AttributeName":"CHỌN SIZE","Values":[{"ValueId":37034,"ValueName":"Size L","Price":0,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":1,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1}],"MinSelect":1,"MaxSelect":1,"NTop":null},{"AttributeId":1672,"AttributeName":"THÊM TOPPING","Values":[{"ValueId":127852,"ValueName":"Kem cheese tươi","Price":12000,"PartnerAttributeValueId":"","NumberChoosed":0,"MaxQty":2,"Priority":1,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":15056,"ValueName":"Kem sữa Macchiato","Price":8000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":17758,"ValueName":"Nha đam tươi","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":47404,"ValueName":"Bánh Flan","Price":6000,"PartnerAttributeValueId":"","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":12305,"ValueName":"Trân châu caramen","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":20957,"ValueName":"Trân châu trắng","Price":8000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":17759,"ValueName":"Thạch trà xanh Matcha","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":7884,"ValueName":"Thạch đào tươi","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":7885,"ValueName":"Thạch mứt đào","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":7895,"ValueName":"Pudding trứng","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":7894,"ValueName":"Thạch phô mai","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":15057,"ValueName":"Đào tươi ngâm","Price":8000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1}],"MinSelect":0,"MaxSelect":9,"NTop":null}],"RangeTime":null,"IsValidRange":false,"IsDayOff":false,"NTop":0,"RemainingQty":-1,"LimitPerOrder":null},{"Id":568430,"RestaurantId":184588,"Name":"Trà đào truyền thống","Description":"","ImageUrl":"https://media.foody.vn/res/g19/184588/s600x600/2018118096-_bu_6604.jpg","Price":25000.0000,"OldPrice":0,"TotalRating":0,"TotalOrder":1677,"OutOfStock":false,"Attributes":[{"AttributeId":4110,"AttributeName":"CHỌN SIZE","Values":[{"ValueId":20546,"ValueName":"Size M","Price":0,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":1,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":37034,"ValueName":"Size L","Price":5000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":1,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1}],"MinSelect":1,"MaxSelect":1,"NTop":null},{"AttributeId":1672,"AttributeName":"THÊM TOPPING","Values":[{"ValueId":127852,"ValueName":"Kem cheese tươi","Price":12000,"PartnerAttributeValueId":"","NumberChoosed":0,"MaxQty":2,"Priority":1,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":15056,"ValueName":"Kem sữa Macchiato","Price":8000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":17758,"ValueName":"Nha đam tươi","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":47404,"ValueName":"Bánh Flan","Price":6000,"PartnerAttributeValueId":"","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":12305,"ValueName":"Trân châu caramen","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":20957,"ValueName":"Trân châu trắng","Price":8000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":17759,"ValueName":"Thạch trà xanh Matcha","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":7884,"ValueName":"Thạch đào tươi","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":7885,"ValueName":"Thạch mứt đào","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":7895,"ValueName":"Pudding trứng","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":7894,"ValueName":"Thạch phô mai","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":15057,"ValueName":"Đào tươi ngâm","Price":8000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1}],"MinSelect":0,"MaxSelect":9,"NTop":null}],"RangeTime":null,"IsValidRange":false,"IsDayOff":false,"NTop":0,"RemainingQty":-1,"LimitPerOrder":null}]},{"Id":53483,"Name":"Trà nguyên chất","Dishes":[{"Id":653113,"RestaurantId":184588,"Name":"Hồng trà","Description":"","ImageUrl":"https://media.foody.vn/res/g19/184588/s600x600/20171227152313-deli-tea1.jpg","Price":17000.0000,"OldPrice":0,"TotalRating":0,"TotalOrder":657,"OutOfStock":false,"Attributes":[{"AttributeId":4110,"AttributeName":"CHỌN SIZE","Values":[{"ValueId":20546,"ValueName":"Size M","Price":0,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":1,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":37034,"ValueName":"Size L","Price":5000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":1,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1}],"MinSelect":1,"MaxSelect":1,"NTop":null},{"AttributeId":1672,"AttributeName":"THÊM TOPPING","Values":[{"ValueId":127852,"ValueName":"Kem cheese tươi","Price":12000,"PartnerAttributeValueId":"","NumberChoosed":0,"MaxQty":2,"Priority":1,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":15056,"ValueName":"Kem sữa Macchiato","Price":8000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":17758,"ValueName":"Nha đam tươi","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":47404,"ValueName":"Bánh Flan","Price":6000,"PartnerAttributeValueId":"","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":12305,"ValueName":"Trân châu caramen","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":20957,"ValueName":"Trân châu trắng","Price":8000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":17759,"ValueName":"Thạch trà xanh Matcha","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":7884,"ValueName":"Thạch đào tươi","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":7885,"ValueName":"Thạch mứt đào","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":7895,"ValueName":"Pudding trứng","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":7894,"ValueName":"Thạch phô mai","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":15057,"ValueName":"Đào tươi ngâm","Price":8000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1}],"MinSelect":0,"MaxSelect":9,"NTop":null}],"RangeTime":null,"IsValidRange":false,"IsDayOff":false,"NTop":0,"RemainingQty":-1,"LimitPerOrder":null},{"Id":863543,"RestaurantId":184588,"Name":"Trà xanh hoa nhài","Description":"","ImageUrl":"https://media.foody.vn/res/g19/184588/s600x600/20171210152624-22159359_1437980112922533_8251252987368833024_n.jpg","Price":17000.0000,"OldPrice":0,"TotalRating":0,"TotalOrder":168,"OutOfStock":false,"Attributes":[{"AttributeId":4110,"AttributeName":"CHỌN SIZE","Values":[{"ValueId":20546,"ValueName":"Size M","Price":0,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":1,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":37034,"ValueName":"Size L","Price":5000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":1,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1}],"MinSelect":1,"MaxSelect":1,"NTop":null},{"AttributeId":1672,"AttributeName":"THÊM TOPPING","Values":[{"ValueId":127852,"ValueName":"Kem cheese tươi","Price":12000,"PartnerAttributeValueId":"","NumberChoosed":0,"MaxQty":2,"Priority":1,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":15056,"ValueName":"Kem sữa Macchiato","Price":8000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":17758,"ValueName":"Nha đam tươi","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":47404,"ValueName":"Bánh Flan","Price":6000,"PartnerAttributeValueId":"","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":12305,"ValueName":"Trân châu caramen","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":20957,"ValueName":"Trân châu trắng","Price":8000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":17759,"ValueName":"Thạch trà xanh Matcha","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":7884,"ValueName":"Thạch đào tươi","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":7885,"ValueName":"Thạch mứt đào","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":7895,"ValueName":"Pudding trứng","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":7894,"ValueName":"Thạch phô mai","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":15057,"ValueName":"Đào tươi ngâm","Price":8000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1}],"MinSelect":0,"MaxSelect":9,"NTop":null}],"RangeTime":null,"IsValidRange":false,"IsDayOff":false,"NTop":0,"RemainingQty":-1,"LimitPerOrder":null},{"Id":863541,"RestaurantId":184588,"Name":"Trà Oolong","Description":"","ImageUrl":"https://media.foody.vn/res/g19/184588/s600x600/20171227145856-7.jpg","Price":17000.0000,"OldPrice":0,"TotalRating":0,"TotalOrder":161,"OutOfStock":false,"Attributes":[{"AttributeId":4110,"AttributeName":"CHỌN SIZE","Values":[{"ValueId":20546,"ValueName":"Size M","Price":0,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":1,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":37034,"ValueName":"Size L","Price":5000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":1,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1}],"MinSelect":1,"MaxSelect":1,"NTop":null},{"AttributeId":1672,"AttributeName":"THÊM TOPPING","Values":[{"ValueId":127852,"ValueName":"Kem cheese tươi","Price":12000,"PartnerAttributeValueId":"","NumberChoosed":0,"MaxQty":2,"Priority":1,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":15056,"ValueName":"Kem sữa Macchiato","Price":8000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":17758,"ValueName":"Nha đam tươi","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":47404,"ValueName":"Bánh Flan","Price":6000,"PartnerAttributeValueId":"","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":12305,"ValueName":"Trân châu caramen","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":20957,"ValueName":"Trân châu trắng","Price":8000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":17759,"ValueName":"Thạch trà xanh Matcha","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":7884,"ValueName":"Thạch đào tươi","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":7885,"ValueName":"Thạch mứt đào","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":7895,"ValueName":"Pudding trứng","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":7894,"ValueName":"Thạch phô mai","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":15057,"ValueName":"Đào tươi ngâm","Price":8000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1}],"MinSelect":0,"MaxSelect":9,"NTop":null}],"RangeTime":null,"IsValidRange":false,"IsDayOff":false,"NTop":0,"RemainingQty":-1,"LimitPerOrder":null}]},{"Id":24795,"Name":"Trà sữa","Dishes":[{"Id":444485,"RestaurantId":184588,"Name":"Trà sữa hồng trà","Description":"","ImageUrl":"https://media.foody.vn/res/g19/184588/s600x600/2017122715918-4.jpg","Price":17000.0000,"OldPrice":0,"TotalRating":0,"TotalOrder":1778,"OutOfStock":false,"Attributes":[{"AttributeId":4110,"AttributeName":"CHỌN SIZE","Values":[{"ValueId":20546,"ValueName":"Size M","Price":0,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":1,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":37034,"ValueName":"Size L","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":1,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1}],"MinSelect":1,"MaxSelect":1,"NTop":null},{"AttributeId":1672,"AttributeName":"THÊM TOPPING","Values":[{"ValueId":127852,"ValueName":"Kem cheese tươi","Price":12000,"PartnerAttributeValueId":"","NumberChoosed":0,"MaxQty":2,"Priority":1,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":15056,"ValueName":"Kem sữa Macchiato","Price":8000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":17758,"ValueName":"Nha đam tươi","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":47404,"ValueName":"Bánh Flan","Price":6000,"PartnerAttributeValueId":"","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":12305,"ValueName":"Trân châu caramen","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":20957,"ValueName":"Trân châu trắng","Price":8000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":17759,"ValueName":"Thạch trà xanh Matcha","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":7884,"ValueName":"Thạch đào tươi","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":7885,"ValueName":"Thạch mứt đào","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":7895,"ValueName":"Pudding trứng","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":7894,"ValueName":"Thạch phô mai","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":15057,"ValueName":"Đào tươi ngâm","Price":8000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1}],"MinSelect":0,"MaxSelect":9,"NTop":null}],"RangeTime":null,"IsValidRange":false,"IsDayOff":false,"NTop":0,"RemainingQty":-1,"LimitPerOrder":null},{"Id":623937,"RestaurantId":184588,"Name":"Trà sữa Thái xanh","Description":"","ImageUrl":"https://media.foody.vn/res/g19/184588/s600x600/20171227151552-deli-tstx.jpg","Price":17000.0000,"OldPrice":0,"TotalRating":0,"TotalOrder":1285,"OutOfStock":false,"Attributes":[{"AttributeId":4110,"AttributeName":"CHỌN SIZE","Values":[{"ValueId":20546,"ValueName":"Size M","Price":0,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":1,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":37034,"ValueName":"Size L","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":1,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1}],"MinSelect":1,"MaxSelect":1,"NTop":null},{"AttributeId":1672,"AttributeName":"THÊM TOPPING","Values":[{"ValueId":127852,"ValueName":"Kem cheese tươi","Price":12000,"PartnerAttributeValueId":"","NumberChoosed":0,"MaxQty":2,"Priority":1,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":15056,"ValueName":"Kem sữa Macchiato","Price":8000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":17758,"ValueName":"Nha đam tươi","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":47404,"ValueName":"Bánh Flan","Price":6000,"PartnerAttributeValueId":"","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":12305,"ValueName":"Trân châu caramen","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":20957,"ValueName":"Trân châu trắng","Price":8000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":17759,"ValueName":"Thạch trà xanh Matcha","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":7884,"ValueName":"Thạch đào tươi","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":7885,"ValueName":"Thạch mứt đào","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":7895,"ValueName":"Pudding trứng","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":7894,"ValueName":"Thạch phô mai","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":15057,"ValueName":"Đào tươi ngâm","Price":8000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1}],"MinSelect":0,"MaxSelect":9,"NTop":null}],"RangeTime":null,"IsValidRange":false,"IsDayOff":false,"NTop":0,"RemainingQty":-1,"LimitPerOrder":null},{"Id":1096889,"RestaurantId":184588,"Name":"Trà sữa trà xanh hoa nhài","Description":"","ImageUrl":"https://media.foody.vn/res/g19/184588/s600x600/2017122715131-untitled.jpg","Price":19000.0000,"OldPrice":0,"TotalRating":0,"TotalOrder":371,"OutOfStock":false,"Attributes":[{"AttributeId":4110,"AttributeName":"CHỌN SIZE","Values":[{"ValueId":20546,"ValueName":"Size M","Price":0,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":1,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":37034,"ValueName":"Size L","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":1,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1}],"MinSelect":1,"MaxSelect":1,"NTop":null},{"AttributeId":1672,"AttributeName":"THÊM TOPPING","Values":[{"ValueId":127852,"ValueName":"Kem cheese tươi","Price":12000,"PartnerAttributeValueId":"","NumberChoosed":0,"MaxQty":2,"Priority":1,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":15056,"ValueName":"Kem sữa Macchiato","Price":8000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":17758,"ValueName":"Nha đam tươi","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":47404,"ValueName":"Bánh Flan","Price":6000,"PartnerAttributeValueId":"","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":12305,"ValueName":"Trân châu caramen","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":20957,"ValueName":"Trân châu trắng","Price":8000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":17759,"ValueName":"Thạch trà xanh Matcha","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":7884,"ValueName":"Thạch đào tươi","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":7885,"ValueName":"Thạch mứt đào","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":7895,"ValueName":"Pudding trứng","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":7894,"ValueName":"Thạch phô mai","Price":6000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1},{"ValueId":15057,"ValueName":"Đào tươi ngâm","Price":8000,"PartnerAttributeValueId":"0","NumberChoosed":0,"MaxQty":2,"Priority":0,"NTop":null,"ExtraPrice":0,"Weight":1}],"MinSelect":0,"MaxSelect":9,"NTop":null}],"RangeTime":null,"IsValidRange":false,"IsDayOff":false,"NTop":0,"RemainingQty":-1,"LimitPerOrder":null}]},{"Id":40166,"Name":"Phô mai đá xay","Dishes":[{"Id":444171,"RestaurantId":184588,"Name":"Phô mai đá xay vị Việt quất","Description":"","ImageUrl":"https://media.foody.vn/res/g19/184588/s600x600/pmvq1.jpg","Price":35000.0000,"OldPrice":0,"TotalRating":0,"TotalOrder":1026,"OutOfStock":false,"Attributes":[],"RangeTime":null,"IsValidRange":false,"IsDayOff":false,"NTop":0,"RemainingQty":-1,"LimitPerOrder":null},{"Id":444165,"RestaurantId":184588,"Name":"Phô mai đá xay Phúc bồn tử","Description":"","ImageUrl":"https://media.foody.vn/res/g19/184588/s600x600/pmpbt.jpg","Price":35000.0000,"OldPrice":0,"TotalRating":0,"TotalOrder":401,"OutOfStock":false,"Attributes":[],"RangeTime":null,"IsValidRange":false,"IsDayOff":false,"NTop":0,"RemainingQty":-1,"LimitPerOrder":null}]},{"Id":53484,"Name":"Ăn vặt","Dishes":[{"Id":749907,"RestaurantId":184588,"Name":"Khô gà lá chanh","Description":"","ImageUrl":"https://media.foody.vn/res/g19/184588/s600x600/20177722024-kho-ga-xe-soi.jpg","Price":24000.0000,"OldPrice":0,"TotalRating":0,"TotalOrder":502,"OutOfStock":false,"Attributes":[],"RangeTime":null,"IsValidRange":false,"IsDayOff":false,"NTop":0,"RemainingQty":-1,"LimitPerOrder":null},{"Id":568438,"RestaurantId":184588,"Name":"Bò khô","Description":"","ImageUrl":"https://media.foody.vn/res/g19/184588/s600x600/2017223165152-bo-kho.jpg","Price":19000.0000,"OldPrice":0,"TotalRating":0,"TotalOrder":349,"OutOfStock":false,"Attributes":[],"RangeTime":null,"IsValidRange":false,"IsDayOff":false,"NTop":0,"RemainingQty":-1,"LimitPerOrder":null}]},{"Id":24801,"Name":"Chocolate \u0026 cookies đá xay","Dishes":[{"Id":252793,"RestaurantId":184588,"Name":"Socola đá xay cookie","Description":"","ImageUrl":"https://media.foody.vn/res/g19/184588/s600x600/2017122715334-deli-scldx.jpg","Price":32000.0000,"OldPrice":0,"TotalRating":0,"TotalOrder":695,"OutOfStock":false,"Attributes":[],"RangeTime":null,"IsValidRange":false,"IsDayOff":false,"NTop":0,"RemainingQty":-1,"LimitPerOrder":null},{"Id":444192,"RestaurantId":184588,"Name":"Oreo đá xay","Description":"","ImageUrl":"https://media.foody.vn/res/g19/184588/s600x600/20171227153113-deli-oreo.jpg","Price":32000.0000,"OldPrice":0,"TotalRating":0,"TotalOrder":328,"OutOfStock":false,"Attributes":[],"RangeTime":null,"IsValidRange":false,"IsDayOff":false,"NTop":0,"RemainingQty":-1,"LimitPerOrder":null}]}],"Busy":null,"TotalOrders":0,"MinOrdersToShow":1,"LastOrderId":0,"RemainingQtyToShow":10};
        var restaurantId = 184588;
    </script>


<style>
    .color-remaining-qty {
        color: #41A33C;
        font-weight: bold;
    }
</style>

    <div id="introduce" class="tab-detail" style="display: none;">
        <div class="bg-white" style="padding:10px 15px;">
            <p><span style="font-size:14px"><em><strong><u>EZI Coffee</u></strong></em> - Một địa điểm Coffee thư giản, phong cách đẹp, đơn giản, không gian có thể suy nghĩ, trò chuyện, đồng thời ngồi nhâm nhi thức uống ngon,yêu thích. Ngoài ra,&nbsp;<em><strong><u>EZI Coffee</u></strong></em> còn tài trợ nhiều món ăn vặt, bánh ngọt để bạn thưởng thức nữa nhé. Hiện nay,&nbsp;<em><strong><u>EZI Coffee</u></strong></em> đã có mặt tại DeliveryNow, bạn có thể thưởng thức nhiều thức uống cũng như món ăn, bánh ngọt của&nbsp;<em><strong><u>EZI Coffee</u></strong></em> ngày tại nhà nhé.</span></p>

<h2><span style="font-size:14px"><strong><span style="font-size:18px">EZI Coffee</span></strong></span></h2>

<p><span style="font-size:14px">Nguyên liệu thức uống cũng như bánh ngọt, đều do&nbsp;<em><strong><u>EZI Coffee</u></strong></em> đích thân thực hiện, chế biến. Thực khách đến rồi mới làm nhé nên không cần lo về chất lượng đâu.</span></p>

<p style="text-align:center"><span style="font-size:14px"><img alt="ezi-coffee-1" src="https://media.foody.vn/res/g19/184588/s/foody-ezi-coffee-820-635847709496360640.jpg" style="height:433px; width:650px"></span></p>

<p style="text-align:center"><em><span style="font-size:14px">Cappuchino</span></em></p>

<p style="text-align:center">&nbsp;</p>

<p style="text-align:center"><span style="font-size:14px"><img alt="ezi-coffee-2" src="https://media.foody.vn/res/g19/184588/s/foody-ezi-coffee-522-635889840328821652.jpg" style="height:1155px; width:650px"></span></p>

<p style="text-align:center"><em><span style="font-size:14px">Cookie đá xay và thạch chocolate</span></em></p>

<p style="text-align:center">&nbsp;</p>

<p style="text-align:center"><span style="font-size:14px"><img alt="ezi-coffee-3" src="https://media.foody.vn/res/g19/184588/s/foody-ezi-coffee-908-635889840293037581.jpg" style="height:1155px; width:650px"></span></p>

<p style="text-align:center"><em><span style="font-size:14px">Bluesky Soda</span></em></p>

<p style="text-align:center">&nbsp;</p>

<p style="text-align:center"><span style="font-size:14px"><img alt="ezi-coffee-4" src="https://media.foody.vn/res/g19/184588/s/foody-ezi-coffee-350-635906396567229032.jpg" style="height:650px; width:650px"></span></p>

<p style="text-align:center"><em><span style="font-size:14px">Matcha nóng&nbsp;</span></em></p>

<p style="text-align:center">&nbsp;</p>

<p style="text-align:center"><span style="font-size:14px"><img alt="ezi-coffee-5" src="https://media.foody.vn/res/g19/184588/s/foody-ezi-coffee-117-635963397221614848.jpg" style="height:1155px; width:650px"></span></p>

<p style="text-align:center"><em><span style="font-size:14px">Trà đào</span></em></p>

<p style="text-align:center">&nbsp;</p>

<p style="text-align:center"><span style="font-size:14px"><img alt="ezi-coffee-5" src="https://media.foody.vn/res/g19/184588/s/foody-ezi-coffee-163-635963397576187055.jpg" style="height:1155px; width:650px"></span></p>

<p style="text-align:center"><em><span style="font-size:14px">Bạc xỉu cũng rất hấp dẫn nhé</span></em></p>

<p style="text-align:center">&nbsp;</p>

<p style="text-align:center"><span style="font-size:14px"><img alt="ezi-coffee-8" src="https://media.foody.vn/res/g19/184588/s/foody-ezi-coffee-181-636160196113955380.jpg" style="height:650px; width:650px"></span></p>

<p style="text-align:center"><em><span style="font-size:14px">Trà nóng cho những ngày&nbsp;mưa</span></em></p>

<p style="text-align:center">&nbsp;</p>

<p style="text-align:center"><span style="font-size:14px"><img alt="ezi-coffee-9" src="https://media.foody.vn/res/g19/184588/s/foody-ezi-coffee-498-636152319052843769.jpg" style="height:867px; width:650px"></span></p>

<p style="text-align:center"><em><span style="font-size:14px">Ly mang đi tại&nbsp;EZI Coffee</span></em></p>

<p style="text-align:center">&nbsp;</p>

<p style="text-align:center"><span style="font-size:14px"><img alt="ezi-coffee-6" src="https://media.foody.vn/res/g19/184588/s/foody-ezi-coffee-751-636072048127529836.jpg" style="height:400px; width:650px"></span></p>

<p style="text-align:center"><em><span style="font-size:14px">Ngoài nhiều thức uống,&nbsp;EZI Coffee còn phục vụ nhiều món ăn vặt nữa nhé</span></em></p>

<p style="text-align:center">&nbsp;</p>

<p style="text-align:center"><span style="font-size:14px"><img alt="ezi-coffee-7" src="https://media.foody.vn/res/g19/184588/s/foody-ezi-coffee-966-636072048109090875.jpg" style="height:366px; width:650px"></span></p>

<p style="text-align:center"><em><span style="font-size:14px">Cá viên chiên đủ loại</span></em></p>

<p style="text-align:center">&nbsp;</p>

<p style="text-align:center"><span style="font-size:14px"><img alt="ezi-coffee-7" src="https://media.foody.vn/res/g19/184588/s/foody-ezi-coffee-375-636137757681928933.jpg" style="height:433px; width:650px"></span></p>

<p style="text-align:center"><em><span style="font-size:14px">Phô mai que</span></em></p>

<p style="text-align:center">&nbsp;</p>

<p style="text-align:justify"><span style="font-size:14px">Bạn còn chần chừ gì nữa!!!</span></p>

<p style="text-align:justify"><span style="font-size:14px">Gọi ngay đến<em>&nbsp;DeliveryNow</em>&nbsp;Dịch vụ đặt món trực tuyến, giao tận nơi qua hotline&nbsp;<em>1900 2042</em>&nbsp;hoặc bấm <a href="https://www.deliverynow.vn/da-nang/ezi-coffee">vào đây </a>để thưởng thức&nbsp;ngay.</span></p>

<h2 style="text-align:justify"><strong><span style="font-size:18px">Địa điểm Coffee tại <em>DeliveryNow </em>:</span></strong></h2>

<ul>
    <li style="text-align:justify"><strong><span style="font-size:16px"><a href="https://www.deliverynow.vn/da-nang/lu-s-coffee-milktea?utm_source=Search&amp;utm_medium=cpc&amp;utm_campaign=tim+kiem+%E2%80%8Bcoffee%E2%80%8B&amp;utm_term=lu+s+coffee+milktea">Lu's - Coffee &amp; Milktea</a></span></strong></li>
    <li style="text-align:justify"><strong><span style="font-size:16px"><a href="https://www.deliverynow.vn/da-nang/helen-s-cafe?utm_source=Search&amp;utm_medium=cpc&amp;utm_campaign=tim+kiem+%E2%80%8Bcoffee%E2%80%8B&amp;utm_term=helen+s+cafe">Helen's Cafe</a></span></strong></li>
</ul>

<p style="text-align:center">&nbsp;</p>

<p style="text-align:center">&nbsp;</p>

<p style="text-align:center">&nbsp;</p>

<p style="text-align:center">&nbsp;</p>

<p style="text-align:center">&nbsp;</p>

<p style="text-align:center">&nbsp;</p>

        </div>
</div>

    
<div id="discount" class="tab-detail bg-discount" style="display: none;">
    <div class="no-discount-today">
            <div class="bg-white" style="padding:10px 15px;">
                                                    <script>
                        $(window).ready(function () {
                            $('.all-info-restaurant .tabs .tab a[href=#discount]').parents('.tab').hide();
                        })
                    </script>
            </div>
        
    </div>
</div>

    
</div>
                    
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
                    <img id="qr-image" src="data:image/jpg;base64,/9j/4AAQSkZJRgABAQEAYABgAAD/2wBDAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDL/2wBDAQkJCQwLDBgNDRgyIRwhMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjL/wAARCAA1ADUDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwDj4ovBvhz4ceFdW1bwf/bN9q32vzJf7Tmt9vlTbRwuQeCBwB075rrPBJ0ay8UT6todv/wjdrdeDbi8Zt73n2ZxclTJ8/L4EYO3HOMYrPg0aRfDml6He698LtRtdM837M91qs29fMfe2SjKDzjt2Fb+iWVxompTalc+J/A+mNJ4dm0/SVsNRYIrNKXST97klQ+/JBPTGODQBi+BdZ8VX14+kaHrH2e11bxDeyN4h+zRP9ocQCQj7M4ymQgbqMb8dqv/ABdl8c3vi+Twy1z5XhjVsNbrsgbMcEccszZ+/wDKQWwSCcYGelW/F13bnw1qeuyar4e8RzQaBYWN5bx3ZlEk63QLyMIypCEvkHI5HTFVdIhTSdFmso9YnbT4Li2fT/C+qPGt4i+cGne5iVQ428zoVbAUBmyuRQBW0jwdoz6j4Wh0PRfL1211C01Frj7U5+26UpAN5tdtse98Hyvvr6Yql4xXwd4e3apq/hD+2b3VNY1UPL/aU1vtEVyQOFyDww7Dp3zXeab4HvNHvbzxZYappUEl5rr6jcagLglH0hyJGj3FduTgNkcf7eKwtd8O6hqQvWlu/h7faRaXk99DLf31wHgju5TIhkMbBRvyuOxxwTQB5n49sPD3/CJ+E9e0HQ/7I/tUXfnQfa5Lj/VSKi/M/wCJ4A698UV3eufC3xZ4pt7PQorvwZaJoW8C0sLm4LQ+eQ/7wMGIzjIzjqaKAMrwlrmgHQdYS18J6OdJ0vydmr61ZR3MkHms2ftATDy5b5E8tflGN3AzV/WNU0mfxPH4YfQNLtJb/UItNmsby0Wa60+OUAF7WZP3UaDduVeSJGdsEGuy8bfETxI2sf8ACMeD9Ntpr6+/5B2pQajbybtirJLmJgQuBuX5yM9Rmud1/wAVzeNZY7fVPDMupiO8S0Xw5b3JMSzFcrd/bol29JPL8snAzuJoAz/B9ncaXeaj4S0nQtJuobvxBeWH9oa1As6vHBGJFiZVKsSPLDdNuW45rsfiTFby609l/ZVrp93exSeXqcUai9u1SJS5ilXmNY1yJBJy6ZVMk1x+n22uNpvizUfEvhK5vNIs4IdJtNJE+xljiuVKQrJGN7hAwPmYO7b1PNUdI+Huv6B4P1g/8JAdMvI5LWXVdOlsUZECTbomFwzbH2r+82oTk/IeTigDptP8BX134FtXh1DxtfwTIkCWltrcMUE9sYhiVEkGFiYcCNvmAOCKq6b4Uj8EaDq3iXxTpuvvbWbRxnTbu/t7i3vYd5ihV0XIJiVkI3YAYZUDGKxZtJ8K+OfGWkaZ4Z03+2rppYb/AF7WfPltvPTzNtx+5cgLuLK/yHjOFHFS6b9s0jxdq+hoyWFtoV7N/ZGoxMt0+lRzM5YLbrl7kyKFQg7jH944waAPT10vTPiNLJrWkXutaPZvjZqek3K2p1PHynzBt3nyyhUbwOpxkGisiwtfD3jvSLWXxrNbatZ2u/8AszXJ7j7D9v3MfNxArKY9hVU+bOcbh1ooA5Lw78Pry4s/hzE+narot039p/2lf2MBtrmLk+V5km3K5Hyjd1BIHWtjwXbax4B07xDBeWN9FfaLpVzJDJDC40m72hZFkYnaXuMkoWGPkTHauaXxj/wj3w78LavqjeINWvdX+1+Y48R3NuF8qXaOASDkEenT3rZ0fxAt7d6hcyDVJtGuvBV1fTaXd6vNcBmE7Rth3yQSqYyBxk0AJpfia18YaVpbf8JXrumRy6lNPrU39oiE2ZaAECNsny7bzdqIH7kjrW14zutL8Z6lLY6hrk9z4dC5gbw3dq6qdqsVvi2UDNIoWEDqxI61xfg/S7rX9B8Tan4L8Iw2sEttDZxWt3dR3iSzpOkjkiYAcRsDyMZXg5rdg+EN7oNrdCG9uLO10rZdz3SyEx65sPmqrQiT9z5RXaCd2S24CgBtz4th8Caz4dTwp4UtJtLlt7azvbtdODX4mLfvLZ3jKr9o2opMbc7uSKoeG/Ek2m/GqbU9d8NWeg6frE8rRXeqWJtZIVSOTDI7nCu+5RIQTuLe4q38Sf8AQdO8I/Eaz/0exnu7O+m0OH5I5Lhg87TM44MhACFimSOc9qo6nrFv471jTb3xVoE2neGdGR7vUZn1JrkhL1A0BG0BwCwTCqDtBwQoFAFXw98TfAemWZ0PU/Dk+p6HYf8AIJe8sYJrld5LzeYWfaPnI27AOAM80VveFPF/wZTwzaLqGjaXYXQ377a5sHvZE+dsZmMR3ZGD7A47UUAeb2Hj3w//AMIjo+g694NGr/2V53kz/wBpyQf62Qu3yov0HJPTtmuj8NeIrHxDd+JjpujjSbOx8E3trFbC5afAEm8ncwB6yHrnpRRQBY8NfB/TYtS8E3mq3h1Gy16JpJbPy2h8vNq0oG9XycED0zj8K9N8c/D4eIdZbX9e1M3+i6ZBNNDovkeVj90Nw89GDcsityDjp0oooA8p0rwyNE8QXt5p935Om33hSTXLjT/L3b7R3Bay8xiWGVAXzhhu+K82fUdHaDWkTQgsl3Kr6e/2tz9gQOSUx/y1ypC5bpjPWiigD6Z+C+i6dDol54m0q2+wWeuFPL03e0v2XyWkjP7xjl9xy3IGM45ooooA/9k=" title="QR Code" alt="Image QR Code">
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

<div id="fee-modal" class="modal">
    <div class="modal-content">
        <p class="ng-binding">Khoảng cách đến địa chỉ của bạn ước tính khoảng  ~ 15,000 đ. Phí này có thể được điều chỉnh cho phù hợp sau khi bạn hoàn tất đơn hàng. </p>
    </div>
</div>


<script>
    $(document).ready(function () {
        $.ajax({
            type: 'GET',
            url: '/Delivery/GenerateQrCode?url=https%3A%2F%2Fwww.now.vn%2Fda-nang%2Fezi-coffee'
        }).success(function (data) {
            if (data != undefined || data != '') {
                console.log(data);
                $('#qr-image').attr('src', data);
            }
        });

        

        $('.block-tooltip .close').on("click", function () {
            $(this).parent().hide();
        });
    });
</script>

                </div>
            




        </div>
@endsection()