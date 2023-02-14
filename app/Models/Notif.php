<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Surat;
use Illuminate\Support\Facades\Auth;

class Notif
{
    public function index()
    {
        return [
            "agenda" => $this->agenda(),
            "belum" => $this->belum(),
            "disposisi" => $this->disposisi(),
            "perintah" => $this->perintah(),
            "dinomori" => $this->dinomori(),
            "pengajuan" => $this->pengajuan(),
            "disetujui" => $this->disetujui(),
            "perintah" => $this->perintah(),
            "keputusan" => $this->keputusan(),
            "tugas" => $this->tugas(),
        ];
    }

    public function agenda()
    {
        return count(Surat::whereBetween("tanggal_kegiatan", [
                Carbon::now(), "3000-01-01"
            ])->get());
    }

    public function belum()
    {
        return count(
            Surat::where("jenis_surat", "Surat Masuk")
                ->where("disposisi", "false")
                ->where('dibaca', 'false')
                ->get()
        );
    }

    public function disposisi()
    {
        if (Auth::user()->hasRole("unit")) {
            $name = Auth::user()->name;
            return count(
                Surat::where("jenis_surat", "Surat Masuk")
                    ->where("disposisi", "true")
                    ->where('dibaca', 'false')
                    ->where("diteruskan_ke", $name)
                    ->get()
                );
        } else {
            return count(
                Surat::where("jenis_surat", "Surat Masuk")
                    ->where("disposisi", "true")
                    ->where('dibaca', 'false')
                    ->get()
                );
        }
    }

    public function dinomori()
    {
        return count(
            Surat::where("jenis_surat", "Surat Keluar")
                ->where("status", "Belum Dinomori")
                ->where('dibaca', 'false')
                ->get()
        );
    }

    public function pengajuan()
    {
        return count(
            Surat::where("jenis_surat", "Surat Keluar")
                ->where("status", "Pengajuan")
                ->where('dibaca', 'false')
                ->get()
        );
    }

    public function disetujui()
    {
        return count(
            Surat::where("jenis_surat", "Surat Keluar")
                ->where("status", "Disetujui")
                ->where('dibaca', 'false')
                ->get()
        );
    }

    public function perintah()
    {
        return count(
            Surat::where("jenis_surat", "Surat Perintah")
                ->where('dibaca', 'false')
                ->get());
    }

    public function keputusan()
    {
        return count(
            Surat::where("jenis_surat", "Surat Keputusan")
                ->where('dibaca', 'false')
                ->get());
    }

    public function tugas()
    {
        return count(
            Surat::where("jenis_surat", "Surat Tugas")
                ->where('dibaca', 'false')
                ->get());
    }
}
