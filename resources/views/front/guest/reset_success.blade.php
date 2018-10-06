@extends('layouts.default')
@section('css_class_content', 'page-login')
@section('content')
    <div class="page-register container-fluid">
        <form action="#" class="form form--regular text-center">
            <div class="py-5"></div>

            <div class="register-success my-5 d-inline-block text-left">
                パスワードが再設定されました。!
            </div>

            <div class="py-5"></div>
            <div class="row form-group text-center">
                <div class="col-12">
                    <a href="{{ route('auth.login.view') }}" class="btn btn--main">ログイン画面に戻る</a>
                </div>
            </div>
            <div class="py-5"></div>
        </form>
    </div>
@endsection
