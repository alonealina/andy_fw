<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\AndyController@index')->name('index');
Route::get('company', 'App\Http\Controllers\AndyController@company')->name('company');
Route::get('contact', 'App\Http\Controllers\AndyController@contact')->name('contact');
Route::get('recruit', 'App\Http\Controllers\AndyController@recruit')->name('recruit');
Route::get('stylebook', 'App\Http\Controllers\AndyController@stylebook')->name('stylebook');

Route::post('mail_send', 'App\Http\Controllers\AndyController@mail_send')->name('mail_send');

Route::get('store_list', 'App\Http\Controllers\StoreController@index')->name('store.index');
Route::get('store/{id}', 'App\Http\Controllers\StoreController@show')->name('store.show');
Route::get('brand/{url}', 'App\Http\Controllers\BrandController@show')->name('brand.show');
Route::get('stylebook/{url}', 'App\Http\Controllers\BrandController@stylebook')->name('stylebook.show');
Route::get('pickup', 'App\Http\Controllers\PickupController@index')->name('pickup');
Route::get('pickup/{id}', 'App\Http\Controllers\PickupController@show')->name('pickup.show');
Route::get('news', 'App\Http\Controllers\NewsController@index')->name('news');
Route::get('news/{id}', 'App\Http\Controllers\NewsController@show')->name('news.show');

Route::get('anime_test', 'App\Http\Controllers\AndyController@anime_test')->name('anime_test');

//以下カスタマー側
Route::get('cs/', 'App\Http\Controllers\CustomerController@index')->name('cs.index');
Route::get('cs/topics/{genre}', 'App\Http\Controllers\CustomerController@topics')->name('cs.topics');
Route::get('cs/collection', 'App\Http\Controllers\CustomerController@collection')->name('cs.collection');
Route::get('cs/company', 'App\Http\Controllers\CustomerController@company')->name('cs.company');
Route::get('cs/disclaimer', 'App\Http\Controllers\CustomerController@disclaimer')->name('cs.disclaimer');
Route::get('cs/terms', 'App\Http\Controllers\CustomerController@terms')->name('cs.terms');
Route::get('cs/contact', 'App\Http\Controllers\CustomerController@contact')->name('cs.contact');

Route::get('cs/new_item/{brand}', 'App\Http\Controllers\CustomerController@new_item')->name('cs.new_item');
Route::get('cs/price_down', 'App\Http\Controllers\CustomerController@price_down')->name('cs.price_down');
Route::get('cs/add_production', 'App\Http\Controllers\CustomerController@add_production')->name('cs.add_production');
Route::get('cs/item_detail/{id}', 'App\Http\Controllers\CustomerController@item_detail')->name('cs.item_detail');
Route::get('cs/calendar', 'App\Http\Controllers\CustomerController@calendar')->name('cs.calendar');
Route::get('cs/search', 'App\Http\Controllers\CustomerController@search')->name('cs.search');

Route::get('cs/store_list', 'App\Http\Controllers\CsStoreController@index')->name('cs.store.index');
Route::get('cs/store/{id}', 'App\Http\Controllers\CsStoreController@show')->name('cs.store.show');



//以下EC側
Route::get('ec/', 'App\Http\Controllers\EcController@index')->name('ec.index');
Route::get('ec/topics', 'App\Http\Controllers\EcController@topics')->name('ec.topics');
Route::get('ec/collection', 'App\Http\Controllers\EcController@collection')->name('ec.collection');
Route::get('ec/company', 'App\Http\Controllers\EcController@company')->name('ec.company');
Route::get('ec/disclaimer', 'App\Http\Controllers\EcController@disclaimer')->name('ec.disclaimer');
Route::get('ec/terms', 'App\Http\Controllers\EcController@terms')->name('ec.terms');
Route::get('ec/contact', 'App\Http\Controllers\EcController@contact')->name('ec.contact');

Route::get('ec/item_detail/{id}', 'App\Http\Controllers\EcController@item_detail')->name('ec.item_detail');
Route::get('ec/search', 'App\Http\Controllers\EcController@search')->name('ec.search');

Route::get('ec/notice', 'App\Http\Controllers\EcController@notice')->name('ec.notice');
Route::get('ec/silhouette', 'App\Http\Controllers\EcController@silhouette')->name('ec.silhouette');
Route::get('ec/model', 'App\Http\Controllers\EcController@model')->name('ec.model');
Route::get('ec/complex', 'App\Http\Controllers\EcController@complex')->name('ec.complex');
Route::get('ec/cart', 'App\Http\Controllers\EcController@cart')->name('ec.cart');
Route::get('ec/order_confirm', 'App\Http\Controllers\EcController@order_confirm')->name('ec.order_confirm');
Route::get('ec/info_form', 'App\Http\Controllers\EcController@info_form')->name('ec.info_form');
Route::get('ec/time_form', 'App\Http\Controllers\EcController@time_form')->name('ec.time_form');
Route::get('ec/order_complete', 'App\Http\Controllers\EcController@order_complete')->name('ec.order_complete');
Route::get('ec/favorite', 'App\Http\Controllers\EcController@favorite')->name('ec.favorite');
Route::get('ec/new_arrival', 'App\Http\Controllers\EcController@new_arrival')->name('ec.new_arrival');
Route::get('ec/recommend', 'App\Http\Controllers\EcController@recommend')->name('ec.recommend');
Route::get('ec/ranking', 'App\Http\Controllers\EcController@ranking')->name('ec.ranking');
Route::get('ec/brand', 'App\Http\Controllers\EcController@brand')->name('ec.brand');

Route::get('ec/store_list', 'App\Http\Controllers\EcStoreController@index')->name('ec.store.index');
Route::get('ec/store/{id}', 'App\Http\Controllers\EcStoreController@show')->name('ec.store.show');


//以下FashionWeb側
Route::get('fw/', 'App\Http\Controllers\FwController@index')->name('fw.index');
Route::get('fw/new_dress', 'App\Http\Controllers\FwController@new_dress')->name('fw.new_dress');
Route::get('fw/catalog_an', 'App\Http\Controllers\FwController@catalog_an')->name('fw.catalog_an');
Route::get('fw/catalog_andy', 'App\Http\Controllers\FwController@catalog_andy')->name('fw.catalog_andy');
Route::get('fw/catalog_gms', 'App\Http\Controllers\FwController@catalog_gms')->name('fw.catalog_gms');
Route::get('fw/cover_girl', 'App\Http\Controllers\FwController@cover_girl')->name('fw.cover_girl');
Route::get('fw/bar', 'App\Http\Controllers\FwController@bar')->name('fw.bar');
Route::get('fw/noa_an', 'App\Http\Controllers\FwController@noa_an')->name('fw.noa_an');
Route::get('fw/pickup', 'App\Http\Controllers\FwController@pickup')->name('fw.pickup');
Route::get('fw/dress_restaurant', 'App\Http\Controllers\FwController@dress_restaurant')->name('fw.dress_restaurant');
Route::get('fw/archivio', 'App\Http\Controllers\FwController@archivio')->name('fw.archivio');
Route::get('fw/zara', 'App\Http\Controllers\FwController@zara')->name('fw.zara');
Route::get('fw/spur', 'App\Http\Controllers\FwController@spur')->name('fw.spur');
Route::get('fw/maria_rui', 'App\Http\Controllers\FwController@maria_rui')->name('fw.maria_rui');
Route::get('fw/santa', 'App\Http\Controllers\FwController@santa')->name('fw.santa');
Route::get('fw/susukino', 'App\Http\Controllers\FwController@susukino')->name('fw.susukino');
Route::get('fw/birthday', 'App\Http\Controllers\FwController@birthday')->name('fw.birthday');
Route::get('fw/sugar', 'App\Http\Controllers\FwController@sugar')->name('fw.sugar');
Route::get('fw/cosme', 'App\Http\Controllers\FwController@cosme')->name('fw.cosme');
Route::get('fw/hokkaido', 'App\Http\Controllers\FwController@hokkaido')->name('fw.hokkaido');
Route::get('fw/soumei', 'App\Http\Controllers\FwController@soumei')->name('fw.soumei');
Route::get('fw/pet', 'App\Http\Controllers\FwController@pet')->name('fw.pet');
Route::get('fw/fortune', 'App\Http\Controllers\FwController@fortune')->name('fw.fortune');
Route::get('fw/enrike', 'App\Http\Controllers\FwController@enrike')->name('fw.enrike');
Route::get('fw/famous', 'App\Http\Controllers\FwController@famous')->name('fw.famous');
Route::get('fw/sns', 'App\Http\Controllers\FwController@sns')->name('fw.sns');

Route::get('fw/model_list', 'App\Http\Controllers\FwController@model_list')->name('fw.model_list');
Route::get('fw/shop_list', 'App\Http\Controllers\FwController@shop_list')->name('fw.shop_list');
Route::get('fw/contact', 'App\Http\Controllers\FwController@contact')->name('fw.contact');
Route::get('fw/about', 'App\Http\Controllers\FwController@about')->name('fw.about');



// 管理側
Route::get('admin/', 'App\Http\Controllers\AdminController@index')->name('admin.index');

Route::get('admin/item_list', 'App\Http\Controllers\ItemController@item_list')->name('admin.item_list')->middleware('login');
Route::get('admin/item_regist', 'App\Http\Controllers\ItemController@item_regist')->name('admin.item_regist')->middleware('login');
Route::post('admin/item_store', 'App\Http\Controllers\ItemController@item_store')->name('admin.item_store')->middleware('login');
Route::get('admin/item_edit/{id}/', 'App\Http\Controllers\ItemController@item_edit')->name('admin.item_edit')->middleware('login');
Route::post('admin/item_update', 'App\Http\Controllers\ItemController@item_update')->name('admin.item_update')->middleware('login');
Route::get('admin/item_delete/{id}/', 'App\Http\Controllers\ItemController@item_delete')->name('admin.item_delete')->middleware('login');

Route::get('admin/event_list', 'App\Http\Controllers\EventController@event_list')->name('admin.event_list')->middleware('login');
Route::get('admin/event_regist', 'App\Http\Controllers\EventController@event_regist')->name('admin.event_regist')->middleware('login');
Route::post('admin/event_store', 'App\Http\Controllers\EventController@event_store')->name('admin.event_store')->middleware('login');
Route::get('admin/event_edit/{id}/', 'App\Http\Controllers\EventController@event_edit')->name('admin.event_edit')->middleware('login');
Route::post('admin/event_update', 'App\Http\Controllers\EventController@event_update')->name('admin.event_update')->middleware('login');
Route::get('admin/event_delete/{id}/', 'App\Http\Controllers\EventController@event_delete')->name('admin.event_delete')->middleware('login');

Route::get('admin/course_list', 'App\Http\Controllers\CourseController@course_list')->name('admin.course_list')->middleware('login');
Route::get('admin/course_regist', 'App\Http\Controllers\CourseController@course_regist')->name('admin.course_regist')->middleware('login');
Route::post('admin/course_store', 'App\Http\Controllers\CourseController@course_store')->name('admin.course_store')->middleware('login');
Route::get('admin/course_edit/{id}/', 'App\Http\Controllers\CourseController@course_edit')->name('admin.course_edit')->middleware('login');
Route::post('admin/course_update', 'App\Http\Controllers\CourseController@course_update')->name('admin.course_update')->middleware('login');
Route::get('admin/course_delete/{id}/', 'App\Http\Controllers\CourseController@course_delete')->name('admin.course_delete')->middleware('login');

Route::get('admin/practice_list', 'App\Http\Controllers\PracticeController@practice_list')->name('admin.practice_list')->middleware('login');
Route::get('admin/practice_regist', 'App\Http\Controllers\PracticeController@practice_regist')->name('admin.practice_regist')->middleware('login');
Route::post('admin/practice_store', 'App\Http\Controllers\PracticeController@practice_store')->name('admin.practice_store')->middleware('login');
Route::get('admin/practice_edit/{id}/', 'App\Http\Controllers\PracticeController@practice_edit')->name('admin.practice_edit')->middleware('login');
Route::post('admin/practice_update', 'App\Http\Controllers\PracticeController@practice_update')->name('admin.practice_update')->middleware('login');
Route::get('admin/practice_delete/{id}/', 'App\Http\Controllers\PracticeController@practice_delete')->name('admin.practice_delete')->middleware('login');

Route::get('admin/news_list', 'App\Http\Controllers\NewsController@news_list')->name('admin.news_list')->middleware('login');
Route::get('admin/news_regist', 'App\Http\Controllers\NewsController@news_regist')->name('admin.news_regist')->middleware('login');
Route::post('admin/news_store', 'App\Http\Controllers\NewsController@news_store')->name('admin.news_store')->middleware('login');
Route::get('admin/news_edit/{id}/', 'App\Http\Controllers\NewsController@news_edit')->name('admin.news_edit')->middleware('login');
Route::post('admin/news_update', 'App\Http\Controllers\NewsController@news_update')->name('admin.news_update')->middleware('login');
Route::get('admin/news_delete/{id}/', 'App\Http\Controllers\NewsController@news_delete')->name('admin.news_delete')->middleware('login');

Route::get('admin/pickup_list', 'App\Http\Controllers\PickupController@pickup_list')->name('admin.pickup_list')->middleware('login');
Route::get('admin/pickup_regist', 'App\Http\Controllers\PickupController@pickup_regist')->name('admin.pickup_regist')->middleware('login');
Route::post('admin/pickup_store', 'App\Http\Controllers\PickupController@pickup_store')->name('admin.pickup_store')->middleware('login');
Route::get('admin/pickup_edit/{id}/', 'App\Http\Controllers\PickupController@pickup_edit')->name('admin.pickup_edit')->middleware('login');
Route::post('admin/pickup_update', 'App\Http\Controllers\PickupController@pickup_update')->name('admin.pickup_update')->middleware('login');
Route::get('admin/pickup_delete/{id}/', 'App\Http\Controllers\PickupController@pickup_delete')->name('admin.pickup_delete')->middleware('login');

Route::POST('/admin_login', 'App\Http\Controllers\AndyController@login')->name('admin.login');
Route::get('/admin_logout', 'App\Http\Controllers\AndyController@logout')->name('admin.logout')->middleware('login');

// ログイン
Route::get('admin/login', function () {return view('admin/login'); });

// Route::get('/admin_logout', 'App\Http\Controllers\AdminController@logout')->name('admin.logout')->middleware('login');