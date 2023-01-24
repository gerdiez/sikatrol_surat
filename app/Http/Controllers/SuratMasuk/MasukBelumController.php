<?php

namespace App\Http\Controllers\SuratMasuk;

use App\Http\Controllers\Controller;
use App\Models\Surat;
use Illuminate\Http\Request;

class MasukBelumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('surat.surat-masuk.belum-disposisi.index', [
            'title' => 'Surat Masuk',
            'surats' => Surat::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('surat.surat-masuk.belum-disposisi.create', [
            'title' => 'Tambah Surat Masuk',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
            'upload' => 'required',
            'disposisi' => ''
        ]);
        Surat::create($validate);
        return redirect('/surat-masuk/belum-disposisi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('surat.surat-masuk.belum-disposisi.detail', [
            'title' => 'Detail Surat Masuk',
            'surats' => Surat::where('id', $id)->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('surat.surat-masuk.belum-disposisi.edit', [
            'title' => 'Edit Surat Masuk',
            'surats' => Surat::where('id', $id)->get(),
            'id' => $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
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
            'upload' => 'required',
            'disposisi' => '',
        ]);
        Surat::where('id', $id)->update($validate);
        return redirect('/surat-masuk/belum-disposisi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Surat::destroy($id);
        return redirect('/surat-masuk/belum-disposisi');
    }
}
