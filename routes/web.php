<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\MinumanController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\AdminsController;
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
Route::get('/makanan', [MakananController::class, 'index'])->name('makanan');
Route::get('/tambahmakanan', [MakananController::class, 'tambahmakanan'])->name('tambahmakanan');
Route::post('/insertdata', [MakananController::class, 'insertdata'])->name('insertdata');
Route::get('/ubahmakanan/{id_makan}', [MakananController::class, 'ubahmakanan'])->name('ubahmakanan');
Route::post('/updatedata/{id_makan}', [MakananController::class, 'updatedata'])->name('updatedata');
Route::get('/deletemakanan/{id_makan}', [MakananController::class, 'deletemakanan'])->name('deletemakanan');
Route::get('/ekspormakanan', [MakananController::class, 'ekspormakanan'])->name('ekspormakanan');

Route::get('/minuman', [MinumanController::class, 'index'])->name('minuman');
Route::get('/tambahminuman', [MinumanController::class, 'tambahminuman'])->name('tambahminuman');
Route::post('/insertdata2', [MinumanController::class, 'insertdata2'])->name('insertdata2');
Route::get('/ubahminuman/{id}', [MinumanController::class, 'ubahminuman'])->name('ubahminuman');
Route::post('/updatedata2/{id}', [MinumanController::class, 'updatedata2'])->name('updatedata2');
Route::get('/deleteminuman/{id}', [MinumanController::class, 'deleteminuman'])->name('deleteminuman');
Route::get('/eksporminuman', [MinumanController::class, 'eksporminuman'])->name('eksporminuman');

Route::get('/outlet', [OutletController::class, 'index'])->name('outlet');
Route::get('/tambahoutlet', [OutletController::class, 'tambahoutlet'])->name('tambahoutlet');
Route::post('/insertdata3', [OutletController::class, 'insertdata3'])->name('insertdata3');
Route::get('/ubahoutlet/{id}', [OutletController::class, 'ubahoutlet'])->name('ubahoutlet');
Route::post('/updatedata3/{id}', [OutletController::class, 'updatedata3'])->name('updatedata3');
Route::get('/deleteoutlet/{id}', [OutletController::class, 'deleteoutlet'])->name('deleteoutlet');
Route::get('/eksporoutlet', [OutletController::class, 'eksporoutlet'])->name('eksporoutlet');

Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai');
Route::get('/tambahpegawai', [PegawaiController::class, 'tambahpegawai'])->name('tambahpegawai');
Route::post('/insertdata4', [PegawaiController::class, 'insertdata4'])->name('insertdata4');
Route::get('/ubahpegawai/{id}', [PegawaiController::class, 'ubahpegawai'])->name('ubahpegawai');
Route::post('/updatedata4/{id}', [PegawaiController::class, 'updatedata4'])->name('updatedata4');
Route::get('/deletepegawai/{id}', [PegawaiController::class, 'deletepegawai'])->name('deletepegawai');
Route::get('/eksporpegawai', [PegawaiController::class, 'eksporpegawai'])->name('eksporpegawai');

Route::get('/penilaian', [PenilaianController::class, 'index'])->name('penilaian');
Route::get('/tambahpenilaian', [PenilaianController::class, 'tambahpenilaian'])->name('tambahpenilaian');
Route::post('/insertdata6', [PenilaianController::class, 'insertdata6'])->name('insertdata6');
Route::get('/ubahpenilaian/{id}', [PenilaianController::class, 'ubahpenilaian'])->name('ubahpenilaian');
Route::post('/updatedata6/{id}', [PenilaianController::class, 'updatedata6'])->name('updatedata6');
Route::get('/deletepenilaian/{id}', [PenialaianController::class, 'deletepenilaian'])->name('deletepenilaian');
Route::get('/eksporpenilaian', [PenilaianController::class, 'eksporpenilaian'])->name('eksporpenilaian');

Route::get('/admins', [AdminsController::class, 'index'])->name('admins');
Route::get('/tambahadmin', [AdminsController::class, 'tambahadmin'])->name('tambahadmin');
Route::post('/insertdata1', [AdminsController::class, 'insertdata1'])->name('insertdata1');
Route::get('/ubahadmin/{id}', [AdminsController::class, 'ubahadmin'])->name('ubahadmin');
Route::post('/updatedata1/{id}', [AdminsController::class, 'updatedata1'])->name('updatedata1');
Route::get('/deleteadmin/{id}', [AdminsController::class, 'deleteadmin'])->name('deleteadmin');
Route::get('/eksporadmin', [AdminsController::class, 'eksporadmin'])->name('eksporadmin');

Route::get('/customer', [CustomerController::class, 'index'])->name('customer');
Route::get('/tambahcustomer', [CustomerController::class, 'tambahcustomer'])->name('tambahcustomer');
Route::post('/insertdata5', [CustomerController::class, 'insertdata5'])->name('insertdata5');
Route::get('/ubahcustomer/{id}', [CustomerController::class, 'ubahcustomer'])->name('ubahcustomer');
Route::post('/updatedata5/{id}', [CustomerController::class, 'updatedata5'])->name('updatedata5');
Route::get('/deletecustomer/{id}', [CustomerController::class, 'deletecustomer'])->name('deletecustomer');
Route::get('/eksporcustomer', [CustomerController::class, 'eksporcustomer'])->name('eksporcustomer');
