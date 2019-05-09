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



Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');




// arabic route

    Route::get('/ar-home' , 'Browse\BrowseController@home');
    Route::get('/ar-about' , 'Browse\BrowseController@about');
    Route::get('/ar-project' , 'Browse\BrowseController@project');
    Route::get('/ar-contact' , 'Browse\BrowseController@contact');
    Route::get('/', function () {  return redirect('/ar-home');});

//end arabic route


//english route

    Route::get('/en-home' , 'Browse\BrowseController@Enhome');
    Route::get('/en-about' , 'Browse\BrowseController@Enabout');  
    Route::get('/en-project' , 'Browse\BrowseController@Enproject');  
    Route::get('/en-contact' , 'Browse\BrowseController@Encontact');    

//end english route

Route::view('/dashboard' , 'dashboard.ar.dashboard');


//Contact form route

Route::resource('contacts','Contact\ContactController')->only(['store']);
Route::post('contacts/ar','Contact\ContactController@storeAr')->name('contacts.store.ar');
