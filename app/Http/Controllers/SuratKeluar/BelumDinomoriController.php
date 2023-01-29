<?php

namespace App\Http\Controllers\SuratKeluar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BelumDinomoriController extends Controller
{
    public function index()
    {
        return view("surat.surat-keluar.belum-dinomori.index", [
            "title" => "Surat Keluar",
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
