<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController; //panggil controller yang ada dibuat sebelumnya
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\PegawaiContorller;
use App\Http\Controllers\DivisiContorller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get ('/salam', function(){
    return "selamat Pagi";
}); //ini adalah routing untuk pemanggilan dirinya sendiri
Route::get ('/ucapan', function(){
    return view('ucapan'); //ini adalah rauting yang mengarahkan ke view yang ada di folder
    //recource/views
});
Route::get('/nilai', function(){
    return view('nilai');
}); //arahkan return nilai ke file nilai yang ada di view
Route::get('/daftar_nilai', function(){
    return view('daftar_nilai');
});
//mengarahkan routing ke controller
Route::get('/siswa', [SiswaController::class, 'dataSiswa']);
//mengarahkan ke controller dashboardController
//prefix atau group
Route::prefix('admin')->group(function(){
Route::get('/dashboard', [DashboardController::class, 'index'])->name('index');
Route::get('/staff', [StaffController::class, 'index']);

//ini adalah route untuk pegawai
Route::get('/pegawai', [PegawaiContorller::class, 'index']);
Route::get('/pegawai/create', [PegawaiContorller::class, 'create']);
Route::post('/pegawai/store', [PegawaiContorller::class, 'store']);

//ini adlah route untuk divisi
Route::get('/divisi', [DivisiContorller::class, 'index']);
Route::get('/divisi/create', [DivisiContorller::class, 'create']);
Route::post('/divisi/store', [DivisiContorller::class, 'store']);

});
//nantinya pegawai tersebut mengambil pelatihan dan pada table pelatihan bertambah