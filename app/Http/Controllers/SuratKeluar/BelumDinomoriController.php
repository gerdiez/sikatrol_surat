<?php

namespace App\Http\Controllers\SuratKeluar;

use App\Models\Surat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BelumDinomoriController extends Controller
{
    public function index()
    {
        return view("surat.surat-keluar.belum-dinomori.index", [
            "title" => "Surat Keluar",
        ]);
    }

    public function create()
    {
        return view("surat.surat-keluar.belum-dinomori.create", [
            "title" => "Tambah Surat Keluar",
        ]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            "surat_dari" => "required",
            "jenis_surat" => "required",
            "tanggal_surat" => "required",
            "sifat" => "required",
            "no_agenda" => "required",
            "tanggal_kegiatan" => "",
            "kategori" => "required",
            "perihal" => "required",
            "file" => "required|mimes:pdf,docx,xlsx,jpg,jpeg,png|max:2048",
            "diteruskan_ke" => "required",
            "catatan" => "required",
        ]);
        $validate["status"] = "Belum Dinomori";
        $fileName = $request->file("file")->getClientOriginalName();
        $validate["file_name"] = $fileName;
        $validate["file"] = $request->file("file")->storeAs("files", $fileName);
        Surat::create($validate);
        return redirect("/surat-keluar/pengajuan")->with(
            "create",
            "Data telah berhasil ditambahkan"
        );
    }

    public function show($id)
    {
        return view("surat.surat-keluar.belum-dinomori.detail", [
            "title" => "Detail Surat Keluar",
            "surats" => Surat::where("id", $id)->get(),
        ]);
    }

    public function edit($id)
    {
        return view("surat.surat-keluar.belum-dinomori.edit", [
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
        return redirect("/surat-keluar/belum-dinomori")->with(
            "delete",
            "Data telah berhasil dihapus"
        );
    }
}
