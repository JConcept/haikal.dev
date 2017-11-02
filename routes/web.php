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

Route::get('/','HomeController@index') -> name('home');

Route::get('/{id}', 'HomeController@id');

Route::get('/biographie', function () {
    return view('biographie');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/expositions', function () {
    return view('expositions');
});
Route::get('/galerie', function () {
    return view('galerie');
});
Route::get('/peintures', function () {
    return view('peintures');
});
Route::get('/photos', function () {
    return view('photos');
});
Route::get('/videos', function () {
    return view('videos');
});
