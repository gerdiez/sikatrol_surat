<?php

namespace App\Http\Livewire;

use App\Models\Surat;
use Livewire\Component;
use Livewire\WithPagination;

class SuratKeputusan extends Component
{
    use WithPagination;

    public $search;
    public $paginate = 10;
    public $category = "no_surat";

    public function render()
    {
        $surat = Surat::orderBy('created_at', 'desc');
        $this->search === null
            ? $surat->where("jenis_surat", "Surat Keputusan")
            : $surat
                ->where("jenis_surat", "Surat Keputusan")
                ->where($this->category, "like", "%" . $this->search . "%");

        return view("livewire.surat-keputusan", [
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
        redirect()->route('surat.keputusan.show', $id);
    }
}
