<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\SuratKeputusanController;
use App\Http\Controllers\SuratMasukController;
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

Route::resource('/surat-masuk', SuratMasukController::class, [
    'names' => [
        'index' => 'surat.masuk',
        'create' => 'surat.masuk.create'
    ]
]);

Route::resource('/surat-keluar', SuratKeluarController::class, [
    'names' => [
        'index' => 'surat.keluar',
        'create' => 'surat.keluar.create',
        'edit' => 'surat.keluar.edit'
    ]
]);

Route::resource('/surat-perintah', SuratPerintahController::class,[
    'names'=> [
        'index' => 'surat.perintah',
        'create' => 'surat.perintah.create'
    ]
]);

Route::resource('/surat-tugas', SuratTugasController::class, [
    'names' => [
        'index' => 'surat.tugas',
        'create' => 'surat.tugas.create'
    ]
]);

Route::resource('/surat-keputusan', SuratKeputusanController::class, [
    'names' => [
        'index' => 'surat.keputusan',
        'create' => 'surat.keputusan.create'
    ]
]);