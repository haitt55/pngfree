@extends('layouts.default')
@section('css_class_content', 'page-login')
@section('content')
    <div class="page-register container-fluid">
        <form action="#" class="form form--regular text-center">
            <legend>パスワードの再設定画面</legend>
            <div class="py-md-5"></div>

            <div class="register-success my-md-5 d-inline-block text-center text-md-left">
                <p>メールをお送りいたしました。</p>
            </div>

            <div class="py-5"></div>
            <div class="row form-group text-center">
                <div class="col-12">
                    <a href="{{ route('auth.login.view') }}" class="btn btn--main">ログイン画面</a>
                </div>
            </div>
            <div class="py-5"></div>
        </form>
    </div>
@endsection
