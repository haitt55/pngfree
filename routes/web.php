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
Route::get('admin/dashboard','AdminController@index')->name('admin.dashboard');
Route::get('admin/list-users','AdminController@listUser')->name('admin.listUser');
Route::post('admin/changeStatus','AdminController@changeStatus')->name('admin.changeStatus');
Route::post('admin/deleteUser','AdminController@deleteUser')->name('admin.deleteUser');
Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','Admin\LoginController@login');
Route::post('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/reset','Admin\ResetPasswordController@reset');
Route::get('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');

Route::get('/', 'HomeController@index')->name('home');
Route::view('/about.html', 'pages.about');
Route::view('/terms-of-service.html', 'pages.terms_of_service');
Route::get('/{categorySlug}.html', 'CategoryController@index')->name('category.index');
Route::get('/so/{tagSlug}.html', 'TagController@index')->name('tag.index');
Route::get('/{categoryPrefix}/{imageSlug}', 'ImageController@detail')
    ->where('imageSlug', '^.{1,255}$')->name('image.detail');

// Auth
Route::group([
    'as' => 'auth.',
], function () {
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



Auth::routes();
