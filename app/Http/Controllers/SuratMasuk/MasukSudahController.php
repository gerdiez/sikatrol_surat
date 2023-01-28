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
        if (request('search')) {
            $surat->where('jenis_surat', 'Surat Masuk')
                ->where('disposisi', 'true')
                ->where('no_surat', 'like', '%' . request('search') . '%');
        } else {
            $surat->where('disposisi', 'true')->where('jenis_surat', 'Surat Masuk');
        }
        return view('surat.surat-masuk.sudah-disposisi.index', [
            'title' => 'Surat Masuk',
            'surats' => $surat->get(),
            'search' => request('search')
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
        return redirect('/surat-masuk/sudah-disposisi');
    }

    public function destroy($id)
    {
        Surat::destroy($id);
        return redirect('/surat-masuk/sudah-disposisi');
    }
}
