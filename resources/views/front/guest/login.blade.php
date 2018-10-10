@extends('layouts.default')
@section('title', 'ログイン')
@section('css_class_content', 'page-login')
@section('content')
<div class="main">
      <div class="container">
          @include('layouts.includes.messages_error')
          @if(Session::has('active_message'))
              <p class="alert alert-success">{{ Session::get('active_message') }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
          @endif
          <div class="row">
              <div class="col-md-6"></div>
              <div class="col-md-6">
                  <div class="login__wrap">
                      <form method="post" action="{!!route('auth.login.post')!!}" class="form-login" id="form-login" data-form-submit="ajax"
                            data-cb-error="errorLogin">
                          {!! csrf_field() !!}
                          <legend class="text--regular  text-center">ログイン画面</legend>
                          <input type="text" class="form-control mt-4 mt-md-5" placeholder="メールアドレス" name="email" value="">
                          <input type="password" class="form-control mt-3" placeholder="パスワード" name="password" value="">
                          <button type="submit" class="btn btn--fw  btn-primary mt-3 text--regular  text--medium">ログイン</button>
                          <p class="text-center text--regular text--large my-3">or</p>
                          <a href="{!!route('auth.login.facebook')!!}" class="btn btn--fw btn--fb-log">
                              <span><i class="fab fa-facebook-f"></i></span>
                              <span class="text--regular text--medium">facebookでログイン</span>
                          </a>
                        
                      </form>

                  </div>
              </div>
          </div>
      </div>
</div>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/localization/messages_ja.min.js"></script>
<script type="text/javascript" src="{!!asset('js/guest/login.js')!!}"></script>
@endsection
