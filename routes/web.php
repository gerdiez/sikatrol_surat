<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\SuratTugasController;
use App\Http\Controllers\SuratPerintahController;
use App\Http\Controllers\SuratKeputusanController;
use App\Http\Controllers\SuratKeluar\DisetujuiController;
use App\Http\Controllers\SuratKeluar\PengajuanController;
use App\Http\Controllers\SuratKeluar\BelumDinomoriController;
use App\Http\Controllers\SuratMasuk\BelumDisposisiController;
use App\Http\Controllers\SuratMasuk\SudahDisposisiController;

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

Route::get("/", [IndexController::class, "index"]);

Route::get("/login", [LoginController::class, "index"])
    ->name("login")
    ->middleware("guest");
Route::post("/login", [LoginController::class, "login"]);
Route::post("/logout", [LoginController::class, "logout"])->name("logout");

Route::resource("/agenda", AgendaController::class, [
    "names" => [
        "index" => "agenda",
    ],
]);

Route::middleware("auth")->group(function () {
    Route::prefix("surat-masuk")->group(function () {
        Route::resource("/belum-disposisi", BelumDisposisiController::class, [
            "names" => [
                "index" => "surat.masuk.belum",
                "create" => "surat.masuk.belum.create",
                "store" => "surat.masuk.belum.store",
                "edit" => "surat.masuk.belum.edit",
                "show" => "surat.masuk.belum.show",
                "update" => "surat.masuk.belum.update",
                "destroy" => "surat.masuk.belum.destroy",
            ],
        ]);
        Route::resource("/sudah-disposisi", SudahDisposisiController::class, [
            "names" => [
                "index" => "surat.masuk.sudah",
                "create" => "surat.masuk.sudah.create",
                "store" => "surat.masuk.sudah.store",
                "edit" => "surat.masuk.sudah.edit",
                "show" => "surat.masuk.sudah.show",
                "update" => "surat.masuk.sudah.update",
                "destroy" => "surat.masuk.sudah.destroy",
            ],
        ]);
    });

    Route::prefix("surat-keluar")->group(function () {
        Route::resource("/belum-dinomori", BelumDinomoriController::class, [
            "names" => [
                "index" => "surat.keluar.belum.dinomori",
                "create" => "surat.keluar.belum.dinomori.create",
                "store" => "surat.keluar.belum.dinomori.store",
                "edit" => "surat.keluar.belum.dinomori.edit",
                "show" => "surat.keluar.belum.dinomori.show",
                "update" => "surat.keluar.belum.dinomori.update",
                "destroy" => "surat.keluar.belum.dinomori.destroy",
            ],
        ]);
        Route::resource("/pengajuan", PengajuanController::class, [
            "names" => [
                "index" => "surat.keluar.pengajuan",
                "create" => "surat.keluar.pengajuan.create",
                "store" => "surat.keluar.pengajuan.store",
                "edit" => "surat.keluar.pengajuan.edit",
                "show" => "surat.keluar.pengajuan.show",
                "update" => "surat.keluar.pengajuan.update",
                "destroy" => "surat.keluar.pengajuan.destroy",
            ],
        ]);
        Route::resource("/disetujui", DisetujuiController::class, [
            "names" => [
                "index" => "surat.keluar.disetujui",
                "create" => "surat.keluar.disetujui.create",
                "store" => "surat.keluar.disetujui.store",
                "edit" => "surat.keluar.disetujui.edit",
                "show" => "surat.keluar.disetujui.show",
                "update" => "surat.keluar.disetujui.update",
                "destroy" => "surat.keluar.disetujui.destroy",
            ],
        ]);
    });

    Route::resource("/surat-perintah", SuratPerintahController::class, [
        "names" => [
            "index" => "surat.perintah",
            "create" => "surat.perintah.create",
            "store" => "surat.perintah.store",
            "edit" => "surat.perintah.edit",
            "show" => "surat.perintah.show",
            "update" => "surat.perintah.update",
            "destroy" => "surat.perintah.destroy",
        ],
    ]);

    Route::resource("/surat-keputusan", SuratKeputusanController::class, [
        "names" => [
            "index" => "surat.keputusan",
            "create" => "surat.keputusan.create",
            "store" => "surat.keputusan.store",
            "edit" => "surat.keputusan.edit",
            "show" => "surat.keputusan.show",
            "update" => "surat.keputusan.update",
            "destroy" => "surat.keputusan.destroy",
        ],
    ]);

    Route::resource("/surat-tugas", SuratTugasController::class, [
        "names" => [
            "index" => "surat.tugas",
            "create" => "surat.tugas.create",
            "store" => "surat.tugas.store",
            "edit" => "surat.tugas.edit",
            "show" => "surat.tugas.show",
            "update" => "surat.tugas.update",
            "destroy" => "surat.tugas.destroy",
        ],
    ]);

    Route::resource("/agenda", AgendaController::class, [
        "names" => [
            "index" => "agenda",
        ],
    ]);
    Route::get("/agenda/export_excel", [AgendaController::class, "show"])->name(
        "agenda.export"
    );
});

Route::get("/storage-link", function () {
    Artisan::call("storage:link");
});
