<?php

namespace App\Http\Controllers\SuratMasuk;

use App\Models\Surat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MasukSudahController extends Controller
{
    public function index()
    {
        $surat = Surat::latest();
        $paginate = request("paginate") ?? 10;
        if (Auth::user()->hasRole('unit')) {
            $name = Auth::user()->name;
            $surat->where('disposisi', 'true')
                ->where('jenis_surat', 'Surat Masuk')
                ->where('diteruskan_ke', $name);
        } else {
            if (request('search')) {
                $surat->where('jenis_surat', 'Surat Masuk')
                    ->where('disposisi', 'true')
                    ->where(request('category'), 'like', '%' . request('search') . '%');
            } else {
                $surat->where('disposisi', 'true')
                    ->where('jenis_surat', 'Surat Masuk');
            }
        }

        $category = [
            'no_surat' => 'No Surat',
            'surat_dari' => 'Surat Dari',
            'kategori' => 'Kategori',
            'perihal' => 'Perihal',
            'sifat' => 'Sifat',
            'tanggal_kegiatan' => 'Tgl Kegiatan',
            'diteruskan_ke' => 'Diteruskan Ke',
        ];

        return view('surat.surat-masuk.sudah-disposisi.index', [
            'title' => 'Surat Masuk',
            'surats' => $surat->paginate($paginate),
            'search' => request('search'),
            'categories' => $category,
            "paginate" => $paginate,
            "options" => [10, 20, 30],
        ]);
    }

    public function show($id)
    {
        return view('surat.surat-masuk.sudah-disposisi.detail', [
            'title' => 'Detail Surat Masuk',
            'surats' => Surat::where('id', $id)->get(),
        ]);
    }

    public function edit($id)
    {
        $unitKerja = [
            'Umpeg', 'Kesejahteraan Sosial', 'Pemberdayaan Masyarakat', 'Pemerintahan', 'Tramtib', 'Kelurahan Ancol', 'Kelurahan Balonggede', 'Kelurahan Ciseureuh', 'Kelurahan Cigereleng', 'Kelurahan Ciateul', 'Kelurahan Pungkur', 'Kelurahan Pasirluyu'
        ];
        return view('surat.surat-masuk.sudah-disposisi.edit', [
            'title' => 'Edit Surat Masuk',
            'surats' => Surat::where('id', $id)->get(),
            'id' => $id,
            'unitKerja' => $unitKerja
        ]);
    }

    public function update(Request $request, $id)
    {
        if (Auth::user()->hasRole('sekre')) {
            $validate = $request->validate([
                'diteruskan_ke' => '',
                'catatan' => '',
                'dari' => '',
            ]);
        } else {
            $validate = $request->validate([
                'surat_dari' => 'required',
                'jenis_surat' => 'required',
                'no_surat' => 'required',
                'tanggal_surat' => 'required',
                'sifat' => 'required',
                'no_agenda' => 'required',
                'tanggal_kegiatan' => '',
                'kategori' => 'required',
                'perihal' => 'required',
                'file' => 'mimes:pdf,docx,xlsx,jpg,jpeg,png|max:2048',
                'disposisi' => '',
                'diteruskan_ke' => '',
                'catatan' => '',
                'dari' => '',
            ]);
            if ($request->file('file')) {
                if ($request->oldImage) {
                    Storage::delete($request->oldImage);
                }
                $fileName = $request->file('file')->getClientOriginalName();
                $validate['file_name'] = $fileName;
                $validate['file'] = $request->file('file')->storeAs('files', $fileName);
            }
            $validate['disposisi'] = 'true';
        }

        Surat::where('id', $id)->update($validate);
        return redirect('/surat-masuk/sudah-disposisi')->with('edit', 'Data telah berhasil diubah');
    }

    public function destroy($id)
    {
        Surat::destroy($id);
        return redirect('/surat-masuk/sudah-disposisi')->with('delete', 'Data telah berhasil dihapus');
    }
}
