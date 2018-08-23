// 导航栏随动
function aside(tar,contain,bottom){
    var bottom = bottom || 0 ;
    if(!$(tar)[0]){// 若不存在dom则返回
        return false;
    }
    try {
        var navoffH = $(tar).offset().top // 导航栏距顶部的距离
        var innoffH = $(contain).offset().top // 内容区距顶部的距离
        var navH,innH
    } catch (error) {

    }
    // 窗口大小改变时再次取值
    function _inner(){
        navH = $(tar).innerHeight() // 导航栏的高
        innH = $(contain).innerHeight() // 内容区域的高
    }// 立即执行
    _inner();
    // 添加类
    function _addclass(className,hight){
        if($(window).scrollTop() + 60 >= hight &&
            !$(className).hasClass('scroll')){
            $(className).addClass('scroll')
        }else if($(window).scrollTop() + 60 <= hight &&
            $(className).hasClass('scroll')){
            $(className).removeClass('scroll')
        }
    }
    function _scroll(){
        if(navH + bottom > innH){ // 防止数据过少,随便写的数字
            console.log('too little')
            return ;
        }
        var scrollH = $(window).scrollTop() - navoffH + 40 + 60 // 导航栏随动的值 40:内边距 60:头部悬浮栏
        // 增加删除scroll类
        _addclass(tar,navoffH);
        // 不超出边框
        if($(window).scrollTop() + navH + 60 + bottom >= innoffH + innH){// 248：底部留白区域
            scrollH = innoffH + innH - navH - navoffH + 40 - bottom// 208：留白区域减去头部40内边距
        }
        if($(window).scrollTop() + 60 >= navoffH){
            $(tar).css('top',scrollH)
        }
    }
    // 滚屏事件
    $(window).on('scroll',_scroll)
    // 窗口改变事件
    $(window).on('resize',function(){
        _inner()
        _scroll()
    })
}
aside('.popularalbums-rank-inner','.popularalbums-list',0) // 专辑页
aside('.hotart-list-router','.hotart-list-inner',248) // 字体页
if(location.hash==='#tar'){// 字体页导航直接到到内容区
    $(window).scrollTop(456)
}