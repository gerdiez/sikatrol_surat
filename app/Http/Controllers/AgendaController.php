<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\SuratExport;
use App\Models\Notif;
use App\Models\Surat;

class AgendaController extends Controller
{
    public function index()
    {
        $getSum = new Notif();
        return view("agenda.index", [
            "title" => "Agenda",
            "notif" => $getSum->index(),
        ]);
    }

    public function show()
    {
        return Excel::download(new SuratExport(), "agenda.xlsx");
    }
}
