@extends('layouts.default')
@section('title', 'ログイン')
@section('css_class_content', 'page-login')
@section('css')
    <link href="../v2/css/v2/iconfont/iconfont.css?v=20180811199" rel="stylesheet">
    <link href="../v2/css/v2/find.css?v=20180811199" rel="stylesheet">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection
@section('content')
    <style>
        button.reset {
            display: inline-block;
            width: 398px;
            height: 50px;
            border-radius: 4px;
            font-size: 22px;
            color: #fff;
            text-align: center;
            line-height: 48px;
            font-weight: 700;
            background: #88b04b;
            margin-bottom: 25px;
            padding: 0px;
        }
    </style>
    <a href="/" class="logo"></a>
    <div class="find-password find-one">
        <div class="close-btn"></div>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <h3>Reset password</h3>
        <p>Enter the email of your account to reset password.</p>
        <p>Then you will receive a link to email to reset the password.If </p>
        <p>you have any issue about reset password <span><a style="color: #88b04b;" id="find-contact" href="javascript:;">contact us</a></span></p>
        <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
            @csrf

            <div class="form-group row">
                <div id="email-div" class="email">
                    {{--<input type="email" placeholder="Email" pattern="[^ @]*@[^ @]*" class="find-input" id="find-email">--}}
                    <input id="email" class="find-input" placeholder="Email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary reset" id="reset-password">
                    Reset password
                </button>
            </div>
        </form>

        <div class="clearfix f-bottom">
            <a href="javascript:;" id="find-login" class="fl-l com-green f-login">Login</a>
            <p class="fl-r">Not a member? <a href="javascript:;" id="find-register" class="com-green">Register</a></p>
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
