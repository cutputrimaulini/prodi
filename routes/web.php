<?php

use Illuminate\Support\Facades\Route;

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
    return redirect()->route('login');
});

 Auth::routes();

Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::get('/dashboard', 'DashboardController@index')->name('dashboard');


Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

//Prodi
Route::get('/prodi', 'ProdiController@index')->name('prodi.index');
Route::get('/prodi/persetujuan', 'ProdiController@persetujuan')->name('prodi.persetujuan');
Route::get('/prodi/formpa', 'ProdiController@formpa')->name('prodi.formpa');


//data
Route::get('/datas', 'DataController@index')->name('datas.index');
Route::post('/datas/uploadta', 'DataController@uploadta')->name('datas.ta');


Route::put('/checkbox/{id}', 'ProdiController@update');
// Route::get('/cek', function(){
//     $data = \App\Prodi::all();
//     return $data;
// });
Auth::routes();

