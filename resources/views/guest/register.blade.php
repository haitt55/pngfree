@extends('layouts.default')
@section('title', '会員登録')
@section('css_class_content', 'page-login')
@section('content')
    <style>
        .button-disabled {
            cursor: not-allowed;
            pointer-events: none;
            opacity: 0.6;
        }
    </style>
    <div class="page-register container-fluid">
        @if ($errors->first('agreement'))
            <span class="error">{{ $errors->first('agreement') }}</span>
        @endif
        <form class="form form--regular" method="post" id="register-main-form" action="{!!route('auth.register.confirm')!!}">
            {!! csrf_field() !!}
            <legend>会員登録画面</legend>

            {{-- Username --}}
            <div class="row form-group">
                <div class="col-md-3">
                    <label class="required" for="username">■ 氏名</label>
                </div>
                <div class="col-md-9">
                    <input required type="text" id="name" class="form-control" name="name" value="{{ old('name', $user->name) }}">
                    <span class="error">{{ $errors->first('name') }}</span>
                </div>
            </div>

            {{-- Phonetic --}}
            <div class="row form-group">
                <div class="col-md-3">
                    <label class="required" for="phonetic">■ フリガナ</label>
                </div>
                <div class="col-md-9">
                    <input type="text" required id="kana" class="form-control" name="kana" value="{{ old('kana', $user->kana) }}">
                    <span class="error">{{ $errors->first('kana') }}</span>
                </div>
            </div>


            {{-- Birth day --}}
            <div class="row form-group">
                <div class="col-md-3">
                    <label class="required" >■ 生年月日</label>
                </div>
                <div class="col-md-9">
                    <div class="select-birth__wrap">
                        <div class="select d-inline">
                            <select name="birthday_year" id="birthday_year">
                                <?php $yearOptions = getYearOptions(); ?>
                                @foreach($yearOptions as $k => $v)
                                    <option value="{{ $k }}" @if (old('birthday_year', $user->birthday_year) == $k) selected @endif>{{ $v }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="select d-inline ml-3">
                            <select name="birthday_month" id="birthday_month">
                                <?php $monthOptions = getMonthOptions(); ?>
                                @foreach($monthOptions as $k => $v)
                                    <option value="{{ $k }}" @if (old('birthday_month', $user->birthday_month) == $k) selected @endif>{{ $v }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="select d-inline ml-3">
                            <select name="birthday_date" id="birthday_date">
                                <?php $dateOptions = getDateOptions(); ?>
                                @foreach($dateOptions as $k => $v)
                                    <option value="{{ $k }}" @if (old('birthday_date', $user->birthday_date) == $k) selected @endif>{{ $v }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <span class="error">{{ $errors->first('birthday') }}</span>
                </div>
            </div>

            {{-- Sex type --}}
            <div class="row form-group">
                <div class="col-md-3">
                    <label class="required" >■ 性別</label>
                </div>
                <div class="col-md-9">
                    <select name="sex" id="sex">
                        <option value="{{ App\Models\User\User::MALE }}" @if (old('sex', $user->sex) == App\Models\User\User::MALE) selected @endif>{{ getSex(App\Models\User\User::MALE) }}</option>
                        <option value="{{ App\Models\User\User::FEMALE }}" @if (old('sex', $user->sex) === App\Models\User\User::FEMALE) selected @endif>{{ getSex(App\Models\User\User::FEMALE) }}</option>
                    </select>
                    <span class="error">{{ $errors->first('sex') }}</span>
                </div>
            </div>

            {{-- Zipcode --}}
            <div class="row form-group">
                <div class="col-md-3">
                    <label class="required" for="zipcode">■ 郵便番号</label>
                </div>
                <div class="col-md-9">
                    <input type="text" required name="post_code" value="{{ old('post_code', $user->post_code) }}" id="post_code" class="form-control">
                    <span class="error">{{ $errors->first('post_code') }}</span>
                </div>
            </div>

            {{-- Address --}}
            <div class="row form-group">
                <div class="col-md-3">
                    <label class="required" for="pref">■ 住所</label>
                </div>
                <div class="col-md-9">
                    <div class="select d-inline">
                        <select name="pref" id="pref">
                            @foreach($prefOptions as $k => $v)
                                <option value="{{ $k }}" @if (old('pref', $user->pref) == $k) selected @endif>{{ $v }}</option>
                            @endforeach
                        </select>
                    </div>
                    <span class="error"></span>
                    <input type="text" required name="address" id="address" class="form-control mt-3" value="{{ old('address', $user->address) }}">
                    <span class="error">{{ $errors->first('address') }}</span>
                </div>
            </div>

            {{-- Phone --}}
            <div class="row form-group">
                <div class="col-md-3">
                    <label class="required" for="phone_number">■ 電話番号</label>
                </div>
                <div class="col-md-9">
                    <input type="text" required name="phone_number" value="{{ old('phone_number', $user->phone_number) }}" id="phone_number" class="form-control">
                    <span class="error">{{ $errors->first('phone_number') }}</span>
                </div>
            </div>

            {{-- Email --}}
            <div class="row form-group">
                <div class="col-md-3">
                    <label class="required" for="email">■ メールアドレス</label>
                </div>
                <div class="col-md-9">
                    <input type="text" required name="email" id="email" class="form-control" value="{{ old('email', $user->email) }}">
                    <span class="error">{{ $errors->first('email') }}</span>
                </div>
            </div>
            {{-- Email confirm --}}
            <div class="row form-group">
                <div class="col-md-3">
                    <label class="" for="email_confirmation">■ メールアドレス(確認)</label>
                </div>
                <div class="col-md-9">
                    <input type="text" name="email_confirmation" id="email_confirmation" class="form-control" value="{{ old('email', $user->email_confirmation) }}">
                    <span class="error">{{ $errors->first('email_confirmation') }}</span>
                </div>
            </div>

            {{-- Password --}}
            <div class="row form-group">
                <div class="col-md-3">
                    <label class="required" for="password">■ パスワード</label>
                </div>
                <div class="col-md-9">
                    <input type="password" name="password" id="password" class="form-control" value="">
                    <span class="error">{{ $errors->first('password') }}</span>
                </div>
            </div>

            {{-- Password confirm --}}
            <div class="row form-group">
                <div class="col-md-3">
                    <label class="" for="password_confirmation">■ パスワード(確認)</label>
                </div>
                <div class="col-md-9">
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" value="">
                    <span class="error">{{ $errors->first('password_confirmation') }}</span>
                </div>
            </div>

            <div class="row form-group mb-0 mb-md-4">
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-center my-3 my-md-5">
                        <label id="agreement-label">
                            <input type="checkbox" name="agreement" id="agreement" value="1">
                            <span class="text--third text--medium d-flex align-items-center">
                                <a href="{{ route('term') }}" class="d-inline color-main text--term">利用規約</a>に同意する
                            </span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="row form-group text-center">
                <div class="col-12">
                    <button type="submit" class="btn btn--main button-disabled" id="submit-main-form">無料会員登録</button>
                </div>
            </div>
            <div class="py-md-5"></div>
        </form>
    </div>
@endsection

@section('js')
    <script>
        function agreeCheck() {
            if ($('#agreement').is(':checked')) {
                $('#submit-main-form').removeClass('button-disabled');
            } else {
                if (!$('#submit-main-form').hasClass()) {
                    $('#submit-main-form').addClass('button-disabled');
                }
            }
        }
        (function ($, RKExternal) {
            agreeCheck();
            $('#agreement-label').change(function() {
                agreeCheck();
            });

            $('#register-main-form').on('keyup keypress', function(e) {
                var keyCode = e.keyCode || e.which;
                if (keyCode === 13) {
                    e.preventDefault();
                    return false;
                }
            });
        })(jQuery, RKExternal);
    </script>
@endsection
