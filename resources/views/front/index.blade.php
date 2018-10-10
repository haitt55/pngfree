<?php
use App\Helpers\General;
use App\Models\Category;
use App\Models\Image;
$categories = General::getCategoryTree();
?>
@extends('layouts.default')
@section('title', 'ログイン')
@section('css_class_content', 'page-login')
@section('content_before')
<!-- v2 slideshow -->
<h1 style="display:none;">Pngtree Adds Thousands of Free PNG Images, Vectors, and Backgrounds Every Day</h1>
<div class="new-banner-s"
    style="background: url(/images/bg_logo.jpg) center center no-repeat;">
    <div class="w1520">
        <p class="logo"><a href="{{ route('home') }}" class="Newlogo"></a></p>
        <h2 class="title-main">{{ number_format(General::countAllImage()) }} PNG Images For Free Download</h2>
        <!-- search -->
        <div class="serach-box">
            <div class="sb-items search-type">
                @foreach ($categories as $category)
                <a href="javascript:;" class="@if($loop->first) on @endif" data-type='{{ $category['id'] }}'>{{ $category['name'] }}</a>
                @endforeach
            </div>
            @include('front._partials.search_form')
            <div class="popular-tags">
                <span>Popular tags:</span>
                @foreach($tagsWithNumberOfImages as $tag)
                <a class="rem-click" data-type="flower" href="{{ route('tag.index', array('tagSlug' => $tag['slug'])) }}">{{ $tag['name'] }} <span>({{ $tag['total'] }})</span>
                </a>
                @endforeach
            </div>
        </div>
        <!-- tab -->
        <div class="tab-box clearfix">
            <a class="tab king fl-l clearfix tran" target="_blank" href="#" rel="nofollow"
                data-index-click-type="designer">
                <div class="fl-l link-img"></div>
                <h3>The Expert of Design<span class="to"></span></h3>
                <p>The most professional designer team</p>
            </a>
            <a class="tab download fl-l clearfix tran" target="_blank" href="#" rel="nofollow"
                data-index-click-type="download">
                <div class="fl-l link-img"></div>
                <h3>The Ranking of Download<span class="to"></span></h3>
                <p>Discover the design trend</p>
            </a>
            <a class="tab update fl-l clearfix tran" target="_blank"
                href="free-graphic-design.html?sort=new" rel="nofollow" data-index-click-type="update">
                <div class="fl-l link-img"></div>
                <h3>901 Updated Today<span class="to"></span></h3>
                <p>Daily Updated</p>
            </a>
        </div>
    </div>
    <!--<div class="new-go_experience">
        <div class="new-inner">
            <span class="new-tips-contain">Rock your design, try-out editable commercial fonts</span>
            <a href="/free-fonts" class="new-link" data-type="1">Go experience</a>
        </div>
        </div>-->
</div>
@endsection
@section('content')
<div class="w1520 index-con">
    <!-- Popular album recommended -->
    <div class="index-recommended" style="padding-top:50px!important">
        <h3 class="btn-headline">
            <a href="album.html" target="_blank" class="topic-click" data-type="Popular_Albums">Popular
            Albums</a>
        </h3>
        <ul class="clearfix recommen-box">
            <li>
                <!--                        <img data-original="--><!--"  alt="" class="tran lazy">-->
                <img src="../png.pngtree.com/topic/back/2018/03/29/61e7348b8b8c6bdba8492d5ebf4fb1f4.jpg"
                    alt="" class="tran lazy">
                <!--                        <span></span>-->
                <a class="topic-click" data-type="Summer" href="album/summer_21.html"
                    target="_blank">Summer</a>
            </li>
            <li>
                <!--                        <img data-original="--><!--"  alt="" class="tran lazy">-->
                <img src="../png.pngtree.com/topic/back/2018/07/18/9f8db3fb180dc0f3094eef5fe447d943.png"
                    alt="" class="tran lazy">
                <!--                        <span></span>-->
                <a class="topic-click" data-type="Liquid Gradient" href="album/liquid-gradient_50.html"
                    target="_blank">Liquid Gradient</a>
            </li>
            <li>
                <!--                        <img data-original="--><!--"  alt="" class="tran lazy">-->
                <img src="../png.pngtree.com/topic/back/2018/08/03/4b96bb09b3fa69a3f902118bda032aa4.png"
                    alt="" class="tran lazy">
                <!--                        <span></span>-->
                <a class="topic-click" data-type="Eid al-Adha" href="album/eid-al-adha_52.html"
                    target="_blank">Eid al-Adha</a>
            </li>
            <li>
                <!--                        <img data-original="--><!--"  alt="" class="tran lazy">-->
                <img src="../png.pngtree.com/topic/back/2018/08/02/0596e7144a33672600f6a508d00dc73f.png"
                    alt="" class="tran lazy">
                <!--                        <span></span>-->
                <a class="topic-click" data-type="India Independence Day"
                    href="album/india-independence-day_53.html" target="_blank">India Independence Day</a>
            </li>
            <li>
                <!--                        <img data-original="--><!--"  alt="" class="tran lazy">-->
                <img src="../png.pngtree.com/topic/back/2018/07/05/911386612538981291afad3cab38848a.png"
                    alt="" class="tran lazy">
                <!--                        <span></span>-->
                <a class="topic-click" data-type="Food" href="album/food_49.html" target="_blank">Food</a>
            </li>
            <li>
                <!--                        <img data-original="--><!--"  alt="" class="tran lazy">-->
                <img src="../png.pngtree.com/topic/back/2018/04/03/d9a57d84fd5276e87db61b159b9a802f.jpg"
                    alt="" class="tran lazy">
                <!--                        <span></span>-->
                <a class="topic-click" data-type="Flowers" href="album/flowers_6.html" target="_blank">Flowers</a>
            </li>
            <li>
                <!--                    <img data-original="https://png.pngtree.com/topic/cover/2017/12/21/369fbb19b5c3a44fce25c05433c9c826.jpg" alt="" class="tran lazy">-->
                <img src="../png.pngtree.com/topic/cover/more.jpg" alt="" class="tran lazy">
                <span></span>
                <a target="_blank" class="btn-more topic-click" data-type="More" rel="nofollow"
                    href="album.html"> More>></a>
            </li>
        </ul>
    </div>
    @foreach ($categoryWithImages as $categoryImages)
    @if (General::checkCategory($categoryImages['category']['name']) == Category::GRAPHIC_DESIGN
    || General::checkCategory($categoryImages['category']['name']) == Category::TEMPLATES
    || General::checkCategory($categoryImages['category']['name']) == Category::ART_FONT)
    <!-- Graphic Design -->
    <div class="main-con {{ General::getDivClassIndex($categoryImages['category']['name']) }}">
        <h3 class="main-title">
            <a href="{{ $categoryImages['category']['slug'] }}.html" class="element-click" data-type="Graphic_Design">
            @if(General::checkCategory($categoryImages['category']['name']) == Category::GRAPHIC_DESIGN) Graphic Design @endif
            @if(General::checkCategory($categoryImages['category']['name']) == Category::TEMPLATES) Excellent Templates @endif
            @if(General::checkCategory($categoryImages['category']['name']) == Category::ART_FONT) Editable Art Fonts @endif
            </a>
            <!--                GRAPHIC DESIGN1-->
            <p>{{ $categoryImages['totals'] }}
                @if(General::checkCategory($categoryImages['category']['name']) == Category::GRAPHIC_DESIGN) PNG Images For Free Download @endif
                @if(General::checkCategory($categoryImages['category']['name']) == Category::TEMPLATES) Templates for Download @endif
                @if(General::checkCategory($categoryImages['category']['name']) == Category::ART_FONT) Curated Art Fonts Free Download @endif
            </p>
        </h3>
        <div class="main-body">
            <ul class="mb-box clearfix">
                @foreach ($categoryImages['images'] as $images)
                <li>
                    <!-- Commercial use -->
                    <span class="commercial-use"></span>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-id="{{ $images['id'] }}" data-type="1"
                            class="hs-star  star-btn-click element-click" data-ga="{{ $images['id'] }}_Like">
                        <i></i>
                        </a>
                        <a target="_blank" data-ga="{{ $images['id'] }}_PNG" rel="nofollow"
                           href="{{ route('image.download') }}?id={{ $images['id'] }}&amp;type={{Image::TYPE_PNG}}"
                           class="hs-downPng element-down-click">
                            <i></i>PNG</a>
                        <a target="_blank" data-ga="{{ $images['id'] }}_PSD" rel="nofollow"
                           href="{{ route('image.download') }}?id={{ $images['id'] }}&amp;type={{Image::TYPE_PSD}}"
                           class="hs-downEps element-down-click">
                            <i></i>PSD</a>
                    </div>
                    <!-- png -->
                    <div class="{{ General::getPicBoxClass($categoryImages['category']['name']) }}">
                        <img data-original="{{ $images['thumb'] }}"
                            alt="{{ $images['description'] }}"
                            class="lazy">
                        <a target="_blank" data-ga="{{ $images['id'] }}_ImgUrl"
                            title="{{ $images['title'] }}"
                            href="freepng/{{ $images['slug'] }}"
                            class="tran element-click"></a>
                    </div>
                    <p class="pic-detail text-overflow">{{ $images['title'] }}</p>
                    <!-- infor -->
                    <div class="pic-infor clearfix">
                        @if(General::checkCategory($categoryImages['category']['name']) == Category::GRAPHIC_DESIGN
                        || General::checkCategory($categoryImages['category']['name']) == Category::ART_FONT)
                        <span class="fl-l">1200*1200</span>
                        @endif
                        @if(General::checkCategory($categoryImages['category']['name']) == Category::TEMPLATES)
                        <a class="fl-l infor-name template-click" data-ga="MzU5Nzg4OQ==_DesigerUrl"
                            rel="nofollow" href="pngtree_2177952.html">
                        <img data-original="//js2.pngtree.com/user_profile/head_img/014-travel.png"
                            alt="pngtree" class="lazy"> vectorpng</a>
                        @endif
                        <span class="fl-r png-star">
                        <i></i>0</span>
                        <span class="fl-r png-down">
                        <i></i>0</span>
                    </div>
                </li>
                @endforeach
                <li>
                    <div class="mb-more">
                        <h3>{{ $categoryImages['totals'] }}</h3>
                        <h4>
                            @if(General::checkCategory($categoryImages['category']['name']) == Category::GRAPHIC_DESIGN) PNG Images @endif
                            @if(General::checkCategory($categoryImages['category']['name']) == Category::TEMPLATES) Templates @endif
                            @if(General::checkCategory($categoryImages['category']['name']) == Category::ART_FONT) Curated Art Fonts Free Download @endif
                        </h4>
                        <a target="_blank" href="freepng/Recently-Download.html" data-ga="More"
                            class="mb-Btnmore tran element-click">More</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    @endif
    @if (General::checkCategory($categoryImages['category']['name']) == Category::POWER_POINT)
    <!--        PPT -->
    <div class="main-con ppt-photobox">
        <h3 class="main-title">
            <a href="free-powerpoint-template.html" class="ppt-click" data-ga="Powerpoint_Templates">Powerpoint
            Templates</a>
            <p>{{ $categoryImages['totals'] }} Professional Powerpoint Templates</p>
        </h3>
        <div class="main-body">
            <ul class="clearfix ppt-boxs">
                @for ($i = 0; $i < 4; $i++)
                @if (isset($categoryImages['images'][$i]))
                <?php $image = $categoryImages['images'][$i]; ?>
                <li>
                    <a target="_blank"
                        href="free-powerpoint-template/{{ $image['slug'] }}"
                        title="{{ $image['title'] }}"
                        data-ga="60152_ImgUrl" class="ppt-click">
                    <img class="lazy" src="../js2.pngtree.com/v2/images/lz.gif"
                        data-original="{{ $image['thumb'] }}"
                        alt="{{ $image['title'] }}">
                    </a>
                    <p class="text-overflow">{{ $image['title'] }}</p>
                    <div class="clearfix infor-btnbox">
                        <a href="javascript:;" class="fl-l btn-star">224</a>
                        <a href="javascript:;" class="fl-r btn-down">405</a>
                    </div>
                    <div class="hover-box tran">
                        <a target="_blank" rel="nofollow" data-ga="{{ $image['id'] }}_Down" href="{{ route('home') }}?id=NjAxNTI="
                            class="ppt-click btn-drown template-down-file down-rar-click ppt-down-file "
                            data-id="{{ $image['id'] }}"></a>
                    </div>
                </li>
                @endif
                @endfor
                <li class="mr0">
                    <div class="mb-more">
                        <h3>{{ $categoryImages['totals'] }}</h3>
                        <h4>Powerpoint Templates</h4>
                        <a target="_blank" href="free-powerpoint-templates/more_yestday.html" data-ga="More"
                            rel="nofollow" class="mb-Btnmore tran ppt-click">More</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    @endif
    @if (General::checkCategory($categoryImages['category']['name']) == Category::BACK_GROUND)
    <div class="main-con lb-photobox">
        <h3 class="main-title">
            <a href="free-backgrounds.html" class="back-click" data-ga="Latest_Backgrounds">Latest
            Backgrounds</a>
            <p>{{ $categoryImages['totals'] }} Background Images for Free Download</p>
        </h3>
        <div class="main-body">
            <ul class="clearfix indexBack-box">
                @for ($i = 0; $i < 4; $i++)
                @if (isset($categoryImages['images'][$i]))
                <?php $image = $categoryImages['images'][$i]; ?>
                <li class="vertical">
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" class="back-click hs-star  star-btn-click" data-id="{{ $image['id'] }}"
                            data-type="2" data-ga="{{ $image['id'] }}_Like">
                        <i></i>
                        </a>
                        <a target="_blank" rel="nofollow" href="{{ route('home') }}?id=ODg5MTQz&amp;type=1"
                            data-ga="ODg5MTQz_JPG" class="hs-downPng down-jpg-click ppt-click">
                        <i></i>JPG</a>
                    </div>
                    <div class="bacPng-box">
                        <img data-original="{{ $image['thumb'] }}"
                            alt="{{ $image['title'] }}"
                            class="lazy">
                        <a target="_blank" href="freebackground/{{ $image['slug'] }}"
                            class="tran ppt-click" data-ga="ODg5MTQz_ImgUrl"></a>
                        <p class="text-overflow">{{ $image['title'] }}</p>
                    </div>
                </li>
                @endif
                @endfor
                <li class="vertical mr0">
                    <div class="mb-more">
                        <h3>{{ $categoryImages['totals'] }}</h3>
                        <h4>Background Images</h4>
                        <a target="_blank" href="freebackground/Recently-Download.html" rel="nofollow"
                            data-ga="More" class="mb-Btnmore tran ppt">More</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    @endif
    @if (General::checkCategory($categoryImages['category']['name']) == Category::ICON)
    <!-- Popular Icons -->
    <div class="main-con icons-photobox">
        <h3 class="main-title">
            <a href="free-icon.html" class="icon-click" data-ga="Popular Icons">Popular Icons</a>
            <p>{{ $categoryImages['totals'] }} Icons for Free Unlimited Download</p>
        </h3>
        <div class="main-body">
            <ul class="clearfix indexBack-box">
                @foreach ($categoryImages['images'] as $image)
                <li>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-ga="256_Like" class="icon-click hs-star icon-like-btn "
                            data-type="1" data-id="{{ $image['id'] }}">
                        <i></i>
                        </a>
                    </div>
                    <div class="bacPng-box">
                        <img width="100%" data-original="{{ $image['thumb'] }}"
                            alt="{{ $image['title'] }}" class="lazy">
                        <a rel="nofollow" target="_blank" href="free-icon-packs/{{ $image['slug'] }}"
                            data-ga="{{ $image['id'] }}_ImgUrl" class="tran icon-click"></a>
                        <p class="text-overflow tran">{{ $image['title'] }}k</p>
                    </div>
                </li>
                @endforeach
                <li>
                    <div class="mb-more">
                        <h3>{{ $categoryImages['totals'] }}</h3>
                        <h4>Icons</h4>
                        <a target="_blank" href="free-icon.html" rel="nofollow" data-ga="More"
                            class="mb-Btnmore tran icon-click">More</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    @endif
    @endforeach
</div>
@endsection
@section('content_after')

@endsection


@section('js')
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
<script type="text/javascript" src="{!!asset('js/auth.js')!!}"></script>
@endsection