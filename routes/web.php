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

// Auth
Route::group([
    'as' => 'auth.',
], function () {

    // socialite
    Route::get('login/social/{provider}', 'Front\SocialController@redirectToProvider')->name('social_redirect');
    Route::get('login/social/{provider}/callback', 'Front\SocialController@handleProviderCallback')->name('social_callback');
    // local
    Route::post('register', 'Front\AuthController@register')->name('register');
    Route::post('login', 'Front\AuthController@login')->name('login');
});

// Admin
Route::get('admin/dashboard','AdminController@index')->name('admin.dashboard');
Route::get('admin/list-users','AdminController@listUser')->name('admin.listUser');
Route::post('admin/changeStatus','AdminController@changeStatus')->name('admin.changeStatus');
Route::post('admin/deleteUser','AdminController@deleteUser')->name('admin.deleteUser');
Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','Admin\LoginController@login');
Route::post('admin/logout','Admin\LoginController@logout')->name('admin.logout');
Route::post('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/reset','Admin\ResetPasswordController@reset');
Route::get('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');

Route::group([
    // 'as'         => 'front.',
    'middleware' => 'front_auth',
    'namespace'  => 'Front',
], function () {
    Route::get('logout', 'AuthController@logout')->name('logout');
    Route::get('/login/check', 'HomeController@loginCheck')->name('login.check');
    Route::get('/canDownload/check', 'ImageController@checkCanDownload')->name('can.download.check');
    Route::get('/', 'HomeController@index')->name('home');
    Route::any('/element/download', 'ImageController@download')->name('image.download');
    Route::get('/search', 'HomeController@search')->name('search');
    Route::view('/about.html', 'front.about');
    Route::view('/terms-of-service.html', 'front.terms_of_service');
    Route::get('/{categorySlug}.html', 'CategoryController@index')->name('category.index');
    Route::get('/so/{tagSlug}.html', 'TagController@index')->name('tag.index');
    Route::get('/{categoryPrefix}/{imageSlug}', 'ImageController@detail')->where('imageSlug', '^.{1,255}$')->name('image.detail');
});