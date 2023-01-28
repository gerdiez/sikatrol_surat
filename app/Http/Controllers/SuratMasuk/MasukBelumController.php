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
        if (request('search')) {
            $surat->where('no_surat', 'like', '%' . request('search') . '%')
                ->orWhere('jenis_surat', 'like', '%' . request('search') . '%')
                ->orWhere('kategori', 'like', '%' . request('search') . '%')
                ->orWhere('perihal', 'like', '%' . request('search') . '%')
                ->orWhere('sifat', 'like', '%' . request('search') . '%')
                ->orWhere('tanggal_kegiatan', 'like', '%' . request('search') . '%')
                ->orWhere('diteruskan_ke', 'like', '%' . request('search') . '%');
        } else {
            $surat->where('disposisi', false);
        }
        return view('surat.surat-masuk.belum-disposisi.index', [
            'title' => 'Surat Masuk',
            'surats' => $surat->get(),
            'search' => request('search')
        ]);
    }

    public function create()
    {
        return view('surat.surat-masuk.belum-disposisi.create', [
            'title' => 'Tambah Surat Masuk',
        ]);
    }

    public function store(Request $request)
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
            'disposisi' => ''
        ]);

        if ($request->input('disposisi') == true) {
            $validate['diteruskan_ke'] = '';
            $validate['catatan'] = '';
            $validate['dari'] = '';
        }

        $fileName = $request->file('file')->getClientOriginalName();
        $validate['file_name'] = $fileName;
        $validate['file'] = $request->file('file')->storeAs('files', $fileName);
        Surat::create($validate);
        return redirect('/surat-masuk/sudah-disposisi');
    }

    public function show($id)
    {
        return view('surat.surat-masuk.belum-disposisi.detail', [
            'title' => 'Detail Surat Masuk',
            'surats' => Surat::where('id', $id)->get(),
        ]);
    }

    public function edit($id)
    {
        return view('surat.surat-masuk.belum-disposisi.edit', [
            'title' => 'Edit Surat Masuk',
            'surats' => Surat::where('id', $id)->get(),
            'id' => $id
        ]);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'diteruskan_ke' => 'required',
            'catatan' => 'required',
            'dari' => 'required',
        ]);
        Surat::where('id', $id)->update($validate);
        return redirect('/surat-masuk/belum-disposisi');
    }

    public function destroy($id)
    {
        Surat::destroy($id);
        return redirect('/surat-masuk/belum-disposisi');
    }
}
