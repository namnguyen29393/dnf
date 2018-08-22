/* common function using namespaces */

var CommonHelper = {
    ConvertJsonDate: function (jsonDate) {
        return new Date(parseInt(jsonDate.substr(6)));
    },

    AjaxLoading: function (obj, idDiv, idDivLoading) {
        if (idDivLoading == null || idDivLoading == "") {
            idDivLoading = "loadingImageDiv";
        }

        $("#" + idDivLoading).show();

        if (obj != null) {
            obj.IsExecuting = true;
        }

        if (idDiv != null && idDiv != "") {
            $("#" + idDiv).fadeTo("slow", 0.3);
        }
    },

    StopAjaxLoading: function (obj, idDiv, idDivLoading) {
        if (idDivLoading == null || idDivLoading == "") {
            idDivLoading = "loadingImageDiv";
        }

        $("#" + idDivLoading).hide();

        if (obj != null) {
            obj.IsExecuting = false;
        }

        if (idDiv != null && idDiv != "") {
            $("#" + idDiv).fadeTo("slow", 1);
        }
    },

    GetGenderEnum: function (strGender) {
        switch (strGender) {
            case "M":
                return "1";
            case "F":
                return "2";
            default:
                return "1";
        }
    },

    InviteFriend: function (url) {
        var d = new Date();
        url = url ? url : "/moi-tham-gia";
        $.ajax({
            type: "GET",
            url: '/Common/IsLogin?' + d.getTime(),
            success: function (response) {
                if (response.success == true) {
                    window.location.href = url;
                } else {
                    LoginPopup.Show(
                        function () { window.location.href = url; },
                        function () { }
                    );
                }
            }
        });
    },

    Linkify: function (hashTagFlag, inputText, opts) {
        var options = { linkClass: 'qa-out-link', targetBlank: true, noFollow: true };
        options = $.extend(options, opts);
        inputText = inputText.replace(/\u200B/g, "");

        var replacePattern1 = /(name="[.\\/#a-zA-Z0-9\\(]*|id="[#a-zA-Z0-9\(]*|src="[#a-zA-Z0-9\\(]*|href="[#a-zA-Z0-9\(]*|">|\s>)?(https?|ftp):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;Ã¯]*[-A-Z0-9+&@#\/%=~_|Ã¯]/gim;
        var replacedText = inputText.replace(replacePattern1, function ($0, $1) {
            return $1 ? $0 : '<a class="' + options.linkClass + '" href="' + $0 + '"' + (options.targetBlank ? ' target="_blank"' : '') + (options.noFollow ? (($0.indexOf("www.foody.vn") !== -1) ? '' : ' rel="nofollow"') : '') + '>' + $0 + '</a>';
        });

        //    var replacePattern2 = /(|name="[.\\/#a-zA-Z0-9\\(]*|id="[#a-zA-Z0-9\(]*\(|src="[#a-zA-Z0-9\\(]*\\(|href="[#a-zA-Z0-9\(]*|">|\s>|https?:\/\/|ftp:\/\/)?www\.[-A-Z0-9+&@#\/%?=~_|!:,.;Ã¯]*[-A-Z0-9+&@#\/%=~_|Ã¯]/gim;
        //var replacedText = replacedText.replace(replacePattern2, function($0,$1){ 
        //    return $1?$0:'<a class="'+ options.linkClass + '" href="http://' + $0 + '"target="_blank">'+ $0+ '</a>';
        //}); 

        //var bold = /\*\*(.*?)\*\*/gim;
        //var replacedText = replacedText.replace(bold, function ($0, $1) {
        //    return $1 ? ('<b>' + $1 + '</b>') : $0;
        //});

        //var Italic = /\*(.*?)\*/gim;
        //var replacedText = replacedText.replace(Italic, function ($0, $1) {
        //    return $1 ? ('<i>' + $1 + '</i>') : $0;
        //});

        //var Strike = /\--(.*?)\--/gim;
        //var replacedText = replacedText.replace(Strike, function ($0, $1) {
        //    return $1 ? ('<strike>' + $1 + '</strike>') : $0;
        //});

        //if (hashTagFlag) {
        //    //Works only when you pass true for hashTag
        //    var hashTag = /#(\w*[a-zA-Z_]+\w*)/gim;
        //    var replacedText = replacedText.replace(hashTag, function ($0, $1) {
        //        return $1 ? ('<a href="seach.jsp?query=' + $0 + '>"' + $0 + '</a>') : $0;
        //    });
        //}

        //var replacePattern3 = /([\.\w]+@[a-zA-Z_]+?\.[a-zA-Z]{2,6})/gim;
        //var replacedText = replacedText.replace(replacePattern3, '<a class="' + options.linkClass + '" href="mailto:$1">$1</a>');

        return replacedText;
    },

    GetSelectedTopMenu: function (controllerName, action) {
        controllerName = controllerName.toLowerCase();
        action = action.toLowerCase();
        var url = document.URL;

        $(".nav-place a").each(function () {
            var menuLink = $(this).attr("href");
            var menuType = $(this).data("type");

            if (menuLink != null && menuLink != "") {
                menuLink = menuLink.toLowerCase();

                if (url.endsWith(menuLink)) {
                    $(this).addClass("current");
                } else if (menuType == controllerName) {
                    $(this).addClass("current");
                }
            } else if ((controllerName == "directory" /*|| controllerName == "restaurant"*/) && $(this).attr("class") == "places" && action != "nearby") {
                $(this).addClass("current");
            }
        });

        // microsite
        if (controllerName == "restaurant") {
            var urlWithOutQuery = CommonHelper.StripQueryStringAndHashFromPath(document.URL);

            //$("#float-menu li > a").each(function () {
            //    var menuLink = $(this).attr("href");
            //    var menuType = $(this).data("type");

            //    if (menuLink != null && menuLink != "") {
            //        if (urlWithOutQuery.endsWith(menuLink)) {
            //            $(this).addClass("current");
            //        } else if ((menuType == "binh-luan" && controllerName == "restaurant" && action == "reviewdetails")
            //            || (menuType == "album-anh" && controllerName == "restaurant" && action == "gallerydetail")
            //            || (menuType == "khuyen-mai" && controllerName == "restaurant" && action == "promotiondetail")) {
            //            $(this).addClass("current");
            //        }
            //    }
            //});
        }
    },

    GetEnVietnammmUrl: function (viVietnammmUrl) {
        return viVietnammmUrl.replace("http://www.vietnammm.com/restaurants/", "http://www.vietnammm.com/en/restaurants/");
    },

    HasKoBinding: function (id) {
        return !!ko.dataFor(document.getElementById(id));
    },

    KoFromArrJs: function (arr) {
        for (var i = 0; i < arr.length; i++) {
            var item = arr[i];
            arr[i] = ko.mapping.fromJS(item);
        }

        return arr;
    },

    GetPathFromUrl: function (url) {
        return url.split("?")[0];
    },

    StripQueryStringAndHashFromPath: function (url) {
        return url.split("?")[0].split("#")[0];
    },

    InitNavPlaceMenu: function () {
        $("ul.nav-place-menu > li").each(function () {
            var subUl = $(this).find('.menu-frame');

            if (subUl.length > 0) {
                var dropDownCategoryHelper3 = new DropDownCategoryHelper3();
                dropDownCategoryHelper3.Init({
                    btnCategory: this,
                    category: subUl[0]
                });
            }
        });
    },

    ScrollTo: function (strSelector, topMargin, delayTime) {
        if (topMargin == null) {
            topMargin = 50;
        }

        if (delayTime == null) {
            delayTime = 500;
        }

        $('html, body').animate({
            scrollTop: $(strSelector).offset().top - topMargin
        }, delayTime);
    },

    ScrollToElement: function (element, topMargin, delayTime) {
        if (topMargin == null) {
            topMargin = 50;
        }

        if (delayTime == null) {
            delayTime = 500;
        }

        $('html, body').animate({
            scrollTop: element.offset().top - topMargin
        }, delayTime);
    },

    PaddingTopMaps: function () {
        //var top = 90;
        //if ($("#banner-header-top").length > 0) {
        //    top = 160;
        //}
        //$("body > div.district-banner").css("padding-top", top + "px");
    },

    PaddingTopHeader: function (topMore) {
        topMore = topMore ? topMore : 0;
        var headerHeight = 70 + topMore;

        // check if banner-header-top is existed
        if ($("#banner-header-top").length > 0) {
            headerHeight = 150 + topMore;
        }
        if (document.getElementById("checkBanner")) {
            headerHeight = 20 + topMore;
            if (document.getElementById("banner-header-top")) {
                headerHeight = 80 + topMore;
            }
        }

        $("#nav-place-container").css("margin-top", "0px");

        // home
        //$("body > div.banner").css("padding-top", (headerHeight + 10) + "px");

        // microsite
        //$(".micro-content:eq(0)").css("margin-top", (headerHeight-15) + "px");

        // directory
        //$(".directory-content").css("margin-top", (headerHeight) + "px");

        // nearby
        //$("#mapPop").css("margin-top", (headerHeight + 0) + "px");
        //$("#mapContent").css("margin-top", (headerHeight + 0) + "px");

        // reviews
        //$(".reviews-content:eq(0)").css("margin-top", (headerHeight + 5) + "px");

        // article
        //$(".blog-content:eq(0)").css("margin-top", (headerHeight) + "px");

        // e-card
        //$(".member-card-container:eq(0)").css("padding-top", (headerHeight - 40) + "px");

        // promotion
        //$(".promotion-content").css("margin-top", (headerHeight) + "px");

        // event
        //$(".event-container").css("padding-top", (headerHeight) + "px");

        // qa
        //$(".qa-page").css("padding-top", (headerHeight) + "px");

        // coupon
        //$(".coupon-content-new").css("margin-top", (headerHeight) + "px");

        // static
        //$(".static-content").css("margin-top", (headerHeight) + "px");

        // user
        //$(".user-content").css("margin-top", (headerHeight - 50) + "px");
        //$("#bankcard").css("margin-top", (headerHeight - 170) + "px");

        // video
        //$("#pn-video").css("margin-top", (headerHeight) + "px");

        // mobile app
        //$(".mobileapp .mobile-container").css("margin-top", "152px");
        //$(".mobileapp .mobile-content").css("padding", "0px 10px 0px");
        //$(".mobileapp .mobile-content-left").css("margin-top", "10px");
        //$(".mobileapp .mobile-container:eq(0)").css("margin-top", (headerHeight) + "px");
        //$(".mobileapp .mobile-content").css("padding", "0px 10px 0px");
        //$(".mobileapp .mobile-content-left").css("margin-top", "10px");

        // personal suggestion
        //$(".personal-suggestion-page").css("padding-top", (headerHeight - 35) + "px");

        // reservation
        //$(".reservation-container").css("margin-top", (headerHeight + 60) + "px");

        // register
        //$(".register-maincontent").css("padding-top", (headerHeight - 80) + "px");

        //list
        //$(".lists-detail-page-content:eq(0)").css("margin-top", (headerHeight) + "px");
        //$(".collection-detail-page-content").css("margin-top", (headerHeight) + "px");
        //$(".list-detail-content").css("margin-top", (headerHeight) + "px");
        // forget pwd
        //$(".reset-pass-page-box").css("margin-top", (headerHeight + 70) + "px");

        // brand
        //$(".landing-page-brand-container").css("margin-top", (headerHeight + 40) + "px");
        //$(".brands-opacity").css("top", (headerHeight + 60) + "px");

        // video
        $("#tab-video-index").css("margin-top", (headerHeight) + "px");
        //$(".video-others").css("margin-top", (headerHeight) + "px");

        // gallery
        //$(".gallery-index-container").css("margin-top", (headerHeight) + "px");

        // profile page
        //$(".profile-edit-content").css("margin-top", (headerHeight) + "px");

        // top member
        //$("#top-user-by-total-reviews").css("margin-top", (headerHeight + 30) + "px");
    },

    ShowButtonBackTop: function () {
        $('#btn-back-top').click(function () {
            $(window).scrollTop(0);
        })
        var scrollTimeout = null;
        $(window).scroll(function () {
            if (scrollTimeout)
                window.clearTimeout(scrollTimeout)
            scrollTimeout = setTimeout(function () {
                if ($(window).scrollTop() > 300) {
                    $('.fd-back-top').show();
                } else {
                    $('.fd-back-top').hide();
                }
            }, 50);

        });
    },
    NoScriptTag: function (content) {
        if (typeof content != "undefined") {
            content = content.replace(/[><"]/g, "");;
            return content;
        }   
    },
    NoTag: function (content)
    {
        if (typeof content != "undefined") {
            content = content.replace(/[><]/g, "");;
            return content;
        }
    },
};

var _flagTopBanner = 0;
var _topBanner = 0;
var _heightContainer = 0;
// fixed ads when scrolling
function FixedAdsHelper() {
    var self = this;

    // variable
    self.ContainerId = null;
    self.Top = 0;
    self.EdgeSelector = null;
    self.ShowElement = null;
    self.ShowElementHeight = 0;
    self.IsStopAtEdge = false;
    self.EdgeSelectorAutoHeight = null;

    // function
    self.Excute = function () {
        var adsContainerElement = $('#' + self.ContainerId);
        var elementPosition = adsContainerElement.offset();

        if (!elementPosition)
            return;

        $(window).scroll(function () {




            if (_flagTopBanner == 0) {
                _flagTopBanner = 1;
                if ($('#directory-banner-container').length > 0) {
                    _topBanner = $('#directory-banner-container').offset().top;
                }
            }
            var edgePosition = self.EdgeSelector != null ? $(self.EdgeSelector).offset() : null;
            var edgeAutoHeight = self.EdgeSelectorAutoHeight != null ? $(self.EdgeSelectorAutoHeight).height() : 0;
            if (_heightContainer == 0) {

                if ($(window).scrollTop() > elementPosition.top
                    && (edgePosition == null || $(window).scrollTop() < (edgePosition.top + (edgeAutoHeight - 50) - self.Top - (adsContainerElement.height() + self.ShowElementHeight)))) {
                    adsContainerElement
                        .css('position', 'fixed')
                        .css('top', self.Top)
                        .css('left', elementPosition.left);

                    if (self.ShowElement != null) {
                        $(self.ShowElement).show();
                    }
                    if (self.ContainerId == "micro-buttons-bars") {
                        _heightContainer = adsContainerElement.height();

                    }
                    //if (self.EdgeSelector == '.lists-detail-page-content')
                    //    window.document.title =(edgePosition.top + edgeAutoHeight - self.Top - (adsContainerElement.height() + self.ShowElementHeight))+':'+ edgePosition.top + '+' + edgeAutoHeight + '-' + self.Top + '-' + '(' + adsContainerElement.height() + '+' + self.ShowElementHeight + ')';
                    //    console.log('1-' + $(window).scrollTop() + '-' + edgePosition.top + '-' + self.Top + '-' + adsContainerElement.height() + '-'+edgeAutoHeight)
                } else {
                    if (self.ContainerId == "directory-banner-container" && $('#float-filter-container').length > 0 && $(window).scrollTop() > $('#float-filter-container').offset().top && $(window).scrollTop() < _topBanner) {
                        //var pos = $('#float-filter').offset().top;
                        adsContainerElement
                            .css('position', 'fixed')
                            .css('top', self.Top)
                            .css('left', elementPosition.left);
                        //if (self.EdgeSelector == '.lists-detail-page-content')
                        //console.log(1.1)
                    }
                    else {

                        //adsContainerElement.css('position', 'static');
                        //if (self.IsStopAtEdge == false) {
                        adsContainerElement.css('position', '');
                        adsContainerElement.css('top', '');
                        adsContainerElement.css('left', '');
                        //} else {
                        //    if (edgePosition != null) {
                        //        adsContainerElement.css('position', '');
                        //        adsContainerElement.css('margin-top', edgePosition.top - $(self.EdgeSelector).height());
                        //        adsContainerElement.css('top', '');
                        //        adsContainerElement.css('left', '');
                        //    }
                        //}
                        if (self.ShowElement != null) {
                            $(self.ShowElement).hide();
                        }
                        //if (self.EdgeSelector == '.lists-detail-page-content')
                        //console.log(2)
                    }
                }
            }
            else {
                if ($(window).scrollTop() > elementPosition.top
                  && (edgePosition == null || $(window).scrollTop() < edgePosition.top - _heightContainer)) {
                    adsContainerElement
                        .css('position', 'fixed')
                        .css('top', self.Top)
                        .css('left', elementPosition.left);

                    if (self.ShowElement != null) {
                        $(self.ShowElement).show();
                    }
                }
                else {
                    adsContainerElement.css('position', '');
                    adsContainerElement.css('top', '');
                    adsContainerElement.css('left', '');

                    if (self.ShowElement != null) {
                        $(self.ShowElement).hide();
                    }
                }
            }
        });
    };
}

$.fn.fixedAds = function (opts) {
    var fixedAds = new FixedAdsHelper();
    var defaults = {
        top: 10,
        edgeSelector: null,
        showElement: null,
        showElementHeight: 0,
        isStopAtEdge: false,
        edgeSelectorAutoHeight: null
    };
    opts = $.extend({}, defaults, opts);
    fixedAds.ContainerId = this.attr("id");
    fixedAds.Top = opts.top;
    fixedAds.EdgeSelector = opts.edgeSelector;
    fixedAds.ShowElement = opts.showElement;
    fixedAds.ShowElementHeight = opts.showElementHeight;
    fixedAds.EdgeSelectorAutoHeight = opts.edgeSelectorAutoHeight;
    fixedAds.IsStopAtEdge = opts.isStopAtEdge;
    fixedAds.Excute();
};

// dropdown category
function DropDownCategoryHelper() {
    var self = this;

    // variable
    self.IsHover = false;
    self.CategoryId = "";
    self.BtnCategoryId = "";

    self.CheckHover = function () {
        $("#" + self.CategoryId + "," + "#" + self.BtnCategoryId).hover(function () {
            self.IsHover = true;
        }, function () {
            self.IsHover = false;
        });

        $("body").mouseup(function () {
            if (!self.IsHover) {
                $("#" + self.CategoryId).hide();
            }
        });
    };

    self.Init = function (opts) {
        self.CategoryId = opts.categoryId;
        self.BtnCategoryId = opts.btnCategoryId;

        $("#" + self.BtnCategoryId).click(function () {
            if (!$("#" + self.CategoryId).is(":visible")) {
                $("#" + self.CategoryId).show();
            }
            else {
                $("#" + self.CategoryId).hide();
            }
        });

        self.CheckHover();
    };
};

function DropDownCategoryHelper2() {
    var self = this;

    // variable
    self.IsHover = false;
    self.ElementBtnCategory = "";
    self.ElementCategory = "";

    self.CheckHover = function () {
        $(self.ElementBtnCategory).hover(function () {
            self.IsHover = true;
        }, function () {
            self.IsHover = false;
        });

        $(self.ElementCategory).hover(function () {
            self.IsHover = true;
        }, function () {
            self.IsHover = false;
        });

        $("body").mouseup(function () {
            if (!self.IsHover) {
                $(self.ElementCategory).hide();
            }
        });
    };

    self.Init = function (opts) {
        self.ElementBtnCategory = opts.btnCategory;
        self.ElementCategory = $(self.ElementBtnCategory).next()[0];

        $(self.ElementBtnCategory).click(function () {
            if (!$(self.ElementCategory).is(":visible")) {
                $(self.ElementCategory).show();
            }
            else {
                $(self.ElementCategory).hide();
            }
        });

        self.CheckHover();
    };
};

function DropDownCategoryHelper3() {
    var self = this;

    // variable
    self.IsHover = false;
    self.ElementBtnCategory = "";
    self.ElementCategory = "";
    self.ClickBtnToClose = false;
    self.IsFirst = true;

    self.CheckHover = function () {
        if (self.ClickBtnToClose) {
            $(self.ElementBtnCategory).hover(function () {
                self.IsHover = true;
            }, function () {
                self.IsHover = false;
            });
        }

        $(self.ElementCategory).hover(function () {
            self.IsHover = true;
        }, function () {
            self.IsHover = false;
        });

        $("body").mouseup(function () {
            if (!self.IsHover) {
                $(self.ElementCategory).hide();
            }
        });
    };

    self.Init = function (opts) {
        self.ElementBtnCategory = opts.btnCategory;
        self.ElementCategory = opts.category;
        self.ClickBtnToClose = opts.clickBtnToClose == false ? false : true;

        $(self.ElementBtnCategory).click(function () {
            //debugger
            if (!$(self.ElementCategory).is(":visible")) {
                if (self.IsFirst) {
                    // check impression
                    if ($(self.ElementBtnCategory).attr("id") == "pkeywords") {
                        $(".suggestion-box .advertising").each(function () {
                            var name = $(this).data("name");
                            //_gaq.push(['_trackEvent', 'Suggestion Box', 'Impression', name]);
                            ga('ads.send', 'event', 'Suggestion Box', 'Impression', name);
                        });
                    }

                    self.IsFirst = false;
                }
                if(!$('#fdDlgSearchFilter').is(":visible"))
                    $(self.ElementCategory).show();
                else
                    $(self.ElementCategory).hide();
            }
            else {
                $(self.ElementCategory).hide();
            }
        });

        self.CheckHover();

        $(".search-bar-top .suggestion-box .sug-box-tabs").custabs();
    };
};

$.fn.doLinks = function (hashTagFlag, opts) {
    this.each(function () {
        $(this).html(CommonHelper.Linkify(hashTagFlag, $(this).html(), opts));
    });
};

if (typeof String.prototype.startsWith != 'function') {
    // see below for better implementation!
    String.prototype.startsWith = function (str) {
        return this.indexOf(str) == 0;
    };
}

String.prototype.endsWith = function (suffix) {
    return this.indexOf(suffix, this.length - suffix.length) !== -1;
};

Date.prototype.addHours = function (h) {
    this.setHours(this.getHours() + h);
    return this;
}

// Replaces all instances of the given substring.
String.prototype.replaceAll = function (
strTarget, // The substring you want to replace
strSubString // The string you want to replace in.
) {
    var strText = this;
    var intIndexOfMatch = strText.indexOf(strTarget);

    // Keep looping while an instance of the target string
    // still exists in the string.
    while (intIndexOfMatch != -1) {
        // Relace out the current instance.
        strText = strText.replace(strTarget, strSubString)

        // Get the index of any next matching substring.
        intIndexOfMatch = strText.indexOf(strTarget);
    }

    // Return the updated string with ALL the target strings
    // replaced out with the new substring.
    return (strText);
}

Date.isLeapYear = function (year) {
    return (((year % 4 === 0) && (year % 100 !== 0)) || (year % 400 === 0));
};

Date.getDaysInMonth = function (year, month) {
    return [31, (Date.isLeapYear(year) ? 29 : 28), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31][month];
};

Date.prototype.isLeapYear = function () {
    var y = this.getFullYear();
    return (((y % 4 === 0) && (y % 100 !== 0)) || (y % 400 === 0));
};

Date.prototype.getDaysInMonth = function () {
    return Date.getDaysInMonth(this.getFullYear(), this.getMonth());
};

Date.prototype.addMonths = function (value) {
    var n = this.getDate();
    this.setDate(1);
    this.setMonth(this.getMonth() + value);
    this.setDate(Math.min(n, this.getDaysInMonth()));
    return this;
};

$.fn.addBack = function (selector) {
    return this.add(selector == null ? this.prevObject : this.prevObject.filter(selector));
}

String.prototype.digits = function () {
    return this.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
};

$.fn.digits = function () {
    return this.each(function () {
        if ($(this).is('input:text')) {
            $(this).val($(this).val().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
        }
        else {
            $(this).text($(this).text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
        }
    })
};

$(function () {
    CommonHelper.InitNavPlaceMenu();

    $("#restricted-res-container").hide();

    // hot fix chrome version 39
    //var match = window.navigator.appVersion.match(/Chrome\/(\d+)\./);

    //if (match != null) {
    //    var chromeVersion = parseInt(match[1], 10);
    //    console.log("chromeVersion: " + chromeVersion);

    //    if (chromeVersion == 39) {
    //        $("body").css("white-space", "nowrap");
    //    }
    //}
    var topMore = window.CountryId ? window.CountryId == '86' ? 30 : 0 : 0;
    CommonHelper.PaddingTopHeader(topMore);
    CommonHelper.PaddingTopMaps();
    CommonHelper.ShowButtonBackTop();
});