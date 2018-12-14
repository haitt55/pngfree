(function($) {
    $(".element-down-click").click(function(e) {
        e.preventDefault();
        var domAction = $(this);
        if (domAction.data('id-process')) {
            return true;
        }
        domAction.data('id-process', 1);
        $.ajax({
            type:'GET',
            url:'/login/check',
            success:function(data){
                if (data.login == 0) {
                    $("#base-register-window").show().find(".tkw-registerCont").addClass("zoomIn").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend");
                } else {
                    if (data.is_active == 0) {
                        $("#downastrict-notactive").show().addClass("zoomIn").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend");
                    } else {
                        domAction.data('id-process', 0);
                        Sd.getShortLinkImg(e.delegateTarget.href, domAction);
                    }
                }
            },
            complete: function() {
                if (!domAction.data('id-2')) {
                    domAction.data('id-process', 0);
                }
            }
        });
    });
    var Sd = {
        /**
        * get short link by ajax
        */
        getShortLinkImg: function(link, domAction) {
            var that = this;
            if (!link) {
                return null;
            }
            if (!domAction) {
                domAction = $('body');
            }
            if (domAction.data('id-process')) {
                return true;
            }
            domAction.data('id-process', 1);
            domAction.data('id-2', 1);
            $.ajax({
                type: 'GET',
                url: link,
                dataType: 'json',
                success: function (data) {
                    if (data.redirect) {
                        window.location = data.redirect;
                        return true;
                    }
                    if (!data.status) {
                        that.errorAjax(data);
                        return true;
                    }
                    $("#message-cus").find('[data-mc-body="title"]').html(
                        '<a href="'+data.link+'" target="_blank">'+data.link+'</a>'
                    );
                    $("#message-cus").find('[data-mc-body="body"]').html('');
                    $("#message-cus").show().addClass("zoomIn").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend");
                },
                error: function (data) {
                    that.errorAjax(data);
                },
                complete: function() {
                    domAction.data('id-process', 0);
                    domAction.data('id-2', 0);
                }
            });
        },
        errorAjax: function(data) {
            var message;
            if (!data || !data.message) {
                message = 'System error';
            }
            alert(message);
        },
    };
})(jQuery);