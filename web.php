<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\MixController;//setiap buat controller ditulis di use
use App\Http\Controllers\BarangController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\BukuuController;

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

Route::get('/tampil_mahasiswa',function (){
    return view('datamahasiswa');
});

Route::get('/menu_masakan', function () { //tidak boleh ada spasi
    return view('menumasakan');//harus disamakan sama nama file yang ada di resource views
});

Route::get('/daftar_buku',function (){
    return view('daftarbuku');
});

Route::get('/daftar_mahasiswa',[MahasiswaController::class,'index']); //request daftar_mahasiwa, respon fungsi index mahasiswa controler, baru nama fungsinya
    
Route::get('/daftar_buku',[BukuController::class,'buku']);//pemanggilan url, pemanggilan controler, lalu fungsi

Route::get('/mix',[MixController::class,'databarang']);

Route::get('/databarang',[BarangController::class,'data_barang']);

Route::get('/formulir',[GuruController::class,'formulir']);

Route::get('/formulir/proses',[GuruController::class,'formulir_proses']);

Route::get('menuu',[BukuuController::class,'pesanan']);