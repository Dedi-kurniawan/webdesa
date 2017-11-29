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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/contact', function () {
    return view('module.fronts.contact');
});


Route::get('/perangkatdesa', function () {
    return view('module.fronts.perangkatdesa');
});

Route::get('/blog', function () {
    return view('module.fronts.blog');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('category', 'CategoryController');
Route::resource('post', 'PostController');
Route::resource('about', 'AboutController');
Route::resource('agenda', 'NoteController');
Route::resource('banner', 'BannerController');

Route::get('/', 'FrontController@welcome');
Route::get('/profile/visi-misi', 'FrontController@visi');
Route::get('/profile/sejarah', 'FrontController@sejarah');
Route::get('/agendadesa', 'FrontController@agenda');
Route::get('/blog', 'FrontController@blog');
Route::get('/category', 'FrontController@category');

