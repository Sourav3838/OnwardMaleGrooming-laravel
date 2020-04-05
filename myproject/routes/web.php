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

Route::get('/','proparlour@mainpage');
////////////////////////////////////////project//////////////////
Route::get('/mainhome','proparlour@mainpage');
Route::view('/aboutus','myproject.aboutus');
Route::view('/contactus','myproject.contactus');
Route::get('/indoor','proparlour@inbox');
Route::get('/outdoor','proparlour@outbox');
Route::get('/book','proparlour@login');
Route::get('/logged','proparlour@useraccount');
Route::get('/newuser','proparlour@signup');
Route::get('/signup','proparlour@backtologin');
Route::get('/logout','proparlour@backtologinpage');
Route::get('/backtoaccount/{name}','proparlour@backtoaccount');
Route::get('inbooking/inpay/{name}', 'proparlour@inpay');
Route::get('inbooking/{user}', 'proparlour@inbook');
Route::get('payment/{user}/{total}/{count}', 'proparlour@payment');
Route::get('paymentoutorder/{user}/{total}/{count}', 'proparlour@paymentoutorder');
Route::get('outbooking/{user}', 'proparlour@outbook');
Route::get('outbooking/outpay/{user}', 'proparlour@outpay');
Route::get('/history/{name}','proparlour@history');
Route::get('/edit/{user}','proparlour@edit');
Route::get('edit/editdetails/{user}', 'proparlour@details');
Route::get('/offers/{user}','proparlour@offers');
Route::view('/loggingout','myproject.login');
Route::get('payment/inorder','proparlour@inorder');
Route::get('payment/outsideorder','proparlour@outsideorder');
Route::get('searchorder/{name}','proparlour@searchorder');


Route::get('total/{name}','proparlour@appointments');
Route::get('searchadminorder/{name}/{count}','proparlour@searchadminorder');
Route::get('pending/{name}','proparlour@pending');
Route::get('pendingadminorder/{name}/{count}','proparlour@pendingadminorder');
Route::get('cancelled/{name}','proparlour@cancelled');
Route::get('canceladminorder/{name}/{count}','proparlour@canceladminorder');
Route::get('confirmed/{name}','proparlour@confirmed');
Route::get('confirmedadminorder/{name}/{count}','proparlour@confirmedadminorder');
Route::get('users/{name}','proparlour@users');
Route::get('searchuser/{name}/{count}','proparlour@searchuser');
Route::get('artist/{name}','proparlour@artist');
Route::get('searchartist/{name}/{count}','proparlour@searchartist');
Route::get('addartist/{name}','proparlour@addartist');
Route::get('addartistverify/{name}','proparlour@addartistverify');
Route::get('deleteartist/{name}','proparlour@deleteartist');
Route::get('deleteartistverify/{name}','proparlour@deleteartistverify');
Route::get('adoffers/{name}','proparlour@adminoffers');


?>