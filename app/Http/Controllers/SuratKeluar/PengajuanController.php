<?php

namespace App\Http\Controllers\SuratKeluar;

use App\Models\Surat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PengajuanController extends Controller
{
    public function index()
    {
        
        return view("surat.surat-keluar.pengajuan.index", [
            "title" => "Surat Keluar",
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view("surat.surat-keluar.pengajuan.detail", [
            "title" => "Detail Surat Keluar",
            "surats" => Surat::where("id", $id)->get(),
        ]);
    }

    public function edit($id)
    {
        return view("surat.surat-keluar.pengajuan.edit", [
            "title" => "Edit Surat Keluar",
            "surats" => Surat::where("id", $id)->get(),
            "id" => $id,
        ]);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        Surat::destroy($id);
        return redirect("/surat-keluar/pengajuan")->with(
            "delete",
            "Data telah berhasil dihapus"
        );
    }
}
