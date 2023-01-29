<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SuratKeputusanController extends Controller
{
    public function index()
    {
        return view("surat.surat-keputusan.index", [
            "title" => "Surat Keputusan",
        ]);
    }

    public function create()
    {
        return view("surat.surat-keputusan.create", [
            "title" => "Tambah Surat Keputusan",
        ]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            "surat_dari" => "required",
            "jenis_surat" => "required",
            "no_surat" => "required",
            "tanggal_surat" => "required",
            "sifat" => "required",
            "no_agenda" => "required",
            "tanggal_kegiatan" => "required",
            "kategori" => "required",
            "perihal" => "required",
            "file" => "required|mimes:pdf,docx,xlsx,jpg,jpeg,png|max:2048",
            "diteruskan_ke" => "required",
        ]);
        $fileName = $request->file("file")->getClientOriginalName();
        $validate["file_name"] = $fileName;
        $validate["file"] = $request->file("file")->storeAs("files", $fileName);
        Surat::create($validate);
        return redirect("/surat-keputusan")->with(
            "create",
            "Data telah berhasil ditambahkan"
        );
    }

    public function show($id)
    {
        return view("surat.surat-keputusan.detail", [
            "title" => "Detail Surat Keputusan",
            "surats" => Surat::where("id", $id)->get(),
        ]);
    }

    public function edit($id)
    {
        $unitKerja = [
            "Umpeg",
            "Kesejahteraan Sosial",
            "Pemberdayaan Masyarakat",
            "Pemerintahan",
            "Tramtib",
            "Kelurahan Ancol",
            "Kelurahan Balonggede",
            "Kelurahan Ciseureuh",
            "Kelurahan Cigereleng",
            "Kelurahan Ciateul",
            "Kelurahan Pungkur",
            "Kelurahan Pasirluyu",
        ];
        return view("surat.surat-keputusan.edit", [
            "title" => "Edit Surat Keputusan",
            "surats" => Surat::where("id", $id)->get(),
            "id" => $id,
            "unitKerja" => $unitKerja,
        ]);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            "surat_dari" => "required",
            "jenis_surat" => "required",
            "no_surat" => "required",
            "tanggal_surat" => "required",
            "sifat" => "required",
            "no_agenda" => "required",
            "tanggal_kegiatan" => "required",
            "kategori" => "required",
            "perihal" => "required",
            "file" => "mimes:pdf,docx,xlsx,jpg,jpeg,png|max:2048",
            "diteruskan_ke" => "required",
        ]);
        if ($request->file("file")) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $fileName = $request->file("file")->getClientOriginalName();
            $validate["file_name"] = $fileName;
            $validate["file"] = $request
                ->file("file")
                ->storeAs("files", $fileName);
        }
        Surat::where("id", $id)->update($validate);
        return redirect("/surat-keputusan")->with(
            "edit",
            "Data telah berhasil diubah"
        );
    }

    public function destroy($id)
    {
        Surat::destroy($id);
        return redirect("/surat-keputusan/belum-dinomori")->with(
            "delete",
            "Data telah berhasil dihapus"
        );
    }
}
