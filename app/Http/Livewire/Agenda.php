<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Surat;
use Livewire\Component;
use Livewire\WithPagination;

class Agenda extends Component
{
    use WithPagination;

    public $search;
    public $paginate = 10;
    public $category = "no_surat";
    public $start_date;
    public $end_date;

    public function render()
    {
        $this->start_date = Carbon::now();
        // $this->start_date = Carbon::now();
        $surat = Surat::latest();
        // $from = $request->from;
        // $to = $request->to;
        // $title = "Sales From: " . $from . " To: " . $to;
        // $sales = Sale::whereBetween("created_at", [
        //     $from . " 00:00:00",
        //     $to . " 23:59:59",
        // ])->get();

        $this->search === null
            ? $surat
            : $surat
                ->where("jenis_surat", "Surat Tugas")
                ->where($this->category, "like", "%" . $this->search . "%");

        return view("livewire.agenda", [
            "surats" => $surat->paginate($this->paginate),
            "categories" => [
                "tanggal_kegiatan" => "Tgl Kegiatan",
                "no_surat" => "No Surat",
                "surat_dari" => "Surat Dari",
                "kategori" => "Kategori",
                "perihal" => "Perihal",
                "sifat" => "Sifat",
            ],
            "options" => [10, 20, 30],
        ]);
    }
}
