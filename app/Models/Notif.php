<?php

namespace App\Models;

use App\Models\Surat;

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
        return count(Surat::get());
    }

    public function belum()
    {
        return count(
            Surat::where("jenis_surat", "Surat Masuk")
                ->where("status", "false")
                ->get()
        );
    }

    public function disposisi()
    {
        return count(
            Surat::where("jenis_surat", "Surat Masuk")
                ->where("status", "true")
                ->get()
        );
    }

    public function dinomori()
    {
        return count(
            Surat::where("jenis_surat", "Surat Keluar")
                ->where("status", "Belum Dinomori")
                ->get()
        );
    }

    public function pengajuan()
    {
        return count(
            Surat::where("jenis_surat", "Surat Keluar")
                ->where("status", "Pengajuan")
                ->get()
        );
    }

    public function disetujui()
    {
        return count(
            Surat::where("jenis_surat", "Surat Keluar")
                ->where("status", "Disetujui")
                ->get()
        );
    }

    public function perintah()
    {
        return count(Surat::where("jenis_surat", "Surat Perintah")->get());
    }

    public function keputusan()
    {
        return count(Surat::where("jenis_surat", "Surat Keputusan")->get());
    }

    public function tugas()
    {
        return count(Surat::where("jenis_surat", "Surat Tugas")->get());
    }
}
