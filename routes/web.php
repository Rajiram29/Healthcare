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



 Route::post('/fileupload', 'HomeController@fileupload');
Route::post('/clientlogin', 'HomeController@clientlogin');
Route::get('/login', 'HomeController@login');

Route::group(['middleware' => ['auth:web']], function () {
	

Route::get('/myaccount', 'HomeController@client_dashboard')->name('client_dashboard');


});


 
// Admin Route
Route::get('/adminlogin', 'Auth\LoginController@admin')->name('adminlogin');
Route::get('/admin',  'Auth\LoginController@admin');
Route::post('/admin',  'Auth\LoginController@adminlogin');

Route::group(['middleware' => ['auth:web','admin']], function () {
	
// Dashboard Route
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

 Route::get('/user', 'UserController@index');
Route::post('/adduser','UserController@create');
Route::get('/viewuser/{id}','UserController@view');
Route::POST('updateuser','UserController@edit');
Route::post('/deleteuser','UserController@delete'); 
Route::post('/status','UserController@status');

 Route::get('/files', 'FileuploadsController@index'); 
 Route::post('/files', 'FileuploadsController@index'); 
Route::get('/viewfileinfo/{id}','FileuploadsController@view'); 

// password
Route::post('/pass', 'HomeController@pass');
Route::get('/pass', 'HomeController@pass');
Route::post('/addpass', 'HomeController@changepass');


});

