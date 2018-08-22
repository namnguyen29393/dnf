<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" ng-app="deliveryNow" class="ng-scope">
<!-- Mirrored from www.now.vn/lien-he by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Jul 2018 02:37:21 GMT -->
<!-- Added by HTTrack -->

<head>
    <style type="text/css">
        @charset "UTF-8";
        [ng\:cloak],
        [ng-cloak],
        [data-ng-cloak],
        [x-ng-cloak],
        .ng-cloak,
        .x-ng-cloak,
        .ng-hide:not(.ng-hide-animate) {
            display: none !important;
        }

        ng\:form {
            display: block;
        }

        .ng-animate-shim {
            visibility: hidden;
        }

        .ng-anchor {
            position: absolute;
        }
    </style>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"><!-- /Added by HTTrack -->


    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Đặt Món &amp; Giao ship tận nơi | Now.vn</title>

    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
    <meta http-equiv="content-language" content="vi">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="DeliveryNow.vn - Website số 1 Việt Nam về đặt món ăn trực tuyến, giao đồ ăn tận nhà nhanh với tiêu chí '1 món cũng giao'. Truy cập và gọi đặt món ăn đồ uống ship tận nơi">
    <meta name="keywords" content=" deliveryNow, Giao đồ ăn, thức ăn, thức uống, tận nơi">
    <meta property="og:site_name" content="DeliveryNow">

    <meta name="geo.region" content="VN">
    <meta name="geo.placename" content="Đà Nẵng">
    <meta name="geo.position" content="16.054407;108.202167">
    <meta name="ICBM" content="16.054407;108.202167">



    <meta name="robots" content="INDEX, FOLLOW">

    <meta name="msvalidate.01" content="9F288B3B53D32225CE6A70FA2DB2BF6D">
    <link rel="SHORTCUT ICON" href="favicon.ico">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="now/ajax.googleapis.com/ajax/libs/angular_material/0.11.2/angular-material.min.css">
    <link href="now/public.core.mind0fc.css?54500d" rel="stylesheet">
    <link href="now/css/timecircles/TimeCircles.css" rel="stylesheet">
    <link href="now/rating/star-rating.min.css" rel="stylesheet">


    <script async="" src="../www.googletagmanager.com/gtm5445.html?id=GTM-WTB2PQB"></script>
    <script src="file:///C:/Users/Admin/Downloads/now/connect.facebook.net/signals/config/576888802513805?v=2.8.18&amp;r=stable" async=""></script>
    <script async="" src="../connect.facebook.net/en_US/fbevents.js"></script>
    <script async="" src="../www.google-analytics.com/analytics.js"></script>
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
            Adult: " adult",
            Children: " children",
            ChildrenCaption: "Total children",
            AnotherDate: "Select another date",
            NewAddress: "+ New address",
            DeN_Web_ASAP: "ASAP"
        };


        var ErrorText = {
            Common_Err: "den_web_resourcebase_common_err",
            Mem_Err1: "Enter your name",
            Mem_Err10: "Password must have 4 - 20 characters",
            Mem_Err11: "Password OK",
            Mem_Err12: "Re-enter password",
            Mem_Err13: "Password does not match",
            Mem_Err14: "Password confirmation is correct",
            Mem_Err15: "Enter email",
            Mem_Err16: "Email is not correct",
            Mem_Err17: "You have to agree with Term of Use",
            Mem_Err2: "Must have at least 2 characters",
            Mem_Err3: "Can not contain special characters",
            Mem_Err4: "Name is correct",
            Mem_Err5: "Enter Last Name",
            Mem_Err6: "Must have at least 2 characters",
            Mem_Err7: "Can not contain special characters",
            Mem_Err8: "Last Name is correct",
            Mem_Err9: "Enter password",
            Input_Email: "Please input your email",
            Input_Password: "Please input password",
            Email_Exist: "Email have already existed!",
            Brand_Reward_MaxTries: "You are not lucky today! Try again tomorrow!",
            DeN_Web_PromoCode_Used: "You have used this code.",
            DeN_Web_Cart_Has_Changed: "Your cart has changed. Do you want to refresh for new status?"
        };

        var Recommendation = {
            DoNotTypeContent: "Content empty ."
        };

        var ConfirmMessage = {
            AreYouSure: "Are you sure ?",
            AreYouSureDelete: "Are you sure?",
            AddDishToCart: "den_web_resourcebase_adddishtocart"
        };

        var Message = {
            CancelSuccess: "Your order has been cancel success.",
            DeleteSuccess: "Deleted successfully.",
            DeleteError: "Error. Please try againt later.",
            UpdateSuccess: "Your infomations have been updated successfully.",
            MissingInfo: "Some information is missing. Please check.",
            InsertSuccess: "Your infomations have been add success.",
            RequestSuccess: "Your request has been sent successfully.",
            NotDeliveryHere: "Delivery not availabe here.",
            AlertTitle: "Message",
            Copied: "Text copied to the clipboard.",
            CopyError: "Copy not supported or blocked.  Press Ctrl+c to copy.",
            WaitMap: "Please wait for map...",
            DistanceSupport: "Sorry, this shop delivery within a {0} km radius.",
            NotDetectLocation: "Your location not found. Format of address is: <i class='red-text'>number, address, ward...</i> Another infomation as building name, floor, room... please enter in Note field.",
            ChooseSimilarRestaurants: "Or choose other similar active restaurants below",
            FindAnotherRestaurants: "Find other restaurants",
            ConfirmAddressSms: "You have chosen to confirm order via SMS. Please check your delivery info: <b>{0}</b>",
            ConfirmAddressValue: "Address:",
            ConfirmPhoneValue: "Phone number:",
            ConfirmTimeValue: "Delivery time:",
            WhyCancelOrder: "Why cancel order",
            ChangeDeliveryFeeByDeliveryTime: "The delivery fee is {0}/km due to high demand. The total fee has changed from {1} to {2}",
            PleaseChooseInvoiceVat: "Please choose an VAT invoice information exist or add new.",
            InfoInvoiceVatNotValid: "The VAT Invoice information is exactly?",
            Exactly: "Exactly",
            Review: "Review",
            Delivery_PhoneInfo: "Invalid phone number.",
            InputCompanyName: "Please input correct company name.",
            InputCompanyAddress: "Please input correct company address.",
            RequiredInputTaxcode: "Please input correct company tax code.",
            MessageValidTaxcode: "Please input valid company tax code.",
            MessageOrderSuccess: "DeN_ResourceBase_MessageOrderSuccess",
            DeN_Web_Member_NotSaveInfoVat: "Not save info Vat",
            DeN_Web_Member_AreYouWantDeleteVat: "Do you want to delete this VAT invoice information?",
            DeN_Web_Member_NotDeletePleaseTryAgain: "Not delete, Please try again",
            DeN_Web_UpdateSuccess: "Update successfully.",
            DeN_Web_SystemErrorPleaseTryAgain: "System error, Please try again",
            DeN_Web_MemberConfirmCreditCardViaPassword: "You choose confirm credit card via password",
            DeN_Web_Mobile_SeoTitle: "Menu - Delivery now",
            DeN_Web_Mobile_CheckInternetPlease: "Please check internet",
            DeN_Web_PromoteCode_Not_Apply_Discount_Message: "The items {0} in your order are applied discount dish, and not able to be applied another promo codes.",
            DeN_Web_PromoCode_RestaurantNotVerified: "This promo code is only applied for Verified Merchant",
            DeN_Web_Cart_RestaurantDishOff: "The dish is not available today",
            DeN_Web_Not_Allow_Add_Topping: "Topping mà bạn chọn đã quá số lượng topping cho phép",
            DeN_Web_JoinOrderGroupOnApp: "Join order group",
            DeN_Web_DateIsNotValid: "Select date",
            DeN_Web_Error_InvalidDate: "Selected date does not available to booking, please select another date!",
            DeN_Web_Restaurant_IsDayOff: "den_web_restaurant_isdayoff",
            DeN_Web_Btn_Close: "Close",
            DeliveryNow_Foody_FreeShipp_Campaign: "Free ship",

            DeN_Web_Show_Info_HandDelivery: "Shipper will go up/down stairs and deliver the order at your seat or doorstep.",
            DeN_Web_Information_Security: "Information Security",
            DeN_Web_Corporate_Create_PromoteCode_Success: "Create coupons successfully",
            DeN_Web_Notify_Order_Payment_Success: "Thank you for using the services of Now.vn. Your order was successful and the payment is being processed. <a href='/lich-su-dat-mon'>View order history.</a>",
            DeN_Web_Notify_Order_Payment_Fail: "You have a payment failure. Please contact us for assistance or repay in <a href='/lich-su-dat-mon'>here.</a>.",
            DeN_Web_AirpayCredit_Add_Card_Success: "den_web_airpaycredit_add_card_success",
            DeN_Order_Detail_Enter_Code_Discount_Empty: "You have not entered the discount code",
            DeN_Web_Payment_FreeShip: "Free ship",
            DeN_Web_NameFrameCampaign: "<span class='bold'>Discount</span> <span class='txt-red bold'>{0}</span> with orders larger than <span class='txt-red bold'>{1}</span>",

            Den_web_Tooltip_FirstOrderCampaign: "Discount <span class='bold'>{0}</span> for first order from <span class='bold'>{1}</span>",
            DeN_Web_FrameDiscount_Expand: "View all <b>{0}</b> frame discount",
            DeN_Web_Promotion_FirstOrder: "<b>Discount</b> <span class='txt-red bold'>{0}</span> with new user",
            DeN_Web_DiscountOffer: "Discount",
            DeN_Web_Limit_Dish_Per_Order: "{0} is only allowed to order a maximum of {1} on your order.",
            DeN_Web_End_Limit_Dish_Per_Order: "Món {0} đã đặt hết số lượng, vui lòng chọn món khác.",

        };

        var FormatDate = {
            Common: 'dd/mm/yy'
        };

        var CartResource = {
            NoItem: "Please select items.",
            MiniumFee: "The order has not reached the minimum amount. deliveryNow will charge ",
            MiniumAmount: "The total price of your food items, <i>{0} {2}</i>, is below the <i>{1} {2}</i> minimum for delivery to your location, service fee is {3} {2}. What would you like to do?",
            MiniumAmountNotAllow: "Your order is shipped by shop. This shop requires the minimum order must be at least {1} {2}. Your order is just {0} {2} so please consider adding more items.",
            MiniumAmountAccept: "The order has not reached the minimum amount. deliveryNow will charge {0}",
            AcceptMinimumFee: "Pay an additional <i class='red-text'> {0} {1} </i> and proceed with this order",
            FindAnother: "Find others restaurant which is shipped by <span class='capitalize bold' style='color: #cc0000;'>Now</span> and without minimum order.",
            ContinutePick: "Continue shopping",
            SelectTime: "Select delivery time.",
            ConfirmComplete: "Are you sure completed this order ?",
            ConfirmMemberCancel: "Are you sure you want to remove this member from your group order ?",
            ConfirmRange: "Món này chỉ bán từ {0} giờ!",
            ConfirmRangeCancel: "Món này chỉ bán từ {0} giờ, bạn có muốn thêm không? (EN)",
            HasMemberInComplete: "There are member uncompleted.",
            MissingInfo: "Some information is missing. Please check.",
            RemindMessage: "Owner order prompt you to quickly complete the ordering!",
            AddItemsErrMessage: "You have completed the order, you can not pick more items. However, you can press reset to re-pick items.",
            RemindSuccess: "Send reminder successfully.",
            OutOfService: "Sorry, this restaurant is currently closed. Next time availabe is <b class='red-text'>{0}</b> but you can pre-order.",
            ASAP: "ASAP",
            NotEnoughBalance: "Your balance not enought to pay this order.",
            OutOfTimeRange: "Sorry, this restaurant is currently closed. Next time availabe is {0} but you can pre-order.",
            AgreeDeliverAt: "Pre-order {0}",
            Busy: "This restaurant have many orders. If order, you should wait until {0} minutes for service.",
            AgreeWait: "I agree to wait for {0} minutes",
            Delivery_HourOpts: "Shop will be closed on {0}. Please choose other date.",
            Delivery_FullInfo: "You must be input name, phone, address. Please complete all information.",
            Delivery_DistrictInfo: "Please select districts.",
            ConfirmRemoveCard: "Are you sure ?",
            ConfirmRemoveCardBtnOK: "OK",
            ConfirmRemoveCardBtnCancel: "No, thanks",
            Delivery_AddCreditPurchaseMessage: "Please add a credit card to complete your purchase.",
            Delivery_NotFindLocation: "DeliveryNow can not detect your location for caculating shipping fee. Our call center staffs will caculate and confirm with you later!",
            MinShippingFee: "1. The minimum shipping fee of Now service is {0} đ <br/>2. Shipping Fee: {1} đ/km<br/>Shipping fee has been adjusted to accommodate high demand.",
            MinShippingFeeMobi: "Min Shipping Fee of service Now is {0} đ",
            DeliveryTimeIsNotValid: "Delivery time is invalid. Please choose another time.",
            DeN_Web_Menu_QuantitySchedule: "Remaining <span class = 'color-remaining-qty'> {0} </ span> items",
            DeN_Web_Order_OutOfQuantityRemaining: "This currently has <b>{0}</b> dish, please choose the allowed amount."
        };

        var Currency = {
            Unit: "đ"
        }

        var Payment = {
            Cash: "CASH",
            Transfer: "TRANSFER",
            DeliveryAccount: "Now Credits",
            Toppay: "AirPay Wallet",
            VNPay: "Internet Banking/ATM",
            Napas: "Local Card",
            ChargeFail: "Visa not successful",
            CreditCard: "Credit Card",
            ConfirmMomoToppay: "den_web_resourcebase_confirmmomotoppay",
            ConfirmPaymentPayNowCredits: "Lưu ý khi sử dụng {0}:<br/>- Tài khoản của bạn tại cổng thanh toán sẽ bị trừ tiền sau khi đặt đơn hàng.<br/>- Đối với trường hợp đơn hàng có sự thay đổi:<br/>+ Giá tiền sau khi xác nhận với Chăm sóc khách hàng (CSKH) Now.vn tăng lên so với ban đầu: số tiền chênh lệch sẽ được nhân viên giao nhận (NVGN) thu thêm tiền mặt khi giao hàng cho bạn.<br/>+ Giá tiền sau khi xác nhận với CSKH Now.vn giảm so với ban đầu: số tiền chênh lệch sẽ được hoàn trả vào tài khoản Now Credits của bạn để sử dụng cho lần thanh toán sau.<br/>+ Đơn hàng bị hủy: số tiền bạn sử dụng tại cổng thanh toán sẽ được hoàn trả vào tài khoản Now Credits của bạn để sử dụng cho lần thanh toán sau.<br/>Bạn có muốn tiếp tục?",
            ConfirmPaymentNaPas: "den_web_resourcebase_confirmpaymentnapas",
            ConfirmPaymentAirpay: "Lưu ý khi sử dụng {0}:<br/>- Tài khoản của bạn tại cổng thanh toán sẽ bị trừ tiền sau khi đặt đơn hàng.<br/>- Đối với trường hợp đơn hàng có sự thay đổi:<br/>+ Giá tiền sau khi xác nhận với Chăm sóc khách hàng (CSKH) Now.vn tăng lên so với ban đầu: số tiền chênh lệch sẽ được nhân viên giao nhận (NVGN) thu thêm tiền mặt khi giao hàng cho bạn.<br/>+ Giá tiền sau khi xác nhận với CSKH Now.vn giảm so với ban đầu: số tiền chênh lệch sẽ được hoàn trả vào tài khoản Now Credits của bạn để sử dụng cho lần thanh toán sau.<br/>+ Đơn hàng bị hủy: số tiền bạn sử dụng tại cổng thanh toán sẽ được hoàn trả vào tài khoản AirPay của bạn để sử dụng cho lần thanh toán sau.<br/>Bạn có muốn tiếp tục?",
            ConfirmPaymentVisa: "Lưu ý khi sử dụng {0}:<br/>- Tài khoản của bạn tại cổng thanh toán sẽ bị trừ tiền sau khi đặt đơn hàng.<br/>- Đối với trường hợp đơn hàng có sự thay đổi:<br/>+ Giá tiền sau khi xác nhận với Chăm sóc khách hàng (CSKH) Now.vn tăng lên so với ban đầu: số tiền chênh lệch sẽ được nhân viên giao nhận (NVGN) thu thêm tiền mặt khi giao hàng cho bạn.<br/>+ Giá tiền sau khi xác nhận với CSKH Now.vn giảm so với ban đầu: số tiền chênh lệch sẽ được hoàn trả vào tài khoản Now Credits của bạn để sử dụng cho lần thanh toán sau.<br/>+ Đơn hàng bị hủy: số tiền bạn sử dụng tại cổng thanh toán sẽ được hoàn trả vào tài khoản Now Credits của bạn để sử dụng cho lần thanh toán sau.<br/>Bạn có muốn tiếp tục?",
            ConfirmPaymentInternetBanking: "Lưu ý khi sử dụng {0}:<br/>- Tài khoản của bạn tại cổng thanh toán sẽ bị trừ tiền sau khi đặt đơn hàng.<br/>- Đối với trường hợp đơn hàng có sự thay đổi:<br/>+ Giá tiền sau khi xác nhận với Chăm sóc khách hàng (CSKH) Now.vn tăng lên so với ban đầu: số tiền chênh lệch sẽ được nhân viên giao nhận (NVGN) thu thêm tiền mặt khi giao hàng cho bạn.<br/>+ Giá tiền sau khi xác nhận với CSKH Now.vn giảm so với ban đầu: số tiền chênh lệch sẽ được hoàn trả vào tài khoản Now Credits của bạn để sử dụng cho lần thanh toán sau.<br/>+ Đơn hàng bị hủy: số tiền bạn sử dụng tại cổng thanh toán sẽ được hoàn trả vào tài khoản Now Credits của bạn để sử dụng cho lần thanh toán sau.<br/>Bạn có muốn tiếp tục?",
            PaymentDefaultAtDeliverynow: "You have selected the default payment type <b>{0}</b> for orders placed at Now.",
            NotChooseDefaultPayment: "DeN_ResourceBase_NotChooseDefaultPayment"
        };

        var Rating = {
            NoPoint: "den_web_resourcebase_common_err"
        };

        var Button = {
            OK: "OK",
            Cancel: "Cancel",
            Acccpt: "Accept",
            Deny: "Deny",
            Close: "Close",
            ViewDetail: "View detail",
            NoThanks: "No, thank you",
            ConfirmAddressSMSOK: "Confirm",
            ConfirmAddressSMSCancel: "Edit"

        };

        var RequestMsg = {
            InValid: "Your input invalid",
            Success: "Redeem success",
            InputRedeem: "Input to redeem"
        };

        var FormRequest = {
            CashIn: "Cash in",
            CashOut: "Cash out",
            InputRedeem: "Input to redeem"
        };

        var template = {
            NotEnoughMinimum: "den_web_resourcebase_notenoughminimum"
        };

        var TopupMsg = {
            ConfirmPasswordRequired: "Please enter your password to verify this payment transaction!",
            WrongConfirmPassword: "The password is incorrect. Please try again!"
        };

        var airPayResource = {
            MessageAirpayContact: "Restaurant has not registered Airpay service, Please contact at <a href='/tham-gia-he-thong-deliverynow' target='_blank'>here</a> ",
            SystemErrorPleaseTry: "System error, Please try agan",
            AddWalletSuccess: "Add wallet success",
            Input: "Input ",
            PhoneIsNotValid: "Phone is invalidate",
            EmailIsNotValid: "Email is invalidate",
            ChooseARestaurant: "Choose a restaurant",
            DeN_Web_RegisterAirpayToAllRestaurantNotRegisterMore: "You are register airpay to all restaurant",
            DeN_Web_Merchant_Min: " must be at least ",
            DeN_Web_Merchant_Max: " has maximum length of ",
            DeN_Web_Merchant_Character: " character"
        }

        var VATMsg = {
            VATMinToInvceAlert: "This restaurant only express VAT Invoice for the order amount more than {0} đ (not include delivery fee and the others)"
        }

        var TopupMsg = {
            NotChoosePaymentMethod: "Please choose your payment method.",
            TransactionIsInvalid: "The authorized amount is set to zero, is unreadable, or exceeds the allowable amount. Make sure the amount is greater than 50,000 VND and less than 5,000,000 VND.",
            NotSelectCard: "You need to choose a credit card to process transaction!",
            PaymentSuccess: "Transaction successfully completed!",
            BonusMessage: " You have bonus credit + {0} reward from deposit. Please check your PayNow Credits Balance!",
            ConfirmPasswordRequired: "Please enter your password to verify this payment transaction!",
            WrongConfirmPassword: "The password is incorrect. Please try again!"

        };

        var settingKey = {
            DeN_Web_Setting_AppStore: "https://itunes.apple.com/us/app/deliverynow/id1137866760",
            DeN_Web_Setting_UrlOpenAppDelivery: "deliverynow://foody.vn"
        }

        var merchantResource = {
            DeN_Web_Merchant_StatusPick: "Picked",
            DeN_Web_Merchant_StatusDelivery: "Delivered",
            DeN_Web_Merchant_StatusConfirmed: "Confirmed",
            DeN_Web_Merchant_StatusConfirm: "Waiting",
            DeN_Web_Merchant_StatusConfirming: "Confirming",
            DeN_Web_Merchant_StatusCancel: "Cancelled",
            DeN_Web_Order_Has_Changed: "This order has been changed or cancelled, please reload your website (F5) to get new status.",
            DeN_Web_Merchant_ConfirmUpdateOrder: "Are you sure?",
            DeN_Web_Merchant_HaveNewOrder: "You got new order",
            DeN_Web_Merchant_ConfirmRemoveStoreAirpay: "Do you want remove restaurant out wallet ?"
        }

        var resourceMobile = {
            DeN_Web_Mobile_OrderDetail: "Order detail",
            DeN_Web_AppAPI_VATFee: "VAT Shipping Fee",
            DeN_Web_Cart_DeliveryFee: "Delivery fee",
            DeN_Web_Cart_EnterCode: "Enter code",
            DeN_Web_Cart_PromoCode: "Discount code",
            DeN_Web_Cart_SubTotal: "Sub Total",
            DeN_Web_Common_Note: "Note",
            DeN_Web_Common_Status: "Status",
            DeN_Web_ConfirmOrderMethod: "Confirm my order by",
            DeN_Web_ConfirmOrderMethod_Call: "Call phone",
            DeN_Web_ConfirmOrderMethod_SMS: "SMS message",
            DeN_Web_Corporate_MoneyTotal: "Money total",
            DeN_Web_EnterCodeOffer: "Enter code",
            DeN_Web_Header_DeliveryNow: "Order Delivery",
            DeN_Web_History_AppAPI_CustomFee: "Other fee(s)",
            DeN_Web_History_AppAPI_DiscountRestaurant: "Restaurant discounts",
            DeN_Web_History_Cart_PromoCode: "Discount code",
            DeN_Web_History_Code: "Order Id",
            DeN_Web_History_PaymentOrder: "Payment order",
            DeN_Web_History_PaymentviaAirpay: "Payment via Airpay",
            DeN_Web_History_Qty: "Qty",
            DeN_Web_History_ShipperFee: "Shipper Fee",
            DeN_Web_History_SoldOut: "Sold out",
            DeN_Web_History_SubmitDate: "Submit time",
            DeN_Web_History_Total: "Total",
            DeN_Web_Member_CurrentBalance: "Your balance",
            DeN_Web_Member_MyCard: "Your's Visa/Master/JCB card",
            DeN_Web_Mobile_CardDelete: "Delete card",
            DeN_Web_Mobile_CardExpire: "Card expire",
            DeN_Web_Mobile_CardNumber: "Card number",
            DeN_Web_Mobile_ChooseDishToOrder: "Choose dish to order please",
            DeN_Web_Mobile_ChooseYourPaymentMethod: "Choose your payment method.",
            DeN_Web_Mobile_COD: "COD",
            DeN_Web_Mobile_ConfirmInfo: "Confirm info",
            DeN_Web_Mobile_CreateDeliveryAddress: "Create delivery address to order",
            DeN_Web_Mobile_CreateNewAddress: "Create new address",
            DeN_Web_Mobile_CreditCart: "Credit card VISA/MASTER/JCB",
            DeN_Web_Mobile_Delivery: "Delivery",
            DeN_Web_Mobile_DeliveryAddress: "Delivery address",
            DeN_Web_Mobile_DeliveryFee: "Delivery Fee",
            DeN_Web_Mobile_DeliveryMethod: "Delivery method",
            DeN_Web_Mobile_DeliveryTime: "Delivery time",
            DeN_Web_Mobile_Myaddress: "My address",
            DeN_Web_Mobile_NewAddress: "New address",
            DeN_Web_Mobile_Next: "Next",
            DeN_Web_Mobile_OkWaitToConfirm: "OK ! Wait to confirm",
            DeN_Web_Mobile_Order: "Order",
            DeN_Web_Mobile_OrderDetail: "Order detail",
            DeN_Web_Mobile_OrderFrom: "order from",
            DeN_Web_Mobile_OrdersSend: "Orders send",
            DeN_Web_Mobile_PromotionPayment: "Promotion payment",
            DeN_Web_Mobile_RestaurantNotHaveDeliveryMethod: "Restaurant not have delivery method",
            DeN_Web_Mobile_ShipTo: "Ship to",
            DeN_Web_Mobile_ThanksToUsedService: "Thank you to used service, Please wait a second, We will call to confirm order",
            DeN_Web_Order_ConfirmFee: "Confirm Fee",
            DeN_Web_Payment_Method_VnPay: "Internet Banking/ATM",
            DeN_Web_ResourceBase_AnotherDate: "Select another date",
            DeN_Web_ResourceBase_Close: "Close",
            DeN_Web_ResourceBase_DeliveryAccount: "Now Credits",
            DeN_Web_Service: "Services",
            DeN_Web_ShippingFee_Discount: "Shipping fee discount",
            DeN_Web_Topping_Dish: "type",
            DeN_Web_Web_Common_Currency_Unit: "đ",
            DeN_Web_Mobile_InputPromocode: "Input promo code",
            DeN_Web_Mobile_AddressName: "Address name, Ex: Home, Work place",
            DeN_Web_Common_FullName: "Full name",
            DeN_Web_Common_Phone: "Phone",
            DeN_Web_Common_Address: "Address",
            DeN_Web_CanNotDetermineYourLocation: "Can not determine your location for charging.",
            DeN_Web_Mobile_Unknown: "Unknown",
            DeN_Web_Mobile_CouldNotFindYourAddress: "Could not find your address",
            DeN_Web_Mobile_PleaseEnterFullInfomation: "Please enter full information.",
            DeN_Web_Mobile_PleaseEnterShippingAddress: "Please enter shipping address.",
            DeN_Web_ResourceBase_Delivery_HourOpts: "Shop will be closed on {0}. Please choose other date.",
            DeN_Web_PromoteCode_Not_Apply_Discount_Message: "The items {0} in your order are applied discount dish, and not able to be applied another promo codes.",
            DeN_Web_ResourceBase_PleaseConfirmationPassword: "Password is valid.",
            DeN_Web_Shipping_Packing_Fee: "Packing Fee",
            DeN_Web_Order_DeliveryToHand: "Door-to-door delivery",
            DeN_Web_History_History_DiscountAmount: "Discount",
            DeN_Web_Add_New_UserCard: linkAddNewUserCard,
            DeN_Web_OrderByApp: "Order by App",
            DeN_Web_Force_Order_App_Content: "Vui lòng tải app để order.",
        }
    </script>
    <script src="scripts/bundle/public.core.mind0fc.js?54500d" type="text/javascript"></script>
    <script src="Scripts/js_rating/star-rating.js"></script>
    <script type="text/javascript">
        var staticPath = 'index.html'
        var province = 'da-nang';
        var provinceId = '219';
        var provinceName = 'Đ&#224; Nẵng';
        var defaultLatgitude = parseFloat('16.051571');
        var defaultLongitude = parseFloat('108.214897');
        var fbAppId = '938149792891368';

        var ssoUrl = '';
        var defaultUrl = 'https://www.deliverynow.vn/';

        var ssoLoginUrl = 'https://id.foody.vn/Account/Login?ReturnUrl=https://www.now.vn:443/lien-he';
        var returnReLogin = 'https://id.foody.vn/Account/Logout?ReturnUrl=https://www.now.vn:443/lien-he';

        // var a = null;
        // $(window).scroll(function () {
        //     a && window.clearTimeout(a), a = setTimeout(function () {
        //             $(window).scrollTop() > 300 ? $(".fd-back-top").show() : $(".fd-back-top").hide();
        //         },
        //         50);
        // });
    </script>





    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7ucxtKFino7UMs5yOqOGZIS11ZaDOiTQ&amp;language=vi&amp;libraries=placeses,visualization,drawing,geometry,places&amp;region=vn" type="text/javascript"></script>

    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-33292184-11', 'auto');
        ga('send', 'pageview');
        ga('require', 'ecommerce', 'ecommerce.html');
    </script>

    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', '../connect.facebook.net/en_US/fbevents.js');

        fbq('init', '576888802513805');
        fbq('track', "PageView");
    </script>
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=576888802513805&amp;ev=PageView&amp;noscript=1" />
    </noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WTB2PQB');
    </script>
    <!-- End Google Tag Manager -->

    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/33/7/intl/vi_ALL/common.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/33/7/intl/vi_ALL/util.js"></script>
    <script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/33/7/intl/vi_ALL/stats.js"></script>
</head>

<body>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Website",
            "name": "Deliverynow",
            "alternateName": "DeliveryNow Vietnam",
            "url": "https://www.deliverynow.vn",
            "sameAs": [
                "https://www.facebook.com/deliveryNow.vn",
                "https://twitter.com/DeliveryNowVN",
                "https://plus.google.com/u/0/114035556444820573589",
                "https://www.instagram.com/deliverynow.vn"
            ],
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://www.deliverynow.vn/ho-chi-minh/danhsach-dia-diem-giao-tan-noi?q={search_term}",
                "query-input": "required name=search_term"
            }
        }
    </script>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WTB2PQB" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->







    <div class="container-topbar">
        <div class="topbar">
            <a href="https://www.foody.vn/" rel="nofollow">Discovery</a>
            <a href="http://www.tablenow.vn/" rel="nofollow">Table Reservation</a>
            <a href="index.html" class="current" rel="home">Order Delivery</a>
            <a href="http://marketnow.vn/" class="" rel="home" style="position: relative;">
                Market
                <img src="now/images/icons/sb-new.gif" alt="new" style="position: absolute;top: 1px;right: -5px;border-radius: 7px;">
            </a>
            <a href="http://www.sheis.vn/" rel="nofollow">Sheis</a>
            <a href="http://www.foodypos.vn/" rel="nofollow">FoodyPOS</a>

            <div style="float:right;">


                <div class="language" style="float:right;">
                    <!-- Dropdown Trigger -->
                    <a class="language-select turn-off-overlay" data-activates="language-select" href="#" style=" padding: 7px 0px 0 15px">
                        <img src="now/images/icons/lang/us.png" width="20">
                    </a>

                    <!-- Dropdown Structure -->
                    <ul id="language-select" class="dropdown-language">
                        <li>
                            <a onclick="return changeLanguage('vn')" rel="nofollow" href="lien-he.html?code=vn&amp;returnUrl=https%3A%2F%2Fwww.now.vn%2Flien-he" title="vn" class="clearfix">
                                <img src="now/images/icons/lang/vn.png" alt="vn" title="vn" width="20" class="pull-left">
                                <span class="language-item pull-left">vn</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <script type="text/javascript">
                    function changeLanguage(code) {
                        var languageUrl = 'da-nang.html';
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
                    <a href="index.html" title="deliveryNow.vn">
                        <img id="delivery-header-logo" src="now/images/now.vn.png" alt="deliveryNow.vn" width="112px">
                    </a>
                </div>


                <div class="country pull-left">
                    <!-- Dropdown Trigger -->
                    <a class="dropdown-button location-select" href="javascript:void(0);" data-activates="location-select">

                        Da Nang City <span class="caret">▼</span>
                    </a><ul id="location-select" class="dropdown-content">
                        <li>
                            <a href="index.html">
                                HCM City
                                <span class="count">18779</span>
                            </a>
                        </li>
                        <li>
                            <a href="ha-noi.html">
                                Ha Noi City
                                <span class="count">9821</span>
                            </a>
                        </li>
                        <li>
                            <a href="da-nang.html">
                                Da Nang City
                                <span class="count">2705</span>
                            </a>
                        </li>
                        <li>
                            <a href="can-tho.html">
                                Can Tho City
                                <span class="count">983</span>
                            </a>
                        </li>
                        <li>
                            <a href="hai-phong.html">
                                Hai Phong City
                                <span class="count">1033</span>
                            </a>
                        </li>
                        <li>
                            <a href="hue.html">
                                Hue City
                                <span class="count">597</span>
                            </a>
                        </li>
                        <li>
                            <a href="khanh-hoa.html">
                                Khanh Hoa
                                <span class="count">580</span>
                            </a>
                        </li>
                        <li>
                            <a href="dong-nai.html">
                                Dong Nai
                                <span class="count">984</span>
                            </a>
                        </li>
                        <li>
                            <a href="nghe-an.html">
                                Nghe An
                                <span class="count">720</span>
                            </a>
                        </li>
                        <li>
                            <a href="quang-ninh.html">
                                Quang Ninh
                                <span class="count">219</span>
                            </a>
                        </li>
                        <li>
                            <a href="vung-tau.html">
                                Vung Tau
                                <span class="count">816</span>
                            </a>
                        </li>
                    </ul>

                    <!-- Dropdown Structure -->


                </div>



                <!-- Category -->

                <div class="top-cate">
                    <a href="da-nang/danh-sach-dia-diem-giao-tan-noi.html">All</a>





                    <a href="da-nang/danh-sach-dia-diem-phuc-vu-com-trua-giao-tan-noi.html">
                        Lunch
                    </a>
                    <a href="da-nang/danh-sach-dia-diem-phuc-vu-do-an-giao-tan-noi.html">
                        Food
                    </a>
                    <a href="da-nang/danh-sach-dia-diem-phuc-vu-thuc-uong-giao-tan-noi.html">
                        Drink
                    </a>
                    <a href="da-nang/danh-sach-dia-diem-phuc-vu-trang-mieng-giao-tan-noi.html">
                        Dessert
                    </a>
                    <a href="da-nang/danh-sach-dia-diem-phuc-vu-homemade-giao-tan-noi.html">
                        Homemade
                    </a>
                    <div class="more-cate">
                        <span class="icon-more">
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                        </span>
                        <div class="list-more-cate">
                            <div class="item-cate">
                                <a href="da-nang/danh-sach-dia-diem-phuc-vu-via-he-giao-tan-noi.html" title="Streetfood">
                                    Streetfood
                                </a>
                            </div>
                            <div class="item-cate">
                                <a href="da-nang/danh-sach-dia-diem-phuc-vu-mon-chay-giao-tan-noi.html" title="Vegetarian">
                                    Vegetarian
                                </a>
                            </div>
                            <div class="item-cate">
                                <a href="da-nang/danh-sach-dia-diem-phuc-vu-pizza-burger-giao-tan-noi.html" title="Pizza &amp; Burger">
                                    Pizza &amp; Burger
                                </a>
                            </div>
                            <div class="item-cate">
                                <a href="da-nang/danh-sach-dia-diem-phuc-vu-mon-ga-giao-tan-noi.html" title="Chicken">
                                    Chicken
                                </a>
                            </div>
                            <div class="item-cate">
                                <a href="da-nang/danh-sach-dia-diem-phuc-vu-mon-lau-giao-tan-noi.html" title="Hotpot">
                                    Hotpot
                                </a>
                            </div>
                            <div class="item-cate">
                                <a href="da-nang/danh-sach-dia-diem-phuc-vu-sushi-giao-tan-noi.html" title="Sushi">
                                    Sushi
                                </a>
                            </div>
                            <div class="item-cate">
                                <a href="da-nang/danh-sach-dia-diem-phuc-vu-mi-pho-giao-tan-noi.html" title="Noodles">
                                    Noodles
                                </a>
                            </div>
                            <div class="item-cate">
                                <a href="da-nang/danh-sach-dia-diem-phuc-vu-com-hop-giao-tan-noi.html" title="Rice box">
                                    Rice box
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="login-status" class="user-deli pull-right">


                    <a class="btn-login" href="https://id.foody.vn/Account/Login?ReturnUrl=https://www.now.vn:443/lien-he">Login</a>

                    <script>
                        $("#logout").bind("click", function() {
                            removeAllCookie();
                            location.href = "lien-he.html?returnUrl=%2Flien-he";
                        });
                    </script>

                </div>
                <div class="right-app">

                </div>



                <a href="javascript:;" data-down-app="" class="btn btn-app-now" title="Download App" rel="nofollow">
                    <i class="fa fa-mobile" aria-hidden="true"></i> <span style="vertical-align: top;">Download App</span>
                </a>


                <div id="header-icon-search" class="search ico-search-home pull-left" style="float: right;">
                    <a href="javascript:void(0)" class="waves-effect waves-light" style="padding: 15px 0">
                        <i class="mdi-action-search" id="search-btn">
                            <img src="now/images/icons/ico-nav-search.png" alt="">
                        </i>
                    </a>
                    <div id="search-overlay" class="material-search-overlay circle material-search-overlay-color-bg material-search-overlay-hidden"></div>
                    <form action="https://www.now.vn/da-nang/danh-sach-dia-diem-giao-tan-noi" class="material-search-form material-search-form-hidden ng-pristine ng-valid" id="search-form" method="get">
                        <div class="material-search-form-container ng-scope" ng-controller="CompleteController as completeCtrl">
                            <div class="material-search-form-container-row">
                                <div class="material-search-input">
                                    <a href="#" onclick="return false;" id="search-btn-close" class="material-search-close"><i class="mdi-navigation-close"></i></a>
                                    <div class="bg-search">
                                        <img src="now/images/bg-search.png" alt="">
                                    </div>
                                    <span class="white-text font16">Order delivery from 2705 places in Da Nang City from 06:30 - 21:00</span>
                                    <div style="position: relative;">
                                        <input type="text" id="s" name="q" class="flow-text search_placeholder ng-pristine ng-untouched ng-valid ng-empty" ng-keyup="completeCtrl.keyupFunc($event)" ng-model="completeCtrl.q" autocomplete="off" ng-focus="completeCtrl.focusToTextSearch('Recent view')">
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
                                                    <span>Searching for</span>
                                                    <span class="bold txt-red font14 ng-binding"></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <script>
        $(document).ready(function() {
            $(".btn-app-now[data-down-app]").on("click", function() {
                $('#new-app').openModal({

                });
            })
        })
    </script>




@yield('content')
    





    <footer>
        <div class="container-footer">



            <div class="container-inner">
                <div class="block-footer">
                    <p class="title-block">Company</p>
                    <ul class="menu-footer">
                        <li>
                            <a href="gioi-thieu.html" title="About us" target="_blank" rel="nofollow">
                                About us
                            </a>
                        </li>
                        <li>
                            <a href="huong-dan-dat-mon.html" title="How to order" target="_blank" rel="nofollow">
                                How to order
                            </a>
                        </li>
                        <li>
                            <a href="huong-dan-thanh-toan.html" title="Payment guide" target="_blank" rel="nofollow">
                                Payment guide
                            </a>
                        </li>
                        <li>
                            <a href="quy-che.html" title="Term &amp; Condition" target="_blank" rel="nofollow">Term &amp; Condition</a>
                        </li>
                        <li>
                            <a href="chinh-sach-bao-mat.html" title="Information Security" target="_blank" rel="nofollow">Information Security</a>
                        </li>
                        <li>
                            <a href="chinh-sach-giai-quyet-khieu-nai.html" title="Adjustment of claims" rel="nofollow">Adjustment of claims</a>
                        </li>

                        <li>
                            <a href="lien-he.html" title="Contact us" target="_blank" rel="nofollow">
                                Contact us
                            </a>
                        </li>
                        <li>
                            <a href="danh-cho-cong-ty.html" title="Preferential treatment for companys" target="_blank" rel="nofollow">
                                Preferential treatment for companys
                            </a>
                        </li>
                        <li>
                            <a href="tuyen-dung.html" title="Cooperate delivery" target="_blank" rel="nofollow">
                                Cooperate delivery
                            </a>
                        </li>
                        <li>
                            <a href="boosting-your-business-with-deliverynow.html" title="App for merchant" target="_blank" rel="nofollow">
                                App for merchant
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
                        Order by <br>
                        <a href="https://www.foody.vn/ung-dung-mobile" rel="nofollow">Foody App</a>
                    </p>
                </div>
                <div class="block-footer txt-center">
                    <div class="logo-footer">
                        <a href="index.html" title="Now service" rel="nofollow">
                            <img id="delivery-footer-logo" src="now/images/Logo-Nowvn-Elip.png" alt="Now service" title="Now service" width="80">

                        </a>
                    </div>
                    <p class="copy-right">© 2018 Now.vn - A Foody Corporation</p>
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
                    <p class="title-block">Address</p>
                    <p>Address: Floor 8, Jabes Building 1</p>
                    <p>244 Cong Quynh, Pham Ngu Lao Ward, Dist 1, HCM</p>
                    <p>Business registration certificate No: 0311828036</p>
                    <p>Planning and Investment Department Of TPHCM</p>
                    <p>issued date 11/06/2012</p>
                    <a href="http://online.gov.vn/HomePage/WebsiteDisplay.aspx?DocId=22747" target="_blank" class="registered" title="ĐÃ ĐĂNG KÝ BỘ CÔNG THƯƠNG" rel="nofollow"><img alt="ĐÃ ĐĂNG KÝ BỘ CÔNG THƯƠNG" src="../static.foody.vn/style/images/gov_seals.jpg"></a>
                </div>
            </div>
        </div>
    </footer>





    <div id="login-modal" class="modal">
        <div class="modal-content">
            <div class="row" id="login-area">
                <form id="login-form" class="col s12 ng-pristine ng-valid">
                    <div class="row">

                        <p class="title-login font14">Đăng nhập bằng email</p>
                        <div class="input-field">
                            <input id="email" type="text" class="validate browser-default" placeholder="Email hoặc Username">
                        </div>
                        <div class="input-field">
                            <input id="password" type="password" class="validate browser-default" placeholder="Mật khẩu">
                        </div>
                        <div class="s12">
                            <a href="filenotfoundecd1.html" style="display:block;">Forget password?</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="s12">
                            <a id="login-btn" class="waves-effect waves-light red btn right" style="display:block;width:100%;">Login</a>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col s12">
                            <div class="separator-or">
                                <span>or</span>
                            </div>
                            <ul class="social-login">
                                <li class="fb"><a provider="1" href="javascript:void(0);" title="Facebook ID"></a></li>
                                <li class="gl"><a provider="2" href="javascript:void(0);" title="Google ID"></a></li>
                                <li class="yh"><a provider="3" href="javascript:void(0);" title="Yahoo ID"></a></li>
                                <li class="tw"><a provider="5" href="javascript:void(0);" title="Twitter ID"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">

                            <p>Bạn chưa có tài khoản? Nhấn <a href="javascript:void(0);" onclick="goToSignUp()">vào đây</a> để đăng ký và bắt đầu trải nghiệm dịch vụ.</p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row" id="signup-area" style="display:none;">
                <form id="reg-form" class="col s12 ng-pristine ng-valid">
                    <div class="row">
                        <p class="title-login font14">Đăng ký tài khoản</p>
                        <div class="input-field">
                            <input id="reg-firstname" type="text" class="validate browser-default" placeholder="Tên" style="width:48%;">
                            <input id="reg-lastname" type="text" class="validate browser-default" placeholder="Họ" style="width:48%;float:right;">
                        </div>
                        <div class="input-field">
                            <input id="reg-email" type="email" class="validate browser-default" placeholder="Email" autocomplete="off">
                        </div>
                        <div class="input-field">
                            <input id="reg-password" type="password" class="validate browser-default" placeholder="Mật khẩu" autocomplete="off">
                        </div>
                        <div class="s12">
                            <p>
                                <input type="checkbox" id="reg-agree" checked="">
                                <label for="reg-agree">Tôi đồng ý với quy định của DeliveryNow</label>
                            </p>
                            <p id="reg-error-msg" style="color:red"></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="s12">
                            <a id="reg-btn" class="waves-effect waves-light red btn right" style="display:block;width:100%;">Sign up</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">

                            <p>Bạn đã có tài khoản? Nhấn <a href="javascript:void(0);" onclick="backToLogin()">vào đây</a> để đăng nhập.</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
    </script>
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
                    <img src="now/images/deliverySorry.png" alt="" width="250">
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
                        <label>Go top page</label>
                    </a>
                </li>
                <li>
                    <a href="tuyen-dung.html" target="_blank">
                        <i class="icon-parnership" style="color: #333333"></i>
                        <label>Register Parterships</label>
                    </a>
                </li>
                <li>
                    <a href="https://itunes.apple.com/us/app/deliverynow/id1137866760" target="_blank" rel="nofollow">
                        <i class="fa fa-apple" style="color: #333333"></i>
                        <label>Download IOS App</label>
                    </a>
                </li>
                <li>
                    <a href="https://play.google.com/store/apps/details?id=com.deliverynow" target="_blank" rel="nofollow">
                        <i class="fa fa-android" style="color: #333333"></i>
                        <label>Download Android App</label>
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
                <img src="now/images/img-new-app.png" alt="">
            </div>
            <div class="info-now">

                <h3 class="title">Hello you</h3>
                <p class="desc">We are pleased to inform you that our application <span class="bold">DeliveryNow</span> is changed its name to </p> <a href="javascript:void(0)" class="btn-now" title="ứng dụng Now"> <span class="bold">Now</span></a> <p class="update-version">Update new version</p>
                <div class="down-apps">
                    <a target="_blank" href="https://itunes.apple.com/us/app/deliverynow/id1137866760" class="down-app" title="App Store">
                        <img src="now/images/ico-app-ios.png" alt="App Store">
                    </a>
                    <a target="_blank" href="https://play.google.com/store/apps/details?id=com.deliverynow" class="down-app" title="Google play">
                        <img src="now/images/ico-app-androil.png" alt="Google play">
                    </a>
                </div>

            </div>
            <div class="box-now-merchant clearfix">
                <div class="img-merchant">
                    <div class="left" style="margin-right: 18px;">
                        <img src="now/images/icons/Icon-AppNowMerchant.png" alt="AppNowMerchant" width="80px">
                    </div>
                    <div class="left">
                        <a target="_blank" href="https://itunes.apple.com/US/app/id1296706589?mt=8" class="down-app" title="App Store" style="margin-bottom: 8px;">
                            <img src="now/images/ico-app-ios.png" alt="App Store" width="98px">
                        </a>
                        <a target="_blank" href="https://play.google.com/store/apps/details?id=com.sea.foody.nowmerchant&amp;hl=vi" class="down-app" title="Google play">
                            <img src="now/images/ico-app-androil.png" alt="Google play" width="98px">
                        </a>
                    </div>
                </div>
                <div class="info-merchant">
                    <h3 class="title">NowMerchant</h3>
                    <p class="font14" style="margin-top:0; line-height: 18px;">App for merchants to <br><b> Receive orders</b> and<b> Check revenue...</b></p>
                    <a href="boosting-your-business-with-deliverynow.html" title="Learn more about NowMerchant App" target="_blank" class="btn btn-merchant">Learn more about NowMerchant App</a>
                </div>
            </div>
        </div>

    </div>

    <script type="text/javascript">
        $(document).ready(function() {
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
            $('#okIsee').click(function() {
                $('#new-app').closeModal();
                $('#alert-container').remove();
                //setCookie('_renameWarning', true, 30);
            });
        });
    </script>





    <script>
        (function() {
            var app = angular.module('deliveryNow');
            app.value('locale', 'en');
        })();
    </script>

    <script async="" type="text/javascript" src="now/bizapi.foody.vn/Scripts/userbehaviour.js">
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
    <script type="text/javascript" src="now/www.googleadservices.com/pagead/f.txt"></script>
    <noscript>
        <div style="display:inline;">
            <img height="1" width="1" style="border-style:none;" alt="" src="http://googleads.g.doubleclick.net/pagead/viewthroughconversion/997550031/?guid=ON&amp;script=0" />
        </div>
    </noscript>



    <!-- Mirrored from www.now.vn/lien-he by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Jul 2018 02:37:22 GMT -->

    <div class="hiddendiv common"></div>
</body>

</html>