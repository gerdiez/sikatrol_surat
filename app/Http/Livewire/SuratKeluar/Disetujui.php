<?php

namespace App\Http\Livewire\SuratKeluar;

use App\Models\Surat;
use Livewire\Component;
use Livewire\WithPagination;

class Disetujui extends Component
{
    use WithPagination;

    public $search;
    public $paginate = 10;
    public $category = "no_surat";

    public function render()
    {
        $surat = Surat::orderBy('created_at', 'desc');
        $this->search === null
            ? $surat
                ->where("status", "Disetujui")
                ->where("jenis_surat", "Surat Keluar")
            : $surat
                ->where("status", "Disetujui")
                ->where("jenis_surat", "Surat Keluar")
                ->where($this->category, "like", "%" . $this->search . "%");

        return view("livewire.surat-keluar.disetujui", [
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

    public function read($id)
    {
        Surat::where("id", $id)->update(['dibaca' => 'true']);
        redirect()->route('surat.keluar.disetujui.show', $id);
    }
}
