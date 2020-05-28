<?php

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

        /* Routes for Dashboard  */
        Route::get('dashboard',['as'=>'dashboardRoute','uses'=>'DashboardController@index']);

        /* Address Search  */
        Route::post('searchAddress',['as'=>'searchAddressRoute','uses'=>'DashboardController@searchAddress']);


        /* Routes for Blood  */
        Route::get('blood',['as'=>'bloodRoute','uses'=>'BloodController@index']);
        Route::get('bloodSearch',['as'=>'bloodSearchRoute','uses'=>'BloodController@bloodSearch']);
        Route::post('bloodSearchResult',['as'=>'bloodSearchResultRoute','uses'=>'BloodController@bloodSearchResult']);


        /* Routes for District  */
        Route::get('district',['as'=>'districtRoute','uses'=>'DistrictController@index']);
        Route::post('districtAdd',['as'=>'districtAddRoute','uses'=>'DistrictController@create']);
        Route::post('districtDelete',['as'=>'districtDeleteRoute','uses'=>'DistrictController@destroy']);
        Route::post('districtEdit',['as'=>'districtEditRoute','uses'=>'DistrictController@update']);


        /* Routes for Thana  */
        Route::get('thana',['as'=>'thanaRoute','uses'=>'ThanaController@index']);
        Route::post('thanaAdd',['as'=>'thanaAddRoute','uses'=>'ThanaController@create']);
        Route::post('thanaDelete',['as'=>'thanaDeleteRoute','uses'=>'ThanaController@destroy']);
        Route::post('thanaEdit',['as'=>'thanaEditRoute','uses'=>'ThanaController@update']);
        
    
        /* Routes for School  */
        Route::get('school',['as'=>'schoolRoute','uses'=>'SchoolController@index']);
        Route::get('getThana',['as'=>'getThanaRoute','uses'=>'SchoolController@getThana']);
        Route::post('schoolAdd',['as'=>'schoolAddRoute','uses'=>'SchoolController@create']);
        Route::post('schoolDelete',['as'=>'schoolDeleteRoute','uses'=>'SchoolController@destroy']);
        Route::post('schoolEdit',['as'=>'schoolEditRoute','uses'=>'SchoolController@update']);


        /* Routes for Donor  */
        Route::get('donor',['as'=>'donorRoute','uses'=>'DonorController@index']);
        Route::post('donorAdd',['as'=>'donorAddRoute','uses'=>'DonorController@create']);
        Route::post('donorDelete',['as'=>'donorDeleteRoute','uses'=>'DonorController@destroy']);
        Route::post('donorEdit',['as'=>'donorEditRoute','uses'=>'DonorController@edit']);
        Route::post('donorUpdate',['as'=>'donorUpdateRoute','uses'=>'DonorController@update']);


    
        /* End of Admin Route Group*/
  
});

Route::group(['prefix'=>'site'],function(){


        Route::get('index',['as'=>'indexRoute','uses'=>'SiteController@index']);


        Route::get('search',['as'=>'searchRoute','uses'=>'SearchController@index']);
        Route::post('searchBlood',['as'=>'searchBloodRoute','uses'=>'SearchController@searchBlood']);
        Route::post('searchAddress',['as'=>'AddressSearchRoute','uses'=>'SearchController@searchAddress']);
        Route::post('searchDistrict',['as'=>'searchDistrictRoute','uses'=>'SearchController@searchDistrict']);
        Route::post('searchThana',['as'=>'searchThanaRoute','uses'=>'SearchController@searchThana']);
        

        Route::get('donor',['as'=>'donorShowRoute','uses'=>'SiteController@donor']);
        Route::post('donorCreate',['as'=>'donorCreateRoute','uses'=>'SiteController@donorCreate']);


        Route::get('contact',['as'=>'contactRoute','uses'=>'SiteController@contact']);

        /*  Manage */
        Route::get('manage/{id}',['as'=>'manageRoute','uses'=>'PatientController@manage']);
        Route::get('patient/{id}',['as'=>'patientRoute','uses'=>'PatientController@index']);
        Route::post('patientCreate/{id}',['as'=>'patientCreateRoute','uses'=>'PatientController@create']);
    
    /* End of Site Route Group*/

}); 

Auth::routes();

Route::get('/home', 'SiteController@index')->name('home');
