<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;
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

Route::resource('/surat-keluar', SuratKeluarController::class);
