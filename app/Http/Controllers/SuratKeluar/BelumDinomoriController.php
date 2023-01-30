<?php

namespace App\Http\Controllers\SuratKeluar;

use App\Models\Notif;
use App\Models\Surat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BelumDinomoriController extends Controller
{
    public function index()
    {
        $getSum = new Notif();
        return view("surat.surat-keluar.belum-dinomori.index", [
            "title" => "Surat Keluar",
            "notif" => $getSum->index(),
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
            "no_surat" => "",
            "tanggal_surat" => "required",
            "sifat" => "required",
            "no_agenda" => "",
            "tanggal_kegiatan" => "",
            "kategori" => "required",
            "perihal" => "required",
            "file" => "required|mimes:pdf,docx,xlsx,jpg,jpeg,png|max:2048",
            "diteruskan_ke" => "required",
            "catatan" => "",
        ]);
        $validate["no_surat"] == null
            ? ($validate["status"] = "Belum Dinomori")
            : ($validate["status"] = "Disetujui");

        $fileName = $request->file("file")->getClientOriginalName();
        $validate["file_name"] = $fileName;
        $validate["file"] = $request->file("file")->storeAs("files", $fileName);
        Surat::create($validate);

        if ($validate["no_surat"] == null) {
            return redirect("/surat-keluar/belum-dinomori")->with(
                "create",
                "Data telah berhasil ditambahkan"
            );
        } else {
            return redirect("/surat-keluar/disetujui")->with(
                "create",
                "Data telah berhasil ditambahkan"
            );
        }
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
        return view("surat.surat-keluar.belum-dinomori.edit", [
            "title" => "Edit Surat Keluar",
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
        if (!Auth::user()->hasRole("unit")) {
            $validate["catatan"] == null
                ? ($validate["status"] = "Pengajuan")
                : ($validate["status"] = "Disetujui");
        }

        Surat::where("id", $id)->update($validate);

        if (Auth::user()->hasRole("unit")) {
            return redirect("/surat-keluar/belum-dinomori")->with(
                "edit",
                "Data telah berhasil diubah"
            );
        } else {
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
