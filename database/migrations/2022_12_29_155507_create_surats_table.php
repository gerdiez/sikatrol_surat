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
            $table->string('jenis_surat');
            $table->string('no_surat')->nullable();
            $table->date('tanggal_surat');
            $table->string('sifat');
            $table->string('no_agenda');
            $table->date('tanggal_kegiatan')->nullable();
            $table->string('kategori');
            $table->string('perihal');
            $table->string('file');
            $table->string('file_name');
            $table->string('disposisi')->default('false');
            $table->string('status')->nullable();
            $table->string('diteruskan_ke')->nullable();
            $table->text('catatan')->nullable();
            $table->string('dari')->nullable();
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
