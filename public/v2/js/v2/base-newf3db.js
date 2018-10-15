var Pngtree = {};
$(function() {
    function a(e, t, c, cp) {
        e.attr('placeholder', 'Search ' + c.charAt(0).toUpperCase() + c.slice(1).toLowerCase());
        cp.val(t);
        // switch (t) {
        //     case 1:
        //         e.attr("placeholder", "Search Graphic Design");
        //         break;
        //     case 2:
        //         e.attr("placeholder", "Search Backgrounds");
        //         break;
        //     case 5:
        //         e.attr("placeholder", "Search Templates");
        //         break;
        //     case 3:
        //         e.attr("placeholder", "Search Icons");
        //         break;
        //     case 6:
        //         e.attr("placeholder", "Search Powerpoint")
        // }
    }
    Pngtree.publicPopup = function(e, t, a) {
        $(".qbweb-win." + e).fadeIn("1500", function() {
            $("." + t).animate({
                height: a + "px"
            })
        })
    }, $(".btn-Cpmclose").on("click", function() {
        var e = this;
        $(e).parent().animate({
            height: 0
        }, "3000", function() {
            $(e).parents(".qbweb-win").fadeOut()
        })
    }), Pngtree.ScrollBar = function() {
        var e = $(window).scrollTop();
        $(window).height;
        500 <= e ? ($(".scroll-Nav").fadeIn(), $(".side-Totop").css({
            opacity: 1
        })) : ($(".scroll-Nav").fadeOut(), $(".side-Totop").css({
            opacity: 0
        }))
    }, $(".side-Totop").on("click", function() {
        $("body, html").animate({
            scrollTop: 0
        }, 800)
    }), Pngtree.BaseFun = {}, Pngtree.BaseFun.Base_IsEmail = function(e) {
        return !!/^[a-z0-9]+([._\\-]*[a-z0-9])*@([a-z0-9]+[-a-z0-9]*[a-z0-9]+\.){1,63}[a-z0-9]+$/g.test(e)
    }, Pngtree.BaseFun.pngtree_event = function(e, t, a) {
        if (void 0 === t && (t = 1), void 0 === a && (a = ""), !no_bot) return !1;
        $.getJSON("/api/statistics/pngtree-event", {
            _csrf: csrf,
            e: e,
            ei: t,
            et: a
        })
    }, Pngtree.BaseFun.Ga_Searh = function(e, t) {
        var a = "";
        switch (t) {
            case 1:
                a = "Element";
                break;
            case 2:
                a = "Back";
                break;
            case 5:
                a = "Template";
                break;
            case 6:
                a = "PPT";
                break;
            case 7:
                a = "Font"
        }
        ga("pngtree.send", "event", e, "click", a)
    }, Pngtree.BaseFun.Ga_Deploy = function(e, t, a) {
        ga("require", "GTM-PJ8J78F"), ga("pngtree.send", "event", e, t, a)
    }, Pngtree.BaseFun.Ga_Deploy_Class = function(e, t, a, n) {
        $(e).on("click", function() {
            var e = $(this).data(n);
            console.log(e), "Local_Pay_Btn" == e && (t = "Recharge_Page"), Pngtree.BaseFun.Ga_Deploy(t, a, e)
        })
    }, Pngtree.BaseFun.Ga_Deploy_Href = function(e, t, a) {
        $(e).on("click", function() {
            var e = $.trim($(this).text());
            console.log(e), Pngtree.BaseFun.Ga_Deploy(t, a, e)
        })
    }, Pngtree.BaseFun.Base_OpenWin = function(e, t) {
        var a = (window.screen.availHeight - 30 - 500) / 2,
            n = (window.screen.availWidth - 10 - 650) / 2;
        return window.open(e, t, "height=500,,innerHeight=500,width=650,innerWidth=650,top=" + a + ",left=" + n + ",status=no,toolbar=no,menubar=no,location=no,resizable=no,scrollbars=0,titlebar=no")
    }, Pngtree.BaseFun.Countdown = function(g, f, h, m, k) {
        setInterval(function() {
            var e = new Date,
                t = e.getUTCFullYear(),
                a = e.getUTCMonth(),
                n = e.getUTCDate(),
                i = e.getUTCHours(),
                o = e.getUTCMinutes(),
                s = e.getUTCSeconds(),
                r = Date.UTC(t, a, n, i, o, s),
                c = 1e3 * parseInt(g) - r,
                l = Math.floor(c / 864e5);
            c -= 864e5 * l;
            var d = Math.floor(c / 36e5);
            c -= 36e5 * d;
            var u = Math.floor(c / 6e4);
            c -= 6e4 * u;
            var p = Math.floor(c / 1e3);
            l < 0 && (l = 0), d < 0 && (d = 0), u < 0 && (u = 0), p < 0 && (p = 0), l < 10 && (l = "0" + l), d < 10 && (d = "0" + d), u < 10 && (u = "0" + u), p < 10 && (p = "0" + p), $(f).html(l), $(h).html(d), $(m).html(u), $(k).html(p)
        }, 1e3)
    }, Pngtree.BaseFun.captcha = function() {
        $(".verification-code img").prop("src", "/api/captcha/login-file-code?" + Math.random())
    }, Pngtree.BaseFun.IsLogin = function(e) {
        if (void 0 === e && (e = 4), 0 == uid) {
            switch (e) {
                case 1:
                case 2:
                case 3:
                case 4:
                    var t = "3,524,844 PNG Images For Free Download\n"
            }
            return Pngtree.BaseFun.captcha(), $(" #base-register-window .rlg-with-box .small-tit").html(t), $("#base-register-window").fadeIn(300), !1
        }
        return !0
    }, Pngtree.BaseFun.FaccTalk = function(e) {
        var t, a, n, i;
        window.fbAsyncInit = function() {
            FB.init({
                appId: "141858443049568",
                autoLogAppEvents: !0,
                xfbml: !0,
                version: "v3.0"
            })
        }, t = document, a = "facebook-jssdk", i = t.getElementsByTagName("script")[0], t.getElementById(a) || ((n = t.createElement("script")).id = a, n.src = "https://connect.facebook.net/en_US/sdk.js", i.parentNode.insertBefore(n, i)), $(e).on("click", function() {
            FB.ui({
                method: "send",
                link: "https://pngtree.com/"
            })
        })
    }, $(".base-public-login-button").on("click", function() {
        var e = localStorage.getItem("quick_login_email");
        Pngtree.BaseFun.captcha(), e && quick_login_status && ($(".quick-login-box").show(), $(".other-account").hide(), $("#base-public-login-email-text").val(e), $(".quick-login-btn,.another-login-btn").trigger("click")), Pngtree.BaseFun.Ga_Deploy("Head_navigation", "Login", "click");
        $("#base-public-login").fadeIn(300), $(" #base-register-window .rlg-with-box .small-tit").html('<span style="color: #888;font-size: 16px;">with your social network.</span>')
    }), $(".base-public-register-button").on("click", function() {
        if (Pngtree.BaseFun.Ga_Deploy("Head_navigation", "Register", "click"), !Pngtree.BaseFun.IsLogin()) return !1
    }), $(".tkw-main").on("click", ".cls-btn", function() {
        $(this).parents(".tkw-window ").fadeOut()
    }), $("#base-public-login-password-text").on("keypress", function(e) {
        if (13 == e.keyCode) return $("#base-sub-Login-Btn").trigger("click"), !1
    }), $(".remember-me").on("click", function() {
        Pngtree.BaseFun.Ga_Deploy("Login", "Remember_PWD", "click")
    }), $("#base-sub-Login-Btn").on("click", function() {
        var t = $.trim($("#base-public-login-email-text").val()),
            e = $.trim($("#base-public-login-password-text").val());
        if ("" == t) return alert("please input your email"), !1;
        if ("" == e) return alert("please input your password"), !1;
        if (Pngtree.BaseFun.Ga_Deploy("Login", "Email", "click"), !Pngtree.BaseFun.Base_IsEmail(t)) return alert("Please check the mailbox format"), !1;
        var a = $("#remember-me").prop("checked");
        $.post("/api/login/login", {
            email: t,
            password: e,
            isChecked: a,
            _csrf: csrf
        }, function(e) {
            e.rsp ? (e.quick_status && (localStorage.setItem("quick_login_email", t), localStorage.setItem("quick_login_email_pwd", e.quick_status), localStorage.setItem("quick_login_username", e.data.username), localStorage.setItem("quick_login_head_img", e.data.head_img)), window.location.reload(!0)) : alert(e.error)
        }, "json")
    }), $(".base-go-login").on("click", function() {
        var e = $(this).data("type"),
            t = "Google";
        switch (e) {
            case "gg":
                t = "Google";
                break;
            case "fb":
                t = "FaceBook";
                break;
            case "tt":
                t = "Twitter"
        }
        Pngtree.BaseFun.Ga_Deploy("Login", t, "click"), Pngtree.BaseFun.Base_OpenWin("/login/gologin?type=" + e, e + "-login")
    }), $(".reg-trigger").on("click", function() {
        Pngtree.BaseFun.Ga_Deploy("Login", "Register", "click"), $("#base-public-login").hide(), $("#base-register-window").show().find(".tkw-registerCont").addClass("zoomIn").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function() {
            $(this).removeClass("zoomIn")
        })
    }), $("#base-login-trigger").on("click", function() {
        Pngtree.BaseFun.captcha();
        var e = localStorage.getItem("quick_login_email");
        e && $("#base-public-login-email-text").val(e), $("#base-register-window").hide(), $("#base-public-login").show().find(".tkw-LoginCont").addClass("zoomIn").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function() {
            $(this).removeClass("zoomIn")
        })
    }), $("#base-sub-regist-Btn").on("click", function() {
        if ($(this).hasClass("loading")) return !1;
        $(this).addClass("loading").html("loading...");
        var e = $.trim($("#base-public-login-username-regiser-text").val()),
            t = $.trim($("#base-public-login-email-regiser-text").val()),
            a = $.trim($("#base-public-login-password-regiser-text").val()),
            n = $.trim($(this).siblings(".input-code-box").find(".input-code").val());
        if (Pngtree.BaseFun.Ga_Deploy("Register", "Email", "click"), "" == e) return alert("please input your nickname"), $(this).removeClass("loading").html("Register"), !1;
        if ("" == t) return alert("please input your email"), $(this).removeClass("loading").html("Register"), !1;
        if ("" == a) return alert("please input your password"), $(this).removeClass("loading").html("Register"), !1;
        if (!Pngtree.BaseFun.Base_IsEmail(t)) return alert("Please check the mailbox format"), $(this).removeClass("loading").html("Register"), !1;
        if (5 != n.length) return alert("please input correct verification code"), $(this).removeClass("loading").html("Register"), !1;
        var i = $(this);
        $.post("/api/register/index", {
            username: e,
            email: t,
            password: a,
            code: n,
            _csrf: csrf
        }, function(e) {
            e.rsp ? ($("#base-retry-send-email").attr("data-id", e.id), $(".register-success").fadeIn().addClass("zoomIn").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend", function() {
                $(".register-success").removeClass("zoomIn")
            }), $(".tkw-registerCont").fadeOut()) : (alert(e.error), Pngtree.BaseFun.captcha()), i.removeClass("loading").html("Register")
        }, "json")
    }), $("#base-retry-send-email").on("click", function() {
        var e = $(this).data("id");
        $.post("/api/register/retry-send-email", {
            id: e,
            _csrf: csrf
        }, function(e) {
            e.rsp ? alert("Re-send success, may be into your mailbox trash, please pay attention.") : (alert(e.error), $("#base-verified").click())
        }, "json")
    }), $("#base-verified").click(function() {
        window.location.reload(!0)
    }), $(".side-feedback").on("click", function() {
        $("#contact-box").fadeIn()
    }), $(".sb-items").on("click", "a", function() {
        $(this).addClass("on").siblings("a").removeClass("on");
        var e = $(this).data("type"),
            c = $(this).text(),
            t = $(this).parents(".serach-box").find(".sb-form input[name=keyword]");
            pc = $(this).parents(".serach-box").find(".sb-form input[name=category]");
        t.data("lg") ? t.attr("placeholder", t.data("lg") + " " + $(this).text()) : a(t, e, c, pc)
    }), $(".detailsearch-select ul").on("click", "li", function() {
        $(this).addClass("on").siblings("li").removeClass("on");
        var e = $(this).data("type");
        a($("#detailsearch-input"), e), $(".detailsearch-select").data("type", e)
    }), $(window).on("scroll", Pngtree.ScrollBar), Pngtree.BaseFun.SearchClick = function(e, t, a) {
        if ("" != t) {
            var n;
            switch (e) {
                case 1:
                    n = "so";
                    break;
                case 2:
                    n = "do";
                    break;
                case 3:
                    n = "free-icons";
                    break;
                case 4:
                    n = "free-photos";
                    break;
                case 5:
                    n = "templates";
                    break;
                case 6:
                    n = "powerpoint-templates";
                    break;
                default:
                    n = "so"
            }
            t = (t = t.replace(/\s+/g, "-")).toLowerCase(), $.ajax({
                type: "post",
                data: {
                    keyword: t,
                    _csrf: csrf
                },
                url: "/api/index/sets-keyword",
                dataType: "json",
                success: function(e) {
                    console.log(e)
                }
            }), setTimeout(function() {
                a ? window.open("/" + n + "/" + t) : window.location.href = "/" + n + "/" + t
            }, 10)
        } else alert("Please enter keywords")
    }, $(".search-click-btn").on("click", function() {
        var e = $(this).parents(".search-box-outer").find(".search-box-item-li li a.on").data("type"),
            t = $(this).siblings(".search-box-input").val(),
            a = "Element";
        switch (e) {
            case 1:
                a = "Element";
                break;
            case 2:
                a = "Back";
                break;
            case 5:
                a = "Template";
                break;
            case 6:
                a = "PPT";
                break;
            case 7:
                a = "Font"
        }
        Pngtree.BaseFun.Ga_Deploy("Head_navigation", "Drop_Down_search", a), Pngtree.BaseFun.SearchClick(e, t)
    }), $(".search-box-input").on("keydown", function(e) {
        if (13 == e.keyCode) return $(this).siblings(".search-click-btn").trigger("click"), !1
    }), $(".detailsearch-btn").on("click", function() {
        var e = $(".detailsearch-select").data("type"),
            t = $("#detailsearch-input").val();
        Pngtree.BaseFun.Ga_Searh("DetailSearch", e), $.getJSON("/api/statistics/detail-search", {
            type: e
        }), Pngtree.BaseFun.SearchClick(e, t, !0)
    }), $("#detailsearch-input").on("keydown", function(e) {
        if (13 == e.keyCode) return $(".detailsearch-btn").trigger("click"), !1
    }), $(".search-box-input").on("keyup", function() {
        $(this).next(".comment-search-dropdown-wrap").show()
    }), $(".sb-form").click(function(e) {
        e.stopPropagation()
    }), $("#fixed-search-tag").on("click", "li", function() {
        var e = $(this).find("a").text(),
            t = ($(this).find("a").data("type"), $(this).find("a").data("placeholder"));
        $(this).parents(".pulldown-title").find(".sb-val").text(e), $(this).siblings("li").find("a.on").removeClass("on").siblings(".icon-fit").remove(), $(this).find("a").addClass("on").after('<i class="icon-fit"></i>'), $(this).parents(".search-box-outer").find(".sb-input").attr("placeholder", t)
    }), $(".mc-lists").hover(function() {
        $(this).addClass("on").siblings().removeClass("on")
    });
    try {
        $("img.lazy").lazyload({
            threshold: 200,
            effect: "fadeIn"
        })
    } catch (e) {}
    if ($(".qbweb-win").on("click", ".close-btn", function() {
            $(this).parents(".qbweb-win").fadeOut(200)
        }), $("#wrapper").on("click", ".down-jpg-click,.down-rar-click,.down-no-login", function() {
            if (!Pngtree.BaseFun.IsLogin(3)) return !1;
            if ($(this).hasClass("ppt-down-file") && 0 == vip_type) {
                e_ppt = 1 & extra_privilege;
                var e = $(this).data("id");
                return !(!e_ppt && !$(this).hasClass("single-pay")) || ($("#ppt-singledown").show().find(".pay-btn").prop("href", "/pay/ppt-pay?id=" + e), !1)
            }
            if ($(this).hasClass("template-down-file") && 0 == vip_type) return e_template = 2 & extra_privilege, !(e_template <= 0) || ($("#tpl-download-window").show(), $.getJSON("/api/statistics/template-down-limit", {
                _csrf: csrf
            }), !1);
            if ($(this).hasClass("desc-click") && $.getJSON("/api/statistics/down-desc", {
                    _csrf: csrf
                }), 0 == vip_type) return down_count <= 0 ? ($("#downastrict-2").fadeIn(200), $.getJSON("/api/statistics/down-limit", {
                _csrf: csrf
            })) : ($("#base-download-confirm-true").attr("href", $(this).attr("href")), $("#base-download-confirm").fadeIn(200)), !1;
            if (300 < down_sum) return $("#downastrict-3").fadeIn(200), !1;
            if (2 == vip_type) {
                if (down_count <= 0) return $("#downastrict-4").fadeIn(200), $.getJSON("/api/statistics/down-limit", {
                    _csrf: csrf
                }), !1;
                $("#free-user-down-count").text(--down_count)
            }
            return !0
        }), $("#base-download-confirm-true").on("click", function() {
            if (down_count <= 0) return $(".close-btn").trigger("click"), setTimeout(function() {
                $("#downastrict-2").fadeIn(200)
            }, 500), !1;
            down_count--;
            var e = parseInt($(".ulc-two").html()),
                t = parseInt(e - 1);
            return 0 < t ? $(".ulc-two").html(t + " free downloads left today") : $(".close-btn").trigger("click"), setTimeout(function() {
                console.log(down_count), $("#free-user-down-count").html(down_count), $("#free-user-down-count-h").html(down_count), $(".close-btn").trigger("click")
            }, 3e3), !0
        }), $("#wrapper").on("click", ".star-btn-click", function() {
            if (!Pngtree.BaseFun.IsLogin(3)) return !1;
            var t = $(this),
                e = $(this).hasClass("on"),
                a = $(this).data("type"),
                n = $(this).data("id");
            t.hasClass("loading") || (t.addClass("loading"), $.getJSON("/api/like/index", {
                _csrf: csrf,
                id: n,
                type: a,
                is_like: e ? -1 : 1
            }, function(e) {
                t.removeClass("loading")
            }));
            var i = Number($(this).children("span").html());
            if ($(this).hasClass("on")) {
                var o = i - 1;
                $(this).children("i").removeClass("heartAnimation"), $(this).children("span").html(o)
            } else {
                var s = i + 1;
                $(this).children("i").addClass("heartAnimation"), $(this).children("span").html(s)
            }
            e ? t.removeClass("on") : t.addClass("on")
        }), $("#wrapper").on("click", ".icon-like-btn", function() {
            if (!Pngtree.BaseFun.IsLogin(3)) return !1;
            var t = $(this),
                e = $(this).hasClass("on"),
                a = $(this).data("type"),
                n = $(this).data("id");
            return t.hasClass("loading") || (t.addClass("loading"), $.getJSON("/api/like/index-icon", {
                _csrf: csrf,
                id: n,
                type: a,
                is_like: e ? -1 : 1
            }, function(e) {
                t.removeClass("loading")
            })), e ? t.removeClass("on") : t.addClass("on"), !1
        }), $(".color-boxs").on("click", "a", function() {
            $(this).addClass("color-on").siblings("a").removeClass("color-on")
        }), addLoadEvent(function() {
            var e = $(".pulldown-coupon-timeout").data("at");
            if (Pngtree.BaseFun.Countdown(e, "", ".coupon_hour", ".coupon_min", ".coupon_scen"), !no_bot) return !1;
            
            try {
                var t = getInjectData()
            } catch (e) {
                t = ""
            }
            if ("" != t && void 0 !== t.type) {
                var a = "";
                switch (t.type) {
                    case 1:
                        a = void 0 !== t.tags_type && 1 == t.tags_type ? "/popular-tags/vector" : "/popular-tags/png-clipart";
                        break;
                    case 3:
                        a = "/popular-tags/icons";
                        break;
                    case 6:
                        a = "/popular-tags/ppt";
                        break;
                    case 2:
                        a = "/popular-tags/background";
                        break;
                    default:
                        a = ""
                }
                if ("" != a) {
                    var n = $(".goole-tags");
                    n.attr("href", a), n.show(), console.log(1)
                }
            }
        }), $(".head-notice-div").on("click", ".clean-all", function() {
            Pngtree.BaseFun.Ga_Deploy("Head_navigation", "Notice", "clean_all");
            var t = $(this);
            $.getJSON("/api/message/allread", function(e) {
                t.parents(".head-notice-div").find(".clean_all span").remove(), t.parents(".head-notice-div").find(".infor-box ul").remove()
            })
        }), $(".head-notice-div").on("click", ".btn-view", function() {
            Pngtree.BaseFun.Ga_Deploy("Head_navigation", "Notice", "Select_Row");
            var a = $(this);
            return $.post("/api/message/isread", {
                nid: a.data("notice"),
                _csrf: csrf
            }, function(e) {
                var t = a.parents(".head-notice-div").find(".clean_all span").html() - 1;
                t <= 0 ? (a.parent("li").remove(), a.parents(".head-notice-div").find(".clean_all span").remove()) : (a.parents(".head-notice-div").find(".clean_all span").html(t), a.parent("li").remove())
            }), !0
        }), $(".popup-contactus").on({
            blur: function() {
                $this = $(this), $this.siblings(".dropDown-typeList").removeClass("on"), setTimeout(function() {
                    "" == $.trim($this.val()) ? ($this.addClass("warning"), $this.siblings(".label-title").removeClass("on")) : $this.removeClass("warning")
                }, 300)
            },
            focus: function() {
                $(this).siblings(".label-title").addClass("on"), $(this).siblings(".dropDown-typeList").addClass("on")
            }
        }, "input"), $(".dropDown-typeList").on("click", "li", function() {
            var e = $(this).text(),
                t = $(this).data("id");
            $(".cu-type").val(e), $(".cu-type").attr("data-id", t), $(this).parents(".dropDown-typeList").removeClass("on")
        }), $(".side-feedback").on("click", function() {
            Pngtree.publicPopup("popup-contactus-bg", "popup-contactus", "620")
        }), $(".popup-contactus .btn-send").on("click", function() {
            var e = $.trim($("input[name='username']").val()),
                t = $.trim($("input[name='mail']").val()),
                a = $.trim($(".cu-type").data("id")),
                n = $(".input-list textarea").val(),
                i = $(this);
            return "" == n ? alert("Please fill in the proposal") : Pngtree.BaseFun.Base_IsEmail(t) ? $(this).hasClass("locading") || ($(this).addClass("locading"), $.ajax({
                type: "post",
                data: {
                    message: n,
                    email: t,
                    username: e,
                    topic: a,
                    _csrf: csrf
                },
                url: "/api/message/contact-us",
                dataType: "json",
                success: function(e) {
                    1 == e.rsp ? (alert("Thank you for your message."), $("input[name='username']").val(""), $("input[name='mail']").val(""), $(".input-list textarea").val(""), $(".cu-type").val(""), $(".dropDown-typeList").removeClass("on"), $(".label-title").removeClass("on"), $(".btn-Cpmclose").trigger("click")) : alert("Failed to submit"), i.removeClass("loading")
                }
            })) : alert("Please enter the correct email address"), !1
        }), $(".contact-foot").on("click", function() {
            Pngtree.publicPopup("popup-contactus-bg", "popup-contactus", "620")
        }), $("#side-navigation").on("click", ".side-share", function() {
            if (!Pngtree.BaseFun.IsLogin(2)) return !1;
            $.post("/api/share/side", {
                _csrf: csrf
            }, function(e) {
                -1 == e.status ? Pngtree.BaseFun.IsLogin() : 200 == e.status ? $("#downastrict-6").fadeIn(200) : 201 == e.status && ($("#base-share-success").html(e.data).fadeIn(200), $(".pop-share").css({
                    top: 0,
                    left: 0,
                    height: "447px",
                    width: "648px",
                    opacity: 1
                }))
            }, "json")
        }), $("#share-facebook-down").on("click", function() {
            Pngtree.BaseFun.Base_OpenWin("/api/share/fb-share", "fb-share")
        }), Pngtree.BaseFun.base_close_limit = function() {
            $("#downastrict-6").fadeOut(200), $("#side-navigation .side-share").trigger("click")
        }, $("#share-twitter-down").on("click", function() {
            $.post("/api/share/twitter-share", {
                _csrf: csrf
            }, function(e) {
                if (200 == e.status) Pngtree.BaseFun.base_close_limit();
                else if (-1 == e.status && !Pngtree.BaseFun.IsLogin()) return !1
            }, "json")
        }), $("#secret-activity").click(function() {
            $(this).fadeOut(200)
        }), $(".search-box-input").on("focus", function() {
            var e = $(this).parents(".serach-box").find(".search-type a.on").data("type"),
                t = $.trim($(this).val());
            $.getJSON("/api/index/get-keywords", {
                type: e,
                keyword: t
            }, function(e) {
                200 == e.status && "" != e.data && ($(".comment-search-dropdown-wrap").children(".search-dropdown").html(e.data), $(".comment-search-dropdown-wrap").show())
            })
        }), $(document).delegate("img", "contextmenu", function(e) {
            e.preventDefault()
        }), $("#side-navigation").on("click", ".activity-small-banner", function() {
            $.post("/api/statistics/activity-banner", {
                type: 3,
                _csrf: csrf
            }, function(e) {})
        }), $("#wrapper").on("click", ".ga-c", function() {
            var e = $(this).data("ga");
            void 0 === e && (e = $(this).parents(".ga-c").data("ga"));
            var t = e.split("|");
            1 == t.length ? ga("pngtree.send", "event", t[0], "click") : 2 == t.length && (Pngtree.BaseFun.Ga_Deploy("Head_navigation", t[1], "click"), $.getJSON("/api/statistics/head-click", {
                type: t[1]
            }), ga("pngtree.send", "event", t[0], "click", t[1]))
        }), Pngtree.BaseFun.FaccTalk(".sp-msg"), $("#date_enter_referral").on("click", function() {
            $.post("/api/statistics/referral-enter", {
                _csrf: csrf,
                type: "alert"
            }, function(e) {})
        }), $("[data-enter_referral]").on("click", function() {
            $.post("/api/statistics/referral-enter", {
                _csrf: csrf,
                type: $(this).data("enter_referral")
            }, function(e) {})
        }), $("span[data-referral='3']").on("click", function() {
            $.post("/api/activity/referral-alert", {
                type: 1,
                _csrf: csrf
            }, function(e) {})
        }), $(".seo-alert-back").on("click", function() {
            ga("pngtree.send", "event", "detail-seo-back", "click")
        }), $(".quick-login-btn,.another-login-btn").on("click", function() {
            var e = localStorage.getItem("quick_login_email"),
                t = localStorage.getItem("quick_login_email_pwd");
            if (Pngtree.BaseFun.Ga_Deploy("Login", "Quick_login_btn", "click"), "" != e && "" != t) {
                var a = localStorage.getItem("quick_login_username"),
                    n = localStorage.getItem("quick_login_head_img");
                null != a && null != n ? ($(".quick-login-img img").attr("src", n), $(".quick-login-username").text(a), $(".quick-login-btn").parents("form").toggle(), $(".quick-login-box").toggle()) : $.post("/api/login/quick-login", {
                    email: e,
                    email_pwd: t,
                    _csrf: csrf
                }, function(e) {
                    e.data ? (localStorage.setItem("quick_login_username", e.data.username), localStorage.setItem("quick_login_head_img", e.data.head_img), $(".quick-login-img img").attr("src", e.data.head_img), $(".quick-login-username").text(e.data.username), $(".quick-login-btn").parents("form").toggle(), $(".quick-login-box").toggle()) : alert("Sorry, the system is busy")
                }, "json")
            }
        }), $(".quick-login-img").on("click", function() {
            var e = localStorage.getItem("quick_login_email"),
                t = localStorage.getItem("quick_login_email_pwd");
            Pngtree.BaseFun.Ga_Deploy("Login", "Quick_login_btn", "Login"), "" != e && "" != t && $.post("/api/login/quick-login-ver", {
                email: e,
                email_pwd: t,
                _csrf: csrf
            }, function(e) {
                e.rep ? window.location.reload(!0) : alert("Sorry, the system is busy")
            }, "json")
        }), $("#design").on("click", function() {
            $(this).slideUp("slow"), $.getJSON("/api/activity/act-enter-show", function(e) {})
        }), $(".head-face-group").on("click", function() {
            ga("pngtree.send", "event", "head-pull", "click", "facebook-group")
        }), $(".new-link").on("click", function() {
            var e = $(this).data("type");
            1 == e && ga("pngtree.send", "event", "activity-banner", "click", "index"), 2 == e && ga("pngtree.send", "event", "activity-banner", "click", "detail")
        }), $(".share-one").on("click", function() {
            var e = $(this).data("type");
            Pngtree.BaseFun.Ga_Searh("Twitter", e)
        }), $(".share-two").on("click", function() {
            var e = $(this).data("type");
            Pngtree.BaseFun.Ga_Searh("Facebook", e)
        }), $(".share-three").on("click", function() {
            var e = $(this).data("type");
            Pngtree.BaseFun.Ga_Searh("Pinterest", e)
        }), $(".vk-btn").on("click", function() {
            var e = $(this);
            document.write(e.button(!1, {
                type: "custom",
                text: '<img src="https://vk.com/images/share_32.png" width="32" height="32" />'
            }))
        }), "ppt" == controll_name) {
        if (!no_bot) return !1;
        addLoadEvent(function() {
            Pngtree.BaseFun.pngtree_event("ppt_load_page", 1, pageGroup)
        })
    }
    var e, t, n, i;
    $(".side-card-contain a[data-share]").on("click", function() {
        var e, t, a, n = $(this).data("share");
        switch ($.getJSON("/api/activity/referral-share", {
            type: n
        }), n) {
            case "sidelk":
                t = $(".side-card-copytext").text(), (a = document.createElement("input")).value = t, document.body.appendChild(a), a.select(), document.execCommand("Copy"), a.className = "oInput", a.style.display = "none", $(".side-card-contain a[data-share='sidelk']").html("Copied");
                break;
            case "sidefb":
                Pngtree.BaseFun.Base_OpenWin($(this).data("url"), "fb-share");
                break;
            case "sideme":
                e = $(this).data("url"), FB.ui({
                    method: "send",
                    link: e
                })
        }
    }), window.fbAsyncInit = function() {
        FB.init({
            appId: "141858443049568",
            autoLogAppEvents: !0,
            xfbml: !0,
            version: "v3.0"
        })
    }, e = document, t = "facebook-jssdk", i = e.getElementsByTagName("script")[0], e.getElementById(t) || ((n = e.createElement("script")).id = t, n.src = "https://connect.facebook.net/en_US/sdk.js", i.parentNode.insertBefore(n, i)), $(".fixed-coupon-box").on("click", function() {
        Pngtree.BaseFun.Ga_Deploy("Coupon", "Side", "click"), $.getJSON("/api/activity/come-ip", {
            type: 3
        })
    }), $(".fixed-coupon-close").on("click", function() {
        $.getJSON("/api/async/activity-banner-show-close"), $(".fixed-coupon").hide()
    }), $("#v2-head").on("click", ".designer-project", function() {
        Pngtree.BaseFun.Ga_Deploy("Head_navigation", "Contributor_Project", "click")
    }), $("#v2-head").on("click", ".language", function() {
        var e = $(this).data("type");
        Pngtree.BaseFun.Ga_Deploy("Head_navigation", "Language_list", e)
    }), $("#v2-head").on("click", ".user-img", function() {
        Pngtree.BaseFun.Ga_Deploy("Head_navigation", "User_HeadImg", "click")
    }), $("#v2-head").on("click", ".join-btn", function() {
        Pngtree.BaseFun.Ga_Deploy("Head_navigation", "Join_Our_Premium", "click")
    }), $("#v2-head").on("click", ".head-face-group", function() {
        Pngtree.BaseFun.Ga_Deploy("Head_navigation", "FaceBook_Group", "click")
    }), $("#v2-head").on("click", ".head-gift-btn", function() {
        Pngtree.BaseFun.Ga_Deploy("Head_navigation", "Referral_Program", "click")
    }), $("#v2-head").on("click", ".favorites-click", function() {
        Pngtree.BaseFun.Ga_Deploy("Head_navigation", "My_Favorites", "click")
    }), $("#v2-head").on("click", ".down-click", function() {
        Pngtree.BaseFun.Ga_Deploy("Head_navigation", "My_Downloads", "click")
    }), $("#v2-head").on("click", ".subscriptions-click", function() {
        Pngtree.BaseFun.Ga_Deploy("Head_navigation", "Subscriptions", "click")
    }), $("#v2-head").on("click", ".logout-click", function() {
        Pngtree.BaseFun.Ga_Deploy("Head_navigation", "login_out", "click")
    }), $("#v2-foot").on("click", ".foot-language .language", function() {
        var e = $(this).data("type");
        Pngtree.BaseFun.Ga_Deploy("Bottom_navigation", "Language_list", e)
    }), $("#v2-foot").on("click", ".foot-pngtree a", function() {
        var e = $(this).data("type");
        Pngtree.BaseFun.Ga_Deploy("Bottom_navigation", e, "click")
    }), $("#v2-foot").on("click", ".foot-help a", function() {
        var e = $(this).data("type");
        Pngtree.BaseFun.Ga_Deploy("Bottom_navigation", e, "click")
    }), $("#v2-foot").on("click", ".foot-legal a", function() {
        var e = $(this).data("type");
        Pngtree.BaseFun.Ga_Deploy("Bottom_navigation", e, "click")
    }), $("#v2-foot").on("click", ".foot-follow .foot-btn-fb", function() {
        var e = $(this).data("type");
        Pngtree.BaseFun.Ga_Deploy("Bottom_navigation", e, "click")
    }), $(".share-group-btn").on("click", ".share-user-btn", function() {
        $.getJSON("/api/share/user-center", {
            _csrf: csrf
        })
    }), 0 != alert_privilege && ($("#level-up").on("click", ".levelUp-window-close", function() {
        $("#level-up").hide()
    }), $("#level-up").on("click", ".levelUp-window-link", function() {
        Pngtree.BaseFun.pngtree_event("click_user_level_up", 1, "level_" + alert_privilege)
    }), $("#level-up").show(), addLoadEvent(function() {
        Pngtree.BaseFun.pngtree_event("user_level_up", 1, "level_" + alert_privilege)
    }))
});