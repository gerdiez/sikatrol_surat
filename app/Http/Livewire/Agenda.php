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

    public function mount()
    {
        $this->start_date = Carbon::now()->format("Y-m-d");
    }

    public function render()
    {
        $surat = Surat::orderBy('tanggal_kegiatan', 'desc');
        if ($this->start_date !== null && $this->end_date !== null) {
            $surat->whereBetween("tanggal_kegiatan", [
                $this->start_date,
                $this->end_date,
            ]);
        } else if ($this->start_date == null && $this->end_date == null) {
            $surat = Surat::orderBy('tanggal_kegiatan', 'desc');
        } else if ($this->start_date == Carbon::now()->format("Y-m-d") && $this->end_date == null) {
            $surat->whereBetween("tanggal_kegiatan", [
                $this->start_date,
                "3000-01-01",
            ]);
        }

        return view("livewire.agenda", [
            "surats" => $surat->paginate($this->paginate),
            "options" => [10, 20, 30],
        ]);
    }

    public function clear()
    {
        $this->start_date = null;
        $this->end_date = null;
        $this->render();
    }
}
