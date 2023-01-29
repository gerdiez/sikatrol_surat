<?php

namespace App\Http\Controllers\SuratMasuk;

use App\Models\Surat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MasukBelumController extends Controller
{
    public function index()
    {
        $surat = Surat::latest();
        $paginate = request("paginate") ?? 10;
        if (request("search")) {
            $surat
                ->where("jenis_surat", "Surat Masuk")
                ->where("disposisi", "false")
                ->where(
                    request("category"),
                    "like",
                    "%" . request("search") . "%"
                );
        } else {
            $surat
                ->where("disposisi", "false")
                ->where("jenis_surat", "Surat Masuk");
        }

        $category = [
            "no_surat" => "No Surat",
            "surat_dari" => "Surat Dari",
            "kategori" => "Kategori",
            "perihal" => "Perihal",
            "sifat" => "Sifat",
            "tanggal_kegiatan" => "Tgl Kegiatan",
        ];

        return view("surat.surat-masuk.belum-disposisi.index", [
            "title" => "Surat Masuk",
            "surats" => $surat->paginate($paginate),
            "search" => request("search"),
            "categories" => $category,
            "paginate" => $paginate,
            "options" => [10, 20, 30],
        ]);
    }

    public function create()
    {
        return view("surat.surat-masuk.belum-disposisi.create", [
            "title" => "Tambah Surat Masuk",
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
            "tanggal_kegiatan" => "",
            "kategori" => "required",
            "perihal" => "required",
            "file" => "required|mimes:pdf,docx,xlsx,jpg,jpeg,png|max:2048",
            "disposisi" => "",
        ]);

        if ($request->input("disposisi") == true) {
            $request->validate([
                "diteruskan_ke" => "required",
                "catatan" => "required",
                "dari" => "required",
            ]);
            $validate["diteruskan_ke"] = $request->input("diteruskan_ke");
            $validate["catatan"] = $request->input("catatan");
            $validate["dari"] = $request->input("dari");
        }

        $fileName = $request->file("file")->getClientOriginalName();
        $validate["file_name"] = $fileName;
        $validate["file"] = $request->file("file")->storeAs("files", $fileName);
        Surat::create($validate);

        if ($request->input("disposisi") == true) {
            return redirect("/surat-masuk/sudah-disposisi")->with(
                "create",
                "Data telah berhasil ditambahkan"
            );
        } else {
            return redirect("/surat-masuk/belum-disposisi")->with(
                "create",
                "Data telah berhasil ditambahkan"
            );
        }
    }

    public function show($id)
    {
        return view("surat.surat-masuk.belum-disposisi.detail", [
            "title" => "Detail Surat Masuk",
            "surats" => Surat::where("id", $id)->get(),
        ]);
    }

    public function edit($id)
    {
        return view("surat.surat-masuk.belum-disposisi.edit", [
            "title" => "Edit Surat Masuk",
            "surats" => Surat::where("id", $id)->get(),
            "id" => $id,
        ]);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            "diteruskan_ke" => "required",
            "catatan" => "required",
            "dari" => "required",
        ]);
        $validate["disposisi"] = "true";
        Surat::where("id", $id)->update($validate);
        return redirect("/surat-masuk/sudah-disposisi")->with(
            "edit",
            "Data telah berhasil diubah"
        );
    }

    public function destroy($id)
    {
        Surat::destroy($id);
        return redirect("/surat-masuk/belum-disposisi")->with(
            "delete",
            "Data telah berhasil dihapus"
        );
    }
}
