<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\PengaduanController;

// Route::post('/pengaduan/store', [PengaduanController::class, 'store'])->name('pengaduan.store');


// Route::get('/', [HomeController::class, 'index']);
Route::get('/', function () {
    $data = [
        'total_pengguna' => DB::table('users')->count(),
        'total_laporan' => DB::table('pengaduan')->count(),
        'total_laporan_selesai' => DB::table('pengaduan')->where('status', 'Selesai')->count(),
    ];
    return view('welcome', $data);
});
// Route::get('/', function () {
    
//     return view('welcome');
// });

// Admin/Petugas
Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function() {
        Route::get('/', 'DashboardController@index')->name('dashboard');

        Route::resource('pengaduans', 'PengaduanController');

        Route::resource('tanggapan', 'TanggapanController');

        Route::get('masyarakat', 'AdminController@masyarakat');
        Route::resource('petugas', 'PetugasController');

        Route::get('laporan', 'AdminController@laporan');
        Route::get('laporan/cetak', 'AdminController@cetak');
        Route::get('pengaduan/cetak/{id}', 'AdminController@pdf');
});


// Masyarakat
Route::prefix('user')
    ->middleware(['auth', 'MasyarakatMiddleware'])
    ->group(function() {
		Route::get('/', 'MasyarakatController@index')->name('masyarakat-dashboard');
        Route::resource('pengaduan', 'MasyarakatController');
        Route::get('pengaduan', 'MasyarakatController@lihat');
});





require __DIR__.'/auth.php';
