<?php

namespace App\Http\Livewire\SuratMasuk;

use App\Models\Surat;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class SudahDisposisi extends Component
{
    use WithPagination;

    public $search;
    public $paginate = 10;
    public $category;

    public function render()
    {
        $surat = Surat::latest();
        if (Auth::user()->hasRole("unit")) {
            $name = Auth::user()->name;
            $this->search === null
                ? $surat
                    ->where("disposisi", "true")
                    ->where("jenis_surat", "Surat Masuk")
                    ->where("diteruskan_ke", $name)
                : $surat
                    ->where("disposisi", "true")
                    ->where("jenis_surat", "Surat Masuk")
                    ->where($this->category, "like", "%" . $this->search . "%")
                    ->where("diteruskan_ke", $name);
        } else {
            $this->search === null
                ? $surat
                    ->where("disposisi", "true")
                    ->where("jenis_surat", "Surat Masuk")
                : $surat
                    ->where("disposisi", "true")
                    ->where("jenis_surat", "Surat Masuk")
                    ->where($this->category, "like", "%" . $this->search . "%");
        }

        return view("livewire.surat-masuk.sudah-disposisi", [
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
