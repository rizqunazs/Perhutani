<?php
namespace App\Http\Controllers;
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
    return view('welcome');
});

Route::get('/admin', function() {
    return view('backend.admin.admin');
});

Route::get('/admin/departemen', function() {
    return view('backend.departemen.index');
});

Route::get('/admin/proyek', function() {
    return view('backend.proyek.index');
});

Route::get('/admin/pekerja-proyek', function() {
    return view('backend.pekerja-proyek.index');
});
Route::get('/admin/tanam', function() {
    return view('backend.tanam.index');
});
Route::get('/admin/hasiltanam', function() {
    return view('backend.hasiltanam.index');
});
Route::get('/admin/tebang', function() {
    return view('backend.tebang.index');
});
Route::get('/admin/hasiltebang', function() {
    return view('backend.hasiltebang.index');
});

/* Cek Menu Pegawai */
Route::get('/admin/pegawai', 'PegawaiController@index');
Route::get('/admin/pegawai/add', 'PegawaiController@add');
Route::post('/admin/pegawai/add', 'PegawaiController@processAdd');
Route::get('/admin/pegawai/update/{nip}', 'PegawaiController@update');
Route::post('/admin/pegawai/update/{nip}', 'PegawaiController@processUpdate');
Route::get('/admin/pegawai/delete/{nip}', 'PegawaiController@delete');

/* Cek Menu Tanam */
Route::get('/admin/tanam', 'TanamController@index');
Route::get('/admin/tanam/add', 'TanamController@add');
Route::post('/admin/tanam/add', 'TanamController@processAdd');
Route::get('/admin/tanam/update/{nip}', 'TanamController@update');
Route::post('/admin/tanam/update/{nip}', 'TanamController@processUpdate');
Route::get('/admin/tanam/delete/{nip}', 'TanamController@delete');

/* Cek Menu Tebang */
Route::get('/admin/tebang', 'TebangController@index');
Route::get('/admin/tebang/add', 'TebangController@add');
Route::post('/admin/tebang/add', 'TebangController@processAdd');
Route::get('/admin/tebang/update/{id_tebang}', 'TebangController@update');
Route::post('/admin/tebang/update/{id_tebang}', 'TebangController@processUpdate');
Route::get('/admin/tebang/delete/{id_tebang}', 'TebangController@delete');

/* Cek Menu Hasil Tanam */
Route::get('/admin/hasiltanam', 'HasiltanamController@index');
Route::get('/admin/hasiltanam/add', 'HasiltanamController@add');
Route::post('/admin/hasiltanam/add', 'HasiltanamController@processAdd');
Route::get('/admin/hasiltanam/update/{nip}', 'HasiltanamController@update');
Route::post('/admin/hasiltanam/update/{nip}', 'HasiltanamController@processUpdate');
Route::get('/admin/hasiltanam/delete/{nip}', 'HasiltanamController@delete');

/* Cek Menu Hasil Tebang */
Route::get('/admin/hasiltebang', 'HasiltebangController@index');
Route::get('/admin/hasiltebang/add', 'HasiltebangController@add');
Route::post('/admin/hasiltebang/add', 'HasiltebangController@processAdd');
Route::get('/admin/hasiltebang/update/{nip}', 'HasiltebangController@update');
Route::post('/admin/hasiltebang/update/{nip}', 'HasiltebangController@processUpdate');
Route::get('/admin/hasiltebang/delete/{nip}', 'HasiltebangController@delete');