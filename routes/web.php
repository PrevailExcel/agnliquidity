<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('website.index');
});
Route::get('/testing', function () {
    return view('website.howItWorks');
});
Route::get('/how-it-works', function () {
    return view('website.howItWorks');
});
Route::get('/about-us', function () {
    return view('website.about');
});
Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::get('/testAPI', 'ConnectController@index')->name('test.api');
Route::get('/testAPI2', 'ConnectController@getAll')->name('test.all');
Route::post('/uploadpop', 'ActivityController@uploadPop')->name('upload.pop');
Route::post('/check-voucher', 'ActivityController@activateVoucher')->name('activate.voucher');
Route::get('/validate-user', 'ActivityController@amIValid')->name('am.IValid');
Route::get('/buy-voucher', 'HomeController@buyPackages')->name('buy.packages');
Route::post('/admin/login', 'Auth\LoginController@adminAuth')->name('admin.auth');
Route::get('/sponsored-post/{id}', 'ActivityController@post')->name('show.post');
Route::get('/activity', 'HomeController@activity')->name('activity');
Route::post('/bank-details', 'HomeController@addBankDetails')->name('edit.bank');
Route::post('/bitcoin-details', 'HomeController@addBitcoinAddress')->name('edit.wallet');
Route::post('/agricoin-details', 'HomeController@addProfile')->name('edit.profile');
Route::post('/withdraw-now', 'HomeController@withdraw')->name('withdraw.now');

 Route::prefix('/admin')->middleware('role:superadmin')->group(function(){
     Route::get('dash', 'AdminController@index')->name('admin.index');
     Route::get('users/all', 'AdminController@viewUsers')->name('admin.viewUsers');
     Route::get('generate/voucher', 'AdminController@generateVoucher')->name('admin.generate');
     Route::get('vouchers/list', 'AdminController@listVoucher')->name('voucher.list');
     Route::get('unverified/list', 'AdminController@verifyUsers')->name('verify.users');
     Route::post('approve/user', 'AdminController@approveUsers')->name('approve.user');
     Route::post('generate/voucher', 'AdminController@generateVouch')->name('voucher.generate');
     Route::get('users/single', 'AdminController@viewSingleUsers')->name('viewSingleUsers');
     Route::get('pay/users/naira', 'AdminController@payInNaira')->name('pay.naira');
     Route::get('pay/users/bitcoin', 'AdminController@payInBitcoin')->name('pay.bitcoin');
     Route::get('pay/users/agricoin', 'AdminController@payInAgricoin')->name('pay.agricoin');
     Route::post('pay/up/asap', 'AdminController@payAsap')->name('pay.asap');
     Route::get('payment/history', 'AdminController@paymentHistory')->name('payment.history');
     Route::get('assign/writer', 'AdminController@assignWriter')->name('assign.writer');
     Route::get('all/writers', 'AdminController@allWriters')->name('all.writers');
     Route::post('assign/writer/now', 'AdminController@assignWriterNow')->name('assign.writer.now');
     Route::post('assign/writer/delete', 'AdminController@assignWriterDelete')->name('assign.writer.delete');
    Route::resource('packages', 'PackageController');

});

Route::resource('posts', 'PostController');

//Route::get('/cookie', function () {
//    return Cookie::get('referral');
//});

Route::get('/confirm/{ref}', 'HomeController@confirm')->name('confirm');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
