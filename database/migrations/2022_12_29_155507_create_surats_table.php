<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surats', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('surat_dari');
            $table->string('no_surat');
            $table->string('sifat');
            $table->string('jenis_surat');
            $table->date('tanggal_surat');
            $table->date('waktu_diterima');
            $table->string('no_agenda');
            $table->string('kategori');
            $table->date('tanggal_kegiatan');
            $table->string('file');
            $table->string('diteruskan_ke');
            $table->text('catatan');
            $table->string('dari');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surats');
    }
};
