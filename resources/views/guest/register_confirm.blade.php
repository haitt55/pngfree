@extends('layouts.default')
@section('css_class_content', 'page-login')
@section('content')
    <div class="page-register container-fluid">
        <form method="post" action="{!!route('auth.register.post')!!}" class="form form--regular" id="register-confirm-form">
            {!! csrf_field() !!}
            <legend>会員登録確認画面</legend>

            {{-- Username --}}
            <div class="row form-group">
                <div class="col-md-3 offset-md-1">
                    <label  for="username">■ 氏名</label>
                </div>
                <div class="col-md-8">
                    <input name="name" value="{{ $user->name }}" type="hidden">
                    <p>{{ $user->name }}</p>
                </div>
            </div>

            {{-- Phonetic --}}
            <div class="row form-group">
                <div class="col-md-3 offset-md-1">
                    <label  for="phonetic">■ フリガナ</label>
                </div>
                <div class="col-md-8">
                    <input name="kana" value="{{ $user->kana }}" type="hidden">
                    <p>{{ $user->kana }}</p>
                </div>
            </div>


            {{-- Birth day --}}
            <div class="row form-group">
                <div class="col-md-3 offset-md-1">
                    <label  >■ 生年月日</label>
                </div>
                <div class="col-md-8">
                    <input name="birthday_year" value="{{ $user->birthday_year }}" type="hidden">
                    <input name="birthday_month" value="{{ $user->birthday_month }}" type="hidden">
                    <input name="birthday_date" value="{{ $user->birthday_date }}" type="hidden">
                    <input name="birthday" value="{{ $user->birthday }}" type="hidden">

                    <p>{{ date('Y年m月d日', strtotime($user->birthday)) }}</p>
                </div>
            </div>

            {{-- Sex type --}}
            <div class="row form-group">
                <div class="col-md-3 offset-md-1">
                    <label  >■ 性別</label>
                </div>
                <div class="col-md-8">
                    <input name="sex" value="{{ $user->sex }}" type="hidden">
                    <p>{{ getSex($user->sex) }}</p>
                </div>
            </div>

            {{-- Zipcode --}}
            <div class="row form-group">
                <div class="col-md-3 offset-md-1">
                    <label  for="zipcode">■ 郵便番号</label>
                </div>
                <div class="col-md-8">
                    <input name="post_code" value="{{ $user->post_code }}" type="hidden">
                    <p>{{ $user->post_code }}</p>
                </div>
            </div>

            {{-- Address --}}
            <div class="row form-group">
                <div class="col-md-3 offset-md-1">
                    <label  for="country">■ 住所</label>
                </div>
                <div class="col-md-8">
                    <input name="pref" value="{{ $user->pref }}" type="hidden">
                    <input name="address" value="{{ $user->address }}" type="hidden">
                    <p>{{ getPref($user->pref) }} - {{ $user->address }}</p>
                </div>
            </div>

            {{-- Phone --}}
            <div class="row form-group">
                <div class="col-md-3 offset-md-1">
                    <label  for="phone">■ 電話番号</label>
                </div>
                <div class="col-md-8">
                    <input name="phone_number" value="{{ $user->phone_number }}" type="hidden">
                    <p>{{ $user->phone_number }}</p>
                </div>
            </div>

            {{-- Email --}}
            <div class="row form-group">
                <div class="col-md-3 offset-md-1">
                    <label  for="email">■ メールアドレス</label>
                </div>
                <div class="col-md-8">
                    <input name="email" value="{{ $user->email }}" type="hidden">
                    <input name="email_confirmation" value="{{ $user->email_confirmation }}" type="hidden">
                    <p>{{ $user->email }}</p>
                </div>
            </div>


            {{-- Password --}}
            <div class="row form-group">
                <div class="col-md-3 offset-md-1">
                    <label for="password">■ パスワード</label>
                </div>
                <div class="col-md-8">
                    <input name="password" value="{{ $user->password }}" type="hidden">
                    <p>********</p>
                </div>
            </div>

            <div class="row form-group text-center">
                <div class="col-12">
                    <button type="submit" class="btn btn--main">無料会員登録</button>
                </div>
            </div>
            <div class="py-4 py-md-5"></div>
        </form>
    </div>
@endsection
@section('js')
    <script>
        function back() {
            $('#register-confirm-form').attr('action', "{{ route('auth.register.view') }}");
            $('#register-confirm-form').submit();
        }
    </script>
@endsection
