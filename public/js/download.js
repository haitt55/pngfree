(function() {
    $(".element-down-click").click(function(e) {
        e.preventDefault();
        $.ajax({
            type:'GET',
            url:'/login/check',
            success:function(data){
                if (data.login == 0) {
                    $("#base-register-window").show().find(".tkw-registerCont").addClass("zoomIn").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend");
                } else {
                    window.location = e.delegateTarget.href;
                }
            }
        });
    });
})();