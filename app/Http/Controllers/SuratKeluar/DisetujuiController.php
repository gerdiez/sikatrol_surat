<?php

namespace App\Http\Controllers\SuratKeluar;

use App\Models\Surat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DisetujuiController extends Controller
{
    public function index()
    {
        return view("surat.surat-keluar.disetujui.index", [
            "title" => "Surat Keluar",
        ]);
    }

    public function show($id)
    {
        return view("surat.surat-keluar.disetujui.detail", [
            "title" => "Detail Surat Keluar",
            "surats" => Surat::where("id", $id)->get(),
        ]);
    }

    public function edit($id)
    {
        return view("surat.surat-keluar.disetujui.edit", [
            "title" => "Edit Surat Keluar",
            "surats" => Surat::where("id", $id)->get(),
            "id" => $id,
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
            "no_agenda" => "",
            "tanggal_kegiatan" => "",
            "kategori" => "required",
            "perihal" => "required",
            "file" => "mimes:pdf,docx,xlsx,jpg,jpeg,png|max:2048",
            "diteruskan_ke" => "required",
            "catatan" => "required",
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
        return redirect("/surat-keluar/disetujui")->with(
            "edit",
            "Data telah berhasil diubah"
        );
    }

    public function destroy($id)
    {
        Surat::destroy($id);
        return redirect("/surat-keluar/disetujui")->with(
            "delete",
            "Data telah berhasil dihapus"
        );
    }
}
