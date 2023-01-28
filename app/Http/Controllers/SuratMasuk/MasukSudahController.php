<?php

namespace App\Http\Controllers\SuratMasuk;

use App\Models\Surat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class MasukSudahController extends Controller
{
    public function index()
    {
        return view('surat.surat-masuk.sudah-disposisi.index', [
            'title' => 'Surat Masuk',
            'surats' => Surat::where('disposisi', 'true')->get(),
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
        return view('surat.surat-masuk.sudah-disposisi.edit', [
            'title' => 'Edit Surat Masuk',
            'surats' => Surat::where('id', $id)->get(),
            'id' => $id
        ]);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'surat_dari' => 'required',
            'jenis_surat' => 'required',
            'no_surat' => 'required',
            'tanggal_surat' => 'required',
            'sifat' => 'required',
            'no_agenda' => 'required',
            'tanggal_kegiatan' => 'required',
            'kategori' => 'required',
            'perihal' => 'required',
            'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
            'disposisi' => '',
            'diteruskan_ke' => '',
            'catatan' => '',
            'dari' => '',
        ]);
        if ($request->oldImage) {
            Storage::delete($request->oldImage);
        }
        $fileName = $request->file('file')->getClientOriginalName();
        $validate['file_name'] = $fileName;
        $validate['file'] = $request->file('file')->storeAs('files', $fileName);
        Surat::where('id', $id)->update($validate);
        return redirect('/surat-masuk/sudah-disposisi');
    }

    public function destroy($id)
    {
        Surat::destroy($id);
        return redirect('/surat-masuk/sudah-disposisi');
    }
}
