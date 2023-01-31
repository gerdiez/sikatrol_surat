<?php

namespace App\Http\Controllers\SuratKeluar;

use App\Models\Notif;
use App\Models\Surat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PengajuanController extends Controller
{
    public function index()
    {
        $getSum = new Notif();
        return view("surat.surat-keluar.pengajuan.index", [
            "title" => "Surat Keluar",
            "notif" => $getSum->index(),
        ]);
    }

    public function show($id)
    {
        $getSum = new Notif();
        return view("surat.surat-keluar.pengajuan.detail", [
            "title" => "Detail Surat Keluar",
            "surats" => Surat::where("id", $id)->get(),
            "notif" => $getSum->index(),
        ]);
    }

    public function edit($id)
    {
        $getSum = new Notif();
        return view("surat.surat-keluar.pengajuan.edit", [
            "title" => "Edit Surat Keluar",
            "surats" => Surat::where("id", $id)->get(),
            "id" => $id,
            "notif" => $getSum->index(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            "surat_dari" => "required",
            "jenis_surat" => "required",
            "no_surat" => "",
            "tanggal_surat" => "required",
            "sifat" => "required",
            "no_agenda" => "",
            "tanggal_kegiatan" => "",
            "kategori" => "required",
            "perihal" => "required",
            "file" => "mimes:pdf,docx,xlsx,jpg,jpeg,png|max:2048",
            "diteruskan_ke" => "required",
            "catatan" => "",
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
        $validate["catatan"] == null
            ? ($validate["status"] = "Pengajuan")
            : ($validate["status"] = "Disetujui");

        Surat::where("id", $id)->update($validate);

        if ($validate["catatan"] == null) {
            return redirect("/surat-keluar/pengajuan")->with(
                "edit",
                "Data telah berhasil diubah"
            );
        } else {
            return redirect("/surat-keluar/disetujui")->with(
                "edit",
                "Data telah berhasil diubah"
            );
        }
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
