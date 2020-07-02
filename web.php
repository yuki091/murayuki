<?php


use Illuminate\Support\Facades\Route;



// Route::resource('/home', 'ClothController');
// Route::get('/post', function () {
//     return view('post');
// });
// Route::get('/post', 'ClothController@post');
// // Route::post('res','ClothController@res');
// Route::post('/home', 'ClothController@home');
// // Route::get('/post', function () {
// //     return view('post');
// });
// Route::get('/post', 'ClothController@index');

// Route::get('/login', function () {
//     return view('login');
// });
// Route::get('/signup', function () {
//     return view('signup');
// });

// Route::get('/home', 'ClothController@index');
// Route::post('/home', 'ClothController@home');


// Route::get('/post', 'PostController@index');
// Route::post('/upload', 'PostController@upload');
Route::get('/home', 'ClothController@home')->name('home');

Route::get('/create', 'ClothController@create')->name('create');
Route::post('/store', 'ClothController@store')->name('store');

Route::get('/edit', 'ClothController@edit')->name('edit');
Route::post('/update', 'ClothController@update')->name('update');

Route::get('/delete', 'ClothController@delete')->name('delete');