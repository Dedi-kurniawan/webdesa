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

// Route::get('/profile/perangkatdesa', function () {
//     return view('module.fronts.perangkatdesa');
// });



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('category', 'CategoryController');
Route::resource('post', 'PostController');
Route::resource('about', 'AboutController');
Route::resource('notes', 'NoteController');
Route::resource('banner', 'BannerController');
Route::resource('suratkeluar', 'SuratkeluarController');
Route::resource('suratmasuk', 'SuratmasukController');
Route::resource('user', 'UserController');
Route::resource('role', 'RoleController');
Route::resource('permission', 'PermissionController');
Route::resource('perangkatdesa', 'PeopleController');
Route::resource('kependudukan', 'KependudukanController');
Route::resource('perijinan', 'PerijinanController');

Route::get('/', 'FrontController@welcome');
Route::get('/profile/visi-misi', 'FrontController@visi');
Route::get('/profile/sejarah', 'FrontController@sejarah');
Route::get('/profile/perangkatdesa', 'FrontController@perangkatdesa');



Route::get('/home', 'AdminhomeController@adminhome')->name('admin.home');

Route::get('layanan/kependudukan', [
	'uses' => 'FrontController@kependudukan',
	'as'   => 'kependudukan'
]);

Route::get('layanan/kependudukan/{slug}', [
	'uses' => 'FrontController@kependudukanpost',
	'as'   => 'kependudukanpost'
]);

Route::get('layanan/perijinan/{slug}', [
	'uses' => 'FrontController@perijinanpost',
	'as'   => 'perijinanpost'
]);

Route::get('layanan/perizinan', [
	'uses' => 'FrontController@perijinan',
	'as'   => 'perijinan'
]);

// Route::get('profile/{name}', [
// 	'uses' => 'UserController@profile',
// 	'as'   => 'profiel.edit'
// ]);

Route::get('blog/category/{slug}', [
	'uses' => 'FrontController@blog',
	'as'   => 'blog'
]);

Route::get('blog/post/{slug}', [
	'uses' => 'FrontController@blogpost',
	'as'   => 'blogpost'
]);

Route::get('blog/all', [
	'uses' => 'FrontController@blogall',
	'as'   => 'blogall'
]);

Route::get('agenda', [
	'uses' => 'FrontController@agenda',
	'as'   => 'agenda'
]);

Route::get('agenda/post/{slug}', [
	'uses' => 'FrontController@agendapost',
	'as'   => 'agendapost'
]);


Route::post('suratmasuk/cetak', 'CetakController@cetakmasuk')->name('suratmasuk.export');
Route::post('suratkeluar/cetak', 'CetakController@cetakkeluar')->name('suratkeluar.export');





