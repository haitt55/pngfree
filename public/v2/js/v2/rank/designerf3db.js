$(function () {
    // nav标签切换
    $('.designer-list .nav-l li').on('click',function(){
        let index=$(this).index();
        $(this).addClass('active').siblings().removeClass('active');
        $('.designer-list>.list-box').eq(index).show().siblings(':not(.nav)').hide();
    });

    //下拉显示隐藏
    $('.designer-list .nav-r').on({
        'mouseover':function(){
            $('.designer-list .down-list').show();
        },
        'mouseout':function(){
            $('.designer-list .down-list').hide();
        }
    })

    //dropdown切换
    $('.designer-list .down-list li').on('click',function(){
        let html=$(this).html();
        $(this).html( $(this).parent().parent().prev().html());
        $(this).parent().parent().prev().html(html);
        $(this).parent().parent().fadeOut(200);
    })
});