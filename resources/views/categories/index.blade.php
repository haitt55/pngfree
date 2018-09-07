<?php
use App\Helpers\General;

$categories = General::getCategoryTree();
?>
@extends('layouts.default')
@section('title', 'category')
@section('css_class_content', 'page-login')
@section('content_before')
        <!-- v2  Scroll navigation end -->
<h1 style="display:none;">3,461,452 Free Graphic Design PNG, Vectors and PSD Files</h1>
<div id="v2-subpageBan" class="subpageBan">
    <div class="w1520 pr">
        <h3 class="title-main">3,461,452 Free Graphic Design</h3>
        <!-- search -->
        <div class="serach-box">
            <div class="sb-items search-type">
                <a href="javascript:;" class="on" data-type='1'>GRAPHIC
                    DESIGN</a>
                <a href="javascript:;" class="" data-type='2'>BACKGROUNDS</a>
                <a href="javascript:;" data-type='5'>TEMPLATES </a>
                <a href="javascript:;" class="" data-type='6'>POWERPOINT </a>
                <a href="javascript:;" data-type='3'>ICONS</a>
            </div>

            <form class="sb-form clearfix">
                <input type="text" placeholder="Search Graphic Design"
                       class="sb-input fl-l comment-search-keyword-box-input">
                <a href="javascript:;" class="sb-btn fl-l search-box-input-index" data-ga="1">
                    <i></i>
                </a>
                <!--首页搜索推荐下拉框-->
                <div class="search-dropdown-wrap comment-search-dropdown-wrap" id="search-dropdown-wrap">
                    <div class="search-dropdown">

                    </div>
                </div>
                <!--首页搜索推荐下拉框 end-->
            </form>

        </div>
        <p class="bac-p">Download free graphic design PNG images, vectors and PSD files for your design inspiration. </p>
        <p class="bac-p"> PNG, AI, EPS, and PSD format are all available.</p>

    </div>
</div>
@endsection
@section('content')
    <div class="tem-wrapper w1520">
        <!-- mainbav  -->
        <div class="subpage-Mainbav clearfix templates-ban element-cate-click">
            <div class="SM-lists fl-l">
                <a href="free-graphic-design.html" class="on">All</a>
                <a href="commercial-use.html" class="">Royalty free</a>
                <a href="free-png.html" class="">PNG</a>
                <a href="free-vectors.html" class="">Vector</a>
                <a href="free-psd.html" class="">PSD</a>
                <a href="free-clipart.html" class="">Clipart</a>
            </div>
            <div class="SM-lists fl-l">
                <!--                元素商用-->

                <a href="free-graphic-design.html"
                   class="on">All</a>
                <a href="free-animals-png.html"
                        >Animals</a>
                <a href="free-star-png.html"
                        >Star</a>
                <a href="free-music-png.html"
                        >Music</a>
                <a href="free-christmas-png.html"
                        >Christmas</a>
                <a href="free-hearts-png.html"
                        >Hearts</a>
                <a href="free-arrows-png.html"
                        >Arrows</a>
                <a href="free-flower-png.html"
                        >Flower</a>
                <a href="free-tree-png.html"
                        >Tree</a>
                <a href="free-logo-png.html"
                        >Logo</a>
                <a href="free-cars-png.html"
                        >Cars</a>
                <a href="free-people-png.html"
                        >People</a>
                <a href="free-cloud-png.html"
                        >Cloud</a>
                <a href="free-light-png.html"
                        >Light</a>
                <a href="free-ribbons-png.html"
                        >Ribbons</a>
                <a href="free-line-png.html"
                        >Line</a>
                <a href="free-circle-png.html"
                        >Circle</a>
                <a href="free-birthday-png.html"
                        >Birthday</a>
                <a href="free-water-png.html"
                        >Water</a>
                <a href="free-bird-png.html"
                        >Bird</a>
                <a href="free-sun-png.html"
                        >Sun</a>
                <a href="free-grass-png.html"
                        >Grass</a>
                <a href="free-fire-png.html"
                        >Fire</a>
                <a href="free-smoke-png.html"
                        >Smoke</a>
                <a href="free-crown-png.html"
                        >Crown</a>
                <a href="free-explosion-png.html"
                        >Explosion</a>
                <a href="free-autumn-png.html"
                        >Autumn</a>
            </div>
            <div class="SM-lists fl-l">
            </div>

            <div class="SM-lists fl-l">

                <a href="free-graphic-design.html" class="on">Popular</a>
                <a rel="nofollow" href="free-graphic-designd4b4.html?sort=new" class="">New</a>
                <a rel="nofollow" href="free-graphic-designcc30.html?sort=most" class="">Most Download</a>


                <a rel="nofollow" href="freepng/Recently-Download.html"
                   class="">Recently Download</a>


                <a href="free-graphic-design.html" class="all-reight on">All</a>
                <a rel="nofollow" href="free-graphic-designd7f4.html?rf=1" class="">Commercial use</a>
                <!--                背景横图竖图筛选-->
                <!--                背景横图竖图筛选-->


            </div>

        </div>
        <!-- Excellent Templates -->
        <!--imgList-->
        <div class="main-con gd-photobox">

            <div class="main-body">
                <ul class="mb-box masonry-element clearfix tpl-ul">
                    @foreach ($images as $image)
                        <li class="li-box ">
                            <!-- hover -->
                            <div class="hover-show">
                                <a href="javascript:;" class="element-list-click hs-star star-btn-click "
                                   data-ga="{{ $image->id }}_Like" data-id="{{ $image->id }}" data-type="1">
                                    <i></i>
                                </a>

                                <a target="_blank" rel="nofollow" href="index.html?id=MjY4MzA=&amp;type=1" data-t="0"
                                   data-ga="{{ $image->id }}_PNG" class="element-list-click hs-downPng  down-jpg-click ">
                                    <i></i>PNG</a>

                                <a target="_blank" rel="nofollow" data-ga="{{ $image->id }}_PSD"
                                   href="index.html?id=MjY4MzA=&amp;type=2" data-t="0"
                                   class="element-list-click down-jpg-click hs-downEps down-rar-click ">
                                    <i></i>PSD</a>

                            </div>
                            <!-- png -->

                            <div class="mb-picbox" style="">

                                <img data-original="{{ $image->thumb }}"
                                     alt="{{ $image->title }}" class="lazy" style=""
                                     height="260">
                                <a target="_blank" title="{{ $image->title }}" href="freepng/{{ $image->slug }}"
                                   data-ga="26830_ImgUrl" class="tran element-list-click">

                                </a>
                            </div>
                            <p class="pic-detail text-overflow">{{ $image->title }}</p>
                            <!-- infor -->
                            <div class="pic-infor clearfix">

                                <span class="fl-l">1616*1215</span>

                        <span class="fl-r png-star">
                             <i></i>3856</span>
                        <span class="fl-r png-down">
                            <i></i>42963</span>


                            </div>
                        </li>
                        <div class="gutter-sizer"></div>
                    @endforeach
                </ul>
            </div>


            <!-- 分页 -->
            <div class='pageList'>
                <div class='pageCont'><a href='javascript:void(0);' class='prevPage '><i></i></a> <a
                            href='javascript:void(0);' class='on'>1</a> <a rel='nofollow'
                                                                           href='free-graphic-design/2.html'>2</a> <a
                            rel='nofollow' href='free-graphic-design/3.html'>3</a> <a rel='nofollow'
                                                                                      href='free-graphic-design/4.html'>4</a>
                    <a rel='nofollow' href='free-graphic-design/5.html'>5</a> <a rel='nofollow'
                                                                                 href='free-graphic-design/6.html'>6</a>
                    <a rel='nofollow' href='free-graphic-design/7.html'>7</a> <a rel='nofollow'
                                                                                 href='free-graphic-design/8.html'>8</a>
                    <span>…</span> <a rel='nofollow' href='free-graphic-design/200.html'>200</a> <a rel='nofollow'
                                                                                                    href='free-graphic-design/2.html'
                                                                                                    class='nextPage '><i></i></a>
                </div>
            </div>
        </div>
        <!-- Excellent Templates -->
        <!--imgList-->
    </div>
@endsection

@section('content_after')
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