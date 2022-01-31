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
    return redirect('beranda');
});

//Menuju Beranda Admin
Route::group(['middleware'=>'auth'],function() {
    Route::get('beranda','Beranda_controller@index');
    
    // master kategori
    Route::get('master/kategori','Kategori_controller@index');
    // master tambah kategori
    Route::get('master/kategori/add','Kategori_controller@add');
    // Insert Data
    Route::post('master/kategori/add','Kategori_controller@store');
    // Edit Data
    Route::get('master/kategori/{id}','Kategori_controller@edit');
    // Proses Update Data
    Route::put('master/kategori/{id}','Kategori_controller@update');
    // Hapus Data
    Route::delete('master/kategori/{id}','Kategori_controller@delete');

    // master buku
    Route::get('master/buku','Buku_controller@index');
    // master tambah buku
    Route::get('master/buku/add','Buku_controller@add');
    // Insert Data
    Route::post('master/buku/add','Buku_controller@store');
    //Edit data
    Route::get('master/buku/{id}','Buku_controller@edit');
    // Proses Update Data
    Route::put('master/buku/{id}','Buku_controller@update');
    // Hapus Data
    Route::delete('master/buku/{id}','Buku_controller@delete');

    //Export
    Route::get('export', 'Buku_controller@csv_export')->name('export');
   
    // master user
    Route::get('master/user','User_controller@index');

    // master info
    Route::get('master/info','Beranda_controller@info');
});

//Logout Admin
Route::get('keluar',function() {
    \Auth::logout();
    return redirect('login');
});



Auth::routes();

Route::get('/home', function() {
    return redirect('beranda');
});