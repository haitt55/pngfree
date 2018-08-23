$(function(){
    //隐藏下拉
    $(document).click(function () {
        $('.comment-search-dropdown-wrap').hide();
    });

    //
    $('.search-keyword-box-input').on('focus', function() {
        var type = $(this).data('type');
        var keyword = $.trim($(this).val());

        $.getJSON('/api/index/get-keywords',{type:type,keyword:keyword},function (msg) {
            if(msg.status == 200 && msg.data != ''){
                $('.comment-search-dropdown-wrap').children('.search-dropdown').html(msg.data);
                $('.comment-search-dropdown-wrap').show();
            }
        })
    });
    $('.search-keyword-box-input').on('keyup',function () {
        var keyword = $.trim($(this).val());
        var type = $(this).data('type');
        $.getJSON('/api/index/get-keywords',{type:type,keyword:keyword},function (msg) {
            if(msg.status == 200 && msg.data != ''){
                $('.comment-search-dropdown-wrap').children('.search-dropdown').html(msg.data);
                $('.comment-search-dropdown-wrap').show();
            }else{
                $('.comment-search-dropdown-wrap').hide();
            }
        });
    });



    /**
     * 最近搜索点击
     */

    $(".search-dropdown").on('click','.recent-search span',function () {
        $(this).css("cursor","pointer");
        var keyword = $(this).attr('data-val');
        var type = parseInt($(this).parents('.serach-box').find('.search-type a.on').data('type'));
        Pngtree.BaseFun.SearchClick(type,keyword);
    });


    /**
     * 下拉框点击
     */
    $('.search-dropdown').on('click','p',function () {
        var keyword = $(this).attr('data-val');
        var type = parseInt($(this).parents('.icon-searchBox').find('.search-keyword-box-input').data('type'));
        Pngtree.BaseFun.SearchClick(type,keyword);
    });

    /**
     * 搜索点击
     */
    $('.search-box-input-search').on('click',function(){
        var type = $(this).siblings('.search-keyword-box-input').data('type');
        var keyword = $.trim($(this).siblings('.search-keyword-box-input').val());
        Pngtree.BaseFun.Ga_Searh('SoSearch',type);
        var type_name = 'Element';
        var cate_name = 'Element_Search_Page';
        switch (type)
        {
            case 1:
                type_name = 'Element';
                cate_name = 'Element_Search_Page';
                break;
            case 2:
                type_name = 'Back';
                cate_name = 'Back_Search_Page';
                break;
            case 5:
                type_name = 'Template';
                cate_name = 'Template_Search_Page';
                break;
            case 6:
                type_name = 'PPT';
                cate_name = 'PPT_Search_Page';
                break;
            case 7:
                type_name = 'Font';
                cate_name = 'Element_Search_Page';
                break;
        }
        Pngtree.BaseFun.Ga_Deploy(cate_name,'Search_Bar',type_name);
        Pngtree.BaseFun.SearchClick(type,keyword);
    });

    $('.search-keyword-box-input').on('keydown',function(e){
        if (e.keyCode == 13) {
            $(this).siblings('.search-box-input-search').trigger('click');
            return false;
        }
    });

    var $container = $('.masonry-element');
    if(typeof $container != 'undefined' && $container.length>=1){
        (function () {
            var oW = $(window).width();
            var temp = false;
            $(".masonry-element .li-box img").each(function () {
                var imgH = parseInt($(this).attr("height"));
                $(this).attr('data-height', imgH);
            });
            imgHeight(oW);
            $(window).resize(function () {
                var dW = $(window).width();
                if (oW > 1680 && dW < 1680 || oW >= 1248 && oW <= 1680 && dW > 1680 || oW >= 1248 && oW <= 1680 && dW < 1248 || oW < 1248 && dW > 1248) {
                    oW = dW;
                    temp = true;
                } else {
                    temp = false;
                }
                if (temp) {
                    imgHeight(oW);
                    setTimeout(function () {
                        $('.masonry-element').masonry({
                            itemSelector: '.li-box',
                            gutter: '.gutter-sizer'
                        });
                    }, 280)
                }
            })
        })();

        function imgHeight(oW) {
            var times;
            if (oW > 1680) {
                times = 1;
            } else if (oW >= 1248 && oW <= 1680) {
                times = 0.76;
            } else if (oW < 1248) {
                times = 0.68;
            }
            $(".masonry-element .li-box img").each(function () {
                var imgH = parseInt($(this).attr("data-height"));
                $(this).attr("height", imgH * times);
            })

            if (this.complete) {
                imageLoad($(this))
            } else {
                $(this).load(function () {
                    imageLoad($(this))
                })
            }

            function imageLoad(a) {
                var cardHight = parseInt(a.height());
                var parentBox = a.closest(".card-img");
                if (parentBox.find('img').size() == 1) {
                    var parentHight = parseInt(parentBox.height());
                    if (cardHight < parentHight) {
                        // a.css("margin-top", ((parentHight - cardHight) / 2 + "px"));
                    }
                }
            }
        }

        // $container.imagesLoaded(function() {
        $container.masonry({
            itemSelector: '.li-box',
            // gutter: 20,
            singleMode:true,
            isAnimated: true,
            resizeable: true,
            // percentPosition: true
            // columnWidth: '18.94%'
            // columnWidth: '.grid-sizer',
            gutter: '.gutter-sizer'
        });
        // });
    }

    var container_back = $('#flexBox-images');

    if(typeof container_back != 'undefined' && container_back.length>=1){
        console.log(1);
        setTimeout(function(){
            container_back.flexImages({
                'rowHeight': 280,
                'container': '.bnPic-list',
                'truncate': true
            });
        },500);
    }

    $(".del-data").on('click',function () {
        var id = $(this).data('id');
        var type = $(this).data('type');
        if(!confirm('Did you confirm the deletion?')){
            return false;
        }

        $.getJSON('/api/message/so-delete',{id:id,type:type},function (msg) {
            console.log(msg);
            if(msg.status == 200){
                alert('Delete Success');
                window.location.reload()
            }else{
                alert('Delete Failed');
            }
        });
    });
    //GA部署
    Pngtree.BaseFun.Ga_Deploy_Class('.element-list-click','Element_Search_Page','List','ga');
    Pngtree.BaseFun.Ga_Deploy_Class('.back-list-click','Back_Search_Page','List','ga');
    Pngtree.BaseFun.Ga_Deploy_Class('.ppt-list-click','PPT_Search_Page','List','ga');
    Pngtree.BaseFun.Ga_Deploy_Class('.tem-list-click','Template_Search_Page','List','ga');
    Pngtree.BaseFun.Ga_Deploy_Class('.icon-list-click','Icon_Search_Page','List','ga');
    Pngtree.BaseFun.Ga_Deploy_Class('.hotart-item .item-link','Font_Search_Page','List','ga');
    Pngtree.BaseFun.Ga_Deploy_Class('.item-btn-group .down-jpg-click','Font_Search_Page','List','ga');
    Pngtree.BaseFun.Ga_Deploy_Class('.item-btn-group .down-rar-click','Font_Search_Page','List','ga');
    Pngtree.BaseFun.Ga_Deploy_Href('.element-cate-click a','Element_Search_Page','Cate');
    Pngtree.BaseFun.Ga_Deploy_Href('.back-cate-click a','Back_Search_Page','Cate');
    Pngtree.BaseFun.Ga_Deploy_Href('.ppt-cate-click a','PPT_Search_Page','Cate');
    Pngtree.BaseFun.Ga_Deploy_Href('.icon-cate-click a','PPT_Search_Page','Cate');
    //模板分类
    Pngtree.BaseFun.Ga_Deploy_Class('.main-cate,.father-cate,.style-cate','Template_Search_Page','Cate','name');



});