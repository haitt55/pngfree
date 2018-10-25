<?php
use App\Helpers\General;
use App\Models\Category;
use App\Models\Image;
$categories = General::getCategoryTree();
?>
@extends('layouts.default')
@section('title', 'Detail')
@section('css_class_content', 'page-login')
@section('content_before')
@endsection
@section('content')
    <style>
        [data-pin-log]:after {
            content: ' ';
            width: 150px;
            height: 102px;
            top: -10px;
            left: -10px;
            position: absolute;
        }
    </style>
    <!--<div class="new-go_experience">
        <div class="new-inner">
            <p class="new-tips">NEW <i class="icon-trumpet"></i></p>
            <span class="new-tips-contain">More than 20,000 templates for commercial use</span>
            <a target="_blank" href="/design-templates" class="new-link" data-type="2">Go and check</a>
        </div>
    </div>-->
    <div id="v2-details">
        <div class="clearfix details-box w1200">
            <h1 style="display: none;">Simple Cartoon Halloween design pattern, Fashion, Simplicity, Halloween Free PNG
                and Vector</h1>

            <div class="db-nav">

                <h3>
                    {{ $image->title }} <span style="color: #666;"> Free PNG and Vector</span>
                </h3>

                <div class="detailsearch-wrap">
                    <div class="detailsearch-select" data-type="1">
                        <span class="detailsearch-select-checked">Graphic design</span>
                        <ul>
                            <li class="on" data-type="1">Graphic design</li>
                            <li data-type="2">Backgrounds</li>
                            <li data-type="5">Templates</li>
                            <li data-type="6">Powerpoint</li>
                            <li data-type="3">Icons</li>
                        </ul>
                        <em class="detailsearch-select-triangle"></em>
                    </div>
                    <div class="detailsearch-input"><input id="detailsearch-input" type="text"
                                                           placeholder="Search Graphic Design"></div>
                    <a href="javascript:;" class="detailsearch-btn"><i class="icon-search"></i></a>
                </div>
            </div>


            <div class="fl-l db-leftPic">
                <div class="detail-inner">
                    <h6>
                        <i class="safe-icon"></i>
                        This graphic is free for download, the premium member will have commercial use license. <a
                                target="_blank" href="/pay?b=12" rel="nofollow" class="click-me element-clickme"
                                style="color: #88b04d">Click Here</a> to unlock your commercial use license：）
                    </h6>

                    <div class="dbl-picbox">
                        <span class="commercial-use"></span>
                        <img data-original="{{ $image->thumb }}"
                             title="{{ $image->title }}"
                             alt="{{ $image->title }}"
                             class=""
                             src="{{ $image->thumb }}"
                             style="display: inline-block;">
                        <a class="complain" style="display: none">
                            <i></i>Copyright complaint</a>
                    </div>
                    {{--<div class="detail-inner-footer">--}}
                        {{--Download the free vector graphics to design your artworks which is related to <a--}}
                                {{--style="color:#b9b9b9;" target="_blank" href="/free-png-vectors/fashion">fashion</a>, <a--}}
                                {{--style="color:#b9b9b9;" target="_blank"--}}
                                {{--href="/free-png-vectors/simplicity">simplicity</a>, <a style="color:#b9b9b9;"--}}
                                                                                       {{--target="_blank"--}}
                                                                                       {{--href="/free-png-vectors/halloween">halloween</a>.--}}
                        {{--The simple cartoon halloween design pattern vector file is easy to modify in Adobe Illustrator.--}}
                    {{--</div>--}}
                </div>
                <div class="dl-keyWords  clearfix ele_keyword">
                    {{--<a target="_blank" href="/so/fashion">fashion</a>--}}
                    {{--<a target="_blank" href="/so/simplicity">simplicity</a>--}}
                    {{--<a target="_blank" href="/so/halloween">halloween</a>--}}
                    {{--<a target="_blank" href="/so/phantom">phantom</a>--}}
                    {{--<a target="_blank" href="/so/graphic">graphic</a>--}}
                    {{--<a target="_blank" href="/so/design">design</a>--}}
                    {{--<a target="_blank" href="/so/material">material</a>--}}
                    {{--<a target="_blank" href="/so/color">color</a>--}}
                    {{--<a target="_blank" href="/so/hand-painted">hand painted</a>--}}
                    {{--<a target="_blank" href="/so/cartoon">cartoon</a>--}}
                    {{--<a target="_blank" href="/so/cute">cute</a>--}}
                    {{--<a target="_blank" href="/so/elemental">elemental</a>--}}
                    {{--<a target="_blank" href="/so/style">style</a>--}}
                    {{--<a target="_blank" href="/so/decorative">decorative</a>--}}
                    {{--<a target="_blank" href="/so/monster">monster</a>--}}
                </div>
                <p class="dbl-pictitle">Statement: This image is uploaded by designers.If you find other people shared
                    this work without your permission,please
                    <a href="/dmca_notification" rel="nofollow" class="complains-a ele_report">Report</a> it now and
                    provide relevant evidence for us to do some investigation.If this design belongs to you, we will
                    calculate the downloads of this work to your account. (1,000 downloads=$15)</p>
            </div>
            <div class="fl-r db-rightInfor">
                <!-- infor -->
                <div class="dbr-items">
                    <div class="dbr-infor">
                        <div class="dbr-btnbox clearfix">
                            @include('layouts.includes.big_download_button', array('image' => $image))
                        </div>
                    </div>
                    <div class="detail-un_upgradeInfor">
                        <div class="detail-un_upgradeInfor-list">
                            <p class="detail-un_upgradeInfor-title"><span>Premium membership license</span><a
                                        target="_blank" href="/pay?b=12" rel="nofollow"
                                        style="display:none;">Upgrade</a></p>
                            <ul class="detail-un_upgradeInfo-contain">
                                <li>Outdoor or Print Advertising with circulation/viewership over 500,000</li>
                                <li>Permanent use without times, place, and other limitation</li>
                                <li>Usage in web or print design templates</li>
                            </ul>
                            <a target="_blank" rel="nofollow" href="/copyright-notice"
                               class="detail-un_upgradeInfo-link">Copyright Notice&gt;&gt;</a>
                        </div>
                        <div class="un_upgradeInfor-inner">
                            <p class="p-one">73 Views / 23 Downloads</p>

                            <p class="dbri-p">Category:
                                <span> <a target="_blank" class="element_cate_click"
                                          href="/free-vectors">vectors</a></span>
                            </p>

                            <p>Format:
                                <span>AI</span>
                            </p>

                            <p>AI:
                                <span>72dpi</span>
                            </p>
                            <!-- share -->
                            <div class="dbr-sharebox share-way clearfix">
                                <span class="fl-l">Share this:</span>

                                <div class="share-list fl-l share-group-btn">
                                    <a href="javascript:;"
                                       onclick="Pngtree.BaseFun.Base_OpenWin('https://twitter.com/home?status=Simple+Cartoon+Halloween+design+pattern https%3A%2F%2Fpngtree.com%2Ffreepng%2Fsimple-cartoon-halloween-design-pattern_3610860.html?share=1','twitter-share')"
                                       class="share-one share-user-btn" data-type="1"></a>
                                    <a href="javascript:;"
                                       onclick="Pngtree.BaseFun.Base_OpenWin('https://www.facebook.com/share.php?u=https%3A%2F%2Fpngtree.com%2Ffreepng%2Fsimple-cartoon-halloween-design-pattern_3610860.html?share=2','facebook-share')"
                                       class="share-two share-user-btn" data-type="1"></a>
                                    <a href="javascript:;"
                                       onclick="Pngtree.BaseFun.Base_OpenWin('https://www.pinterest.com/pin/create/button/?url=https%3A%2F%2Fpngtree.com%2Ffreepng%2Fsimple-cartoon-halloween-design-pattern_3610860.html?share=3&amp;media=https://png.pngtree.com/element_our/png_detail/20180829/simple-cartoon-halloween-design-pattern-png_71002.jpg&amp;description=Fashion%2C+simplicity%2C+Halloween%2C+Phantom%2C+graphic%2C+design%2C+material%2C+color%2C+hand-painted%2C+cartoon%2C+cute%2C+elemental%2C+style%2C+decorative%2C+monster','pinterest-share')"
                                       class="share-three share-user-btn" data-type="1"></a>
                                    <!--<a href="javascript:;" onclick="Base_OpenWin('https://www.google.com/bookmarks/mark?op=add&bkmk=https%3A%2F%2Fpngtree.com%2Ffreepng%2Fsimple-cartoon-halloween-design-pattern_3610860.html&title=Simple+Cartoon+Halloween+design+pattern','google-share')" class="share-four"></a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="share-name">
                    <p class="sharer-title">The designer of the work</p>

                    <div class="sharer-avatar">
                        <div class="level-avatar sliver">
                            <a target="_blank" href="/pngtree_2177952?type=1" class="level-avatar-link">
                                <img onerror="this.src='//js2.pngtree.com/user_profile/head_img/014-travel.png'"
                                     src="//js2.pngtree.com/user_profile/head_img/014-travel.png" alt="pngtree">
                            </a>
                            <a href="javascript:;" class="level-avatar-icon-link">
                                <i class="icon-badge"></i>
                            </a>
                        </div>
                    </div>
                    <div class="sharer-info">
                        <a target="_blank" href="/pngtree_2177952?type=1" class="sharer">
                            <span>vectorpng</span>
                        </a>

                        <p class="sharer-have"><span>Works:161</span><span>Fans:47</span><span>Ranking:7</span></p>
                    </div>
                    <a href="javascript:;" data-follow="2177952" class="sharer-follow ">+ FOLLOW</a>
                </div>

                <div class="add-recommend dbr-items ele_recommend">
                    <h3>Related recommendation:</h3>
                    <a target="_blank" href="/free-png-vectors/cartoon-couple" title="cartoon couple">cartoon couple</a>
                    <a target="_blank" href="/free-png-vectors/pattern" title="pattern">pattern</a>
                    <a target="_blank" href="/free-png-vectors/cartoon" title="cartoon">cartoon</a>
                    <a target="_blank" href="/free-png-vectors/halloween" title="halloween">halloween</a>
                    <a target="_blank" href="/free-png-vectors/flower-pattern" title="flower pattern">flower pattern</a>
                    <a target="_blank" href="/free-png-vectors/cartoon-eyes" title="cartoon eyes">cartoon eyes</a>
                    <a target="_blank" href="/free-png-vectors/geometric-pattern" title="geometric pattern">geometric
                        pattern</a>
                    <a target="_blank" href="/free-png-vectors/boy-cartoon" title="boy cartoon">boy cartoon</a>
                    <a target="_blank" href="/free-png-vectors/simple-border" title="simple border">simple border</a>
                    <a target="_blank" href="/free-png-vectors/cartoon-character" title="cartoon character">cartoon
                        character</a>
                </div>
            </div>
        </div>
    </div>
    <div class="details-lists w1520 loaded">
        <div class="main-con ">
            <h3 class="main-headline">View similar design elements <a target="_blank" href="{{route('category.index', array('categorySlug' => $category->slug)) }}"
                                                                      class="btn-more fl-r">MORE</a></h3>

            <div class="main-body recommend-detail-element">
                <ul class="mb-box clearfix tpl-ul">
                    @foreach ($moreImages as $im)
                    <li>
                        <!-- Commercial use -->
                        <span class="commercial-use"></span>
                        <!-- hover -->
                        <div class="hover-show">
                            @include('layouts.includes.download_button', array('image' => $image))
                        </div>
                        <!-- png -->
                        <div class="mb-picbox">
                            <img title="{{ $im->title }}"
                                 data-original="{{ $im->thumb }}"
                                 alt="{{ $im->description }}"
                                 class="" width="100%"
                                 src="{{ $im->thumb }}"
                                 style="display: block;">
                            <a target="_blank" href="{!! route('image.detail', array('categoryPrefix' => 'freepng', 'imageSlug' => $im->slug)) !!}"
                               class="tran">
                            </a>
                        </div>
                        <p class="pic-detail text-overflow">Simple Cartoon Halloween design pattern</p>
                        <!-- infor -->
                        <div class="pic-infor clearfix">
                            <span class="fl-l">1200*1200</span>

                            <span class="fl-r png-star"><i></i>0</span>

                            <span class="fl-r png-down"><i></i>0</span>

                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- 下载弹窗 -->
<div class="qbweb-win bg-buyNow">
    <div class="win-table ">
        <div class="win-cell ">
            <div class="pop-buyNow">
                <span class="close-btn1"></span>

                <p>Only the premium user can have the enhanced license</p>

                <p>subscribing premium plan for authorization.</p>
                <a target="_blank" rel="nofollow" href="/pay?b=8" class="btn-buynow" id="hide">Buy Now</a>
            </div>
        </div>
    </div>
</div>
<!-- 下载弹窗 end -->
<!-- 下载图片弹窗 -->
<div class="qbweb-win bg-domnPng">
    <div class="win-table ">
        <div class="win-cell ">
            <div class="pop-buyNow">
                <span class="close-btn1"></span>

                <p>You have to download the image first.</p>

                <a target="_blank" rel="nofollow" href="" data-type="" class="btn-buynow" id="down-ele-vrf">Download</a>

            </div>
        </div>
    </div>
</div>
<!-- 下下载图片 end -->
<!-- 下载图片填写名字弹窗 -->
<div class="qbweb-win bg-addName">
    <div class="win-table ">
        <div class="win-cell ">
            <div class="pop-buyNow">
                <span class="close-btn1 add-close"></span>

                <p>Actual Name（Required）</p>

                <p>
                    <input type="text" placeholder="Real Name" data-ele_id="3610860" class="addname-input" id="u_name">
                </p>
                <a rel="nofollow" href="javascript:;" class="btn-buynow" id="add_name">Download PRF Agreement</a>
            </div>

        </div>
    </div>
</div>
<!-- 下载图片填写名字弹窗 end -->
<div class="qbweb-win Standard-LicenseBg" id="Standard-LicenseBg" style="">
    <div class="win-table">
        <div class="win-cell">
            <div class="Standard-License">
                <span class="close-btn1 btn-Popclose"></span>

                <h3>Pngtree Standard License</h3>

                <div class="sl-pbox">
                    <p>This file is free for Personal and Commercial use,</p>

                    <p>but you must give attribution in one of the following ways:</p>

                    <p class="sl-icon"><i></i>Video: please add vectorpng.com in the final credits</p>

                    <p class="sl-icon"><i class="icon-print"></i>Print: please add vectorpng.com in the final copy</p>

                    <p class="sl-icon"><i class="icon-web"></i>Web: copy and paste the following code for attribution
                    </p>

                    <p style="font-size:12px;color:#999;margin: 10px auto 0;margin-left: 26px">Free images by &lt;a
                        href="https://vectorpng.com" &gt;vectorpng.com&lt;/a&gt;</p>
                </div>
                <div class="sl-bob">
                    <p style="line-height: 48px;">Don't want to give attribution? </p>
                    <a href="/pay?pay_ref=1">JOIN OUR PREMIUM</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!--  商用元素投诉弹框-->
<div class="qbweb-win complain-for-commercial" style="display: none">
    <div class="win-table">
        <div class="win-cell">
            <div class="complain-form" style="height:auto;">
                <h3>Notification of Breaches of Copyright <span class="close-btn"><i
                                class="iconfont icon-guanbi"></i></span></h3>

                <p style="line-height: 25px;padding-bottom: 25px;">If you are the copyright holder or agent in charge of
                    this and believe that any content on the site vectorpng inflicts copyright of your work, you may
                    submit a notification pursuant to the DMCA to notify standards resources which may pose an
                    infringement of the relevant licenses, all necessary information:
                </p>
                <a href="javascript:;" onclick="window.open('/dmca_notification')" class="btn">DMCA Notices</a>
            </div>
        </div>
    </div>
</div>
<!--  商用元素投诉弹框end-->

<!-- 商用元素投诉提交成功弹框 -->
<div class="qbweb-win popup-thanks" style="display: none">
    <div class="win-table">
        <div class="win-cell">
            <div class="thanks-box">
                <h3>THANKS<span class="close-btn"><i class="iconfont icon-guanbi"></i></span></h3>

                <p>Thank you for your report.<br>We have received your message.</p>
                <a href="" class="btn">SUBMIT</a>
            </div>
        </div>
    </div>
</div>
<!-- 商用元素投诉提交成功弹框 end -->

@endsection
@section('content_after')

@endsection


@section('js')
    <script>
        var csrf = 'Q25zZC1mZ3MiVjYGVzYOP3AWMCtHHFcJCB4CNXk/CB4sKRpcGx4oAQ==',
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
                source_referer = '201',
                sem_id = '0',
                referral_alert = 201,
                controll_name = 'element',
                head_search_type = '1';
    </script>
    <!--参数传递js脚本模块-->

    <script>


        var getInjectData = function () {
            return {
                'search_recommend_word': 'simple#cartoon#halloween#design#pattern',
                'id': 3610860,
                'type': 1,
                'share_id': 0,
                'seo_type': 0,
                'tags_type': 1
            }
        }
    </script>

    <script src="//js2.pngtree.com/v2/js/jquery-1.7.1.min.js?v=201809071207"></script>
    <script src="//js2.pngtree.com/v2/js/v2/base-new.js?v=201809071207"></script>
    <script src="//js2.pngtree.com/v2/js/jquery.flex-images.min.js?v=201809071207"></script>
    <script src="//js2.pngtree.com/v2/js/v2/detail/details.js?v=201809071207"></script>
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