<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\SuratExport;

class AgendaController extends Controller
{
    public function index()
    {
        return view('agenda.index', [
            'title' => 'Agenda',
        ]);
    }

    public function show()
    {
        return Excel::download(new SuratExport, 'agenda.xlsx');
    }
}
