<?php

namespace Database\Seeders;

use App\Models\Surat;
use Illuminate\Database\Seeder;

class SuratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Surat::factory(20)->create();
        $unitKerja = [
            "Umpeg",
            "Kesejahteraan Sosial",
            "Pemberdayaan Masyarakat",
            "Pemerintahan",
            "Tramtib",
            "Kelurahan Ancol",
            "Kelurahan Balonggede",
            "Kelurahan Ciseureuh",
            "Kelurahan Cigereleng",
            "Kelurahan Ciateul",
            "Kelurahan Pungkur",
            "Kelurahan Pasirluyu",
        ];
        $sifat = ["Segera", "Sangat Segera", "Biasa"];
        $disposisi = ["false", "true"];
        $status = ["Belum Dinomori", "Pengajuan", "Disetujui"];

        // Surat Masuk
        for ($i = 0; $i < 3; $i++) {
            foreach ($unitKerja as $unit) {
                Surat::create([
                    "surat_dari" => fake()->name(),
                    "jenis_surat" => "Surat Masuk",
                    "no_surat" => fake()->phoneNumber(),
                    "tanggal_surat" => fake()->dateTime(),
                    "sifat" => $sifat[array_rand($sifat)],
                    "no_agenda" => fake()->buildingNumber(),
                    "tanggal_kegiatan" => fake()->dateTime(),
                    "kategori" => fake()->streetName(),
                    "perihal" => fake()->realText(20),
                    "file" => fake()->mimeType(),
                    "file_name" => "Surat Masuk.docx",
                    "disposisi" => $disposisi[array_rand($disposisi)],
                    "status" => "",
                    "diteruskan_ke" => $unit,
                    "catatan" => fake()->realText(10),
                    "dari" => fake()->name(),
                ]);
            }
        }

        // Surat Keluar
        for ($i = 0; $i < 3; $i++) {
            foreach ($unitKerja as $unit) {
                Surat::create([
                    "surat_dari" => fake()->name(),
                    "jenis_surat" => "Surat Keluar",
                    "no_surat" => fake()->phoneNumber(),
                    "tanggal_surat" => fake()->dateTime(),
                    "sifat" => $sifat[array_rand($sifat)],
                    "no_agenda" => fake()->buildingNumber(),
                    "tanggal_kegiatan" => fake()->dateTime(),
                    "kategori" => fake()->streetName(),
                    "perihal" => fake()->realText(20),
                    "file" => fake()->mimeType(),
                    "file_name" => "Surat Keluar.docx",
                    "disposisi" => "",
                    "status" => $status[array_rand($status)],
                    "diteruskan_ke" => $unit,
                    "catatan" => fake()->realText(10),
                    "dari" => fake()->name(),
                ]);
            }
        }
    }
}
