@extends('layouts.default')
@section('title', 'ログイン')
@section('css_class_content', 'page-login')
@section('content_before')
<!-- v2 slideshow -->
<h1 style="display:none;">Pngtree Adds Thousands of Free PNG Images, Vectors, and Backgrounds Every Day</h1>

<div class="new-banner-s"
     style="background: url(png.pngtree.com/indexBackground/647b3347c59a0ee8f4236d46ea8c15bb.jpg) center center no-repeat;">
    <div class="w1520">
        <p class="logo"><a href="index.html" class="Newlogo"></a></p>

        <h2 class="title-main">3,524,844 PNG Images For Free Download</h2>
        <!-- search -->
        <div class="serach-box">
            <div class="sb-items search-type">
                <a href="javascript:;" class="on" data-type='1'>GRAPHIC DESIGN</a>
                <a href="javascript:;" data-type='2'>BACKGROUNDS</a>
                <a href="javascript:;" data-type='5'>TEMPLATES </a>
                <a href="javascript:;" data-type='6'>POWERPOINT</a>
                <a href="javascript:;" data-type='3'>ICONS</a>
            </div>

            <form class="sb-form clearfix">
                <input type="text" placeholder="Search Graphic Design"
                       class="sb-input fl-l comment-search-keyword-box-input">
                <a href="javascript:;" class="sb-btn fl-l search-box-input-index">
                    <i></i>
                </a>
                <!--首页搜索推荐下拉框-->
                <div class="search-dropdown-wrap comment-search-dropdown-wrap" id="search-dropdown-wrap">
                    <div class="search-dropdown">

                    </div>
                </div>
                <!--首页搜索推荐下拉框 end-->
            </form>
            <div class="popular-tags">
                <span>Popular tags:</span>
                <a class="rem-click" data-type="flower" href="so/flower.html">flower <span>(251875)</span>
                </a>
                <a class="rem-click" data-type="sport" href="so/sport.html">sport <span>(15401)</span>
                </a>
                <a class="rem-click" data-type="out space" href="so/out-space.html">out space
                    <span>(13578)</span>
                </a>
                <a class="rem-click" data-type="ice cream" href="so/ice-cream.html">ice cream
                    <span>(32378)</span>
                </a>
                <a class="rem-click" data-type="music" href="so/music.html">music <span>(28751)</span>
                </a>
            </div>
        </div>
        <!-- tab -->
        <div class="tab-box clearfix">
            <a class="tab king fl-l clearfix tran" target="_blank" href="designer-rank.html" rel="nofollow"
               data-index-click-type="designer">
                <div class="fl-l link-img"></div>
                <h3>The Expert of Design<span class="to"></span></h3>

                <p>The most professional designer team</p>
            </a>
            <a class="tab download fl-l clearfix tran" target="_blank" href="down-rank.html" rel="nofollow"
               data-index-click-type="download">
                <div class="fl-l link-img"></div>
                <h3>The Ranking of Download<span class="to"></span></h3>

                <p>Discover the design trend</p>
            </a>
            <a class="tab update fl-l clearfix tran" target="_blank"
               href="free-graphic-designd4b4.html?sort=new" rel="nofollow" data-index-click-type="update">
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
    <!-- Graphic Design -->
    <div class="main-con gd-photobox">
        <h3 class="main-title">
            <a href="free-graphic-design.html" class="element-click" data-type="Graphic_Design">Graphic
                Design</a>
            <!--                GRAPHIC DESIGN1-->
            <p>3,524,844 PNG Images For Free Download</p>
        </h3>
        <div class="main-body">
            <ul class="mb-box clearfix">
                <li>
                    <!-- Commercial use -->
                    <span class="commercial-use"></span>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-id="3602765" data-type="1"
                           class="hs-star  star-btn-click element-click" data-ga="3602765_Like">
                            <i></i>
                        </a>
                        <a target="_blank" data-ga="3602765_PNG" rel="nofollow"
                           href="index.html?id=MzYwMjc2NQ==&amp;type=1"
                           class="hs-downPng down-jpg-click element-click">
                            <i></i>PNG</a>
                        <a target="_blank" data-ga="3602765_PSD" rel="nofollow"
                           href="index.html?id=MzYwMjc2NQ==&amp;type=2"
                           class="hs-downEps down-rar-click element-click">
                            <i></i>PSD</a>
                    </div>
                    <!-- png -->
                    <div class="mb-picbox">
                        <img data-original="https://png.pngtree.com/element_our/png/20180814/beautiful-cool-cartoon-lovely-hand-painted-three-dimensional-autumn-leaves-woods-png_59578.png"
                             alt="beautiful cool cartoon lovely hand painted three dimensional autumn leaves woods, Beautiful, Cool, Cartoon PNG and PSD"
                             class="lazy">
                        <a target="_blank" data-ga="3602765_ImgUrl"
                           title="Beautiful cool cartoon lovely hand painted three dimensional autumn leaves woods PNG and PSD"
                           href="freepng/beautiful-cool-cartoon-lovely-hand-painted-three-dimensional-autumn-leaves-woods_3602765.html"
                           class="tran element-click"></a>
                    </div>
                    <p class="pic-detail text-overflow">beautiful cool cartoon lovely hand painted three
                        dimensional autumn leaves woods</p>
                    <!-- infor -->
                    <div class="pic-infor clearfix">
                        <span class="fl-l">1200*1200</span>

                <span class="fl-r png-star">
                            <i></i>0</span>
                <span class="fl-r png-down">
                            <i></i>0</span>
                    </div>
                </li>
                <li>
                    <!-- Commercial use -->
                    <span class="commercial-use"></span>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-id="3599051" data-type="1"
                           class="hs-star  star-btn-click element-click" data-ga="3599051_Like">
                            <i></i>
                        </a>
                        <a target="_blank" data-ga="3599051_PNG" rel="nofollow"
                           href="index.html?id=MzU5OTA1MQ==&amp;type=1"
                           class="hs-downPng down-jpg-click element-click">
                            <i></i>PNG</a>
                        <a target="_blank" data-ga="3599051_AI" rel="nofollow"
                           href="index.html?id=MzU5OTA1MQ==&amp;type=2"
                           class="hs-downEps down-rar-click element-click">
                            <i></i>AI</a>
                    </div>
                    <!-- png -->
                    <div class="mb-picbox">
                        <img data-original="https://png.pngtree.com/element_our/png/20180808/cartoon-hand-painted-animal-baby-design-png_57398.png"
                             alt="Cartoon hand-painted animal baby design, Cartoon, Hand-painted, Simple PNG and Vector"
                             class="lazy">
                        <a target="_blank" data-ga="3599051_ImgUrl"
                           title="Cartoon hand-painted animal baby design PNG and Vector"
                           href="freepng/cartoon-hand-painted-animal-baby-design_3599051.html"
                           class="tran element-click"></a>
                    </div>
                    <p class="pic-detail text-overflow">Cartoon hand-painted animal baby design</p>
                    <!-- infor -->
                    <div class="pic-infor clearfix">
                        <span class="fl-l">1200*1200</span>

                <span class="fl-r png-star">
                            <i></i>11</span>
                <span class="fl-r png-down">
                            <i></i>31</span>
                    </div>
                </li>
                <li>
                    <!-- Commercial use -->
                    <span class="commercial-use"></span>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-id="3600481" data-type="1"
                           class="hs-star  star-btn-click element-click" data-ga="3600481_Like">
                            <i></i>
                        </a>
                        <a target="_blank" data-ga="3600481_PNG" rel="nofollow"
                           href="index.html?id=MzYwMDQ4MQ==&amp;type=1"
                           class="hs-downPng down-jpg-click element-click">
                            <i></i>PNG</a>
                        <a target="_blank" data-ga="3600481_AI" rel="nofollow"
                           href="index.html?id=MzYwMDQ4MQ==&amp;type=2"
                           class="hs-downEps down-rar-click element-click">
                            <i></i>AI</a>
                    </div>
                    <!-- png -->
                    <div class="mb-picbox">
                        <img data-original="https://png.pngtree.com/element_our/png/20180810/cartoon-simple-autumn-pattern-design-png_58456.png"
                             alt="Cartoon simple autumn pattern design, Simple, Hand-painted, Cartoon PNG and Vector"
                             class="lazy">
                        <a target="_blank" data-ga="3600481_ImgUrl"
                           title="Cartoon simple autumn pattern design PNG and Vector"
                           href="freepng/cartoon-simple-autumn-pattern-design_3600481.html"
                           class="tran element-click"></a>
                    </div>
                    <p class="pic-detail text-overflow">Cartoon simple autumn pattern design</p>
                    <!-- infor -->
                    <div class="pic-infor clearfix">
                        <span class="fl-l">1200*1200</span>

                <span class="fl-r png-star">
                            <i></i>10</span>
                <span class="fl-r png-down">
                            <i></i>36</span>
                    </div>
                </li>
                <li>
                    <!-- Commercial use -->
                    <span class="commercial-use"></span>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-id="3595365" data-type="1"
                           class="hs-star  star-btn-click element-click" data-ga="3595365_Like">
                            <i></i>
                        </a>
                        <a target="_blank" data-ga="3595365_PNG" rel="nofollow"
                           href="index.html?id=MzU5NTM2NQ==&amp;type=1"
                           class="hs-downPng down-jpg-click element-click">
                            <i></i>PNG</a>
                        <a target="_blank" data-ga="3595365_EPS" rel="nofollow"
                           href="index.html?id=MzU5NTM2NQ==&amp;type=2"
                           class="hs-downEps down-rar-click element-click">
                            <i></i>EPS</a>
                    </div>
                    <!-- png -->
                    <div class="mb-picbox">
                        <img data-original="https://png.pngtree.com/element_our/png/20180801/beautiful-cartoon-cute-chinese-wind-cut-flower-png_51973.png"
                             alt="Beautiful cartoon cute Chinese wind-cut flower, Beautiful, Colorful, Cartoon PNG and Vector"
                             class="lazy">
                        <a target="_blank" data-ga="3595365_ImgUrl"
                           title="Beautiful cartoon cute Chinese wind-cut flower PNG and Vector"
                           href="freepng/beautiful-cartoon-cute-chinese-wind-cut-flower_3595365.html"
                           class="tran element-click"></a>
                    </div>
                    <p class="pic-detail text-overflow">Beautiful cartoon cute Chinese wind-cut flower</p>
                    <!-- infor -->
                    <div class="pic-infor clearfix">
                        <span class="fl-l">1200*1200</span>

                <span class="fl-r png-star">
                            <i></i>27</span>
                <span class="fl-r png-down">
                            <i></i>164</span>
                    </div>
                </li>
                <li>
                    <!-- Commercial use -->
                    <span class="commercial-use"></span>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-id="3598993" data-type="1"
                           class="hs-star  star-btn-click element-click" data-ga="3598993_Like">
                            <i></i>
                        </a>
                        <a target="_blank" data-ga="3598993_PNG" rel="nofollow"
                           href="index.html?id=MzU5ODk5Mw==&amp;type=1"
                           class="hs-downPng down-jpg-click element-click">
                            <i></i>PNG</a>
                        <a target="_blank" data-ga="3598993_AI" rel="nofollow"
                           href="index.html?id=MzU5ODk5Mw==&amp;type=2"
                           class="hs-downEps down-rar-click element-click">
                            <i></i>AI</a>
                    </div>
                    <!-- png -->
                    <div class="mb-picbox">
                        <img data-original="https://png.pngtree.com/element_our/png/20180808/abstract-paper-cut-background-png_57329.jpg"
                             alt="Abstract paper cut background, Png, Illustration, Art PNG and Vector"
                             class="lazy">
                        <a target="_blank" data-ga="3598993_ImgUrl"
                           title="Abstract paper cut background PNG and Vector"
                           href="freepng/abstract-paper-cut-background_3598993.html"
                           class="tran element-click"></a>
                    </div>
                    <p class="pic-detail text-overflow">Abstract paper cut background</p>
                    <!-- infor -->
                    <div class="pic-infor clearfix">
                        <span class="fl-l">1201*1201</span>

                <span class="fl-r png-star">
                            <i></i>10</span>
                <span class="fl-r png-down">
                            <i></i>20</span>
                    </div>
                </li>
                <li>
                    <!-- Commercial use -->
                    <span class="commercial-use"></span>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-id="3598416" data-type="1"
                           class="hs-star  star-btn-click element-click" data-ga="3598416_Like">
                            <i></i>
                        </a>
                        <a target="_blank" data-ga="3598416_PNG" rel="nofollow"
                           href="index.html?id=MzU5ODQxNg==&amp;type=1"
                           class="hs-downPng down-jpg-click element-click">
                            <i></i>PNG</a>
                        <a target="_blank" data-ga="3598416_AI" rel="nofollow"
                           href="index.html?id=MzU5ODQxNg==&amp;type=2"
                           class="hs-downEps down-rar-click element-click">
                            <i></i>AI</a>
                    </div>
                    <!-- png -->
                    <div class="mb-picbox">
                        <img data-original="https://png.pngtree.com/element_our/png/20180807/simple-business-infographic-elements-with-different-colorful-effect-png_56498.jpg"
                             alt="Simple business infographic elements with different colorful effect, Infographics, Infographics Elements, Element PNG and Vector"
                             class="lazy">
                        <a target="_blank" data-ga="3598416_ImgUrl"
                           title="Simple business infographic elements with different colorful effect PNG and Vector"
                           href="freepng/simple-business-infographic-elements-with-different-colorful-effect_3598416.html"
                           class="tran element-click"></a>
                    </div>
                    <p class="pic-detail text-overflow">Simple business infographic elements with different
                        colorful effect</p>
                    <!-- infor -->
                    <div class="pic-infor clearfix">
                        <span class="fl-l">1200*1200</span>

                <span class="fl-r png-star">
                            <i></i>10</span>
                <span class="fl-r png-down">
                            <i></i>89</span>
                    </div>
                </li>
                <li>
                    <!-- Commercial use -->
                    <span class="commercial-use"></span>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-id="3603012" data-type="1"
                           class="hs-star  star-btn-click element-click" data-ga="3603012_Like">
                            <i></i>
                        </a>
                        <a target="_blank" data-ga="3603012_PNG" rel="nofollow"
                           href="index.html?id=MzYwMzAxMg==&amp;type=1"
                           class="hs-downPng down-jpg-click element-click">
                            <i></i>PNG</a>
                        <a target="_blank" data-ga="3603012_AI" rel="nofollow"
                           href="index.html?id=MzYwMzAxMg==&amp;type=2"
                           class="hs-downEps down-rar-click element-click">
                            <i></i>AI</a>
                    </div>
                    <!-- png -->
                    <div class="mb-picbox">
                        <img data-original="https://png.pngtree.com/element_our/png/20180814/three-dimensional-pink-city-creative-material-design-png_60240.jpg"
                             alt="three dimensional pink city creative material design, Beautiful, City, Cloud PNG and Vector"
                             class="lazy">
                        <a target="_blank" data-ga="3603012_ImgUrl"
                           title="Three dimensional pink city creative material design PNG and Vector"
                           href="freepng/three-dimensional-pink-city-creative-material-design_3603012.html"
                           class="tran element-click"></a>
                    </div>
                    <p class="pic-detail text-overflow">three dimensional pink city creative material
                        design</p>
                    <!-- infor -->
                    <div class="pic-infor clearfix">
                        <span class="fl-l">2500*2500</span>

                <span class="fl-r png-star">
                            <i></i>0</span>
                <span class="fl-r png-down">
                            <i></i>0</span>
                    </div>
                </li>
                <li>
                    <!-- Commercial use -->
                    <span class="commercial-use"></span>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-id="3598799" data-type="1"
                           class="hs-star  star-btn-click element-click" data-ga="3598799_Like">
                            <i></i>
                        </a>
                        <a target="_blank" data-ga="3598799_PNG" rel="nofollow"
                           href="index.html?id=MzU5ODc5OQ==&amp;type=1"
                           class="hs-downPng down-jpg-click element-click">
                            <i></i>PNG</a>
                        <a target="_blank" data-ga="3598799_PSD" rel="nofollow"
                           href="index.html?id=MzU5ODc5OQ==&amp;type=2"
                           class="hs-downEps down-rar-click element-click">
                            <i></i>PSD</a>
                    </div>
                    <!-- png -->
                    <div class="mb-picbox">
                        <img data-original="https://png.pngtree.com/element_our/png/20180807/green-city-tall-building-creative-design-material-png_57202.jpg"
                             alt="green city tall building creative design material, Green, City, Tower PNG and PSD"
                             class="lazy">
                        <a target="_blank" data-ga="3598799_ImgUrl"
                           title="Green city tall building creative design material PNG and PSD"
                           href="freepng/green-city-tall-building-creative-design-material_3598799.html"
                           class="tran element-click"></a>
                    </div>
                    <p class="pic-detail text-overflow">green city tall building creative design
                        material</p>
                    <!-- infor -->
                    <div class="pic-infor clearfix">
                        <span class="fl-l">1200*1200</span>

                <span class="fl-r png-star">
                            <i></i>9</span>
                <span class="fl-r png-down">
                            <i></i>25</span>
                    </div>
                </li>
                <li>
                    <!-- Commercial use -->
                    <span class="commercial-use"></span>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-id="3600486" data-type="1"
                           class="hs-star  star-btn-click element-click" data-ga="3600486_Like">
                            <i></i>
                        </a>
                        <a target="_blank" data-ga="3600486_PNG" rel="nofollow"
                           href="index.html?id=MzYwMDQ4Ng==&amp;type=1"
                           class="hs-downPng down-jpg-click element-click">
                            <i></i>PNG</a>
                        <a target="_blank" data-ga="3600486_AI" rel="nofollow"
                           href="index.html?id=MzYwMDQ4Ng==&amp;type=2"
                           class="hs-downEps down-rar-click element-click">
                            <i></i>AI</a>
                    </div>
                    <!-- png -->
                    <div class="mb-picbox">
                        <img data-original="https://png.pngtree.com/element_our/png/20180810/cartoon-simple-autumn-pattern-design-png_58461.png"
                             alt="Cartoon simple autumn pattern design, Simple, Hand-painted, Cartoon PNG and Vector"
                             class="lazy">
                        <a target="_blank" data-ga="3600486_ImgUrl"
                           title="Cartoon simple autumn pattern design PNG and Vector"
                           href="freepng/cartoon-simple-autumn-pattern-design_3600486.html"
                           class="tran element-click"></a>
                    </div>
                    <p class="pic-detail text-overflow">Cartoon simple autumn pattern design</p>
                    <!-- infor -->
                    <div class="pic-infor clearfix">
                        <span class="fl-l">1200*1200</span>

                <span class="fl-r png-star">
                            <i></i>5</span>
                <span class="fl-r png-down">
                            <i></i>30</span>
                    </div>
                </li>

                <li>
                    <div class="mb-more">
                        <h3>3,524,844</h3>
                        <h4>PNG Images</h4>
                        <a target="_blank" href="freepng/Recently-Download.html" data-ga="More"
                           class="mb-Btnmore tran element-click">More</a>
                        <!--                            <a href="javascript:;" class="mb-bg"></a>-->
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Excellent Templates -->
    <div class="main-con et-photobox">

        <h3 class="main-title">
            <a href="design-templates.html" class="template-click" data-ga="Excellent_Templates">Excellent
                Templates</a>
            <!--                EXCELLENT TEMPLATES-->
            <p>23,419 Templates for Download</p>
        </h3>
        <div class="main-body">
            <ul class="mb-box clearfix tpl-ul">
                <li>
                    <!-- Commercial use -->
                    <span class="commercial-use"></span>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-ga="3597889_Like"
                           class="hs-star  star-btn-click template-click" data-id="3597889" data-type="5">
                            <i></i>
                        </a>

                        <a target="_blank" data-ga="MzU5Nzg4OQ==_PSD" rel="nofollow"
                           href="index.html?id=MzU5Nzg4OQ==&amp;type=2&amp;t=1"
                           class="hs-downEps template-down-file down-rar-click template-clic">
                            <i></i>PSD</a>
                        <a href="index.html?b=13" rel="nofollow" target="_blank" data-ga="MzU5Nzg4OQ==_Pay"
                           class="btn-premium template-click">
                            <i class="icon-premium"></i>
                        </a>
                    </div>
                    <!-- png -->
                    <div class="mb-picbox">
                        <img data-original="https://png.pngtree.com/templates/20180807/summer-party-with-abstract-border-poster-design-png_28848.jpg"
                             alt="Summer party with abstract border poster design" class="lazy">
                        <a target="_blank" title="Summer party with abstract border poster design"
                           href="freepng/summer-party-with-abstract-border-poster-design_3597889.html"
                           data-ga="3597889_ImgUrl" class="tran template-click">
                            <div class="tpl-imginner">
                                <p class="tpl-imgtips">Exclusive for <span
                                            class="tips-premium">Premium</span> users.</p>
                                <span class="tpl-imgbtn"><span>View Templates</span></span>
                            </div>
                        </a>
                    </div>
                    <p class="pic-detail text-overflow">Summer party with abstract border poster design</p>
                    <!-- infor -->
                    <div class="pic-infor clearfix">
                        <a class="fl-l infor-name template-click" data-ga="MzU5Nzg4OQ==_DesigerUrl"
                           rel="nofollow" href="pngtree_2177952.html">
                            <img data-original="//js2.pngtree.com/user_profile/head_img/014-travel.png"
                                 alt="pngtree" class="lazy"> pngtree</a>

                <span class="fl-r png-star">
                            <i></i>37</span>
                <span class="fl-r png-down">
                            <i></i>13</span>
                    </div>
                </li>
                <li>
                    <!-- Commercial use -->
                    <span class="commercial-use"></span>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-ga="3597893_Like"
                           class="hs-star  star-btn-click template-click" data-id="3597893" data-type="5">
                            <i></i>
                        </a>

                        <a target="_blank" data-ga="MzU5Nzg5Mw==_PSD" rel="nofollow"
                           href="index.html?id=MzU5Nzg5Mw==&amp;type=2&amp;t=1"
                           class="hs-downEps template-down-file down-rar-click template-clic">
                            <i></i>PSD</a>
                        <a href="index.html?b=13" rel="nofollow" target="_blank" data-ga="MzU5Nzg5Mw==_Pay"
                           class="btn-premium template-click">
                            <i class="icon-premium"></i>
                        </a>
                    </div>
                    <!-- png -->
                    <div class="mb-picbox">
                        <img data-original="https://png.pngtree.com/templates/20180807/little-fox-adventure-in-the-night-poster-art-design-png_28862.jpg"
                             alt="Little fox adventure in the night poster art design" class="lazy">
                        <a target="_blank" title="Little fox adventure in the night poster art design"
                           href="freepng/little-fox-adventure-in-the-night-poster-art-design_3597893.html"
                           data-ga="3597893_ImgUrl" class="tran template-click">
                            <div class="tpl-imginner">
                                <p class="tpl-imgtips">Exclusive for <span
                                            class="tips-premium">Premium</span> users.</p>
                                <span class="tpl-imgbtn"><span>View Templates</span></span>
                            </div>
                        </a>
                    </div>
                    <p class="pic-detail text-overflow">Little fox adventure in the night poster art
                        design</p>
                    <!-- infor -->
                    <div class="pic-infor clearfix">
                        <a class="fl-l infor-name template-click" data-ga="MzU5Nzg5Mw==_DesigerUrl"
                           rel="nofollow" href="pngtree_2177952.html">
                            <img data-original="//js2.pngtree.com/user_profile/head_img/014-travel.png"
                                 alt="pngtree" class="lazy"> pngtree</a>

                <span class="fl-r png-star">
                            <i></i>60</span>
                <span class="fl-r png-down">
                            <i></i>4</span>
                    </div>
                </li>
                <li>
                    <!-- Commercial use -->
                    <span class="commercial-use"></span>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-ga="3597890_Like"
                           class="hs-star  star-btn-click template-click" data-id="3597890" data-type="5">
                            <i></i>
                        </a>

                        <a target="_blank" data-ga="MzU5Nzg5MA==_PSD" rel="nofollow"
                           href="index.html?id=MzU5Nzg5MA==&amp;type=2&amp;t=1"
                           class="hs-downEps template-down-file down-rar-click template-clic">
                            <i></i>PSD</a>
                        <a href="index.html?b=13" rel="nofollow" target="_blank" data-ga="MzU5Nzg5MA==_Pay"
                           class="btn-premium template-click">
                            <i class="icon-premium"></i>
                        </a>
                    </div>
                    <!-- png -->
                    <div class="mb-picbox">
                        <img data-original="https://png.pngtree.com/templates/20180807/go-travel-poster-design-with-gradient-effect-png_28850.jpg"
                             alt="Go travel poster design with gradient effect" class="lazy">
                        <a target="_blank" title="Go travel poster design with gradient effect"
                           href="freepng/go-travel-poster-design-with-gradient-effect_3597890.html"
                           data-ga="3597890_ImgUrl" class="tran template-click">
                            <div class="tpl-imginner">
                                <p class="tpl-imgtips">Exclusive for <span
                                            class="tips-premium">Premium</span> users.</p>
                                <span class="tpl-imgbtn"><span>View Templates</span></span>
                            </div>
                        </a>
                    </div>
                    <p class="pic-detail text-overflow">Go travel poster design with gradient effect</p>
                    <!-- infor -->
                    <div class="pic-infor clearfix">
                        <a class="fl-l infor-name template-click" data-ga="MzU5Nzg5MA==_DesigerUrl"
                           rel="nofollow" href="pngtree_2177952.html">
                            <img data-original="//js2.pngtree.com/user_profile/head_img/014-travel.png"
                                 alt="pngtree" class="lazy"> pngtree</a>

                <span class="fl-r png-star">
                            <i></i>45</span>
                <span class="fl-r png-down">
                            <i></i>10</span>
                    </div>
                </li>
                <li>
                    <!-- Commercial use -->
                    <span class="commercial-use"></span>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-ga="3597892_Like"
                           class="hs-star  star-btn-click template-click" data-id="3597892" data-type="5">
                            <i></i>
                        </a>

                        <a target="_blank" data-ga="MzU5Nzg5Mg==_PSD" rel="nofollow"
                           href="index.html?id=MzU5Nzg5Mg==&amp;type=2&amp;t=1"
                           class="hs-downEps template-down-file down-rar-click template-clic">
                            <i></i>PSD</a>
                        <a href="index.html?b=13" rel="nofollow" target="_blank" data-ga="MzU5Nzg5Mg==_Pay"
                           class="btn-premium template-click">
                            <i class="icon-premium"></i>
                        </a>
                    </div>
                    <!-- png -->
                    <div class="mb-picbox">
                        <img data-original="https://png.pngtree.com/templates/20180807/abstract-autumn-sale-poster-art-design-png_28861.jpg"
                             alt="Abstract autumn sale poster art design" class="lazy">
                        <a target="_blank" title="Abstract autumn sale poster art design"
                           href="freepng/abstract-autumn-sale-poster-art-design_3597892.html"
                           data-ga="3597892_ImgUrl" class="tran template-click">
                            <div class="tpl-imginner">
                                <p class="tpl-imgtips">Exclusive for <span
                                            class="tips-premium">Premium</span> users.</p>
                                <span class="tpl-imgbtn"><span>View Templates</span></span>
                            </div>
                        </a>
                    </div>
                    <p class="pic-detail text-overflow">Abstract autumn sale poster art design</p>
                    <!-- infor -->
                    <div class="pic-infor clearfix">
                        <a class="fl-l infor-name template-click" data-ga="MzU5Nzg5Mg==_DesigerUrl"
                           rel="nofollow" href="pngtree_2177952.html">
                            <img data-original="//js2.pngtree.com/user_profile/head_img/014-travel.png"
                                 alt="pngtree" class="lazy"> pngtree</a>

                <span class="fl-r png-star">
                            <i></i>35</span>
                <span class="fl-r png-down">
                            <i></i>9</span>
                    </div>
                </li>
                <li>
                    <!-- Commercial use -->
                    <span class="commercial-use"></span>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-ga="3597888_Like"
                           class="hs-star  star-btn-click template-click" data-id="3597888" data-type="5">
                            <i></i>
                        </a>

                        <a target="_blank" data-ga="MzU5Nzg4OA==_PSD" rel="nofollow"
                           href="index.html?id=MzU5Nzg4OA==&amp;type=2&amp;t=1"
                           class="hs-downEps template-down-file down-rar-click template-clic">
                            <i></i>PSD</a>
                        <a href="index.html?b=13" rel="nofollow" target="_blank" data-ga="MzU5Nzg4OA==_Pay"
                           class="btn-premium template-click">
                            <i class="icon-premium"></i>
                        </a>
                    </div>
                    <!-- png -->
                    <div class="mb-picbox">
                        <img data-original="https://png.pngtree.com/templates/20180807/save-the-oasis-public-poster-art-design-png_28847.jpg"
                             alt="Save the oasis public poster art design" class="lazy">
                        <a target="_blank" title="Save the oasis public poster art design"
                           href="freepng/save-the-oasis-public-poster-art-design_3597888.html"
                           data-ga="3597888_ImgUrl" class="tran template-click">
                            <div class="tpl-imginner">
                                <p class="tpl-imgtips">Exclusive for <span
                                            class="tips-premium">Premium</span> users.</p>
                                <span class="tpl-imgbtn"><span>View Templates</span></span>
                            </div>
                        </a>
                    </div>
                    <p class="pic-detail text-overflow">Save the oasis public poster art design</p>
                    <!-- infor -->
                    <div class="pic-infor clearfix">
                        <a class="fl-l infor-name template-click" data-ga="MzU5Nzg4OA==_DesigerUrl"
                           rel="nofollow" href="pngtree_2177952.html">
                            <img data-original="//js2.pngtree.com/user_profile/head_img/014-travel.png"
                                 alt="pngtree" class="lazy"> pngtree</a>

                <span class="fl-r png-star">
                            <i></i>31</span>
                <span class="fl-r png-down">
                            <i></i>5</span>
                    </div>
                </li>
                <li>
                    <!-- Commercial use -->
                    <span class="commercial-use"></span>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-ga="3597899_Like"
                           class="hs-star  star-btn-click template-click" data-id="3597899" data-type="5">
                            <i></i>
                        </a>

                        <a target="_blank" data-ga="MzU5Nzg5OQ==_PSD" rel="nofollow"
                           href="index.html?id=MzU5Nzg5OQ==&amp;type=2&amp;t=1"
                           class="hs-downEps template-down-file down-rar-click template-clic">
                            <i></i>PSD</a>
                        <a href="index.html?b=13" rel="nofollow" target="_blank" data-ga="MzU5Nzg5OQ==_Pay"
                           class="btn-premium template-click">
                            <i class="icon-premium"></i>
                        </a>
                    </div>
                    <!-- png -->
                    <div class="mb-picbox">
                        <img data-original="https://png.pngtree.com/templates/20180807/modern-business-poster-abstract-art-design-png_28896.jpg"
                             alt="Modern business poster abstract art design" class="lazy">
                        <a target="_blank" title="Modern business poster abstract art design"
                           href="freepng/modern-business-poster-abstract-art-design_3597899.html"
                           data-ga="3597899_ImgUrl" class="tran template-click">
                            <div class="tpl-imginner">
                                <p class="tpl-imgtips">Exclusive for <span
                                            class="tips-premium">Premium</span> users.</p>
                                <span class="tpl-imgbtn"><span>View Templates</span></span>
                            </div>
                        </a>
                    </div>
                    <p class="pic-detail text-overflow">Modern business poster abstract art design</p>
                    <!-- infor -->
                    <div class="pic-infor clearfix">
                        <a class="fl-l infor-name template-click" data-ga="MzU5Nzg5OQ==_DesigerUrl"
                           rel="nofollow" href="pngtree_2177952.html">
                            <img data-original="//js2.pngtree.com/user_profile/head_img/014-travel.png"
                                 alt="pngtree" class="lazy"> pngtree</a>

                <span class="fl-r png-star">
                            <i></i>51</span>
                <span class="fl-r png-down">
                            <i></i>10</span>
                    </div>
                </li>
                <li>
                    <!-- Commercial use -->
                    <span class="commercial-use"></span>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-ga="3597900_Like"
                           class="hs-star  star-btn-click template-click" data-id="3597900" data-type="5">
                            <i></i>
                        </a>

                        <a target="_blank" data-ga="MzU5NzkwMA==_PSD" rel="nofollow"
                           href="index.html?id=MzU5NzkwMA==&amp;type=2&amp;t=1"
                           class="hs-downEps template-down-file down-rar-click template-clic">
                            <i></i>PSD</a>
                        <a href="index.html?b=13" rel="nofollow" target="_blank" data-ga="MzU5NzkwMA==_Pay"
                           class="btn-premium template-click">
                            <i class="icon-premium"></i>
                        </a>
                    </div>
                    <!-- png -->
                    <div class="mb-picbox">
                        <img data-original="https://png.pngtree.com/templates/20180807/abstract-birthday-card-with-simple-border-png_28897.jpg"
                             alt="Abstract birthday card with simple border" class="lazy">
                        <a target="_blank" title="Abstract birthday card with simple border"
                           href="freepng/abstract-birthday-card-with-simple-border_3597900.html"
                           data-ga="3597900_ImgUrl" class="tran template-click">
                            <div class="tpl-imginner">
                                <p class="tpl-imgtips">Exclusive for <span
                                            class="tips-premium">Premium</span> users.</p>
                                <span class="tpl-imgbtn"><span>View Templates</span></span>
                            </div>
                        </a>
                    </div>
                    <p class="pic-detail text-overflow">Abstract birthday card with simple border</p>
                    <!-- infor -->
                    <div class="pic-infor clearfix">
                        <a class="fl-l infor-name template-click" data-ga="MzU5NzkwMA==_DesigerUrl"
                           rel="nofollow" href="pngtree_2177952.html">
                            <img data-original="//js2.pngtree.com/user_profile/head_img/014-travel.png"
                                 alt="pngtree" class="lazy"> pngtree</a>

                <span class="fl-r png-star">
                            <i></i>20</span>
                <span class="fl-r png-down">
                            <i></i>5</span>
                    </div>
                </li>
                <li>
                    <!-- Commercial use -->
                    <span class="commercial-use"></span>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-ga="3597891_Like"
                           class="hs-star  star-btn-click template-click" data-id="3597891" data-type="5">
                            <i></i>
                        </a>

                        <a target="_blank" data-ga="MzU5Nzg5MQ==_PSD" rel="nofollow"
                           href="index.html?id=MzU5Nzg5MQ==&amp;type=2&amp;t=1"
                           class="hs-downEps template-down-file down-rar-click template-clic">
                            <i></i>PSD</a>
                        <a href="index.html?b=13" rel="nofollow" target="_blank" data-ga="MzU5Nzg5MQ==_Pay"
                           class="btn-premium template-click">
                            <i class="icon-premium"></i>
                        </a>
                    </div>
                    <!-- png -->
                    <div class="mb-picbox">
                        <img data-original="https://png.pngtree.com/templates/20180807/business-banner-with-blue-wavy-art-design-png_28860.jpg"
                             alt="banner with blue wavy art design" class="lazy">
                        <a target="_blank" title="banner with blue wavy art design"
                           href="freepng/banner-with-blue-wavy-art-design_3597891.html"
                           data-ga="3597891_ImgUrl" class="tran template-click">
                            <div class="tpl-imginner">
                                <p class="tpl-imgtips">Exclusive for <span
                                            class="tips-premium">Premium</span> users.</p>
                                <span class="tpl-imgbtn"><span>View Templates</span></span>
                            </div>
                        </a>
                    </div>
                    <p class="pic-detail text-overflow">banner with blue wavy art design</p>
                    <!-- infor -->
                    <div class="pic-infor clearfix">
                        <a class="fl-l infor-name template-click" data-ga="MzU5Nzg5MQ==_DesigerUrl"
                           rel="nofollow" href="pngtree_2177952.html">
                            <img data-original="//js2.pngtree.com/user_profile/head_img/014-travel.png"
                                 alt="pngtree" class="lazy"> pngtree</a>

                <span class="fl-r png-star">
                            <i></i>35</span>
                <span class="fl-r png-down">
                            <i></i>13</span>
                    </div>
                </li>
                <li>
                    <!-- Commercial use -->
                    <span class="commercial-use"></span>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-ga="3597896_Like"
                           class="hs-star  star-btn-click template-click" data-id="3597896" data-type="5">
                            <i></i>
                        </a>

                        <a target="_blank" data-ga="MzU5Nzg5Ng==_PSD" rel="nofollow"
                           href="index.html?id=MzU5Nzg5Ng==&amp;type=2&amp;t=1"
                           class="hs-downEps template-down-file down-rar-click template-clic">
                            <i></i>PSD</a>
                        <a href="index.html?b=13" rel="nofollow" target="_blank" data-ga="MzU5Nzg5Ng==_Pay"
                           class="btn-premium template-click">
                            <i class="icon-premium"></i>
                        </a>
                    </div>
                    <!-- png -->
                    <div class="mb-picbox">
                        <img data-original="https://png.pngtree.com/templates/20180807/abstract-gradient-green-vector-logo-p-png_28867.jpg"
                             alt="Abstract gradient green vector logo P" class="lazy">
                        <a target="_blank" title="Abstract gradient green vector logo P"
                           href="freepng/abstract-gradient-green-vector-logo-p_3597896.html"
                           data-ga="3597896_ImgUrl" class="tran template-click">
                            <div class="tpl-imginner">
                                <p class="tpl-imgtips">Exclusive for <span
                                            class="tips-premium">Premium</span> users.</p>
                                <span class="tpl-imgbtn"><span>View Templates</span></span>
                            </div>
                        </a>
                    </div>
                    <p class="pic-detail text-overflow">Abstract gradient green vector logo P</p>
                    <!-- infor -->
                    <div class="pic-infor clearfix">
                        <a class="fl-l infor-name template-click" data-ga="MzU5Nzg5Ng==_DesigerUrl"
                           rel="nofollow" href="pngtree_2177952.html">
                            <img data-original="//js2.pngtree.com/user_profile/head_img/014-travel.png"
                                 alt="pngtree" class="lazy"> pngtree</a>

                <span class="fl-r png-star">
                            <i></i>21</span>
                <span class="fl-r png-down">
                            <i></i>7</span>
                    </div>
                </li>
                <li class="mb-moreBg">
                    <div class="mb-more">
                        <h3>23,419</h3>
                        <h4>Templates</h4>
                        <a target="_blank" href="design-templates/more_yestday.html" rel="nofollow"
                           class="mb-Btnmore tran template-click" data-ga="More">More</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- Latest Backgrounds -->

    <!-- Graphic Design -->
    <div class="main-con gd-photobox">
        <h3 class="main-title">
            <a href="free-fonts.html" class="font-click" data-ga="Editable_Art_Fonts">Editable Art Fonts</a>
            <!--                GRAPHIC DESIGN1-->
            <p>Curated Art Fonts Free Download</p>
        </h3>
        <div class="main-body">
            <ul class="mb-box clearfix">
                <li>
                    <!-- Commercial use -->
                    <span class="commercial-use"></span>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-id="3587076" data-type="1" data-ga="MzU4NzA3Ng==_Like"
                           class="hs-star  star-btn-click font-click">
                            <i></i>
                        </a>
                        <a target="_blank" data-ga="MzU4NzA3Ng==_PNG" rel="nofollow"
                           href="index.html?id=MzU4NzA3Ng==&amp;type=1&amp;t=2"
                           class="hs-downPng down-jpg-click font-click">
                            <i></i>PNG</a>
                        <a target="_blank" data-ga="MzU4NzA3Ng==_PSD" rel="nofollow"
                           href="index.html?id=MzU4NzA3Ng==&amp;type=2&amp;t=2"
                           class="hs-downEps down-rar-click font-click">
                            <i></i>PSD</a>
                    </div>
                    <!-- png -->
                    <div class="mb-picbox">
                        <img data-original="https://png.pngtree.com/artfonts/20180703/sm/golden_style_font_design_509.jpg"
                             alt="golden-style-font-design" class="lazy">
                        <a target="_blank" title="Golden style font design" data-ga="MzU4NzA3Ng==_ImgUrl"
                           href="freepng/golden-style-font-design_3587076.html" class="tran font-click"></a>
                    </div>
                    <p class="pic-detail text-overflow">Golden style font design</p>
                    <!-- infor -->
                    <div class="pic-infor clearfix">
                        <span class="fl-l">1200*1200</span>

                    <span class="fl-r png-star">
                            <i></i>9</span>
                    <span class="fl-r png-down">
                            <i></i>291</span>
                    </div>
                </li>
                <li>
                    <!-- Commercial use -->
                    <span class="commercial-use"></span>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-id="3587088" data-type="1" data-ga="MzU4NzA4OA==_Like"
                           class="hs-star  star-btn-click font-click">
                            <i></i>
                        </a>
                        <a target="_blank" data-ga="MzU4NzA4OA==_PNG" rel="nofollow"
                           href="index.html?id=MzU4NzA4OA==&amp;type=1&amp;t=2"
                           class="hs-downPng down-jpg-click font-click">
                            <i></i>PNG</a>
                        <a target="_blank" data-ga="MzU4NzA4OA==_PSD" rel="nofollow"
                           href="index.html?id=MzU4NzA4OA==&amp;type=2&amp;t=2"
                           class="hs-downEps down-rar-click font-click">
                            <i></i>PSD</a>
                    </div>
                    <!-- png -->
                    <div class="mb-picbox">
                        <img data-original="https://png.pngtree.com/artfonts/20180704/sm/volumetric_glossy_inscription_surf_on_the_background_of_sand_and_surfboards_521.jpg"
                             alt="volumetric-glossy-inscription-surf-on-the-background-of-sand-and-surfboards"
                             class="lazy">
                        <a target="_blank"
                           title="Volumetric glossy inscription Surf on the background of sand and surfboards"
                           data-ga="MzU4NzA4OA==_ImgUrl"
                           href="freepng/volumetric-glossy-inscription-surf-on-the-background-of-sand-and-surfboards_3587088.html"
                           class="tran font-click"></a>
                    </div>
                    <p class="pic-detail text-overflow">Volumetric glossy inscription Surf on the background
                        of sand and surfboards</p>
                    <!-- infor -->
                    <div class="pic-infor clearfix">
                        <span class="fl-l">1200*1200</span>

                    <span class="fl-r png-star">
                            <i></i>8</span>
                    <span class="fl-r png-down">
                            <i></i>133</span>
                    </div>
                </li>
                <li>
                    <!-- Commercial use -->
                    <span class="commercial-use"></span>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-id="3587106" data-type="1" data-ga="MzU4NzEwNg==_Like"
                           class="hs-star  star-btn-click font-click">
                            <i></i>
                        </a>
                        <a target="_blank" data-ga="MzU4NzEwNg==_PNG" rel="nofollow"
                           href="index.html?id=MzU4NzEwNg==&amp;type=1&amp;t=2"
                           class="hs-downPng down-jpg-click font-click">
                            <i></i>PNG</a>
                        <a target="_blank" data-ga="MzU4NzEwNg==_PSD" rel="nofollow"
                           href="index.html?id=MzU4NzEwNg==&amp;type=2&amp;t=2"
                           class="hs-downEps down-rar-click font-click">
                            <i></i>PSD</a>
                    </div>
                    <!-- png -->
                    <div class="mb-picbox">
                        <img data-original="https://png.pngtree.com/artfonts/20180704/sm/cute,school,font_design_539.jpg"
                             alt="cute,school,font-design" class="lazy">
                        <a target="_blank" title="cute,school,font design" data-ga="MzU4NzEwNg==_ImgUrl"
                           href="freepng/cute-school-font-design_3587106.html" class="tran font-click"></a>
                    </div>
                    <p class="pic-detail text-overflow">cute,school,font design</p>
                    <!-- infor -->
                    <div class="pic-infor clearfix">
                        <span class="fl-l">1200*1200</span>

                    <span class="fl-r png-star">
                            <i></i>10</span>
                    <span class="fl-r png-down">
                            <i></i>81</span>
                    </div>
                </li>
                <li>
                    <!-- Commercial use -->
                    <span class="commercial-use"></span>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-id="3583222" data-type="1" data-ga="MzU4MzIyMg==_Like"
                           class="hs-star  star-btn-click font-click">
                            <i></i>
                        </a>
                        <a target="_blank" data-ga="MzU4MzIyMg==_PNG" rel="nofollow"
                           href="index.html?id=MzU4MzIyMg==&amp;type=1&amp;t=2"
                           class="hs-downPng down-jpg-click font-click">
                            <i></i>PNG</a>
                        <a target="_blank" data-ga="MzU4MzIyMg==_PSD" rel="nofollow"
                           href="index.html?id=MzU4MzIyMg==&amp;type=2&amp;t=2"
                           class="hs-downEps down-rar-click font-click">
                            <i></i>PSD</a>
                    </div>
                    <!-- png -->
                    <div class="mb-picbox">
                        <img data-original="https://png.pngtree.com/artfonts/20180622/sm/love_fonts_with_heart_and_balloon_248.jpg"
                             alt="love-fonts-with-heart-and-balloon" class="lazy">
                        <a target="_blank" title="Love fonts with heart and balloon"
                           data-ga="MzU4MzIyMg==_ImgUrl"
                           href="freepng/love-fonts-with-heart-and-balloon_3583222.html"
                           class="tran font-click"></a>
                    </div>
                    <p class="pic-detail text-overflow">Love fonts with heart and balloon</p>
                    <!-- infor -->
                    <div class="pic-infor clearfix">
                        <span class="fl-l">1200*1200</span>

                    <span class="fl-r png-star">
                            <i></i>14</span>
                    <span class="fl-r png-down">
                            <i></i>285</span>
                    </div>
                </li>
                <li>
                    <!-- Commercial use -->
                    <span class="commercial-use"></span>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-id="3581329" data-type="1" data-ga="MzU4MTMyOQ==_Like"
                           class="hs-star  star-btn-click font-click">
                            <i></i>
                        </a>
                        <a target="_blank" data-ga="MzU4MTMyOQ==_PNG" rel="nofollow"
                           href="index.html?id=MzU4MTMyOQ==&amp;type=1&amp;t=2"
                           class="hs-downPng down-jpg-click font-click">
                            <i></i>PNG</a>
                        <a target="_blank" data-ga="MzU4MTMyOQ==_PSD" rel="nofollow"
                           href="index.html?id=MzU4MTMyOQ==&amp;type=2&amp;t=2"
                           class="hs-downEps down-rar-click font-click">
                            <i></i>PSD</a>
                    </div>
                    <!-- png -->
                    <div class="mb-picbox">
                        <img data-original="https://png.pngtree.com/artfonts/20180621/sm/volumetric_glossy_red_inscription_balloon_100.jpg"
                             alt="volumetric-glossy-red-inscription-balloon" class="lazy">
                        <a target="_blank" title="Volumetric glossy red inscription Balloon"
                           data-ga="MzU4MTMyOQ==_ImgUrl"
                           href="freepng/volumetric-glossy-red-inscription-balloon_3581329.html"
                           class="tran font-click"></a>
                    </div>
                    <p class="pic-detail text-overflow">Volumetric glossy red inscription Balloon</p>
                    <!-- infor -->
                    <div class="pic-infor clearfix">
                        <span class="fl-l">1200*1200</span>

                    <span class="fl-r png-star">
                            <i></i>8</span>
                    <span class="fl-r png-down">
                            <i></i>184</span>
                    </div>
                </li>
                <li>
                    <!-- Commercial use -->
                    <span class="commercial-use"></span>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-id="3588760" data-type="1" data-ga="MzU4ODc2MA==_Like"
                           class="hs-star  star-btn-click font-click">
                            <i></i>
                        </a>
                        <a target="_blank" data-ga="MzU4ODc2MA==_PNG" rel="nofollow"
                           href="index.html?id=MzU4ODc2MA==&amp;type=1&amp;t=2"
                           class="hs-downPng down-jpg-click font-click">
                            <i></i>PNG</a>
                        <a target="_blank" data-ga="MzU4ODc2MA==_PSD" rel="nofollow"
                           href="index.html?id=MzU4ODc2MA==&amp;type=2&amp;t=2"
                           class="hs-downEps down-rar-click font-click">
                            <i></i>PSD</a>
                    </div>
                    <!-- png -->
                    <div class="mb-picbox">
                        <img data-original="https://png.pngtree.com/artfonts/20180710/sm/3d_shiny_celebrities_font_with_transparent_bubble_641.jpg"
                             alt="3d-shiny-celebrities-font-with-transparent-bubble" class="lazy">
                        <a target="_blank" title="3D shiny celebrities font with transparent bubble"
                           data-ga="MzU4ODc2MA==_ImgUrl"
                           href="freepng/3d-shiny-celebrities-font-with-transparent-bubble_3588760.html"
                           class="tran font-click"></a>
                    </div>
                    <p class="pic-detail text-overflow">3D shiny celebrities font with transparent
                        bubble</p>
                    <!-- infor -->
                    <div class="pic-infor clearfix">
                        <span class="fl-l">1200*1200</span>

                    <span class="fl-r png-star">
                            <i></i>2</span>
                    <span class="fl-r png-down">
                            <i></i>28</span>
                    </div>
                </li>
                <li>
                    <!-- Commercial use -->
                    <span class="commercial-use"></span>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-id="3588766" data-type="1" data-ga="MzU4ODc2Ng==_Like"
                           class="hs-star  star-btn-click font-click">
                            <i></i>
                        </a>
                        <a target="_blank" data-ga="MzU4ODc2Ng==_PNG" rel="nofollow"
                           href="index.html?id=MzU4ODc2Ng==&amp;type=1&amp;t=2"
                           class="hs-downPng down-jpg-click font-click">
                            <i></i>PNG</a>
                        <a target="_blank" data-ga="MzU4ODc2Ng==_PSD" rel="nofollow"
                           href="index.html?id=MzU4ODc2Ng==&amp;type=2&amp;t=2"
                           class="hs-downEps down-rar-click font-click">
                            <i></i>PSD</a>
                    </div>
                    <!-- png -->
                    <div class="mb-picbox">
                        <img data-original="https://png.pngtree.com/artfonts/20180710/sm/beautiful_summer_abstract_font_650.jpg"
                             alt="beautiful-summer-abstract-font" class="lazy">
                        <a target="_blank" title="Beautiful summer abstract font"
                           data-ga="MzU4ODc2Ng==_ImgUrl"
                           href="freepng/beautiful-summer-abstract-font_3588766.html"
                           class="tran font-click"></a>
                    </div>
                    <p class="pic-detail text-overflow">Beautiful summer abstract font</p>
                    <!-- infor -->
                    <div class="pic-infor clearfix">
                        <span class="fl-l">1200*1200</span>

                    <span class="fl-r png-star">
                            <i></i>7</span>
                    <span class="fl-r png-down">
                            <i></i>100</span>
                    </div>
                </li>
                <li>
                    <!-- Commercial use -->
                    <span class="commercial-use"></span>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-id="3588769" data-type="1" data-ga="MzU4ODc2OQ==_Like"
                           class="hs-star  star-btn-click font-click">
                            <i></i>
                        </a>
                        <a target="_blank" data-ga="MzU4ODc2OQ==_PNG" rel="nofollow"
                           href="index.html?id=MzU4ODc2OQ==&amp;type=1&amp;t=2"
                           class="hs-downPng down-jpg-click font-click">
                            <i></i>PNG</a>
                        <a target="_blank" data-ga="MzU4ODc2OQ==_PSD" rel="nofollow"
                           href="index.html?id=MzU4ODc2OQ==&amp;type=2&amp;t=2"
                           class="hs-downEps down-rar-click font-click">
                            <i></i>PSD</a>
                    </div>
                    <!-- png -->
                    <div class="mb-picbox">
                        <img data-original="https://png.pngtree.com/artfonts/20180711/sm/beautiful_nature_abstract_font_with_watercolor_design_653.jpg"
                             alt="beautiful-nature-abstract-font-with-watercolor-design" class="lazy">
                        <a target="_blank" title="Beautiful nature abstract font with watercolor design"
                           data-ga="MzU4ODc2OQ==_ImgUrl"
                           href="freepng/beautiful-nature-abstract-font-with-watercolor-design_3588769.html"
                           class="tran font-click"></a>
                    </div>
                    <p class="pic-detail text-overflow">Beautiful nature abstract font with watercolor
                        design</p>
                    <!-- infor -->
                    <div class="pic-infor clearfix">
                        <span class="fl-l">1200*1200</span>

                    <span class="fl-r png-star">
                            <i></i>4</span>
                    <span class="fl-r png-down">
                            <i></i>74</span>
                    </div>
                </li>
                <li>
                    <!-- Commercial use -->
                    <span class="commercial-use"></span>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-id="3588772" data-type="1" data-ga="MzU4ODc3Mg==_Like"
                           class="hs-star  star-btn-click font-click">
                            <i></i>
                        </a>
                        <a target="_blank" data-ga="MzU4ODc3Mg==_PNG" rel="nofollow"
                           href="index.html?id=MzU4ODc3Mg==&amp;type=1&amp;t=2"
                           class="hs-downPng down-jpg-click font-click">
                            <i></i>PNG</a>
                        <a target="_blank" data-ga="MzU4ODc3Mg==_PSD" rel="nofollow"
                           href="index.html?id=MzU4ODc3Mg==&amp;type=2&amp;t=2"
                           class="hs-downEps down-rar-click font-click">
                            <i></i>PSD</a>
                    </div>
                    <!-- png -->
                    <div class="mb-picbox">
                        <img data-original="https://png.pngtree.com/artfonts/20180711/sm/fashion_cartoon_abstract_font_with_cute_pattern_design_656.jpg"
                             alt="fashion-cartoon-abstract-font-with-cute-pattern-design" class="lazy">
                        <a target="_blank" title="Fashion cartoon abstract font with cute pattern design"
                           data-ga="MzU4ODc3Mg==_ImgUrl"
                           href="freepng/fashion-cartoon-abstract-font-with-cute-pattern-design_3588772.html"
                           class="tran font-click"></a>
                    </div>
                    <p class="pic-detail text-overflow">Fashion cartoon abstract font with cute pattern
                        design</p>
                    <!-- infor -->
                    <div class="pic-infor clearfix">
                        <span class="fl-l">1200*1200</span>

                    <span class="fl-r png-star">
                            <i></i>9</span>
                    <span class="fl-r png-down">
                            <i></i>92</span>
                    </div>
                </li>

                <li>
                    <div class="mb-more">
                        <h3></h3>
                        <h4>Curated Art Fonts Free Download</h4>
                        <a target="_blank" href="free-fontsd1b0.html?sort=recently" data-ga="More"
                           class="mb-Btnmore tran font-click">More</a>
                        <!--                            <a href="javascript:;" class="mb-bg"></a>-->
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!--        PPT -->
    <div class="main-con ppt-photobox">

        <h3 class="main-title">
            <a href="free-powerpoint-template.html" class="ppt-click" data-ga="Powerpoint_Templates">Powerpoint
                Templates</a>

            <p>32,817 Professional Powerpoint Templates</p>
        </h3>
        <div class="main-body">

            <ul class="clearfix ppt-boxs">

                <li>
                    <a target="_blank"
                       href="free-powerpoint-template/the-year-end-report-summed-up-the-work-of-colorful-microsomes.html"
                       title="The year-end report summed up the work of colorful microsomes. Ppt"
                       data-ga="60152_ImgUrl" class="ppt-click">
                        <img class="lazy" src="../js2.pngtree.com/v2/images/lz.gif"
                             data-original="https://png.pngtree.com/ppt/sm/00/04/31/8c07496712302cf6dd6756ae333a95b6.jpg"
                             alt="The year-end report summed up the work of colorful microsomes. Ppt">
                    </a>

                    <p class="text-overflow">The year-end report summed up the work of colorful microsomes.
                        Ppt</p>

                    <div class="clearfix infor-btnbox">
                        <a href="javascript:;" class="fl-l btn-star">224</a>
                        <a href="javascript:;" class="fl-r btn-down">405</a>
                    </div>
                    <div class="hover-box tran">
                        <a target="_blank" rel="nofollow" data-ga="60152_Down" href="index.html?id=NjAxNTI="
                           class="ppt-click btn-drown template-down-file down-rar-click ppt-down-file "
                           data-id="60152"></a>
                    </div>
                </li>

                <li>
                    <a target="_blank"
                       href="free-powerpoint-template/simple-micro-stereo-report-ppt-templates_59272.html"
                       title="Simple micro stereo report PPT templates" data-ga="59272_ImgUrl"
                       class="ppt-click">
                        <img class="lazy" src="../js2.pngtree.com/v2/images/lz.gif"
                             data-original="https://png.pngtree.com/ppt/sm/00/04/21/26108d02b0a752f9ec4f066ee77ee93a.jpg"
                             alt="Simple micro stereo report PPT templates">
                    </a>

                    <p class="text-overflow">Simple micro stereo report PPT templates</p>

                    <div class="clearfix infor-btnbox">
                        <a href="javascript:;" class="fl-l btn-star">383</a>
                        <a href="javascript:;" class="fl-r btn-down">847</a>
                    </div>
                    <div class="hover-box tran">
                        <a target="_blank" rel="nofollow" data-ga="59272_Down" href="index.html?id=NTkyNzI="
                           class="ppt-click btn-drown template-down-file down-rar-click ppt-down-file "
                           data-id="59272"></a>
                    </div>
                </li>

                <li>
                    <a target="_blank"
                       href="free-powerpoint-template/performance-report-financial-financial-financial-statement-data-analysis-ppt_34114.html"
                       title="Performance report financial financial financial statement data analysis PPT"
                       data-ga="34114_ImgUrl" class="ppt-click">
                        <img class="lazy" src="../js2.pngtree.com/v2/images/lz.gif"
                             data-original="https://png.pngtree.com/ppt/sm/00/01/49/7521213d337ce0199ebbd2f42605c1ae.jpg"
                             alt="Performance report financial financial financial statement data analysis PPT">
                    </a>

                    <p class="text-overflow">Performance report financial financial financial statement data
                        analysis PPT</p>

                    <div class="clearfix infor-btnbox">
                        <a href="javascript:;" class="fl-l btn-star">174</a>
                        <a href="javascript:;" class="fl-r btn-down">364</a>
                    </div>
                    <div class="hover-box tran">
                        <a target="_blank" rel="nofollow" data-ga="34114_Down" href="index.html?id=MzQxMTQ="
                           class="ppt-click btn-drown template-down-file down-rar-click ppt-down-file "
                           data-id="34114"></a>
                    </div>
                </li>

                <li>
                    <a target="_blank"
                       href="free-powerpoint-template/30-sets-of-colorful-micro---stereoscopic-business-ppt-charts_62129.html"
                       title="30 sets of colorful micro - stereoscopic business PPT charts"
                       data-ga="62129_ImgUrl" class="ppt-click">
                        <img class="lazy" src="../js2.pngtree.com/v2/images/lz.gif"
                             data-original="https://png.pngtree.com/ppt/sm/00/04/59/51f9493ea1bfc94ed486dacfe57bd16a.jpg"
                             alt="30 sets of colorful micro - stereoscopic business PPT charts">
                    </a>

                    <p class="text-overflow">30 sets of colorful micro - stereoscopic business PPT
                        charts</p>

                    <div class="clearfix infor-btnbox">
                        <a href="javascript:;" class="fl-l btn-star">462</a>
                        <a href="javascript:;" class="fl-r btn-down">888</a>
                    </div>
                    <div class="hover-box tran">
                        <a target="_blank" rel="nofollow" data-ga="62129_Down" href="index.html?id=NjIxMjk="
                           class="ppt-click btn-drown template-down-file down-rar-click ppt-down-file "
                           data-id="62129"></a>
                    </div>
                </li>

                <li class="mr0">
                    <div class="mb-more">
                        <h3>32,817</h3>
                        <h4>Powerpoint Templates</h4>
                        <a target="_blank" href="free-powerpoint-templates/more_yestday.html" data-ga="More"
                           rel="nofollow" class="mb-Btnmore tran ppt-click">More</a>
                    </div>
                </li>


            </ul>
        </div>
    </div>
    <div class="main-con lb-photobox">

        <h3 class="main-title">
            <a href="free-backgrounds.html" class="back-click" data-ga="Latest_Backgrounds">Latest
                Backgrounds</a>

            <p>888,977 Background Images for Free Download</p>
        </h3>
        <div class="main-body">
            <ul class="clearfix indexBack-box">
                <li class="across">
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" class="back-click hs-star  star-btn-click" data-id="897463"
                           data-type="2" data-ga="897463_Like">
                            <i></i>
                        </a>
                        <a target="_blank" rel="nofollow" href="index.html?id=ODk3NDYz&amp;type=1"
                           data-ga="ODk3NDYz_JPG" class="hs-downPng down-jpg-click ppt-click">
                            <i></i>JPG</a>
                        <a target="_blank" rel="nofollow" href="index.html?id=ODk3NDYz&amp;type=2"
                           data-ga="ODk3NDYz_PSD" class="hs-downEps down-jpg-click ppt-click">
                            <i></i>PSD</a>
                    </div>
                    <div class="bacPng-box">
                        <img data-original="https://png.pngtree.com/back_pic/05/15/61/3559ae54e029cd2.jpg"
                             alt="99 new season ball purple banner gradient99 new season ball purple banner gradient, 99 Hwan Xin, 99 Big Promotion, Tmall, Background image"
                             class="lazy">
                        <a target="_blank"
                           href="freebackground/99-new-season-ball-purple-banner-gradient_897463.html"
                           class="tran ppt-click" data-ga="ODk3NDYz_ImgUrl"></a>

                        <p class="text-overflow">99 new season ball purple banner gradient</p>
                    </div>
                </li>
                <li class="across">
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" class="back-click hs-star  star-btn-click" data-id="896340"
                           data-type="2" data-ga="896340_Like">
                            <i></i>
                        </a>
                        <a target="_blank" rel="nofollow" href="index.html?id=ODk2MzQw&amp;type=1"
                           data-ga="ODk2MzQw_JPG" class="hs-downPng down-jpg-click ppt-click">
                            <i></i>JPG</a>
                        <a target="_blank" rel="nofollow" href="index.html?id=ODk2MzQw&amp;type=2"
                           data-ga="ODk2MzQw_PSD" class="hs-downEps down-jpg-click ppt-click">
                            <i></i>PSD</a>
                    </div>
                    <div class="bacPng-box">
                        <img data-original="https://png.pngtree.com/back_pic/05/15/35/0059ac23f0c6966.jpg"
                             alt="blue simplified color gradient banner background mapblue simplified color gradient banner background map, Blue, Simple, Atmosphere, Background image"
                             class="lazy">
                        <a target="_blank"
                           href="freebackground/blue-simplified-color-gradient-banner-background-map_896340.html"
                           class="tran ppt-click" data-ga="ODk2MzQw_ImgUrl"></a>

                        <p class="text-overflow">blue simplified color gradient banner background map</p>
                    </div>
                </li>
                <li class="vertical">
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" class="back-click hs-star  star-btn-click" data-id="889143"
                           data-type="2" data-ga="889143_Like">
                            <i></i>
                        </a>
                        <a target="_blank" rel="nofollow" href="index.html?id=ODg5MTQz&amp;type=1"
                           data-ga="ODg5MTQz_JPG" class="hs-downPng down-jpg-click ppt-click">
                            <i></i>JPG</a>
                    </div>
                    <div class="bacPng-box">
                        <img data-original="https://png.pngtree.com/back_pic/05/13/75/5559a186eecd6a5.jpg"
                             alt="orange flat h5 backgroundorange flat h5 background, Orange, White, Texture, Background image"
                             class="lazy">
                        <a target="_blank" href="freebackground/orange-flat-h5-background_889143.html"
                           class="tran ppt-click" data-ga="ODg5MTQz_ImgUrl"></a>

                        <p class="text-overflow">orange flat h5 background</p>
                    </div>
                </li>
                <li class="vertical">
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" class="back-click hs-star  star-btn-click" data-id="875152"
                           data-type="2" data-ga="875152_Like">
                            <i></i>
                        </a>
                        <a target="_blank" rel="nofollow" href="index.html?id=ODc1MTUy&amp;type=1"
                           data-ga="ODc1MTUy_JPG" class="hs-downPng down-jpg-click ppt-click">
                            <i></i>JPG</a>
                        <a target="_blank" rel="nofollow" href="index.html?id=ODc1MTUy&amp;type=2"
                           data-ga="ODc1MTUy_PSD" class="hs-downEps down-jpg-click ppt-click">
                            <i></i>PSD</a>
                    </div>
                    <div class="bacPng-box">
                        <img data-original="https://png.pngtree.com/back_pic/05/10/50/60598bebf22da52.jpg"
                             alt="promotional discount poster backgroundpromotional discount poster background, Gradient, Geometry, Flat, Background image"
                             class="lazy">
                        <a target="_blank"
                           href="freebackground/promotional-discount-poster-background_875152.html"
                           class="tran ppt-click" data-ga="ODc1MTUy_ImgUrl"></a>

                        <p class="text-overflow">promotional discount poster background</p>
                    </div>
                </li>
                <li class="vertical">
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" class="back-click hs-star  star-btn-click" data-id="873353"
                           data-type="2" data-ga="873353_Like">
                            <i></i>
                        </a>
                        <a target="_blank" rel="nofollow" href="index.html?id=ODczMzUz&amp;type=1"
                           data-ga="ODczMzUz_JPG" class="hs-downPng down-jpg-click ppt-click">
                            <i></i>JPG</a>
                        <a target="_blank" rel="nofollow" href="index.html?id=ODczMzUz&amp;type=2"
                           data-ga="ODczMzUz_PSD" class="hs-downEps down-jpg-click ppt-click">
                            <i></i>PSD</a>
                    </div>
                    <div class="bacPng-box">
                        <img data-original="https://png.pngtree.com/back_pic/05/10/14/055989c9d4cce92.jpg"
                             alt="atmospheric fashion electricity supplier psd layered advertising background gradient coloratmospheric fashion electricity supplier psd layered advertising background gradient color, Atmosphere, Fashion, Powder, Background image"
                             class="lazy">
                        <a target="_blank"
                           href="freebackground/atmospheric-fashion-electricity-supplier-psd-layered-advertising-background-gradient-color_873353.html"
                           class="tran ppt-click" data-ga="ODczMzUz_ImgUrl"></a>

                        <p class="text-overflow">atmospheric fashion electricity supplier psd layered
                            advertising background gradient color</p>
                    </div>
                </li>
                <li class="vertical">
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" class="back-click hs-star  star-btn-click" data-id="242123"
                           data-type="2" data-ga="242123_Like">
                            <i></i>
                        </a>
                        <a target="_blank" rel="nofollow" href="index.html?id=MjQyMTIz&amp;type=1"
                           data-ga="MjQyMTIz_JPG" class="hs-downPng down-jpg-click ppt-click">
                            <i></i>JPG</a>
                    </div>
                    <div class="bacPng-box">
                        <img data-original="https://png.pngtree.com/back_pic/03/77/46/4357c00d4c6637e.jpg"
                             alt="h5 ink watercolor backgroundh5 ink watercolor background, Romantic, Beautiful, Dream, Background image"
                             class="lazy">
                        <a target="_blank" href="freebackground/h5-ink-watercolor-background_242123.html"
                           class="tran ppt-click" data-ga="MjQyMTIz_ImgUrl"></a>

                        <p class="text-overflow">h5 ink watercolor background</p>
                    </div>
                </li>
                <li class="vertical mr0">
                    <div class="mb-more">
                        <h3>888,977</h3>
                        <h4>Background Images</h4>
                        <a target="_blank" href="freebackground/Recently-Download.html" rel="nofollow"
                           data-ga="More" class="mb-Btnmore tran ppt">More</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Popular Icons -->
    <div class="main-con icons-photobox">

        <h3 class="main-title">
            <a href="free-icon.html" class="icon-click" data-ga="Popular Icons">Popular Icons</a>

            <p>1,396,460 Icons for Free Unlimited Download</p>
        </h3>
        <div class="main-body">
            <ul class="clearfix indexBack-box">
                <li>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-ga="256_Like" class="icon-click hs-star icon-like-btn "
                           data-type="1" data-id="256">
                            <i></i>
                        </a>
                    </div>
                    <div class="bacPng-box">
                        <img width="100%" data-original="//js2.pngtree.com/v2/images/icons/icon1.jpg"
                             alt="Financial bank" class="lazy">
                        <a rel="nofollow" target="_blank" href="free-icon-packs/financial-bank_256.html"
                           data-ga="256_ImgUrl" class="tran icon-click"></a>

                        <p class="text-overflow tran">Financial bank</p>
                    </div>
                </li>
                <li>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-ga="575_Like" class="icon-click hs-star icon-like-btn "
                           data-type="1" data-id="575">
                            <i></i>
                        </a>
                    </div>
                    <div class="bacPng-box">
                        <img width="100%" data-original="//js2.pngtree.com/v2/images/icons/icon2.jpg"
                             alt="Common application icons" class="lazy">
                        <a rel="nofollow" target="_blank"
                           href="free-icon-packs/common-application-icons_575.html" data-ga="575_ImgUrl"
                           class="tran icon-click"></a>

                        <p class="text-overflow tran">Common application icons</p>
                    </div>
                </li>
                <li>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-ga="595_Like" class="icon-click hs-star icon-like-btn "
                           data-type="1" data-id="595">
                            <i></i>
                        </a>
                    </div>
                    <div class="bacPng-box">
                        <img width="100%" data-original="//js2.pngtree.com/v2/images/icons/icon3.jpg"
                             alt="Water sports icon" class="lazy">
                        <a rel="nofollow" target="_blank" href="free-icon-packs/water-sports-icon_595.html"
                           data-ga="595_ImgUrl" class="tran icon-click"></a>

                        <p class="text-overflow tran">Water sports icon</p>
                    </div>
                </li>
                <li>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-ga="712_Like" class="icon-click hs-star icon-like-btn "
                           data-type="1" data-id="712">
                            <i></i>
                        </a>
                    </div>
                    <div class="bacPng-box">
                        <img width="100%" data-original="//js2.pngtree.com/v2/images/icons/icon4.jpg"
                             alt="Office Supplies" class="lazy">
                        <a rel="nofollow" target="_blank" href="free-icon-packs/office-supplies_712.html"
                           data-ga="712_ImgUrl" class="tran icon-click"></a>

                        <p class="text-overflow tran">Office Supplies</p>
                    </div>
                </li>
                <li>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-ga="191_Like" class="icon-click hs-star icon-like-btn "
                           data-type="1" data-id="191">
                            <i></i>
                        </a>
                    </div>
                    <div class="bacPng-box">
                        <img width="100%" data-original="//js2.pngtree.com/v2/images/icons/icon5.jpg"
                             alt="Vehicle color icon" class="lazy">
                        <a rel="nofollow" target="_blank" href="free-icon-packs/vehicle-color-icon_191.html"
                           data-ga="191_ImgUrl" class="tran icon-click"></a>

                        <p class="text-overflow tran">Vehicle color icon</p>
                    </div>
                </li>
                <li>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-ga="668_Like" class="icon-click hs-star icon-like-btn "
                           data-type="1" data-id="668">
                            <i></i>
                        </a>
                    </div>
                    <div class="bacPng-box">
                        <img width="100%" data-original="//js2.pngtree.com/v2/images/icons/icon6.jpg"
                             alt="Travel flat colorful Icon" class="lazy">
                        <a rel="nofollow" target="_blank"
                           href="free-icon-packs/travel-flat-colorful-icon_668.html" data-ga="668_ImgUrl"
                           class="tran icon-click"></a>

                        <p class="text-overflow tran">Travel flat colorful Icon</p>
                    </div>
                </li>
                <li>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-ga="709_Like" class="icon-click hs-star icon-like-btn "
                           data-type="1" data-id="709">
                            <i></i>
                        </a>
                    </div>
                    <div class="bacPng-box">
                        <img width="100%" data-original="//js2.pngtree.com/v2/images/icons/icon7.jpg"
                             alt="Love ~ chowhound" class="lazy">
                        <a rel="nofollow" target="_blank" href="free-icon-packs/love-_-chowhound_709.html"
                           data-ga="709_ImgUrl" class="tran icon-click"></a>

                        <p class="text-overflow tran">Love ~ chowhound</p>
                    </div>
                </li>
                <li>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-ga="45_Like" class="icon-click hs-star icon-like-btn "
                           data-type="1" data-id="45">
                            <i></i>
                        </a>
                    </div>
                    <div class="bacPng-box">
                        <img width="100%" data-original="//js2.pngtree.com/v2/images/icons/icon8.jpg"
                             alt="bilibili multi-color icon" class="lazy">
                        <a rel="nofollow" target="_blank"
                           href="free-icon-packs/bilibili-multi-color-icon_45.html" data-ga="45_ImgUrl"
                           class="tran icon-click"></a>

                        <p class="text-overflow tran">bilibili multi-color icon</p>
                    </div>
                </li>
                <li>
                    <!-- hover -->
                    <div class="hover-show">
                        <a href="javascript:;" data-ga="351_Like" class="icon-click hs-star icon-like-btn "
                           data-type="1" data-id="351">
                            <i></i>
                        </a>
                    </div>
                    <div class="bacPng-box">
                        <img width="100%" data-original="//js2.pngtree.com/v2/images/icons/icon9.jpg"
                             alt="Icon 2- monochrome block Icon" class="lazy">
                        <a rel="nofollow" target="_blank"
                           href="free-icon-packs/icon-2-monochrome-block-icon_351.html" data-ga="351_ImgUrl"
                           class="tran icon-click"></a>

                        <p class="text-overflow tran">Icon 2- monochrome block Icon</p>
                    </div>
                </li>

                <li>
                    <div class="mb-more">
                        <h3>1,396,460</h3>
                        <h4>Icons</h4>
                        <a target="_blank" href="free-icon.html" rel="nofollow" data-ga="More"
                           class="mb-Btnmore tran icon-click">More</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="index-bottom">
    <div class="merit-box">
        <ul class="clearfix w1520 meritCase">
            <li>
                <i></i>
                <span>Free Download </span>
            </li>
            <li class="Super-quantity">
                <i></i>
        <span>Super quantity
                </span>
            </li>
            <li class="Curated-resource">
                <i></i>
        <span>Curated resource
                </span>
            </li>
            <li class="Daily-updated">
                <i></i>
        <span>Daily updated
                </span>
            </li>
        </ul>
    </div>
    <!-- photos-wall -->
    <a class="photos-wall" href="heart.html" target="_blank" rel="nofollow">
        <p>Over <span style="color: #88b04b">56,073,986</span>+ designers are using pngtree</p>
        <img data-original="//js2.pngtree.com/v2/images/v2/photo-wall.jpg" class="lazy">
    </a>
    <!-- figures -->
    <div class="figures-bg">
        <ul class="w1520 clearfix figuresBox">
            <li>
                <h3>
                    <span>103,986</span>CONTRACT DESIGNER</h3>

                <p>Joined pngtree and shared their works.</p>


            </li>
            <li>
                <h3>
                    <span>5,563,653</span>CONTENTS</h3>

                <p>
                    <span>3,505,253</span>PNG images
                    <span>738,398</span>Backgrounds</p>

                <p>
                    <span>1,397,520</span>Icons
                    <span>75,503</span>Template</p>


            </li>
            <li>
                <h3>
                    <span>125,452,902</span>DOWNLOADS</h3>

                <p>help you create fantastic work</p>

            </li>
        </ul>
    </div>
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

                <a href="index.html?b=2" target="_blank" class="bepUser-btn">Join now</a>
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
                        feedback.</p>

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
                    <p class="big-tit">Login pngtree</p>

                    <p class="small-tit">with your social network.</p>

                    <div class="share-website clearfix ">
                        <a href="javascript:;" data-type="gg" class="btn-google base-go-login fl-l">
                            <i class="icon-google"></i>Google</a>
                        <a href="javascript:;" data-type="fb" class="btn-facebook base-go-login fl-l">
                            <i class="icon-facebook"></i>Facebook</a>
                        <a href="javascript:;" data-type="tt" class="btn-twitter base-go-login fl-l">
                            <i class="icon-twitter"></i>Twitter</a>
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
                <form action="#" class="other-account">
                    <input type="email" maxlength="100" id="base-public-login-email-text" placeholder="Email"/>
                    <input type="password" maxlength="20" id="base-public-login-password-text"
                           placeholder="Password" class="pwdPut"/>
                    <input type="checkbox" id="remember-me" checked="checked"><label class="remember-me"
                                                                                     for="remember-me">Remember
                        me</label>
                    <a class="ipt-btn" id="base-sub-Login-Btn"/>Login</a>
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
                    <p class="big-tit">Register pngtree</p>

                    <p class="small-tit">

                    </p>

                    <div class="share-website clearfix ">
                        <!--                    <a href="javascript:;" data-type="fb" style="display: none;"  class="btn-facebook base-go-login fl-l"><i class="icon-facebook"></i>Facebook</a>-->
                        <a href="javascript:;" data-type="gg" class="btn-google base-go-login fl-l">
                            <i class="icon-google"></i>Google</a>
                        <a href="javascript:;" data-type="fb" class="btn-facebook base-go-login fl-l">
                            <i class="icon-facebook"></i>Facebook</a>
                        <a href="javascript:;" data-type="tt" class="btn-twitter base-go-login fl-l">
                            <i class="icon-twitter"></i>Twitter</a>
                    </div>
                </div>
                <div class="fg-line">
                    or
                </div>
                <form action="#">
                    <input type="text" id="base-public-login-username-regiser-text" maxlength="255"
                           placeholder="Username"/>
                    <input type="email" id="base-public-login-email-regiser-text" maxlength="100"
                           placeholder="Email"/>
                    <input type="password" id="base-public-login-password-regiser-text" maxlength="20"
                           placeholder="Password" class="pwdPut"
                            />

                    <div class="input-code-box clearfix">
                        <input type="text" class="input-code" placeholder="Verification code">

                        <div class="verification-code">
                            <img src="#" onclick="Pngtree.BaseFun.captcha()" title="click refresh"
                                 alt="click refresh">
                        </div>
                    </div>
                    <a class="ipt-btn" id="base-sub-regist-Btn"/>Register</a>
                </form>
                <p class="wx-prompt">Already have an account?
                    <a href="javascript:;" id="base-login-trigger" class="login-trigger">Log in</a>
                </p>

            </div>

            <!--注册成功弹窗-->
            <div class="register-success rlg-main" style="display: none;">
                <span class="cls-btn"></span>

                <p class="big-tit">Thank you!</p>

                <p class="small-tit"> Thank you for choosing pngtree, we already sent you an
                    <br/>email within a verification link, please click the link to
                    <br/> finish the registration. If you haven't received the email
                    <br/> in 1 minute, please click the resend button,
                    <br/> we will send you another email.

                    <a id="base-retry-send-email" href="javascript:;" target="_blank">Resend</a> to try again. </p>


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
                <a href="index.html?b=3" target="_blank" class="bepUser-btn">Become a Premium user</a>
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
                <a href="index.html?b=4" class="bepUser-btn">Become a Premium user</a>
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
                    <a target="_blank" href="index.html?b=5" class="download">Premium Download</a>
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
                    <a href="index.html" id="go-to-pay" class="sp-upgrade">Subscribe now</a>
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
                <a href="index.html" class="hover-window-click seo-alert-back">click here&gt;</a>
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
                        <img src="../js2.pngtree.com/v2/images/home/paradrop.png" alt="">
                    </div>
                    <h4 class="download-window-title">Templates only for Premium member.</h4>

                    <p class="download-window-text">Upgrade to premium plan to experience unlimited download.</p>
                    <a href="index.html" target="_blank" class="download-window-link">Go Premium</a>
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
                <a target="_blank" href="index.html" class="levelUp-window-link">
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