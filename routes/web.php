<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SuratMasuk\MasukBelumController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\SuratKeputusanController;
use App\Http\Controllers\SuratPerintahController;
use App\Http\Controllers\SuratTugasController;
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

Route::get('/', [IndexController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::resource('/surat-masuk/belum-disposisi', MasukBelumController::class, [
        'names' => [
            'index' => 'surat.masuk.belum',
            'create' => 'surat.masuk.belum.create',
            'store' => 'surat.masuk.belum.store',
            'edit' => 'surat.masuk.belum.edit',
            'show' => 'surat.masuk.belum.show',
            'update' => 'surat.masuk.belum.update',
            'destroy' => 'surat.masuk.belum.destroy'
        ],
        // 'except' => ['show', 'index']
    ]);

    Route::resource('/surat-keluar', SuratKeluarController::class, [
        'names' => [
            'index' => 'surat.keluar',
        ]
    ]);

    Route::resource('/surat-perintah', SuratPerintahController::class, [
        'names' => [
            'index' => 'surat.perintah',
        ]
    ]);

    Route::resource('/surat-keputusan', SuratKeputusanController::class, [
        'names' => [
            'index' => 'surat.keputusan',
        ]
    ]);

    Route::resource('/surat-tugas', SuratTugasController::class, [
        'names' => [
            'index' => 'surat.tugas',
        ]
    ]);
});
