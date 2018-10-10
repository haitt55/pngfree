<?php
    use App\Helpers\General;
    use App\Models\Category;
    use App\Models\Image;
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
                            href="{{ route('home') }}?id=MzYwMjc2NQ==&amp;type=1"
                            class="hs-downPng down-jpg-click element-click">
                        <i></i>PNG</a>
                        <a target="_blank" data-ga="{{ $images['id'] }}_PSD" rel="nofollow"
                            href="{{ route('home') }}?id=MzYwMjc2NQ==&amp;type=2"
                            class="hs-downEps down-rar-click element-click">
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
<div class="tkw-window " id="downastrict-ppt" style="display:none">
    <div class="tkw-mask"></div>
    <div class="tkw-main">
        <div class="tkw-dlimitCont ">
            <span class="cls-btn"></span>
            <i class="dlimit-ico"></i>
            <h3>Only For Premium User</h3>
            <p>Join Premium and get 4 millions graphics resource from $19.9</p>
            <a href="{{ route('home') }}?b=2" target="_blank" class="bepUser-btn">Join now</a>
        </div>
    </div>
</div>
<div class="qbweb-win" id="base-new-version" style="display: none;"></div>
<!-- 引导页 -->
<!--意见反馈弹窗-->
<div class="qbweb-win popup-contactus-bg" style="display: none">
    <div class="win-table">
        <div class="win-cell">
            <div class="popup-contactus">
                <span class="close-btn tran btn-Cpmclose"></span>
                <h3>Contact us</h3>
                <p>We're always happy to hear from you, We are looking forward to hear your suggestions and
                    feedback.
                </p>
                <div class="input-list">
                    <span class="label label-title">Name</i>
                    </span>
                    <input type="text" name="username" class="cu-input" placeholder="">
                </div>
                <div class="input-list">
                    <span class="label label-title">E-mail</i>
                    </span>
                    <input type="text" name="mail" class="cu-input" type="email" placeholder="">
                </div>
                <div class="input-list input-Typelist">
                    <span class="label label-title">Topic</i>
                    </span>
                    <input type="text" name="topic" class="cu-input cu-type" data-id="" placeholder="">
                    <div class="dropDown-typeList">
                        <ul>
                            <li data-id="1">Cooperation</li>
                            <li data-id="2">Account</li>
                            <li data-id="3">Download</li>
                            <li data-id="4">Infringement</li>
                            <li data-id="5">Others</li>
                        </ul>
                    </div>
                </div>
                <div class="input-list">
                    <textarea id="contact_text" cols="30" rows="10" class="cu-input"
                        placeholder="I would like to talk about..."></textarea>
                </div>
                <a href="javascript:;" class="btn-send">Send Message</a>
            </div>
        </div>
    </div>
</div>
<!--//意见反馈弹窗 end-->
<div class="new-win_premium" style="display: none;">
</div>
<div class="tkw-window " id="base-public-login" style="display: none;">
    <div class="tkw-mask"></div>
    <div class="tkw-main">
        <!--登陆弹窗-->
        <div class="tkw-LoginCont rlg-main quick-login-cont">
            <span class="cls-btn"></span>
            <div class="rlg-with-box">
                <p class="big-tit">Login vectorpng</p>
                <p class="small-tit">with your social network.</p>
                <div class="share-website clearfix ">
                    <div class="share-website clearfix ">
                        <a href="{{ route('auth.social_redirect', ['provider' => 'google']) }}" class="btn-google  fl-l">
                        <i class="icon-google"></i>Google</a>
                        <a href="{{ route('auth.social_redirect', ['provider' => 'facebook']) }}" class="btn-facebook fl-l">
                        <i class="icon-facebook"></i>Facebook</a>
                        <a href="{{ route('auth.social_redirect', ['provider' => 'twitter']) }}" class="btn-twitter  fl-l">
                        <i class="icon-twitter"></i>Twitter</a>
                    </div>
                </div>
            </div>
            <div class="fg-line"> or</div>
            <!-- 快速登录部分 -->
            <div class="quick-login-box" style="display: none;">
                <div class="quick-login-inner">
                    <a href="javascript:;">
                        <div class="quick-login-img">
                            <img src="#" alt="">
                        </div>
                        <p class="quick-login-username"></p>
                    </a>
                </div>
                <p class="wx-prompt">
                    <a href="javascript:;" class="another-login-btn">Login with another account</a>
                    <span class="fl-r">Not a member?
                    <a href="javascript:;" id="base-reg-trigger" class="reg-trigger">Register</a>
                    </span>
                </p>
            </div>
            <!-- 其他账号登录部分 -->
            <form action="{{ route('auth.login') }}" class="form-login">
                @csrf
                <input type="email" maxlength="100" id="base-public-login-email-text" placeholder="Email" name="email" />
                <input type="password" maxlength="20" id="base-public-login-password-text" placeholder="Password" class="pwdPut" name="password"/>
                <input type="checkbox" id="remember-me" checked="checked" name="remember"><label class="remember-me" for="remember-me">Remember me</label>
                <button class="ipt-btn" id="btn-login" type="submit" />Login</button>
                <p class="wx-prompt">
                    <a href="password/find.html" style="" class="reg-trigger">Reset my password</a>
                    <span class="fl-r">Not a member?
                    <a href="javascript:;" id="base-reg-trigger" class="reg-trigger">Register</a>
                    </span>
                </p>
            </form>
        </div>
    </div>
</div>
<!--新注册弹窗-->
<div class="tkw-window " id='base-register-window' style="display: none;">
    <div class="tkw-mask"></div>
    <div class="tkw-main">
        <!--新注册弹窗-->
        <div class="tkw-registerCont rlg-main" style="display: block;">
            <span class="cls-btn"></span>
            <div class="rlg-with-box">
                <p class="big-tit">Register vectorpng</p>
                <p class="small-tit">
                </p>
                <div class="share-website clearfix ">
                    <a href="{{ route('auth.social_redirect', ['provider' => 'google']) }}" class="btn-google  fl-l">
                    <i class="icon-google"></i>Google</a>
                    <a href="{{ route('auth.social_redirect', ['provider' => 'facebook']) }}" class="btn-facebook fl-l">
                    <i class="icon-facebook"></i>Facebook</a>
                    <a href="{{ route('auth.social_redirect', ['provider' => 'twitter']) }}" class="btn-twitter  fl-l">
                    <i class="icon-twitter"></i>Twitter</a>
                </div>
            </div>
            <div class="fg-line">
                or
            </div>
            <form action="{{ route('auth.register') }}" class="form-register">
                @csrf
                <input type="text" id="base-public-login-username-regiser-text" maxlength="255"
                    placeholder="Name" name="name"/>
                <input type="email" id="base-public-login-email-regiser-text" maxlength="100"
                    placeholder="Email" name="email"/>
                <input type="password" id="base-public-login-password-regiser-text" maxlength="20"
                    placeholder="Password" class="pwdPut" name="password"/>
                <button class="ipt-btn" id="btn-register" type="submit" />Register</button>
            </form>
            <p class="wx-prompt">Already have an account?
                <a href="javascript:;" id="base-login-trigger" class="login-trigger">Log in</a>
            </p>
        </div>
        <!--注册成功弹窗-->
        <div class="register-success rlg-main" style="display: none;">
            <span class="cls-btn"></span>
            <p class="big-tit">Thank you!</p>
            <p class="small-tit"> Thank you for choosing vectorpng, we already sent you an
                <br/>email within a verification link, please click the link to
                <br/> finish the registration. If you haven't received the email
                <br/> in 1 minute, please click the resend button,
                <br/> we will send you another email.
                <a id="base-retry-send-email" href="javascript:;" target="_blank">Resend</a> to try again. 
            </p>
            <a id="base-verified" href="javascript:;" class="verified-btn">Verified</a>
        </div>
    </div>
</div>
<div class="tkw-window" id="downastrict-2" style="display: none;">
    <div class="tkw-mask"></div>
    <div class="tkw-main" 0>
        <div class="tkw-dlimitCont">
            <span class="cls-btn"></span>
            <i class="dlimit-ico"></i>
            <h3>Upgrade to Premium for unlimited downloading.</h3>
            <p>You have reached your daily download limit as free user.</p>
            <a href="{{ route('home') }}?b=3" target="_blank" class="bepUser-btn">Become a Premium user</a>
        </div>
    </div>
</div>
<div class="tkw-window" id="downastrict-3" style="display: none;">
    <div class="tkw-mask"></div>
    <div class="tkw-main">
        <div class="tkw-dlimitCont">
            <span class="cls-btn"></span>
            <i class="dlimit-ico"></i>
            <h3>Because the server is under too much pressure, please download it later. Thank you.</h3>
        </div>
    </div>
</div>
<div class="tkw-window" id="downastrict-4" style="display: none;">
    <div class="tkw-mask"></div>
    <div class="tkw-main">
        <div class="tkw-dlimitCont">
            <span class="cls-btn"></span>
            <i class="dlimit-ico"></i>
            <h3>Upgrade to Premium for unlimited downloading.</h3>
            <p>You have reached your daily download limit as Basic user.</p>
            <a href="{{ route('home') }}?b=4" class="bepUser-btn">Become a Premium user</a>
        </div>
    </div>
</div>
<div class="qbweb-win" id="base-download-confirm" style="display: none;">
    <div class="win-table">
        <div class="win-cell">
            <div class="updold-login">
                <span class="close-btn"></span>
                <h3><a href="javascript:;" class="logo" style="margin-right: auto;"></a></h3>
                <div class="ul-center">
                    <p>Millions PNG images for free download</p>
                    <!--                    <a id="base-download-confirm-true" target="_blank" href="javascript:;"><span class="ulc-one">Free Download</span> <span class="ulc-two">-->
                    <!-- downloads/day</span></a>-->
                    <a id="base-download-confirm-true" target="_blank" href="javascript:;"><span
                        class="ulc-one">Free Download</span> <span class="ulc-two">0 free downloads left today</span></a>
                </div>
                <p>Upgrade to Premium for unlimited downloading</p>
                <a target="_blank" href="{{ route('home') }}?b=5" class="download">Premium Download</a>
            </div>
        </div>
    </div>
</div>
<div class="tkw-window" id="downastrict-6" style="display: none">
    <div class="tkw-mask"></div>
    <div class="tkw-main">
        <div class="share-pay">
            <span class="cls-btn"></span>
            <div class="sp-top">
                <a href="javascript:;"></a>
            </div>
            <div class="sp-center">
                <p>Share to social media and enjoy 5 downloads chance!</p>
                <div class="sp-two">
                    <a href="javascript:;" id="share-messenger-down" class="sp-msg">
                    <i></i>Messenger</a>
                    <a href="javascript:;" id="share-facebook-down" class="sp-t1"><i></i>Facebook</a>
                    <a target="_blank"
                        href="https://twitter.com/home?status=@pngtree%20-Free%20design%20materials%20for%20all%20designers.%20Please%20Check%20It%20Out!%23designers%20%23graphicdesign%20%23pngtree%20https://pngtree.com/?u=0"
                        id="share-twitter-down" class="sp-t2"><i></i>Twitter</a>
                </div>
                <p class="p-add">Tip: Friends registered via your share.</p>
                <p class="p-add">You will win 20 extra downloads.</p>
                <p class="sp-one">or</p>
            </div>
            <div class="sp-bottom">
                <p>Upgrade to Premium for unlimited downloading</p>
                <a href="{{ route('home') }}" id="go-to-pay" class="sp-upgrade">Subscribe now</a>
            </div>
        </div>
    </div>
</div>
<div class="qbweb-win" id="base-share-success" style="display: none;"></div>
<div class="hover-window hover-window-novisit" style="display: none">
    <a href="javascript:;" class="close-btn close-hover"></a>
    <div class="hover-window-inner">
        <div class="hover-window-title">
        </div>
        <div class="hover-window-detail">
            No worry!
            <br>
            search more resources.
        </div>
        <div class="hover-window-foot">
            <div class="hover-window-img"></div>
            <a href="{{ route('home') }}" class="hover-window-click seo-alert-back">click here&gt;</a>
        </div>
    </div>
</div>
<div class="tkw-window " id="ppt-singledown" style="display:none;">
    <div class="tkw-mask"></div>
    <div class="tkw-main">
        <div class="tkw-dlimitCont ppt-singledown">
            <span class="cls-btn"></span>
            <i class="dlimit-ico"></i>
            <p class="ppt-price"></p>
            <p>Buy this Powerpoint Template at 3$,</p>
            <p>use it to improve presentation immediately!</p>
            <a href="javascript:;" target="_blank" class="bepUser-btn pay-btn">Buy Now</a>
        </div>
    </div>
</div>
<div class="qbweb-win" id="tpl-download-window" style="display: none;">
    <div class="win-table">
        <div class="win-cell">
            <div class="tpl-download-window">
                <span class="close-btn"></span>
                <div class="download-window-img-wrap">
                    <img src="/v2/images/home/paradrop.png" alt="">
                </div>
                <h4 class="download-window-title">Templates only for Premium member.</h4>
                <p class="download-window-text">Upgrade to premium plan to experience unlimited download.</p>
                <a href="{{ route('home') }}" target="_blank" class="download-window-link">Go Premium</a>
            </div>
        </div>
    </div>
</div>
<div class="tkw-window" id='level-up' style="display: none;">
    <div class="tkw-mask"></div>
    <div class="tkw-main">
        <div class="levelUp-window">
            <div class="levelUp-window-light"></div>
            <span class="levelUp-window-close"></span>
            <a target="_blank" href="{{ route('home') }}" class="levelUp-window-link">
                <div class="levelUp-window-inner">
                    <i class="levelUp-window-toLevel "></i>
                    <h4 class="levelUp-window-title">Congrats!</h4>
                    <p class="levelUp-window-text">
                        Carry on and gain more benefits. Find out more details about our Pngtree's Forest now.
                        <!--                        You have now upgraded from Level <span class="pre"></span> to Level <span class="current"></span>, and by adding <span class="score"></span> points, you can upgrade to Level <span class="next"></span> and keep up the good work!</p>-->
                    </p>
                    <span class="levelUp-window-btn">Discover</span>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection