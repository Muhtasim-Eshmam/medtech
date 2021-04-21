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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/trial','MainController@trial');
Route::get('/adminpage','MainController@adminpage');
Route::get('/addmed','MainController@addmed');
Route::get('/adddoc','MainController@adddoc');
Route::get('/addhosptl','MainController@addhosptl');
Route::get('/addemrgncy','MainController@addemrgncy');
Route::get('/addcommondata','MainController@addcommondata')->name('add.commondata');
Route::get('/commondata','MainController@commondata');
Route::get('/showcomdata','MainController@showcomdata');
Route::get('/adminlogin','MainController@adminlogin');
Route::get('/adminchck','MainController@adminchck')->name('add.chck');

Route::get('/adddiet','MainController@adddiet')->name('add.diet');
Route::get('/diet','MainController@diet');
Route::get('/showdiet','MainController@showdiet');
Route::get('/view22','MainController@view22');



Route::post('/addmedinfos','MainController@addmedinfos')->name('add.medinfos');
Route::post('/adddocinfos','MainController@adddocinfos')->name('add.docinfos');
Route::post('/addemrgncyinfo','MainController@addemrgncyinfo')->name('add.emrgncyinfo');

Auth::routes();

Route::get('/viewemrgncy','MainController@viewemrgncyinfo');

Route::get('/emergency','MainController@emergency');
Route::get('/patientpage','MainController@patientpage');
Route::get('/viewmed','MainController@viewmedinfo');
Route::get('/viewdoc','MainController@viewdocinfo');
Route::get('/addcommondata','MainController@addcommondata')->name('add.commondata');
    Route::get('/commondata','MainController@commondata');
    Route::get('/showcomdata','MainController@showcomdata');

// _____________________________________________________________________api



Route::get('/getdata','MainController@getGuzzleRequest');
Route::get('/deletedata','MainController@deleteGuzzleRequest');








Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/dashboard','HomeController@dashboard')->name('dashboard');

});   
    





    Route::post('/addmedinfos','MainController@addmedinfos')->name('add.medinfos');
    Route::post('/adddocinfos','MainController@adddocinfos')->name('add.docinfos');
    Route::post('/addemrgncyinfo','MainController@addemrgncyinfo')->name('add.emrgncyinfo');


    //view

    Route::get('/showmed','MainController@showmedinfo');
    Route::get('/showdoc','MainController@showdocinfo');
    Route::get('/showemrgncyinfo','MainController@showemrgncyinfo');
    Route::get('/regpatinfo','MainController@regpatinfo');
    Route::get('/comdatainfo','MainController@comdatainfo');
    Route::get('/comdatainfoad','MainController@comdatainfoad');


    //viewpatient
    Route::get('/patientdashboard','MainController@patientdashboard');
    


    //update
    Route::get('edit/showdoc/{id}','MainController@editdocinfo');
    Route::get('update/showdoc/{id}','MainController@updatedocinfo');

    Route::get('edit/showmed/{id}','MainController@editmedinfo');
    Route::get('update/showmed/{id}','MainController@updatemedinfo');

    Route::get('edit/showemrgncy/{id}','MainController@editemrgncy');
    Route::get('update/showemrgncy/{id}','MainController@updatemrgncy');


    Route::get('edit/showcomdata/{id}','MainController@editshowcomdata');
    Route::get('update/showcomdata/{id}','MainController@updateshowcomdata');



    //delete

    Route::get('delete/showdoc/{id}','MainController@deletedocinfo');
    Route::get('delete/emergencyinfo/{id}','MainController@deleteemrgncyinfo');
    Route::get('delete/showmed/{id}','MainController@deletemedinfo');
    Route::get('delete/showcomdata/{id}','MainController@deleteshowcomdata');

    //patient
    Route::get('/addpatient','MainController@addpatient')->name('add.patient');

    //patient
//     //admin

    
//     //add 
