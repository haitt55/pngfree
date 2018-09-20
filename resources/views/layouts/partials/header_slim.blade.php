<?php
use App\Helpers\General;

$categories = General::getCategoryTree();
?>

<!-- v2 head -->
<div id="v2-head" class="v2-header">
    <div class="w1520 clearfix">
        <!-- logo -->
        <!-- Topnav -->
        <ul class="fl-l Topnav">
            @foreach ($categories as $category1)
                <li class="@if(\App\Helpers\General::checkCategory($category1['name']) != \App\Category::ART_FONT) pulldown-box @endif
                    ga-c @if ($category1['is_head_red']) head-redbtn @endif" data-ga="head-nav|element">
                    <a href="{{ $category1['slug'] }}.html">{{ $category1['name'] }}</a>
                    @if ($category1['childs'])
                    <div class="
                        @if(\App\Helpers\General::checkCategory($category1['name']) != \App\Category::POWER_POINT
                        && \App\Helpers\General::checkCategory($category1['name']) != \App\Category::ICON)
                            drop-down
                        @else
                            template-pulldown
                        @endif
                    tran">
                        @if(\App\Helpers\General::checkCategory($category1['name']) != \App\Category::POWER_POINT
                        && \App\Helpers\General::checkCategory($category1['name']) != \App\Category::ICON)
                        <ul class="mainCont">
                            @foreach ($category1['childs'] as $category2)
                            <li class="mc-lists @if ($loop->first) on @endif">
                                <a href="{{ $category2['slug'] }}.html" target="_blank" class="btn-classify"
                                   data-type="exquisite">{{ $category2['name'] }}</a>
                                <div class="clearfix vfp-cont  tran">
                                    <h3>
                                        <a href="{{ $category2['slug'] }}.html" target="_blank"> {{ $category2['name'] }} @if ($category2['is_new'])<b
                                                    class="new-tips">NEW</b>@endif</a>
                                    </h3>
                                    @foreach ($category2['childs'] as $category3)
                                        <a href="{{ $category3['slug'] }}.html" target="_blank" title="{{ $category3['name'] }}">{{ $category3['name'] }}</a>
                                    @endforeach
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        @else
                            <div>
                                @foreach ($category1['childs'] as $category2)
                                <a rel="nofollow" href="{{ $category2['slug'] }}.html"  target="_blank" title="{{ $category2['name'] }}">{{ $category2['name'] }}</a>
                                @endforeach
                            </div>
                        @endif
                    </div>
                    @endif
                    @if ($category1['is_head_red'])
                    <div class="red-pull">
                        <a href="{{ $category1['slug'] }}.html" title="">Copyright</a>
                    </div>
                    @endif
                </li>
            @endforeach

            <li class="ga-c" data-ga="head-nav|premium">
                <a href="{{ route('home') }}?b=6" rel="nofollow" class="nav-pricing">PREMIUM
                    <i class="icon-pricing"></i>
                </a>
            </li>


        </ul>
        <!-- right infor -->

        <div class="Top-infor fl-r clearfix">
            <!--设计师上传入口-->
            <div class="ti-credit fl-l desinger-head-btn" style="display: none;">
                <a rel="nofollow" href="upload.html" target="_blank" data-invite-click="button"
                   class="btn-Referral designer-project" style="display:none;">Contributor Project</a>
                <a rel="nofollow" href="https://upload.pngtree.com/?r=upload" target="_blank"
                   data-invite-click="button" class="btn-Referral designer-upload" style="display:none;">Go
                    Upload</a>
            </div>
            <!--设计师上传入口END-->
            <!-- language         -->
            <div class="pulldown-box fl-l pr language-box" style="display: none;">
                <a href="javascript:;" class="lang-right">LANGUAGE</a>

                <div class="template-pulldown tran">
                    <div>
                        <a target="_blank" class="language" data-type="de" href="https://de.pngtree.com/">Deutsch</a>
                        <a target="_blank" class="language" data-type="en" href="{{ route('home') }}">English</a>
                        <a target="_blank" class="language" data-type="es" href="https://es.pngtree.com/">Español</a>
                        <a target="_blank" class="language" data-type="fr" href="https://fr.pngtree.com/">Français</a>
                        <a target="_blank" class="language" data-type="it" href="https://it.pngtree.com/">Italian</a>
                        <a target="_blank" class="language" data-type="pl" href="https://pl.pngtree.com/">Polnisch</a>
                        <a target="_blank" class="language" data-type="pt" href="https://pt.pngtree.com/">Português</a>
                        <a target="_blank" class="language" data-type="ru" href="https://ru.pngtree.com/">русский</a>
                        <a target="_blank" class="language" data-type="vi" href="https://vi.pngtree.com/">Tiếng
                            Việt</a>
                        <a target="_blank" class="language" data-type="th"
                           href="https://th.pngtree.com/">ไทย</a>
                        <a target="_blank" class="language" data-type="hi"
                           href="https://hi.pngtree.com/">हिन्दी</a>
                        <a target="_blank" class="language" data-type="ar" href="https://ar.pngtree.com/">العربية</a>
                        <a target="_blank" class="language" data-type="kor"
                           href="https://kor.pngtree.com/">한국어</a>
                        <a target="_blank" class="language" data-type="jp"
                           href="https://ja.pngtree.com/">日本語</a>
                        <a target="_blank" class="language" data-type="zh"
                           href="https://zh.pngtree.com/">繁體中文</a>

                    </div>
                </div>
            </div>
            <!-- language END -->
            <!-- bell -->
            <div class="Beforelogin-boxs fl-l">
                <a href="javascript:;" class="btn-logo base-public-login-button">Login</a>
                <a href="javascript:;" class="btn-register base-public-register-button">Register</a>
            </div>
        </div>
        <div class="continuous-login-tips keep-login-alert" style="display: none;">
            <a href="javascript:;" class="continuous-login-close"
               onclick="this.parentNode.style.display='none'"></a>

            <div class="continuous-login-img"></div>
            <p class="continuous-login-title">+<span class="keep-title">X</span> Points</p>

            <p class="continuous-login-text">Continuous login for <span class="keep-day">X</span> Days</p>
        </div>
    </div>

</div>
<!--head-->


<!-- v2  Scroll navigation -->
<div id="scroll-Nav" class="v2-header scroll-Nav">
    <div class="w1520 clearfix">
        <!-- logo -->
        <a href="{{ route('home') }}" class="Newlogo fl-l"></a>

        <!--scroll search -->
        <form class="sb-form clearfix fl-l search-box-outer">
            <div class="pulldown-title fl-l">
                    <span class="sb-val">
                        Graphic design                </span>

                <div class="searchItems-list tran serach-box">
                    <ul id="fixed-search-tag" class="sTt-bg search-box-item-li" data-search="top">
                        <p>SEARCH ITEMS </p>
                        @foreach ($categories as $category1)
                            <li>
                                <a href="javascript:;" data-placeholder="Search {{ ucwords($category1['name']) }}" data-type="{{ $category1['id'] }}"
                                   class="@if ($loop->first) on @endif">{{ ucwords($category1['name']) }}</a>
                                @if ($loop->first)<i class="icon-fit"></i>@endif
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <input type="text" placeholder="Search Graphic Design" class="sb-input fl-l search-box-input">

            <div class=" search-dropdown-wrap comment-search-dropdown-wrap" id="search-dropdown-wrap"
                 style="display: none;">
                <div class="search-dropdown head-dop" data-type="headen">
                    <!--<p class="recent-search">
                        <b><i></i>RECENTLY SEARCHED:</b><span>flower</span><span>flower</span><span>flower</span><span>flower</span>
                    </p>-->
                </div>
            </div>
            <a href="javascript:;" class="sb-btn fl-l search-click-btn">
                <i></i>
            </a>
        </form>

        <!-- search search end -->
        <!-- right infor -->
        <div class="Top-infor fl-r clearfix">

            <div class="Beforelogin-boxs fl-l">
                <a href="javascript:;" class="btn-logo base-public-login-button">Login</a>
                <a href="javascript:;" class="btn-register base-public-register-button">Register</a>
            </div>

        </div>
    </div>

</div>
<!-- v2  Scroll navigation end -->
