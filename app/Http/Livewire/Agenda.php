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
        $surat = Surat::latest();

        $surat->whereBetween("tanggal_kegiatan", [
            $this->start_date,
            $this->end_date,
        ]);

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
