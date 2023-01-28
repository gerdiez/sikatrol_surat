<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index()
    {

        return view('agenda.index', [
            'title' => 'Agenda',
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

    public function show(Surat $surat)
    {
        //
    }

    public function edit(Surat $surat)
    {
        //
    }

    public function update(Request $request, Surat $surat)
    {
        //
    }

    public function destroy(Surat $surat)
    {
        //
    }
}
