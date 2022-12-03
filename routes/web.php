<?php

use Illuminate\Support\Facades\Route;


//以下FashionWeb側
Route::get('', 'App\Http\Controllers\FwController@index')->name('fw.index');
Route::get('new_dress', 'App\Http\Controllers\FwController@new_dress')->name('fw.new_dress');
Route::get('catalog_an', 'App\Http\Controllers\FwController@catalog_an')->name('fw.catalog_an');
Route::get('catalog_andy', 'App\Http\Controllers\FwController@catalog_andy')->name('fw.catalog_andy');
Route::get('catalog_gms', 'App\Http\Controllers\FwController@catalog_gms')->name('fw.catalog_gms');
Route::get('cover_girl', 'App\Http\Controllers\FwController@cover_girl')->name('fw.cover_girl');
Route::get('bar', 'App\Http\Controllers\FwController@bar')->name('fw.bar');
Route::get('noa_an', 'App\Http\Controllers\FwController@noa_an')->name('fw.noa_an');
Route::get('pickup', 'App\Http\Controllers\FwController@pickup')->name('fw.pickup');
Route::get('dress_restaurant', 'App\Http\Controllers\FwController@dress_restaurant')->name('fw.dress_restaurant');
Route::get('archivio', 'App\Http\Controllers\FwController@archivio')->name('fw.archivio');
Route::get('zara', 'App\Http\Controllers\FwController@zara')->name('fw.zara');
Route::get('spur', 'App\Http\Controllers\FwController@spur')->name('fw.spur');
Route::get('maria_rui', 'App\Http\Controllers\FwController@maria_rui')->name('fw.maria_rui');
Route::get('santa', 'App\Http\Controllers\FwController@santa')->name('fw.santa');
Route::get('susukino', 'App\Http\Controllers\FwController@susukino')->name('fw.susukino');
Route::get('birthday', 'App\Http\Controllers\FwController@birthday')->name('fw.birthday');
Route::get('sugar', 'App\Http\Controllers\FwController@sugar')->name('fw.sugar');
Route::get('cosme', 'App\Http\Controllers\FwController@cosme')->name('fw.cosme');
Route::get('hokkaido', 'App\Http\Controllers\FwController@hokkaido')->name('fw.hokkaido');
Route::get('soumei', 'App\Http\Controllers\FwController@soumei')->name('fw.soumei');
Route::get('pet', 'App\Http\Controllers\FwController@pet')->name('fw.pet');
Route::get('fortune', 'App\Http\Controllers\FwController@fortune')->name('fw.fortune');
Route::get('enrike', 'App\Http\Controllers\FwController@enrike')->name('fw.enrike');
Route::get('famous', 'App\Http\Controllers\FwController@famous')->name('fw.famous');
Route::get('sns', 'App\Http\Controllers\FwController@sns')->name('fw.sns');

Route::get('model_list', 'App\Http\Controllers\FwController@model_list')->name('fw.model_list');
Route::get('shop_list', 'App\Http\Controllers\FwController@shop_list')->name('fw.shop_list');
Route::get('contact', 'App\Http\Controllers\FwController@contact')->name('fw.contact');
Route::post('mail_send', 'App\Http\Controllers\FwController@mail_send')->name('fw.mail_send');
Route::get('mail_complete', 'App\Http\Controllers\FwController@mail_complete')->name('fw.mail_complete');
Route::get('about', 'App\Http\Controllers\FwController@about')->name('fw.about');


