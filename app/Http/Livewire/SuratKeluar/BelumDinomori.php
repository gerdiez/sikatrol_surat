<?php

namespace App\Http\Livewire\SuratKeluar;

use App\Models\Surat;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class BelumDinomori extends Component
{
    use WithPagination;

    public $search;
    public $paginate = 10;
    public $category = "no_surat";

    public function render()
    {
        $surat = Surat::orderBy('updated_at', 'desc');
        if (Auth::user()->hasRole("unit")) {
            $name = Auth::user()->name;
            $this->search === null
                ? $surat
                    ->where("status", "Belum Dinomori")
                    ->where("jenis_surat", "Surat Keluar")
                    ->where("surat_dari", $name)
                : $surat
                    ->where("status", "Belum Dinomori")
                    ->where("jenis_surat", "Surat Keluar")
                    ->where($this->category, "like", "%" . $this->search . "%")
                    ->where("surat_dari", $name);
        } else {
            $this->search === null
                ? $surat
                    ->where("status", "Belum Dinomori")
                    ->where("jenis_surat", "Surat Keluar")
                : $surat
                    ->where("status", "Belum Dinomori")
                    ->where("jenis_surat", "Surat Keluar")
                    ->where($this->category, "like", "%" . $this->search . "%");
        }

        return view("livewire.surat-keluar.belum-dinomori", [
            "surats" => $surat->paginate($this->paginate),
            "categories" => [
                "no_surat" => "No Surat",
                "surat_dari" => "Surat Dari",
                "kategori" => "Kategori",
                "perihal" => "Perihal",
                "sifat" => "Sifat",
                "tanggal_kegiatan" => "Tgl Kegiatan",
            ],
            "options" => [10, 20, 30],
        ]);
    }
}
