<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Surat>
 */
class SuratFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'surat_dari' => fake()->name(),
            'jenis_surat' => 'Surat Masuk',
            'no_surat' => fake()->phoneNumber(),
            'tanggal_surat' => fake()->dateTime(),
            'sifat' => 'Segera',
            'no_agenda' => fake()->buildingNumber(),
            'tanggal_kegiatan' => fake()->dateTime(),
            'kategori' => fake()->streetName(),
            'perihal' => fake()->realText(20),
            'file' => fake()->mimeType(),
            'file_name' => 'Menulis.docx',
            'disposisi' => 'false',
            'diteruskan_ke' => 'Umpeg',
            'catatan' => fake()->realText(10),
            'dari' => fake()->name(),
        ];
    }
}
