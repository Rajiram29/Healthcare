<?php

  

Auth::routes();

Route::get('/', 'HomeController@index');
// Route::get('/test', 'HomeController@index2');
Route::get('/login', 'HomeController@login');
Route::get('/home', 'HomeController@index');
Route::any('/secure-file-upload', 'HomeController@uploadpage');
Route::get('/contact-us', 'HomeController@contact_us');
Route::get('/about-us', 'HomeController@about_us');
Route::get('/samples', 'HomeController@sample');
Route::get('/services', 'HomeController@services');
Route::get('/personal-injury', 'HomeController@personal_injury');
Route::get('/malpractice', 'HomeController@malpractice');
Route::get('/masstort', 'HomeController@masstort');
Route::get('/career', 'HomeController@career');

/*services*/
Route::get('/medical-chronology', 'HomeController@medical_chronology');
Route::get('/medical-narrative', 'HomeController@medicalnarrative');
Route::get('/expert-medical', 'HomeController@expertmedical');
Route::get('/billing-summary', 'HomeController@billingsummary');
Route::get('/deposition-summary', 'HomeController@depositionsummary');
Route::get('/settlement-demand', 'HomeController@settlementdemand');

Route::get('/bookmarks', 'HomeController@bookmarks');
Route::get('/hyperlinks', 'HomeController@hyperlinks');
Route::get('/med-a-word', 'HomeController@medaword');
Route::get('/missing-records', 'HomeController@missingrecords');
Route::get('/jury', 'HomeController@jury');
Route::get('/pdf-merge', 'HomeController@pdfmerge');
Route::get('/treatment-chart', 'HomeController@treatment');
Route::get('/diagnostic-chart', 'HomeController@diagnostic');
Route::get('/comparative-chart', 'HomeController@comparative');
Route::get('/graphical', 'HomeController@graphical');
Route::get('/pain', 'HomeController@pain');
Route::get('/medication', 'HomeController@medication');



 
 
// Admin Route
Route::get('/adminlogin', 'Auth\LoginController@admin')->name('adminlogin');
Route::get('/admin',  'Auth\LoginController@admin');
Route::post('/admin',  'Auth\LoginController@adminlogin');




Route::group(['middleware' => 'auth'], function () {
	
// Dashboard Route
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

// Time Route
Route::get('/time', 'TimeController@index');
Route::POST('addtime','TimeController@addtime');
Route::GET('addtime','TimeController@addtime');
Route::POST('updatetime','TimeController@edittime');
Route::POST('deletetime','TimeController@deletetime');
Route::GET('viewtime/{id}','TimeController@viewtime');

// Digit Route
Route::get('/digits', 'DigitController@index');
Route::POST('adddigit','DigitController@adddigit');
Route::GET('adddigit','DigitController@adddigit');
Route::POST('updatedigit','DigitController@editdigit');
Route::POST('deletedigit','DigitController@deletedigit');
Route::GET('viewdigit/{id}','DigitController@viewdigit');

// password
Route::post('/pass', 'HomeController@pass');
Route::get('/pass', 'HomeController@pass');
Route::post('/addpass', 'HomeController@changepass');


});
