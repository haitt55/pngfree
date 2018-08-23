@extends('layouts.default')
@section('title', 'ログイン')
@section('css_class_content', 'page-login')
@section('css')
    <link href="v2/css/v2/heart/love-pngf3db.css?v=2018081119" rel="stylesheet">
@endsection
@section('content_before')
    <div class="lpa-ban">
        <!--    <a href="/" target="_blank" class="logo"></a>-->
        <h3>
            <!--        <img src="--><!--/images/lovepng/h3.png" alt="">-->
            <div style="width:1239px;height:127px;display:inline-block;background:url('v2/images/lovepng/h3.png')"></div>
        </h3>
    </div>
    <div class="lpa-two">
        <p>Pngtree was founded in Dec 2016, Shanghai, China Shanghai Huai Tu Network Technology Co., Ltd. </p>
        <p>Pngtree is a trusted community marketplace for all the designers to discover, create,  and find their</p>
        <p>most beautiful design inspiration. Now, We have 4,000,000+ graphics(elements,background,icon and photo)</p>
        <p>for designers to download</p>
    </div>
    <div class="lpa-three">
        <h3>Vision</h3>
        <p>At very beginning of pngtree was founded, we faced different barriers, we hesitated, we </p>
        <p>doubted, once even we wanted to give up, later, one letter changed us. “Thank you </p>
        <p>pngtree,for all the good graphics which helped me in all my design”, we were encouraged </p>
        <p>by one of user’s letter. “Help all the designersin the world to make design easier, faster, </p>
        <p>more creative” then became our vision.</p>
        <ul class="line">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <div class="lpa-four">

    </div>
    <div class="lpa-five">
        <h3>I LOVE PNGTREE</h3>
        <h6>We come from all over the world</h6>
    </div>
    <ul class="lpa-six clearfix">
        <li class="clearfix">
            <div class="fl-l lpas-left">
                <i class="city"></i>
            </div>
            <div class="fl-l lpas-right">
                <h3>Cities</h3>
                <h4>150+</h4>
            </div>
        </li>
        <li class="clearfix">
            <div class="fl-l lpas-left">
                <i class="earth"></i>
            </div>
            <div class="fl-l lpas-right">
                <h3>Countries</h3>
                <h4>42+</h4>
            </div>
        </li>
        <li class="clearfix">
            <div class="fl-l lpas-left">
                <i class="photo"></i>
            </div>
            <div class="fl-l lpas-right">
                <h3>Total Contents</h3>
                <h4>5,563,653+</h4>
            </div>
        </li>
        <li class="clearfix">
            <div class="fl-l lpas-left">
                <i class="perple"></i>
            </div>
            <div class="fl-l lpas-right">
                <h3>Total Members</h3>
                <h4>9,636,824+</h4>
            </div>
        </li>
    </ul>
    <div class="lpa-map">
    </div>
@endsection


@section('js')
    <script>
        var csrf = 'X3Q2THRQcW0PA3AYPDsCKzkybB4VHkIVEEYbfRYUOjgWM3UiJjQAVA==',
                vip_type = '0',
                extra_privilege = 0,
                alert_privilege = 0,
                is_old = 0,
                down_count = '0',
                down_sum = '0',
                lang = 'en',
                STYLE = '//js2.pngtree.com/v2',
                no_bot = 1,
                search_ajax = '201',
                source_referer = '200',
                sem_id = '0',
                referral_alert = 201,
                controll_name = 'index',
                head_search_type = '1';
    </script>
    <!--参数传递js脚本模块-->
    <script>
        var getInjectData = function () {
            return {
                'isAlert': 0,
                'isBack': 0,
                'Country': 0,
            }
        }
    </script>
    <script src="v2/js/v2/base-newf3db.js?v=2018081119"></script>
    <script src="v2/js/v2/indexf3db.js?v=2018081119"></script><!--结束js脚本模块-->
    <script>
        addLoadEvent(function () {
            var g_bda = new Date();
            var g_bd_end = g_bda.getTime();
            var g_bdTime = (g_bd_end - g_bd_begin) / 1000;
            $('.load-page-time').html(g_bdTime);
        });
    </script>
    <script type="text/javascript" src="{!!asset('js/guest/login.js')!!}"></script>
@endsection