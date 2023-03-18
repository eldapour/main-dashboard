<?php

use Illuminate\Support\Facades\Route;



Route::group(['prefix'=>'admin'],function (){
    Route::get('login', 'AuthController@index')->name('admin.login');
    Route::POST('login', 'AuthController@login')->name('admin.login');
});

Route::group(['prefix'=>'admin','middleware'=>'auth:admin'],function (){
    Route::get('/', function () {
        return view('Admin/index');
    })->name('adminHome');

    #### Admins ####
    Route::resource('admins','AdminController');
    Route::POST('delete_admin','AdminController@delete')->name('delete_admin');
    Route::get('my_profile','AdminController@myProfile')->name('myProfile');


    #### Services ####
    Route::resource('services','ServiceController');
    Route::post('services.delete','ServiceController@delete')->name('services.delete');

    ################### Setting ###################
    Route::resource('settings','SettingController');
    Route::get('setting_about','SettingController@about')->name('setting.about');
    Route::post('setting_about_update/{id}','SettingController@updateabout')->name('update_about');
    Route::get('setting_terms','SettingController@terms')->name('setting.terms');
    Route::post('setting_terms_update/{id}','SettingController@updateterms')->name('update_terms');
    Route::get('setting_privacy','SettingController@privacy')->name('setting.privacy');
    Route::post('setting_privacy_update/{id}','SettingController@updateprivacy')->name('update_privacy');












    #### Auth ####
    Route::get('logout', 'AuthController@logout')->name('admin.logout');



   ### Points #######


   Route::resource('points','PointController');
    Route::POST('delete_point','PointController@delete')->name('delete_point');






});










