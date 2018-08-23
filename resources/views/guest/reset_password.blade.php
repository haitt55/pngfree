@extends('layouts.default')
@section('css_class_content', 'page-login')
@section('content')
<div class="main page-reset">
    <div class="container-fluid px-0 px-md-4">
        @isset($status)
            <form action="#" class="form form--regular text-center">
                <legend>パスワードの再設定画面</legend>
                <div class=" my-5">
                    <p class="text--spec text--large mb-0">メールをお送りいたしました。</p>
                </div>

                <a href="#" class="btn btn--main mt-5">ログイン画面</a>
            </form>
        @else
            <form action="{{ route('auth.forgot.password.mail') }}" method="post" class="form form--regular text-center">
                {!! csrf_field() !!}
                <legend>パスワードの再設定画面</legend>
                <p class="text--regular text--extra color-main "></p>
                <div class="text-left d-inline-block my-md-5 px-4">
                    <p class="text--spec text--large mb-0">登録いただいたメールアドレスをご入力ください</p>
                    <p class="text--spec text--large">パスワード再設定用のURLをメールでお送りします</p>
                </div>
                <div class="row my-5">
                    <div class="col-md-4 text-left text-md-center">
                        <label for="" class="">■ メールアドレス</label>
                    </div>
                    <div class="col-md-7 text-left">
                        <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                        <span class="error">{{ $errors->first('email') }}</span>
                    </div>
                </div>
                <button class="btn btn--main mt-5" type="submit">送信する</button>
            </form>
        @endif
    </div>

</div>
@endsection



@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/localization/messages_ja.min.js"></script>
@endsection

@include('layouts.includes.foot_js')
