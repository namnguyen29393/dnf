<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" ng-app="deliveryNow" class="ng-scope"><head><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Đặt Món &amp; Giao ship tận nơi | FLS.vn</title>

    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
    <meta http-equiv="content-language" content="vi">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Now.vn - Ứng dụng mobile #1 để đặt món, ship tận nơi">
    <meta name="keywords" content=" deliveryNow, Giao đồ ăn, thức ăn, thức uống, tận nơi">
    <meta property="og:site_name" content="DeliveryNow">
    
    <meta name="geo.region" content="VN">
    <meta name="geo.placename" content="Đà Nẵng">
    <meta name="geo.position" content="16.054407;108.202167">
    <meta name="ICBM" content="16.054407;108.202167">

    
    
                <meta name="robots" content="INDEX, FOLLOW">

    <meta name="msvalidate.01" content="9F288B3B53D32225CE6A70FA2DB2BF6D">
    <link rel="SHORTCUT ICON" href="/favicon.ico">
    <!--Import Google Icon Font-->
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/0.11.2/angular-material.min.css"> -->
    <link href="/dangky/content/public.core.min.css?548db8" rel="stylesheet">
    <link href="/dangky/Content/css/timecircles/TimeCircles.css" rel="stylesheet">
    <link href="/dangky/Content/rating/star-rating.min.css" rel="stylesheet">
    
    
<script type="text/javascript" async="" src="https://www.google-analytics.com/plugins/ua/ecommerce.js"></script>
<script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-WTB2PQB"></script>
<script src="https://connect.facebook.net/signals/config/576888802513805?v=2.8.23&amp;r=stable" async=""></script>
<script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>
<script async="" src="//www.google-analytics.com/analytics.js"></script>
<script>
    var linkAddNewUserCard = '/them-the-thanh-toan?callApi=true&redirectUrl=https://www.now.vn/them-the-thanh-toan';
    var routeUrl = {
        isVietNam: "True",
        listPlace: "danh-sach-dia-diem",
        serve: "-phuc-vu-",
        style: "-phong-cach-",
        atArea: "-tai-khu-vuc-",
        deliveryNow: "-giao-tan-noi",
        page: "-trang-"
    };
    var Text = {
        Adult: " người lớn",
        Children: " trẻ em",
        ChildrenCaption: "Số trẻ em",
        AnotherDate: "Chọn ngày khác",
        NewAddress: "+ Thông tin mới",
        DeN_Web_ASAP: "Càng sớm càng tốt"
    };


    var ErrorText = {
        Common_Err: "Bạn chưa đánh giá món ăn.",
        Mem_Err1: "Nhập tên",
        Mem_Err10: "Mật khẩu phải từ 4 đến 20 kí tự",
        Mem_Err11: "Mật khẩu hợp lệ",
        Mem_Err12: "Nhập lại mật khẩu",
        Mem_Err13: "Mật khẩu không khớp",
        Mem_Err14: "Xác nhận mật khẩu hợp lệ",
        Mem_Err15: "Nhập email",
        Mem_Err16: "Email không hợp lệ",
        Mem_Err17: "Bạn phải đồng ý với điều khoản sử dụng",
        Mem_Err2: "Tên phải có ít nhất 2 kí tự",
        Mem_Err3: "Tên không được chứa kí tự đặc biệt",
        Mem_Err4: "Tên hợp lệ",
        Mem_Err5: "Nhập họ",
        Mem_Err6: "Họ phải có ít nhất 2 kí tự",
        Mem_Err7: "Họ không được chứa kí tự đặc biệt",
        Mem_Err8: "Họ hợp lệ",
        Mem_Err9: "Nhập mật khẩu",
        Input_Email: "Vui lòng nhập email của bạn",
        Input_Password: "Vui lòng nhập mật khẩu đăng nhập",
        Email_Exist: "Email đã tồn tại",
        Brand_Reward_MaxTries: "Bạn đã hết lượt thử vận may hôm nay!",
        DeN_Web_PromoCode_Used: "Bạn đã dùng mã khuyến mãi này rồi.",
        DeN_Web_Cart_Has_Changed: "Giỏ hàng của bạn đã có sự thay đổi. Hệ thống sẽ cập nhật lại trạng thái mới nhất"
    };

    var Recommendation = {
        DoNotTypeContent: "Bạn chưa nhập nội dung ."
    };

    var ConfirmMessage = {
        AreYouSure: "Bạn muốn hủy đơn hàng này ?",
        AreYouSureDelete: "Bạn muốn xóa thông tin này ?",
        AddDishToCart: "Món này chỉ bán lúc {0} giờ, bạn có muốn thêm không?"
    };

    var Message = {
        CancelSuccess: "Hủy đơn hàng thành công",
        DeleteSuccess: "Xóa thành công.",
        DeleteError: "Thao tác thất bại, vui lòng thử lại sau.",
        UpdateSuccess: "Cập nhật thông tin thành công.",
        MissingInfo: "Thông tin chưa đầy đủ.",
        InsertSuccess: "Thêm thông tin thành công.",
        RequestSuccess: "Gửi yêu cầu thành công.",
        NotDeliveryHere: "Không có giao hàng tại quận này.",
        AlertTitle: "thông báo",
        Copied: "Copy thành công. Hãy gửi cho nhóm của bạn",
        CopyError: "Trình duyệt không hỗ trợ copy.  Nhấn Ctrl+C để copy.",
        WaitMap: "Vui lòng chờ bản đồ...",
        DistanceSupport: "Quán này chỉ hỗ trợ giao hàng trong phạm vi {0} km. Mong bạn thông cảm.",
        NotDetectLocation: "Không xác định được địa chỉ bạn nhập. Định dạng đúng của địa chỉ là: <i class='red-text'>số nhà, tên đường, phường...</i> Các thông tin khác như tên tòa nhà, lầu, phòng... vui lòng nhập dưới mục ghi chú.",
        ChooseSimilarRestaurants: "Hoặc chọn các quán tương tự đang hoạt động bên dưới.",
        FindAnotherRestaurants: "Tìm quán khác",
        ConfirmAddressSms: "Quý khách chọn Xác nhận đơn hàng qua SMS. Vui lòng kiểm tra lại thông tin nhận hàng: <b>{0}</b>",
        ConfirmAddressValue: "Địa chỉ:",
        ConfirmPhoneValue: "Số điện thoại:",
        ConfirmTimeValue: "Thời gian:",
        WhyCancelOrder: "Đơn hàng này đã bị hủy vì",
        ChangeDeliveryFeeByDeliveryTime: "Vì thời gian giao hàng mà bạn chọn dịch vụ của chúng tôi tính phí trung bình là {0}/km nên phí vận chuyển có sự thay đổi từ {1} thành {2}.",
        PleaseChooseInvoiceVat: "Vui lòng chọn hóa đơn sẵn có hoặc thêm hóa đơn VAT.",
        InfoInvoiceVatNotValid: "Thông tin để xuất hóa đơn VAT đã chính xác?",
        Exactly: "Chính xác",
        Review: "Xem lại",
        Delivery_PhoneInfo: "Số điện thoại không hợp lệ.",
        InputCompanyName: "Vui lòng nhập tên công ty",
        InputCompanyAddress: "Vui lòng nhập địa chỉ công ty",
        RequiredInputTaxcode: "Vui lòng nhập mã số thuế công ty",
        MessageValidTaxcode: "Vui lòng nhập mã số thuế hợp lệ - là kiểu số, viết liền không khoảng cách và có ít nhất 10 kí tự",
        MessageOrderSuccess: "Bạn đã đặt món thành công. Chúng tôi đã nhận được đơn hàng này. Nhân viên của chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất!",
        DeN_Web_Member_NotSaveInfoVat: "Không thể lưu thông tin hóa đơn đỏ. Vui lòng thử lại!",
        DeN_Web_Member_AreYouWantDeleteVat: "Bạn có muốn xóa hóa đơn VAT này?",
        DeN_Web_Member_NotDeletePleaseTryAgain: "Không thể xóa, Vui lòng thử lại",
        DeN_Web_UpdateSuccess: "Cập nhật thành công!",
        DeN_Web_SystemErrorPleaseTryAgain: "Đã có lỗi xảy ra. Vui lòng thử lại !",
        DeN_Web_MemberConfirmCreditCardViaPassword: "Quý khách chọn xác thực credit card qua Password: Now.vn sẽ yêu cầu bạn nhập lại password trước khi hoàn tất giao dịch thanh toán đơn hàng.",
        DeN_Web_Mobile_SeoTitle: "Thực đơn Menu - Giao tận nơi",
        DeN_Web_Mobile_CheckInternetPlease: "Vui lòng kiểm tra lại kết nối internet.",
        DeN_Web_PromoteCode_Not_Apply_Discount_Message: "Đơn hàng của bạn có các sản phẩm: {0} được áp dụng chương trình giảm giá món, nên không được áp dụng đồng thời chương trình khuyến mãi khác.",
        DeN_Web_PromoCode_RestaurantNotVerified: "Code này chỉ áp dụng được với các quán là Verified Merchant",
        DeN_Web_Cart_RestaurantDishOff: "Xin lỗi bạn món này hôm nay quán không có bán. Bạn vui lòng chọn món khác nhé.",
        DeN_Web_Not_Allow_Add_Topping: "Topping mà bạn chọn đã quá số lượng topping cho phép",
        DeN_Web_JoinOrderGroupOnApp: "Tham gia đặt nhóm",
        DeN_Web_DateIsNotValid: "Chọn ngày hợp lệ",
        DeN_Web_Error_InvalidDate: "Ngày được chọn không thể đặt bàn, vui lòng chọn ngày khác!",
        DeN_Web_Restaurant_IsDayOff: "Hiện quán không hoạt động trong thời gian này. Vui lòng chọn thời gian khác.",
        DeN_Web_Btn_Close: "Đóng lại",
        DeliveryNow_Foody_FreeShipp_Campaign: "Free ship",

        DeN_Web_Show_Info_HandDelivery: "Nhân viên giao hàng sẽ giao lên tận nơi cho quý khách.",
        DeN_Web_Information_Security: "Bảo mật thông tin",
        DeN_Web_Corporate_Create_PromoteCode_Success: "Tạo mã giảm giá thành công.",
        DeN_Web_Notify_Order_Payment_Success: "Cảm ơn bạn đã sử dụng dịch vụ của Now.vn Đơn hàng của bạn đã thanh toán thành công và đang được chúng tôi xử lý. <a href='/lich-su-dat-mon'>Xem lịch sử đặt món.</a>",
        DeN_Web_Notify_Order_Payment_Fail: "Bạn đã thanh toán thất bại. Vui lòng liên hệ với chúng tôi để được hỗ trợ hoặc thanh toán lại tại <a href='/lich-su-dat-mon'>đây.</a>.",
        DeN_Web_AirpayCredit_Add_Card_Success: "den_web_airpaycredit_add_card_success",
        DeN_Order_Detail_Enter_Code_Discount_Empty: "Bạn chưa nhập mã giảm giá",
        DeN_Web_Payment_FreeShip: "Miễn phí vận chuyển",
        DeN_Web_NameFrameCampaign: "Giảm giá {0} với đơn hàng lớn hơn {1}",
        
        Den_web_Tooltip_FirstOrderCampaign: "Giảm giá <span class='bold'>{0}</span> cho đơn hàng đầu tiên từ <span class='bold'>{1}</span>",
        DeN_Web_FrameDiscount_Expand: "Xem tất cả <b>{0}</b> khung giảm giá",
        DeN_Web_Promotion_FirstOrder: "<b>Giảm giá</b> <span class='txt-red bold'>{0}</span> với tài khoản mới",
        DeN_Web_DiscountOffer: "Giảm giá",
        DeN_Web_Limit_Dish_Per_Order: "Món {0} chỉ được phép đặt tối đa {1} trên đơn hàng của bạn.",
        DeN_Web_End_Limit_Dish_Per_Order: "Món {0} đã đặt hết số lượng, vui lòng chọn món khác.",

    };

    var FormatDate = {
        Common: 'dd/mm/yy'
    };

    var CartResource = {
        NoItem: "Bạn vui lòng chọn món ăn sẽ gọi.",
        MiniumFee: "Đơn hàng chưa đạt mức tối thiểu. deliveryNow sẽ phụ thu phí dịch vụ là ",
        MiniumAmount: "Đơn hàng của bạn có tổng tiền là <i>{0} {2}</i> - chưa đạt mức tối thiểu để giao hàng là <i>{1} {2}</i>. Phí dịch vụ là {3} đ",
        MiniumAmountNotAllow: "Bạn đang đặt hàng ở địa điểm do 'Quán Tự Giao', quy định của quán là đơn hàng phải đạt tối thiểu {1} {2}. Hiện tại đơn hàng của bạn chỉ mới đạt {0} {2} nên không thể hoàn tất!",
        MiniumAmountAccept: "Đơn hàng của bạn chưa đạt mức tối thiểu nên deliveryNow sẽ phụ thu phí là {0}",
        AcceptMinimumFee: "Chấp nhận phí dịch vụ là <i class='red-text'> {0} {1}</i> &nbspvà tiến hành thanh toán",
        FindAnother: "Tìm các địa điểm tương tự được giao hàng bởi đội ngũ <span class='capitalize bold' style='color: #cc0000;'>Now</span> để đặt ít hơn.",
        ContinutePick: "Tiếp tục chọn thêm món",
        SelectTime: "Chọn thời gian giao hàng.",
        ConfirmComplete: "Bạn muốn hoàn tất đơn hàng này ?",
        ConfirmMemberCancel: "Bạn có chắc muốn xóa thành viên này ra khỏi nhóm ?",
        ConfirmRange: "Xin lỗi bạn món này quán chỉ bán từ {0} giờ!",
        ConfirmRangeCancel: "Món này chỉ bán từ {0} giờ, bạn có muốn thêm không?",
        HasMemberInComplete: "Còn thành viên chưa hoàn tất việc chọn món, bạn vui lòng xem chi tiết trong danh sách thành viên.",
        MissingInfo: "Thông tin chưa đầy đủ.",
        RemindMessage: "Chủ đơn hàng nhắc bạn nhanh chóng hoàn tất việc đặt món!",
        AddItemsErrMessage: "Bạn đã hoàn tất việc chọn thức ăn, không thể đặt thêm. Tuy nhiên bạn có thể nhấn reset để chọn lại.",
        RemindSuccess: "Gửi nhắc nhở thành công",
        OutOfService: "Quán này hiện tại chưa hoạt động. Thời gian giao hàng trở lại là <b class='red-text'>{0}</b>. Tuy nhiên bạn vẫn có thể đặt món trước.",
        ASAP: "Sớm nhất (ASAP)",
        NotEnoughBalance: "Số tiền trong tài khoản của bạn không đủ để thanh toán. Vui lòng chọn phương thức thanh toán khác.",
        OutOfTimeRange: "Quán này hiện tại chưa hoạt động. Thời gian giao hàng trở lại là {0}. Tuy nhiên bạn vẫn có thể đặt món trước.",
        AgreeDeliverAt: "Tôi muốn đặt trước cho {0}",
        Busy: "Quán này hiện tại đang có rất nhiều đơn hàng. Nếu đặt bạn có thể phải chờ đến <b class='red-text'>{0} phút</b> để được phục vụ.",
        AgreeWait: "Tôi chấp nhận chờ {0} phút",
        Delivery_HourOpts: "Quán tạm nghỉ vào ngày {0}. Vui lòng chọn ngày khác.",
        Delivery_FullInfo: "Bạn chưa nhập thông tin, địa chỉ. Vui lòng nhập đầy đủ thông tin",
        Delivery_DistrictInfo: "Vui lòng chọn quận/huyện",
        ConfirmRemoveCard: "Bạn muốn xóa thẻ này ?",
        ConfirmRemoveCardBtnOK: "Đồng ý",
        ConfirmRemoveCardBtnCancel: "Không, cảm ơn",
        Delivery_AddCreditPurchaseMessage: "Vui lòng thêm thẻ để thanh toán.",
        Delivery_NotFindLocation: "DeliveryNow không thể xác định vị trí trên bản đồ và tính phí vận chuyển. Nhân viên tiếp nhận đơn hàng sẽ tính toán và thông báo lại cho quý khách!",
        MinShippingFee: "1. Tiền ship tối thiểu của dịch vụ Now là {0} đ <br/>2. Giá ship: {1} đ/km<br/>Giá ship được nâng cao hơn so với chuẩn để cân bằng cung cầu.",
        MinShippingFeeMobi: "Tiền ship tối thiểu của dịch vụ Now là {0} đ",
        DeliveryTimeIsNotValid: "Giờ giao không hợp lệ. Bạn vui lòng chọn lại",
        DeN_Web_Menu_QuantitySchedule: "Còn <span class='color-remaining-qty'>{0}</span> phần",
        DeN_Web_Order_OutOfQuantityRemaining: "Món này quán chỉ còn <b>{0}</b> phần, bạn vui lòng chọn trong số lượng cho phép."
    };

    var Currency = {
        Unit: "đ"
    }

    var Payment = {
        Cash: "Tiền mặt",
        Transfer: "Chuyển khoản",
        DeliveryAccount: "Now Credits",
        Toppay: "Ví AirPay",
        VNPay: "Internet Banking/ATM",
        Napas: "Thẻ nội địa",
        ChargeFail: "Visa not successful",
        CreditCard: "Thẻ tín dụng",
        ConfirmMomoToppay: "Lưu ý khi sử dụng {0}:<br/>- Tài khoản của bạn tại cổng thanh toán sẽ bị trừ tiền sau khi đặt đơn hàng.<br/>- Đối với trường hợp đơn hàng có sự thay đổi:<br/>+ Giá tiền sau khi xác nhận với Chăm sóc khách hàng (CSKH) Now.vn tăng lên so với ban đầu: số tiền chênh lệch sẽ được nhân viên giao nhận (NVGN) thu thêm tiền mặt khi giao hàng cho bạn.<br/>+ Giá tiền sau khi xác nhận với CSKH Now giảm so với ban đầu: số tiền chênh lệch sẽ được hoàn trả vào tài khoản Now Credits của bạn để sử dụng cho lần thanh toán sau.<br/>+ Đơn hàng bị hủy: số tiền bạn sử dụng tại cổng thanh toán sẽ được hoàn trả vào tài khoản Now Credits của bạn để sử dụng cho lần thanh toán sau.<br/>Bạn có muốn tiếp tục?",
        ConfirmPaymentPayNowCredits: "Lưu ý khi sử dụng {0}:<br/>- Tài khoản của bạn tại cổng thanh toán sẽ bị trừ tiền sau khi đặt đơn hàng.<br/>- Đối với trường hợp đơn hàng có sự thay đổi:<br/>+ Giá tiền sau khi xác nhận với Chăm sóc khách hàng (CSKH) Now.vn tăng lên so với ban đầu: số tiền chênh lệch sẽ được nhân viên giao nhận (NVGN) thu thêm tiền mặt khi giao hàng cho bạn.<br/>+ Giá tiền sau khi xác nhận với CSKH Now.vn giảm so với ban đầu: số tiền chênh lệch sẽ được hoàn trả vào tài khoản Now Credits của bạn để sử dụng cho lần thanh toán sau.<br/>+ Đơn hàng bị hủy: số tiền bạn sử dụng tại cổng thanh toán sẽ được hoàn trả vào tài khoản Now Credits của bạn để sử dụng cho lần thanh toán sau.<br/>Bạn có muốn tiếp tục?",
        ConfirmPaymentNaPas: "Lưu ý khi sử dụng {0}:<br/>- Tài khoản của bạn tại cổng thanh toán sẽ bị trừ tiền sau khi đặt đơn hàng.<br/>- Đối với trường hợp đơn hàng có sự thay đổi:<br/>+ Giá tiền sau khi xác nhận với Chăm sóc khách hàng (CSKH) Now.vn tăng lên so với ban đầu: số tiền chênh lệch sẽ được nhân viên giao nhận (NVGN) thu thêm tiền mặt khi giao hàng cho bạn.<br/>+ Giá tiền sau khi xác nhận với CSKH DeliveryNow giảm so với ban đầu: số tiền chênh lệch sẽ được hoàn trả vào tài khoản PayNow Credits của bạn để sử dụng cho lần thanh toán sau.<br/>+ Đơn hàng bị hủy: số tiền bạn sử dụng tại cổng thanh toán sẽ được hoàn trả vào tài khoản PayNow Credits của bạn để sử dụng cho lần thanh toán sau.<br/>Bạn có muốn tiếp tục?",
        ConfirmPaymentAirpay: "Lưu ý khi sử dụng {0}:<br/>- Tài khoản của bạn tại cổng thanh toán sẽ bị trừ tiền sau khi đặt đơn hàng.<br/>- Đối với trường hợp đơn hàng có sự thay đổi:<br/>+ Giá tiền sau khi xác nhận với Chăm sóc khách hàng (CSKH) Now.vn tăng lên so với ban đầu: số tiền chênh lệch sẽ được nhân viên giao nhận (NVGN) thu thêm tiền mặt khi giao hàng cho bạn.<br/>+ Giá tiền sau khi xác nhận với CSKH Now.vn giảm so với ban đầu: số tiền chênh lệch sẽ được hoàn trả vào tài khoản Now Credits của bạn để sử dụng cho lần thanh toán sau.<br/>+ Đơn hàng bị hủy: số tiền bạn sử dụng tại cổng thanh toán sẽ được hoàn trả vào tài khoản AirPay của bạn để sử dụng cho lần thanh toán sau.<br/>Bạn có muốn tiếp tục?",
        ConfirmPaymentVisa: "Lưu ý khi sử dụng {0}:<br/>- Tài khoản của bạn tại cổng thanh toán sẽ bị trừ tiền sau khi đặt đơn hàng.<br/>- Đối với trường hợp đơn hàng có sự thay đổi:<br/>+ Giá tiền sau khi xác nhận với Chăm sóc khách hàng (CSKH) Now.vn tăng lên so với ban đầu: số tiền chênh lệch sẽ được nhân viên giao nhận (NVGN) thu thêm tiền mặt khi giao hàng cho bạn.<br/>+ Giá tiền sau khi xác nhận với CSKH Now.vn giảm so với ban đầu: số tiền chênh lệch sẽ được hoàn trả vào tài khoản Now Credits của bạn để sử dụng cho lần thanh toán sau.<br/>+ Đơn hàng bị hủy: số tiền bạn sử dụng tại cổng thanh toán sẽ được hoàn trả vào tài khoản Now Credits của bạn để sử dụng cho lần thanh toán sau.<br/>Bạn có muốn tiếp tục?",
        ConfirmPaymentInternetBanking: "Lưu ý khi sử dụng {0}:<br/>- Tài khoản của bạn tại cổng thanh toán sẽ bị trừ tiền sau khi đặt đơn hàng.<br/>- Đối với trường hợp đơn hàng có sự thay đổi:<br/>+ Giá tiền sau khi xác nhận với Chăm sóc khách hàng (CSKH) Now.vn tăng lên so với ban đầu: số tiền chênh lệch sẽ được nhân viên giao nhận (NVGN) thu thêm tiền mặt khi giao hàng cho bạn.<br/>+ Giá tiền sau khi xác nhận với CSKH Now.vn giảm so với ban đầu: số tiền chênh lệch sẽ được hoàn trả vào tài khoản Now Credits của bạn để sử dụng cho lần thanh toán sau.<br/>+ Đơn hàng bị hủy: số tiền bạn sử dụng tại cổng thanh toán sẽ được hoàn trả vào tài khoản Now Credits của bạn để sử dụng cho lần thanh toán sau.<br/>Bạn có muốn tiếp tục?",
        PaymentDefaultAtDeliverynow: "Bạn đã chọn hình thức thanh toán mặc định là <b>{0}</b> cho các đơn hàng sẽ đặt tại Now. ",
        NotChooseDefaultPayment: "Không thể chọn phương thức thanh toán mặt định"
    };

    var Rating = {
        NoPoint: "Bạn chưa đánh giá món ăn."
    };

    var Button = {
        OK: "Đồng ý",
        Cancel: "Hủy",
        Acccpt: "Chấp nhận",
        Deny: "Từ chối",
        Close: "Đóng",
        ViewDetail: "Xem chi tiết",
        NoThanks: "Không, cảm ơn",
        ConfirmAddressSMSOK: "Chính xác rồi",
        ConfirmAddressSMSCancel: "Sửa lại"

    };

    var RequestMsg = {
        InValid: "Giá trị bạn nhập không hợp lệ.",
        Success: "Quy đổi thành công",
        InputRedeem: "Nhập số tiền cần quy đổi."
    };

    var FormRequest = {
        CashIn: "Gửi tiền",
        CashOut: "Rút tiền",
        InputRedeem: "Nhập số tiền cần quy đổi."
    };

    var template = {
        NotEnoughMinimum: " <input class='with-gap' name='group1' type='radio' id='continute-rad' checked />\ <label for='continute-rad'>Tiếp tục chọn thêm món</label>\ <input class='with-gap' name='group1' type='radio' id='accept-rad' />\ <label for='accept-rad'>Chấp nhận chịu phí dịch vụ là 20,000 đ và tiến hành thanh toán</label>"
    };

    var TopupMsg = {
        ConfirmPasswordRequired: "Vui lòng nhập mật khẩu để xác nhận thanh toán!",
        WrongConfirmPassword: "Mật khẩu không chính xác. Vui lòng thử lại"
    };

    var airPayResource = {
        MessageAirpayContact: "Quán này chưa có đăng ký sử dụng dịch vụ Airpay, vui lòng liên hệ <a href='/tham-gia-he-thong-deliverynow' target='_blank'>tại đây</a>",
        SystemErrorPleaseTry: "Có lỗi xảy ra. Vui lòng thử lại",
        AddWalletSuccess: "Thêm ví nhà hàng thành công",
        Input: "Nhập ",
        PhoneIsNotValid: "Số điện thoại không hợp lệ",
        EmailIsNotValid: "Email không hợp lệ",
        ChooseARestaurant: "Chọn một nhà hàng",
        DeN_Web_RegisterAirpayToAllRestaurantNotRegisterMore: "Bạn đã đăng ký airpay cho tất cả các nhà hàng, không thể đăng ký nữa!",
        DeN_Web_Merchant_Min: " tối thiểu ",
        DeN_Web_Merchant_Max: " tối đa ",
        DeN_Web_Merchant_Character: " ký tự"
    }

    var VATMsg = {
        VATMinToInvceAlert: "Quán này chỉ hỗ trợ xuất hóa đơn VAT đối với các đơn hàng có giá trị từ {0} đ (phí này không bao gồm phí phí ship và các loại phí khác)"
    }

    var TopupMsg = {
        NotChoosePaymentMethod: "Vui lòng chọn phương thức thanh toán",
        TransactionIsInvalid: "Số tiền giao dịch không hợp lệ. Số tiền hợp lệ từ 50,000 đến 5,000,000.",
        NotSelectCard: "Vui lòng chọn thẻ để thực hiện giao dịch",
        PaymentSuccess: "Giao dịch thành công.",
        BonusMessage: " Bạn được tặng thêm {0} VNĐ vào PayNow Credits khi thực hiện thành công giao dịch này. Vui lòng kiểm tra lại số dư PayNow Credits!",
        ConfirmPasswordRequired: "Vui lòng nhập mật khẩu để xác nhận thanh toán!",
        WrongConfirmPassword: "Mật khẩu không chính xác. Vui lòng thử lại"

    };

    var settingKey = {
        DeN_Web_Setting_AppStore: "https://itunes.apple.com/us/app/deliverynow/id1137866760",
        DeN_Web_Setting_UrlOpenAppDelivery: "deliverynow://foody.vn"
    }

    var merchantResource = {
        DeN_Web_Merchant_StatusPick: "Đã lấy hàng",
        DeN_Web_Merchant_StatusDelivery: "Đã giao xong",
        DeN_Web_Merchant_StatusConfirmed: "Đã xác nhận",
        DeN_Web_Merchant_StatusConfirm: "Chờ xác nhận",
        DeN_Web_Merchant_StatusConfirming: "Đang xác nhận",
        DeN_Web_Merchant_StatusCancel: "Quán từ chối",
        DeN_Web_Order_Has_Changed: "Đơn hàng này đã có sự thay đổi ( có thể đã xác nhận hoặc đã hủy), quán vui lòng reload (F5) lại website để cập nhật trạng thái mới nhất.",
        DeN_Web_Merchant_ConfirmUpdateOrder: "Xác nhận cập nhật đơn hàng ?",
        DeN_Web_Merchant_HaveNewOrder: "Có đơn hàng mới!",
        DeN_Web_Merchant_ConfirmRemoveStoreAirpay: "Xác nhận xóa nhà hàng ra khỏi ví ?"
    }

    var resourceMobile = {
        DeN_Web_Mobile_OrderDetail: "Chi tiết đơn hàng",
        DeN_Web_AppAPI_VATFee: "Phí xuất hóa đơn VAT",
        DeN_Web_Cart_DeliveryFee: "Phí vận chuyển",
        DeN_Web_Cart_EnterCode: "Nhập mã",
        DeN_Web_Cart_PromoCode: "Mã khuyến mãi",
        DeN_Web_Cart_SubTotal: "Cộng",
        DeN_Web_Common_Note: "Ghi chú",
        DeN_Web_Common_Status: "Trạng thái",
        DeN_Web_ConfirmOrderMethod: "Xác nhận đơn hàng cho tôi qua",
        DeN_Web_ConfirmOrderMethod_Call: "Gọi điện thoại",
        DeN_Web_ConfirmOrderMethod_SMS: "Tin nhắn SMS",
        DeN_Web_Corporate_MoneyTotal: "Tổng tiền",
        DeN_Web_EnterCodeOffer: "Nhập mã",
        DeN_Web_Header_DeliveryNow: "Đặt Giao Hàng",
        DeN_Web_History_AppAPI_CustomFee: "Nhà hàng phụ thu",
        DeN_Web_History_AppAPI_DiscountRestaurant: "Nhà hàng giảm giá",
        DeN_Web_History_Cart_PromoCode: "Mã khuyến mãi",
        DeN_Web_History_Code: "Mã order",
        DeN_Web_History_PaymentOrder: "Phương thức thanh toán",
        DeN_Web_History_PaymentviaAirpay: "Thanh toán qua ví AirPay",
        DeN_Web_History_Qty: "Số lượng món",
        DeN_Web_History_ShipperFee: "Phí phụ thu người giao",
        DeN_Web_History_SoldOut: "Hết món",
        DeN_Web_History_SubmitDate: "Ngày đặt",
        DeN_Web_History_Total: "Tổng cộng",
        DeN_Web_Member_CurrentBalance: "Bạn đang có",
        DeN_Web_Member_MyCard: "Quản lý thẻ Visa/Master/JCB",
        DeN_Web_Mobile_CardDelete: "Xóa thẻ",
        DeN_Web_Mobile_CardExpire: "Ngày hết hạn",
        DeN_Web_Mobile_CardNumber: "Số thẻ",
        DeN_Web_Mobile_ChooseDishToOrder: "Vui lòng chọn món để đặt.",
        DeN_Web_Mobile_ChooseYourPaymentMethod: "Chọn phương thức thanh toán",
        DeN_Web_Mobile_COD: "Thanh toán khi nhận hàng (COD)",
        DeN_Web_Mobile_ConfirmInfo: "Xác nhận thông tin",
        DeN_Web_Mobile_CreateDeliveryAddress: "Tạo địa chỉ giao hàng để đặt món",
        DeN_Web_Mobile_CreateNewAddress: "Tạo địa chỉ mới",
        DeN_Web_Mobile_CreditCart: "Thẻ Credit card VISA/MASTER/JCB",
        DeN_Web_Mobile_Delivery: "Giao hàng",
        DeN_Web_Mobile_DeliveryAddress: "Địa chỉ giao hàng",
        DeN_Web_Mobile_DeliveryFee: "Phí giao hàng",
        DeN_Web_Mobile_DeliveryMethod: "Phương thức giao hàng",
        DeN_Web_Mobile_DeliveryTime: "Thời gian giao",
        DeN_Web_Mobile_Myaddress: "Địa chỉ của tôi",
        DeN_Web_Mobile_NewAddress: "Địa chỉ mới",
        DeN_Web_Mobile_Next: "Tiếp tục",
        DeN_Web_Mobile_OkWaitToConfirm: "OK! Tôi sẽ chờ xác nhận",
        DeN_Web_Mobile_Order: "Đặt món",
        DeN_Web_Mobile_OrderDetail: "Chi tiết đơn hàng",
        DeN_Web_Mobile_OrderFrom: "đơn hàng từ",
        DeN_Web_Mobile_OrdersSend: "Đơn hàng đã gửi!",
        DeN_Web_Mobile_PromotionPayment: "Khuyến mãi thanh toán",
        DeN_Web_Mobile_RestaurantNotHaveDeliveryMethod: "Quán này chưa có phương thức giao hàng!",
        DeN_Web_Mobile_ShipTo: "Nơi đặt",
        DeN_Web_Mobile_ThanksToUsedService: "Cảm ơn bạn đã sử dụng dịch vụ. Vui lòng chờ trong giây lát. Chúng tôi sẽ gọi lại để xác nhận đơn hàng.",
        DeN_Web_Order_ConfirmFee: "Phí xác nhận đơn hàng",
        DeN_Web_Payment_Method_VnPay: "Internet Banking/ATM",
        DeN_Web_ResourceBase_AnotherDate: "Chọn ngày khác",
        DeN_Web_ResourceBase_Close: "Đóng",
        DeN_Web_ResourceBase_DeliveryAccount: "Now Credits",
        DeN_Web_Service: "Phí dịch vụ",
        DeN_Web_ShippingFee_Discount: "Khuyến mãi phí vận chuyển",
        DeN_Web_Topping_Dish: "loại",
        DeN_Web_Web_Common_Currency_Unit: "đ",
        DeN_Web_Mobile_InputPromocode: "Nhập mã khuyến mãi",
        DeN_Web_Mobile_AddressName: "Tên địa điểm. vd: Nhà, nơi làm việc...",
        DeN_Web_Common_FullName: "Họ tên",
        DeN_Web_Common_Phone: "Số điện thoại",
        DeN_Web_Common_Address : "Địa chỉ",
        DeN_Web_CanNotDetermineYourLocation: "Không thể xác định vị trí của bạn để tính phí.",
        DeN_Web_Mobile_Unknown: "Không xác định",
        DeN_Web_Mobile_CouldNotFindYourAddress : "Không tìm thấy địa chỉ của bạn",
        DeN_Web_Mobile_PleaseEnterFullInfomation: "Vui lòng nhập đầy đủ thông tin.",
        DeN_Web_Mobile_PleaseEnterShippingAddress: "Bạn vui lòng nhập địa chỉ giao hàng.",
        DeN_Web_ResourceBase_Delivery_HourOpts: "Quán tạm nghỉ vào ngày {0}. Vui lòng chọn ngày khác.",
        DeN_Web_PromoteCode_Not_Apply_Discount_Message: "Đơn hàng của bạn có các sản phẩm: {0} được áp dụng chương trình giảm giá món, nên không được áp dụng đồng thời chương trình khuyến mãi khác.",
        DeN_Web_ResourceBase_PleaseConfirmationPassword: "Vui lòng nhập xác nhận mật khẩu.",
        DeN_Web_Shipping_Packing_Fee: "Phí đóng gói",
        DeN_Web_Order_DeliveryToHand: "Giao lên tận nơi",
        DeN_Web_History_History_DiscountAmount: "Giảm giá",
        DeN_Web_Add_New_UserCard: linkAddNewUserCard,
        DeN_Web_OrderByApp: "Đặt món bằng App",
        DeN_Web_Force_Order_App_Content: "Vui lòng tải app để order.",
    }
</script>
    <script src="/scripts/bundle/public.core.min.js?548db8" type="text/javascript"></script>
    <script src="/now/js/Scripts/js_rating/star-rating.js"></script>
    <script type="text/javascript">
        var staticPath = '/'
        var province = 'da-nang';
        var provinceId = '219';
        var provinceName = 'Đ&#224; Nẵng';
        var defaultLatgitude = parseFloat('16.051571');
        var defaultLongitude = parseFloat('108.214897');
        var fbAppId = '938149792891368';

        var ssoUrl = '';
        var defaultUrl = 'https://www.deliverynow.vn';

        var ssoLoginUrl = 'https://id.foody.vn/Account/Login?ReturnUrl=https://www.now.vn:443/tai-khoan/thong-tin-tai-khoan';
        var returnReLogin = 'https://id.foody.vn/Account/Logout?ReturnUrl=https://www.now.vn:443/tai-khoan/thong-tin-tai-khoan';

        // var a = null;
        // $(window).scroll(function () {
        //     a && window.clearTimeout(a), a = setTimeout(function () {
        //             $(window).scrollTop() > 300 ? $(".fd-back-top").show() : $(".fd-back-top").hide();
        //         },
        //         50);
        // });

    </script>

    



    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkxftePBHxyaE5H1oLUjxMjvxNbW4hdcs&amp;language=vi&amp;libraries=placeses,visualization,drawing,geometry,places&amp;region=vn" type="text/javascript"></script>
    
<script>
    (function (i, s, o, g, r, a, m)
    {
        i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function ()
        {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date(); a = s.createElement(o),
        m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-33292184-11', 'auto');
    ga('send', 'pageview');
    ga('require', 'ecommerce', 'ecommerce.js');

</script>

    <!-- Facebook Pixel Code -->
<script>
    !function (f, b, e, v, n, t, s) {
        if (f.fbq) return; n = f.fbq = function () {
            n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        }; if (!f._fbq) f._fbq = n;
        n.push = n; n.loaded = !0; n.version = '2.0'; n.queue = []; t = b.createElement(e); t.async = !0;
        t.src = v; s = b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t, s)
    }(window,
    document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');

    fbq('init', '576888802513805');
    fbq('track', "PageView");
</script>
<noscript>
    <img height="1" width="1" style="display:none"
         src="https://www.facebook.com/tr?id=576888802513805&ev=PageView&noscript=1" />
</noscript>
<!-- End Facebook Pixel Code -->

    <!-- Google Tag Manager -->
<script>
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push(
{'gtm.start': new Date().getTime(),event:'gtm.js'}
);var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WTB2PQB');</script>
<!-- End Google Tag Manager -->

<script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/33/9/intl/vi_ALL/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/33/9/intl/vi_ALL/util.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/33/9/intl/vi_ALL/stats.js"></script></head>
<body>
    <script type="application/ld+json">
        {
        "@context" : "https://schema.org",
        "@type" : "Website",
        "name" : "Deliverynow",
        "alternateName": "DeliveryNow Vietnam",
        "url" : "https://www.deliverynow.vn",
        "sameAs" : [
        "https://www.facebook.com/deliveryNow.vn",
        "https://twitter.com/DeliveryNowVN",
        "https://plus.google.com/u/0/114035556444820573589",
        "https://www.instagram.com/deliverynow.vn"],
        "potentialAction": {
        "@type": "SearchAction",
        "target": "https://www.deliverynow.vn/ho-chi-minh/danhsach-dia-diem-giao-tan-noi?q={search_term}",
        "query-input": "required name=search_term"
        }
        }
    </script>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WTB2PQB"
                height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    

<div class="container-topbar">
    <div class="topbar">
                    <a href="https://www.foody.vn/" rel="nofollow">Khám Phá</a>
            <a href="http://www.tablenow.vn" rel="nofollow">Đặt Bàn</a>
            <a href="https://www.now.vn/" class="current" rel="home">Đặt Giao Hàng</a>
                <a href="http://marketnow.vn/" class="" rel="home" style="position: relative;">
                    Đi chợ
                    <img src="/dangky/content/images/icons/sb-new.gif" alt="new" style="position: absolute;top: 1px;right: -5px;border-radius: 7px;">
                </a>
            <a href="http://www.sheis.vn/" rel="nofollow">Làm đẹp</a>
            <a href="http://www.foodypos.vn" rel="nofollow">FoodyPOS</a>

        <div style="float:right;">
            

    <div class="language" style="float:right;">
        <!-- Dropdown Trigger -->
        <a class="language-select turn-off-overlay" data-activates="language-select" href="" style=" padding: 7px 0px 0 15px">
            <img src="/dangky/content/images/icons/lang/vn.png" width="20">
        </a>

        <!-- Dropdown Structure -->
        <ul id="language-select" class="dropdown-language">
                <li>
                    <a onclick="return changeLanguage('en')" rel="nofollow" href="/common/changelanguage?code=en&amp;returnUrl=https%3A%2F%2Fwww.now.vn%2Ftai-khoan%2Fthong-tin-tai-khoan" title="en" class="clearfix">
                        <img src="/dangky/content/images/icons/lang/us.png" alt="en" title="en" width="20" class="pull-left">
                        <span class="language-item pull-left">en</span>
                    </a>
                </li>
        </ul>
    </div>
    <script type="text/javascript">
        function changeLanguage(code) {
            var languageUrl = '/Common/ChangeLanguage';
            languageUrl = languageUrl + '?code=' + code + '&returnUrl' + location.href;
            location.href = languageUrl;
            return false;
        }
    </script>


            <div class="time-working pull-right">
                <i class="fa fa-clock-o"></i>
                <span class="bold">06:30 - 21:00</span>
                
            </div>
        </div>
    </div>

</div>
<div class="navbar-fixed">
    <nav class="white" role="navigation" style="box-shadow:none;border-bottom: #eee 1px solid;">
        <div class="container-header clearfix">
                <div class="logo pull-left">
                    <a href="/" title="deliveryNow.vn">
                        <img id="delivery-header-logo" src="/dangky/Content/images/now.vn.png" alt="deliveryNow.vn" width="112px">
                    </a>
                </div>

            
<div class="country pull-left">
    <!-- Dropdown Trigger -->
    <a class="dropdown-button location-select" href="javascript:void(0);" data-activates="location-select">
        
Đà Nẵng        <span class="caret">▼</span>
    </a><ul id="location-select" class="dropdown-content">
            <li>
                <a href="/ho-chi-minh">
                    TP. HCM
                    <span class="count">20242</span>
                </a>
            </li>
            <li>
                <a href="/ha-noi">
                    Hà Nội
                    <span class="count">10078</span>
                </a>
            </li>
            <li>
                <a href="/da-nang">
                    Đà Nẵng
                    <span class="count">2754</span>
                </a>
            </li>
            <li>
                <a href="/can-tho">
                    Cần Thơ
                    <span class="count">1085</span>
                </a>
            </li>
            <li>
                <a href="/hai-phong">
                    Hải Phòng
                    <span class="count">1067</span>
                </a>
            </li>
            <li>
                <a href="/hue">
                    Huế
                    <span class="count">606</span>
                </a>
            </li>
            <li>
                <a href="/khanh-hoa">
                    Khánh Hoà
                    <span class="count">594</span>
                </a>
            </li>
            <li>
                <a href="/dong-nai">
                    Đồng Nai
                    <span class="count">988</span>
                </a>
            </li>
            <li>
                <a href="/nghe-an">
                    Nghệ An
                    <span class="count">799</span>
                </a>
            </li>
            <li>
                <a href="/quang-ninh">
                    Quảng Ninh
                    <span class="count">214</span>
                </a>
            </li>
            <li>
                <a href="/vung-tau">
                    Vũng Tàu
                    <span class="count">844</span>
                </a>
            </li>
    </ul>

    <!-- Dropdown Structure -->
    

</div>

            

<!-- Category -->

    <div class="top-cate">
        <a href="/da-nang/danh-sach-dia-diem-giao-tan-noi">Tất cả</a>





        

                <a href="/da-nang/danh-sach-dia-diem-phuc-vu-com-trua-giao-tan-noi">
                    Cơm trưa
                </a>
                <a href="/da-nang/danh-sach-dia-diem-phuc-vu-do-an-giao-tan-noi">
                    Đồ ăn
                </a>
                <a href="/da-nang/danh-sach-dia-diem-phuc-vu-thuc-uong-giao-tan-noi">
                    Thức uống
                </a>
                <a href="/da-nang/danh-sach-dia-diem-phuc-vu-mon-chay-giao-tan-noi">
                    Món chay
                </a>
                <a href="/da-nang/danh-sach-dia-diem-phuc-vu-banh-kem-giao-tan-noi">
                    Bánh kem
                </a>
            <div class="more-cate">
                <span class="icon-more">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </span>
                <div class="list-more-cate">
                        <div class="item-cate">
                            <a href="/da-nang/danh-sach-dia-diem-phuc-vu-trang-mieng-giao-tan-noi" title="Tráng miệng">
                                Tráng miệng
                            </a>
                        </div>
                        <div class="item-cate">
                            <a href="/da-nang/danh-sach-dia-diem-phuc-vu-homemade-giao-tan-noi" title="Homemade">
                                Homemade
                            </a>
                        </div>
                        <div class="item-cate">
                            <a href="/da-nang/danh-sach-dia-diem-phuc-vu-via-he-giao-tan-noi" title="Vỉa hè">
                                Vỉa hè
                            </a>
                        </div>
                        <div class="item-cate">
                            <a href="/da-nang/danh-sach-dia-diem-phuc-vu-pizza-burger-giao-tan-noi" title="Pizza &amp; Burger">
                                Pizza &amp; Burger
                            </a>
                        </div>
                        <div class="item-cate">
                            <a href="/da-nang/danh-sach-dia-diem-phuc-vu-mon-ga-giao-tan-noi" title="Món gà">
                                Món gà
                            </a>
                        </div>
                        <div class="item-cate">
                            <a href="/da-nang/danh-sach-dia-diem-phuc-vu-mon-lau-giao-tan-noi" title="Món lẩu">
                                Món lẩu
                            </a>
                        </div>
                        <div class="item-cate">
                            <a href="/da-nang/danh-sach-dia-diem-phuc-vu-sushi-giao-tan-noi" title="Sushi">
                                Sushi
                            </a>
                        </div>
                        <div class="item-cate">
                            <a href="/da-nang/danh-sach-dia-diem-phuc-vu-mi-pho-giao-tan-noi" title="Mì phở">
                                Mì phở
                            </a>
                        </div>
                        <div class="item-cate">
                            <a href="/da-nang/danh-sach-dia-diem-phuc-vu-com-hop-giao-tan-noi" title="Cơm hộp">
                                Cơm hộp
                            </a>
                        </div>
                </div>
            </div>
    </div>


            <div id="login-status" class="user-deli pull-right">
                

    <a href="javascript:void(0)" class="logined-user turn-off-overlay" data-activates="dropdown-user">
        <img src="https://media.foody.vn/usr/g212/2113186/avt/c30x30/foody-avatar-946-636684575560371018.jpg" style="border-radius:50%;">
        <span class="name-user bold capitalize">Kiến</span>
        <i class="fa fa-angle-down"></i>
    </a>
    <div class="sub-nav-user">
        
            <a href="/corporate" title="Corporate">
                <i class="ico-user ico-corporate"></i>
                <span class="text">Corporate</span>

            </a>


        
        <a href="/lich-su-dat-mon">
            <i class="ico-user ico-user-history circle" style="background-color: #25ad5f;"></i>
            <span class="text">Lịch sử đặt món</span>
        </a>
        <a href="/tai-khoan/thong-tin-tai-khoan">
            <i class="ico-user ico-user-update circle" style="background-color: #e2963b;"></i>
            <span class="text">Cập nhật tài khoản</span>
        </a>
            <a id="logout" href="https://id.foody.vn/Account/Logout?ReturnUrl=https://www.now.vn:443/tai-khoan/thong-tin-tai-khoan" style="border:none;">
                <i class="ico-user ico-user-logout circle" style="background-color: #6d6f71;"></i>
                <span class="text">Đăng xuất</span>
            </a>
    </div>

<script>
    $("#logout").bind("click", function () {
        removeAllCookie();
        location.href = "/dang-xuat?returnUrl=%2Ftai-khoan%2Fthong-tin-tai-khoan";
    });
</script>

            </div>
            <div class="right-app">

            </div>
            


                <a href="javascript:;" data-down-app="" class="btn btn-app-now" title="Tải App" rel="nofollow">
                    <i class="fa fa-mobile" aria-hidden="true"></i> <span style="vertical-align: top;">Tải App</span>
                </a>


            <div id="header-icon-search" class="search ico-search-home pull-left" style="float: right;">
                <a href="javascript:void(0)" class="waves-effect waves-light" style="padding: 15px 0">
                    <i class="mdi-action-search" id="search-btn">
                        <img src="/dangky/Content/images/icons/ico-nav-search.png" alt="">
                    </i>
                </a>
                <div id="search-overlay" class="material-search-overlay circle material-search-overlay-color-bg material-search-overlay-hidden"></div>
<form action="/da-nang/danh-sach-dia-diem-giao-tan-noi" class="material-search-form material-search-form-hidden ng-pristine ng-valid" id="search-form" method="get">                    <div class="material-search-form-container ng-scope" ng-controller="CompleteController as completeCtrl">
                        <div class="material-search-form-container-row">
                            <div class="material-search-input">
                                <a href="#" onclick="return false;" id="search-btn-close" class="material-search-close"><i class="mdi-navigation-close"></i></a>
                                <div class="bg-search">
                                    <img src="/dangky/Content/images/bg-search.png" alt="">
                                </div>
                                <span class="white-text font16">Đặt món trực tuyến, giao tận nơi tại 2754 địa điểm ở Đà Nẵng từ 06:30 - 21:00</span>
                                <div style="position: relative;">
                                    <input type="text" id="s" name="q" class="flow-text search_placeholder ng-pristine ng-untouched ng-valid ng-empty" ng-keyup="completeCtrl.keyupFunc($event)" ng-model="completeCtrl.q" autocomplete="off" ng-focus="completeCtrl.focusToTextSearch('Đã xem gần đây')">
                                    <span class="input-bottom-bar"></span>
                                    <div class="idea-searching ng-hide" ng-show="completeCtrl.results.length > 0">
                                        <div class="list-idea-searching">
                                            <div style="text-align: left; padding-bottom: 10px" ng-show="completeCtrl.showViewRecent==true" class="ng-hide">
                                                <span style="padding-left: 11px; font-size: 15px; color: #969696;" class="txtshowViewRecent"></span>
                                            </div>
                                            <!-- ngRepeat: item in completeCtrl.results -->
                                        </div>
                                        <div class="footer-searching" onclick="$('#search-form').submit()">
                                            <p class="mar0">
                                                <span class="fa fa-search btn-search circle"></span>
                                                <span>Tìm thêm kết quả cho</span>
                                                <span class="bold txt-red font14 ng-binding"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
</form>            </div>
        </div>
    </nav>
</div>
<script>
    $(document).ready(function () {
        $(".btn-app-now[data-down-app]").on("click", function () {
            $('#new-app').openModal({

            });
        })
    })
</script>

    


<div class="container-user-profile2 main-content clearfix ng-scope" ng-controller="MemberController as memberCtrl">
    <div class="user-profile-navigation">
        <ul class="navigation-profile">
            
            <li class="item-tab">
                <img src="https://media.foody.vn/usr/g212/2113186/avt/c30x30/foody-avatar-946-636684575560371018.jpg" alt="" class="circle" width="40" height="40">
                <span class="bold font15 capitalize" style="position: absolute; left: 55px; top: 9px;right: 0;">Kiến</span>
            </li>
            <li class="item-tab">
                <a href="/mathang" class="tit-group" title="Cập nhật tài khoản">
                    <i class="fa fa-user icon"></i>
                    <span>Thêm sản phẩm</span>
                    <i class="pull-right fa fa-angle-right"></i>
                </a>
            </li>
            <li class="item-tab">
                <div class="tit-group active">
                    <i class="fa fa-shopping-cart icon"></i>
                    <!-- <span>Cập nhật sổ địa chỉ</span> -->
                    <span>Thông tin đặt hàng</span>
                    <i class="pull-right fa fa-angle-down"></i>
                </div>
                <ul class="sub-profile">
                    <li class="item-tab">
                        <a href="/tai-khoan/thong-tin-tai-khoan" class="tit-group active" title="Cập nhật sổ địa chỉ">
                            <i class="fa fa-map-marker icon"></i>
                            <span>Cập nhật sổ địa chỉ</span>
                            <i class="pull-right fa fa-angle-right"></i>
                        </a>
                    </li>


                        <li class="item-tab">
                            <a href="/tai-khoan/quan-ly-xuat-hoa-don" title="Cập nhật hóa đơn VAT" class="tit-group">
                                <i class="icon-vot icon"></i>
                                <span>Cập nhật hóa đơn VAT</span>
                                <i class="pull-right fa fa-angle-right"></i>
                            </a>
                        </li>

                </ul>
            </li>
            
            <li class="item-tab">
                <ul class="playment-methods">
                    <li class="method-item">
                        <a href="/tai-khoan/phuong-thuc-thanh-toan" class="tit-group">
                            <img src="/dangky/Content/images/icons/icon-payment-methods.png" alt="" class="icon">
                            <span>Phương thức thanh toán</span>
                            <i class="pull-right fa fa-angle-right"></i>
                        </a>
                        <ul class="list-methods tabs hide" style="width: 130%;">
                            <!-- ngRepeat: item in memberCtrl.listPaymentMethod --><li class="item-method tab ng-scope" ng-repeat="item in memberCtrl.listPaymentMethod">
                                <a href="#e-wallet-toppay" title="Ví điện tử AirPay" class="active">
                                    <img src="/dangky/Content/images/icons/toppay.png" alt="" class="icon icon-cash">
                                    <span class="txt-elipsis ng-binding">Ví điện tử AirPay</span>
                                    <i class="pull-right fa fa-angle-right"></i>
                                    <i class="pull-right fa fa-lock ng-hide" aria-hidden="true" ng-show="memberCtrl.paymentSetting.Default == item.Id"></i>
                                </a>
                            </li><!-- end ngRepeat: item in memberCtrl.listPaymentMethod --><li class="item-method tab ng-scope" ng-repeat="item in memberCtrl.listPaymentMethod">
                                <a href="#acc-deli" title="Now Credits" class="active">
                                    <img src="/dangky/Content/images/icons/icon-paynow.png" alt="" class="icon icon-cash">
                                    <span class="txt-elipsis ng-binding">Now Credits</span>
                                    <i class="pull-right fa fa-angle-right"></i>
                                    <i class="pull-right fa fa-lock ng-hide" aria-hidden="true" ng-show="memberCtrl.paymentSetting.Default == item.Id"></i>
                                </a>
                            </li><!-- end ngRepeat: item in memberCtrl.listPaymentMethod --><li class="item-method tab ng-scope" ng-repeat="item in memberCtrl.listPaymentMethod">
                                <a href="#credit-card" title="Credit VISA/MASTER/JCB" class="active">
                                    <img src="/dangky/Content/images/icons/icon-credit-card.png" alt="" class="icon icon-cash">
                                    <span class="txt-elipsis ng-binding">Credit VISA/MASTER/JCB</span>
                                    <i class="pull-right fa fa-angle-right"></i>
                                    <i class="pull-right fa fa-lock ng-hide" aria-hidden="true" ng-show="memberCtrl.paymentSetting.Default == item.Id"></i>
                                </a>
                            </li><!-- end ngRepeat: item in memberCtrl.listPaymentMethod --><li class="item-method tab ng-scope" ng-repeat="item in memberCtrl.listPaymentMethod">
                                <a href="#cash" title="Tiền mặt" class="active">
                                    <img src="/dangky/Content/images/icons/icon-cash.png" alt="" class="icon icon-cash">
                                    <span class="txt-elipsis ng-binding">Tiền mặt</span>
                                    <i class="pull-right fa fa-angle-right"></i>
                                    <i class="pull-right fa fa-lock ng-hide" aria-hidden="true" ng-show="memberCtrl.paymentSetting.Default == item.Id"></i>
                                </a>
                            </li><!-- end ngRepeat: item in memberCtrl.listPaymentMethod --><li class="item-method tab ng-scope" ng-repeat="item in memberCtrl.listPaymentMethod">
                                <a href="#credit-card" title="Internet Banking" class="active">
                                    <img src="/dangky/Content/images/icons/icon-credit-card.png" alt="" class="icon icon-cash">
                                    <span class="txt-elipsis ng-binding">Internet Banking</span>
                                    <i class="pull-right fa fa-angle-right"></i>
                                    <i class="pull-right fa fa-lock ng-hide" aria-hidden="true" ng-show="memberCtrl.paymentSetting.Default == item.Id"></i>
                                </a>
                            </li><!-- end ngRepeat: item in memberCtrl.listPaymentMethod -->
                        <div class="indicator" style="right: 0px; left: 0px;"></div><div class="indicator"></div></ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="detail-user-profile">
        <div id="address-update" class="tab-content address-update">
            <div class="container-account-bill">
                <div class="header-user-profile clearfix">
                    <h4 class="bold pull-left">Cập nhật sổ địa chỉ</h4>
                </div>
                <div class="table-account-point">
                    <table>
                        <thead>
                            <tr>
                                <th data-field="id" width="150px">Tên gợi nhớ</th>
                                <th data-field="name" width="500px">Địa chỉ</th>
                                <th data-field="price" width="250px">Số điện thoại</th>
                                <th width="100px"></th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- ngRepeat: item in memberCtrl.lstAddress -->
                            <!-- ngRepeat: item in memberCtrl.lstAddress -->
                        </tbody>
                    </table>
                    <a href="javascript:void(0);" class="modal-action waves-effect waves-light red btn right" style="margin-bottom: 20px;margin-right: 20px" ng-click="memberCtrl.add()">Thêm</a>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-popup-modal">
    <div id="edit-address" class="modal">
        <a class="modal-close btn-close-modal"><i class="fa fa-close fa-1x5"></i></a>
        <div class="modal-content" style="height:400px;background:#fff;">
            <div>
                <div style="height: 400px;overflow: auto;padding-top: 15px;">
                    <div>
                        <div class="row">
                            <form name="addressForm" class="reservation-form ng-pristine ng-invalid ng-invalid-required ng-valid-email" style="float:left;width:100%;" novalidate="">
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="Ví dụ: Nhà riêng, công ty, trường học..." id="label" type="text" class="validate ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" ng-model="memberCtrl.userData.Label" required="" autocomplete="off">
                                        <label for="label" class="active">Tên gợi nhớ*</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input placeholder="Ví dụ: Nguyễn Văn A" id="fullname" type="text" class="validate ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" ng-model="memberCtrl.userData.FullName" autocomplete="off" required="">
                                        <label for="fullname" class="active">Họ tên*</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <input placeholder="Ví dụ: info@deliverynow.com" id="shipping-email" type="email" class="validate ng-pristine ng-untouched ng-empty ng-valid-email ng-invalid ng-invalid-required" ng-model="memberCtrl.userData.Email" autocomplete="off" required="">
                                        <label for="shipping-email" class="active">Ví dụ: info@deliverynow.com*</label>
                                    </div>
                                    <div class="input-field col s6">
                                        <input placeholder="Ví dụ: +84912345678, 0912345678" id="phone" type="text" class="validate ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" ng-model="memberCtrl.userData.PhoneNumber" autocomplete="off" required="">
                                        <label for="phone" class="active">Số điện thoại*</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input placeholder="Ví dụ: 244 Cống Quỳnh, Phạm Ngũ Lão" id="address" type="text" class="validate ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" ng-model="memberCtrl.userData.FullAddress" required="">
                                        <label for="address" class="active">Địa chỉ*</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s6">
                                        <select class="browser-default ng-pristine ng-untouched ng-not-empty ng-valid ng-valid-required" ng-model="memberCtrl.districtSelected" ng-options="opt as opt.Name for opt in memberCtrl.district" required=""><option label="Quận Cẩm Lệ" value="object:93" selected="selected">Quận Cẩm Lệ</option><option label="Quận Hải Châu" value="object:94">Quận Hải Châu</option><option label="Quận Liên Chiểu" value="object:95">Quận Liên Chiểu</option><option label="Quận Ngũ Hành Sơn" value="object:96">Quận Ngũ Hành Sơn</option><option label="Quận Sơn Trà" value="object:97">Quận Sơn Trà</option><option label="Quận Thanh Khê" value="object:98">Quận Thanh Khê</option><option label="Hòa Vang" value="object:99">Hòa Vang</option><option label="Hoàng Sa" value="object:100">Hoàng Sa</option></select>
                                    </div>
                                    <div class="input-field col s6">
                                        <select class="browser-default ng-pristine ng-untouched ng-not-empty ng-valid ng-valid-required" ng-model="memberCtrl.locationSelected" ng-options="opt as opt.DisplayName for opt in memberCtrl.location" ng-change="memberCtrl.aLocationSelected('')" required=""><option value="" disabled="" selected="selected" class="">Chọn tỉnh thành*</option><option label="TP. HCM" value="object:31">TP. HCM</option><option label="Hà Nội" value="object:32">Hà Nội</option><option label="Đà Nẵng" value="object:30" selected="selected">Đà Nẵng</option><option label="Cần Thơ" value="object:33">Cần Thơ</option><option label="Hải Phòng" value="object:34">Hải Phòng</option><option label="Huế" value="object:35">Huế</option><option label="Khánh Hoà" value="object:36">Khánh Hoà</option><option label="Đồng Nai" value="object:37">Đồng Nai</option><option label="Nghệ An" value="object:38">Nghệ An</option><option label="Ninh Bình" value="object:39">Ninh Bình</option><option label="Ninh Thuận" value="object:40">Ninh Thuận</option><option label="Phú Thọ" value="object:41">Phú Thọ</option><option label="Phú Yên" value="object:42">Phú Yên</option><option label="Quảng Bình" value="object:43">Quảng Bình</option><option label="Quảng Nam" value="object:44">Quảng Nam</option><option label="Quảng Ngãi" value="object:45">Quảng Ngãi</option><option label="Quảng Ninh" value="object:46">Quảng Ninh</option><option label="Quảng Trị" value="object:47">Quảng Trị</option><option label="Sóc Trăng" value="object:48">Sóc Trăng</option><option label="Sơn La" value="object:49">Sơn La</option><option label="Tây Ninh" value="object:50">Tây Ninh</option><option label="Thái Bình" value="object:51">Thái Bình</option><option label="Thái Nguyên" value="object:52">Thái Nguyên</option><option label="Thanh Hoá" value="object:53">Thanh Hoá</option><option label="Vũng Tàu" value="object:54">Vũng Tàu</option><option label="An Giang" value="object:55">An Giang</option><option label="Bạc Liêu" value="object:56">Bạc Liêu</option><option label="Bắc Kạn" value="object:57">Bắc Kạn</option><option label="Bắc Giang" value="object:58">Bắc Giang</option><option label="Bắc Ninh" value="object:59">Bắc Ninh</option><option label="Bến Tre" value="object:60">Bến Tre</option><option label="Bình Dương" value="object:61">Bình Dương</option><option label="Bình Định" value="object:62">Bình Định</option><option label="Bình Phước" value="object:63">Bình Phước</option><option label="Bình Thuận" value="object:64">Bình Thuận</option><option label="Cà Mau" value="object:65">Cà Mau</option><option label="Cao Bằng" value="object:66">Cao Bằng</option><option label="Đắk Lắk" value="object:67">Đắk Lắk</option><option label="Đắk Nông" value="object:68">Đắk Nông</option><option label="Điện Biên" value="object:69">Điện Biên</option><option label="Đồng Tháp" value="object:70">Đồng Tháp</option><option label="Gia Lai" value="object:71">Gia Lai</option><option label="Hà Giang" value="object:72">Hà Giang</option><option label="Hà Nam" value="object:73">Hà Nam</option><option label="Hà Tĩnh" value="object:74">Hà Tĩnh</option><option label="Hải Dương" value="object:75">Hải Dương</option><option label="Hậu Giang" value="object:76">Hậu Giang</option><option label="Hòa Bình" value="object:77">Hòa Bình</option><option label="Hưng Yên" value="object:78">Hưng Yên</option><option label="Kiên Giang" value="object:79">Kiên Giang</option><option label="Kon Tum" value="object:80">Kon Tum</option><option label="Lai Châu" value="object:81">Lai Châu</option><option label="Lạng Sơn" value="object:82">Lạng Sơn</option><option label="Lào Cai" value="object:83">Lào Cai</option><option label="Lâm Đồng" value="object:84">Lâm Đồng</option><option label="Long An" value="object:85">Long An</option><option label="Nam Định" value="object:86">Nam Định</option><option label="Tiền Giang" value="object:87">Tiền Giang</option><option label="Trà Vinh" value="object:88">Trà Vinh</option><option label="Tuyên Quang" value="object:89">Tuyên Quang</option><option label="Vĩnh Long" value="object:90">Vĩnh Long</option><option label="Vĩnh Phúc" value="object:91">Vĩnh Phúc</option><option label="Yên Bái" value="object:92">Yên Bái</option></select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <a href="javascript:void(0);" style="margin-left:10px;" class=" modal-action waves-effect waves-light red btn" ng-click="memberCtrl.save()">Hoàn tất</a>
            <a href="javascript:void(0);" class=" modal-action waves-effect waves-light grey btn" ng-click="memberCtrl.close()">Đóng lại</a>
        </div>
    </div>
</div>

</div>

<script src="/scripts/bundle/public.member.min.js?548db8" type="text/javascript"></script>

    

    
<footer>
    <div class="container-footer">

        

        <div class="container-inner">
            <div class="block-footer">
                <p class="title-block">Công ty</p>
                <ul class="menu-footer">
                    <li>
                        <a href="/gioi-thieu" title="Giới thiệu" target="_blank" rel="nofollow">
                            Giới thiệu
                        </a>
                    </li>
                    <li>
                        <a href="/huong-dan-dat-mon" title="Quy trình đặt món" target="_blank" rel="nofollow">
                            Quy trình đặt món
                        </a>
                    </li>
                    <li>
                        <a href="/huong-dan-thanh-toan" title="Hướng dẫn thanh toán" target="_blank" rel="nofollow">
                            Hướng dẫn thanh toán
                        </a>
                    </li>
                    <li>
                        <a href="/quy-che" title="Quy chế" target="_blank" rel="nofollow">Quy chế</a>
                    </li>
                    <li>
                        <a href="/chinh-sach-bao-mat" title="Bảo mật thông tin" target="_blank" rel="nofollow">Bảo mật thông tin</a>
                    </li>
                    <li>
                        <a href="/chinh-sach-giai-quyet-khieu-nai" title="Giải quyết khiếu nại" rel="nofollow">Giải quyết khiếu nại</a>
                    </li>
                    
                    <li>
                        <a href="/lien-he" title="Liên hệ" target="_blank" rel="nofollow">
                            Liên hệ
                        </a>
                    </li>
                    <li>
                        <a href="/danh-cho-cong-ty" title="Dành cho công ty" target="_blank" rel="nofollow">
                            Dành cho công ty
                        </a>
                    </li>
                    <li>
                        <a href="/tuyen-dung" title="Hợp tác nhân viên giao nhận" target="_blank" rel="nofollow">
                            Hợp tác nhân viên giao nhận
                        </a>
                    </li>
                    <li>
                        <a href="/boosting-your-business-with-deliverynow" title="Ứng dụng dành cho hàng quán" target="_blank" rel="nofollow">
                            Ứng dụng dành cho hàng quán
                        </a>
                    </li>
                </ul>
            </div>
            <div class="block-footer">
                <p class="title-block">Now App</p>

                <a href="https://itunes.apple.com/us/app/deliverynow/id1137866760" class="apps app-ios" title="Down app iOS" rel="nofollow">
                    <i class="fa fa-apple" aria-hidden="true"></i>iOS
                </a>
                <a href="https://play.google.com/store/apps/details?id=com.deliverynow" class="apps app-android" title="Down app Android" rel="nofollow">
                    <i class="fa fa-android" aria-hidden="true"></i>Android
                </a>
                <p class="title-app">
                    Đặt món qua <br>
                    <a href="https://www.foody.vn/ung-dung-mobile" rel="nofollow">Foody App</a>
                </p>
            </div>
            <div class="block-footer txt-center">
                <div class="logo-footer">
                    <a href="/" title="Đặt món trực tuyến giao hàng tận nơi" rel="nofollow">
                            <img id="delivery-footer-logo" src="/dangky/Content/images/Logo-Nowvn-Elip.png" alt="Đặt món trực tuyến giao hàng tận nơi" title="Đặt món trực tuyến giao hàng tận nơi" width="80">
                        
                    </a>
                </div>
                <p class="copy-right">© 2018 Now - A Foody Corporation</p>
                <ul class="social-ico">
                    <li>
                        <a target="_blank" href="https://www.facebook.com/Now.vn/" title="facebook" class="facebook" rel="nofollow">
                            <i class="fa fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="#" title="Google plus" class="google-plus" rel="nofollow">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.instagram.com/deliverynow.vn/" title="Instagram" class="instagram" rel="nofollow">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="block-last">
                <p class="title-block">Địa chỉ</p>
                <p></p><p>Công Ty Cổ Phần Foody</p><p>Lầu 8, Tòa nhà Jabes 1,</p><p>244 Cống Quỳnh, P. Phạm Ngũ Lão, Quận 1, Tp.HCM</p><p>GP ĐKKD: 0311828036</p><p>do sở Kế hoạch và Đầu Tư TPHCM cấp ngày 11/06/2012</p><p></p>
                    <a href="http://online.gov.vn/HomePage/WebsiteDisplay.aspx?DocId=22747" target="_blank" class="registered" title="ĐÃ ĐĂNG KÝ BỘ CÔNG THƯƠNG" rel="nofollow"><img alt="ĐÃ ĐĂNG KÝ BỘ CÔNG THƯƠNG" src="https://static.foody.vn/style/images/gov_seals.jpg"></a>
            </div>
        </div>
    </div>
</footer>



    
    <div class="container-popup-modal-finish">
    <div id="confirm-modal" class="modal container-dealdetail-finish">
        <p class="mar0" style="border-bottom:1px solid #e1e1e1;padding:10px 15px;">
            <span class="capitalize bold" style="color: #cc0000;">Now</span>
            <span class="bold">thông báo</span>
        </p>
        <div class="container-bg-finish container-confirm">
            <p class="mar0 font15" style="padding-top:30px;padding-left:70px;">
                Bạn có chắc muốn hoàn tất đơn hàng này
            </p>
            <div class="img-driver"></div>
        </div>
        <div class="footer-modal modal-footer clearfix" style="background-color:#f2f2f2;position:relative;">
            <a href="javascript:void(0);" class="btn-footer-finish border-radius4 btn-ok">Đồng ý</a>
            <a href="javascript:void(0);" class="btn-footer-finish border-radius4 btn-cancel modal-close">Cancel</a>
        </div>
    </div>
</div>


    <div class="container-popup-modal-topping popup-sorry">
    <div id="sorry-modal" class="modal sorry-modal">
        <h4 class="title-notification">We are sorry!</h4>
        <div class="content-topping">
            <div class="content-left">
                <p style="line-height:30px;"><span class="capitalize bold" style="color: #cc0000;">Now</span> xin lỗi vì dịch vụ đặt món &amp; giao hàng gần đây không được tốt. <span class="bold" style="color: #000080">Delivery</span><span class="capitalize bold" style="color: #cc0000;">Now</span> xin tặng code "DELISORRY" - giảm 40% khi đặt ở các quán giao bởi DeliveryNow. Mong được tiếp tục phục vụ quý khách.</p>
            </div>
            <div class="content-right">
                    <img src="/dangky/Content/images/deliverySorry.png" alt="" width="250">
            </div>
        </div>
    </div>
</div>


    <div id="loading" style="display:none;">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_four"></div>
            </div>
        </div>
    </div>
    <div class="overlay-bg"></div>
    <div id="topcontrol" title="">
        <div class="fd-back-top">
            <ul>
                <li id="btn-back-top">
                    <a href="javascript:void(0)" rel="nofollow">
                        <i class="fa fa-angle-up" style="color: #333333"></i>
                        <label>Về đầu trang</label>
                    </a>
                </li>
                <li>
                    <a href="/tuyen-dung" target="_blank">
                        <i class="icon-parnership" style="color: #333333"></i>
                        <label>Đăng ký Partners</label>
                    </a>
                </li>
                <li>
                    <a href="https://itunes.apple.com/us/app/deliverynow/id1137866760" target="_blank" rel="nofollow">
                        <i class="fa fa-apple" style="color: #333333"></i>
                        <label>Tải ứng dụng ios</label>
                    </a>
                </li>
                <li>
                    <a href="https://play.google.com/store/apps/details?id=com.deliverynow" target="_blank" rel="nofollow">
                        <i class="fa fa-android" style="color: #333333"></i>
                        <label>Tải ứng dụng Android</label>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    
    
    <!-- POPUP New App -->
<div id="new-app" class="modal modal-new-app">
    <div class="modal-content">
        <a href="javascript:void(0)" id="okIsee" title="close" class="btn-close">x</a>
        <div class="img-now">
            <img src="/dangky/Content/images/img-new-app.png" alt="">
        </div>
        <div class="info-now">
            
            <h3 class="title">Chào bạn!</h3><p class="desc">Hiện nay ứng dụng <span class="bold">DeliveryNow</span> đã đổi tên thành</p>             <a href="javascript:void(0)" class="btn-now" title="ứng dụng Now">ứng dụng <span class="bold">Now</span></a>             <p class="update-version">Cập nhật phiên bản mới</p>
            <div class="down-apps">
                <a target="_blank" href="https://itunes.apple.com/us/app/deliverynow/id1137866760" class="down-app" title="App Store">
                    <img src="/dangky/Content/images/ico-app-ios.png" alt="App Store">
                </a>
                <a target="_blank" href="https://play.google.com/store/apps/details?id=com.deliverynow" class="down-app" title="Google play">
                    <img src="/dangky/Content/images/ico-app-androil.png" alt="Google play">
                </a>
            </div>

        </div>
        <div class="box-now-merchant clearfix">
            <div class="img-merchant">
                <div class="left" style="margin-right: 18px;">
                    <img src="/dangky/Content/images/icons/Icon-AppNowMerchant.png" alt="AppNowMerchant" width="80px">
                </div>
                <div class="left">
                    <a target="_blank" href="https://itunes.apple.com/US/app/id1296706589?mt=8" class="down-app" title="App Store" style="margin-bottom: 8px;">
                        <img src="/dangky/Content/images/ico-app-ios.png" alt="App Store" width="98px">
                    </a>
                    <a target="_blank" href="https://play.google.com/store/apps/details?id=com.sea.foody.nowmerchant&amp;hl=vi" class="down-app" title="Google play">
                        <img src="/dangky/Content/images/ico-app-androil.png" alt="Google play" width="98px">
                    </a>
                </div>
            </div>
            <div class="info-merchant">
                <h3 class="title">NowMerchant</h3><p class="font14" style="margin-top:0; line-height: 18px;">Ứng dụng dành cho hàng quán đối tác để<br><b> Tiếp nhận đơn hàng</b> và<b> kiểm tra doanh thu...</b></p>
                <a href="/boosting-your-business-with-deliverynow" title="Tìm hiểu về NowMerchant App" target="_blank" class="btn btn-merchant">Tìm hiểu về NowMerchant App</a>
            </div>
        </div>
    </div>

</div>

<script type="text/javascript">
    $(document).ready(function () {
        // get cookie
        //var renameCookie = getCookie('_renameWarning');
        //if (!renameCookie) {
        //    // close popup set cookies 3 days
        //    $('#new-app').openModal({
        //        dismissible: false, complete: function () {
        //            $('#alert-container').remove();

        //        }
        //    });
        //}
        //bind event click
        $('#okIsee').click(function () {
            $('#new-app').closeModal();
            $('#alert-container').remove();
            //setCookie('_renameWarning', true, 30);
        });
    });
</script>

    
    

    
    

        <script async="" type="text/javascript" src="https://bizapi.foody.vn/Scripts/userbehaviour.js">
        </script>

    

<script type="text/javascript">
    var dataLayer = window.dataLayer || [];
    dataLayer.push({
        'event': 'dynamic_remarketing',
        'dynx_itemid': '',
        'dynx_pagetype': 'other',
        'dynx_totalvalue': '0',
    });
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/997550031/?guid=ON&amp;script=0" />
    </div>
</noscript>



<div class="hiddendiv common"></div></body></html>