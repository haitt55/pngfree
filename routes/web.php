<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::group([
    'as'         => 'front.',
    'middleware' => 'front_auth',
], function () {
    Route::get('/', 'Front\HomeController@index')->name('home');
    Route::view('/about.html', 'pages.about');
    Route::view('/terms-of-service.html', 'pages.terms_of_service');

    Route::get('logout', 'Front\AuthController@logout')->name('logout');
});

// Auth
Route::group([
    'as' => 'auth.',
], function () {

    // socialite
    Route::get('login/social/{provider}', 'Front\SocialController@redirectToProvider')->name('social_redirect');
    Route::get('login/social/{provider}/callback', 'Front\SocialController@handleProviderCallback')->name('social_callback');

    Route::get('logout', 'Auth\LoginController@logout')
        ->name('logout');
    Route::get('login', 'Auth\LoginController@loginView')
        ->name('login.view');
    Route::post('login/post', 'Auth\LoginController@loginPost')
        ->name('login.post');
    Route::get('login/facebook', 'Auth\LoginController@loginFacebook')
        ->name('login.facebook');
    Route::get('login/facebook/callback', 'Auth\LoginController@loginFacebookCallback')
        ->name('login.facebook.callback');
    Route::any('register', 'Auth\RegisterController@showRegistrationForm')
        ->name('register.view');
    Route::any('register/confirm', 'Auth\RegisterController@registerConfirm')
        ->name('register.confirm');
    Route::post('register/post', 'Auth\RegisterController@postRegister')
        ->name('register.post');
    Route::get('register/success', 'Auth\RegisterController@success')
        ->name('register.success');

    Route::get('forgot/password', 'Auth\ForgotPasswordController@showLinkRequestForm')
        ->name('forgot.password');
    Route::post('forgot/password/mail', 'Auth\ForgotPasswordController@sendLinkToEmail')
        ->name('forgot.password.mail');
    Route::get('forgot/mail/success', 'Auth\ForgotPasswordController@sendForgotLinkSuccess')
        ->name('mail.reset.success');

    Route::view('/reset-password/success', 'guest.reset_password', ['status' => 1]);
});
