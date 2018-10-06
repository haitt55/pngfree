@extends('layouts.default')
@section('css_class_content', 'page-login')
@section('content')
    <div class="page-register container-fluid">
        <form method="post" action="{!!route('account.reset_pass.post')!!}" class="form form--regular text-center">
            {!! csrf_field() !!}
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="py-5"></div>

            <div class="register-success my-5 d-inline-block text-left">
                @if ($error)
                    <p>トークンが無効です!</p>
                @else
                    <div class="row" style="width: 350px;">
                        <div class="col-md-12"></div>
                        <div class="col-md-12">
                            新しいパスワード<input type="password" class="form-control mt-3"  name="password" value="" style="margin-bottom: 5px;">
                            <p><span class="error">{{ $errors->first('password') }}</span></p>
                            新しいパスワード（確認用）<input type="password" class="form-control mt-3"  name="password_confirmation" value="" style="margin-bottom: 5px;">
                            <button type="submit" class="btn btn--fw  btn-primary mt-3 text--regular  text--medium">パスワード変更</button>
                        </div>
                    </div>
                @endif
            </div>
            <div class="py-5"></div>
        </form>
    </div>
@endsection
