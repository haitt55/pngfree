<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('layouts.includes.head_css')
    </head>
    <body class="@yield('css_class_content')">
        <div id="wrapper" class="home ">
            @include('layouts.partials.header')
            @yield('content_before')
            <!-- v2 首页content -->
            <div id="content">
                @yield('content')
            </div>

            @yield('content_after')
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
            <div class='tkw-window' id="downastrict-notactive" style="display: none;">
                <div class="tkw-main">
                    <div class="tkw-dlimitCont">
                        <span class="cls-btn"></span>
                        <i class="dlimit-ico"></i>
                        <h3>You are not active now. Please wait for admin approved</h3>
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
        </div>
        @include('layouts.partials.footer')
        @include('layouts.partials.side_navigation')
        @include('layouts.includes.foot_js')

<div class='tkw-window' id="message-cus" style="display: none;">
    <div class="tkw-main">
        <div class="tkw-dlimitCont">
            <span class="cls-btn"></span>
            <i class="dlimit-ico"></i>
            <h3 data-mc-body="title"></h3>
            <p data-mc-body="body"></p>
        </div>
    </div>
</div>
    </body>
</html>
