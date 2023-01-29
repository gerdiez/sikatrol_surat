<?php

namespace App\Http\Livewire\SuratKeluar;

use App\Models\Surat;
use Livewire\Component;
use Livewire\WithPagination;

class Pengajuan extends Component
{
    use WithPagination;

    public $search;
    public $paginate = 10;
    public $category;

    public function render()
    {
        $surat = Surat::latest();
        $this->search === null
            ? $surat
                ->where("status", "Pengajuan")
                ->where("jenis_surat", "Surat Keluar")
            : $surat
                ->where("status", "Pengajuan")
                ->where("jenis_surat", "Surat Keluar")
                ->where($this->category, "like", "%" . $this->search . "%");

        return view("livewire.surat-keluar.pengajuan", [
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
