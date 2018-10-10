@extends('layouts.default')
@section('css_class_content', 'page-login')
@section('content')
    <div class="page-register container-fluid">
        <form action="#" class="form form--regular text-center">
            <legend>会員登録完了のお知らせ</legend>
            <div class="py-md-5"></div>

            <div class="register-success my-md-5 d-inline-block text-center text-md-left">
                <p>会員登録が無事完了いたしました</p>
                <p>ご登録のアドレス宛にメールをお送りいたしました</p>
                <p>ご確認の上、本登録をお願いいたします</p>
            </div>

            <div class="py-5"></div>
            <div class="row form-group text-center">
                <div class="col-12">
                    <a href="{{ route('auth.login.view') }}" class="btn btn--main">man-assiを始める</a>
                </div>
            </div>
            <div class="py-5"></div>
        </form>
    </div>
@endsection
