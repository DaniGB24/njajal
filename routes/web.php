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

Route::get('/negeri', 'Data@index');
Route::get('/swasta', 'SwastaController@index');
Route::get('/jumlah', 'JumlahSekolahController@index');
Route::get('/welc', 'Data@fuck');
Route::get('/sekolah', 'Data@namasekolah');

Route::get('/', 'Data@index');
Route::get('/entry', function(){
	return view('entry');
});
Route::post('/entry' , 'InputDataController@store');



