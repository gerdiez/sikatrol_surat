<div class="grid grid-cols-7">
    <div class="mb-10 col-span-3 grid grid-cols-3">
        <label for="" class="my-auto font-medium text-gray-900">Surat Dari</label>
        <input type="text" id="" name="surat_dari" class="bg-white" value="{{ $surats[0]->surat_dari }}" disabled
            required>
    </div>
    <div class="mb-10 col-start-5 col-end-8 grid grid-cols-3">
        <label for="" class="my-auto font-medium text-gray-900">Jenis Surat</label>
        <input type="text" id="" name="jenis_surat" class="bg-white" value="{{ $surats[0]->jenis_surat }}"
            disabled required>
    </div>
    <div class="mb-10 col-span-3 grid grid-cols-3">
        <label for="" class="my-auto font-medium text-gray-900">No Surat</label>
        <input type="text" id="" name="no_surat" class="bg-white" value="{{ $surats[0]->no_surat }}"
            disabled required>
    </div>
    <div class="mb-10 col-start-5 col-end-8 grid grid-cols-3">
        <label for="" class="my-auto font-medium text-gray-900">Tanggal Surat</label>
        <input type="date" id="" name="tanggal_surat" class="bg-white"
            value="{{ $surats[0]->tanggal_surat }}" disabled required>
    </div>
    <div class="mb-10 col-span-3 grid grid-cols-3">
        <label for="countries" class="my-auto mb-2 text-sm font-medium text-gray-900">Sifat</label>
        <div class="col-span-2 relative">
            <input class="bg-white" value="{{ $surats[0]->sifat }}" disabled />
        </div>
    </div>
    <div class="mb-10 col-start-5 col-end-8 grid grid-cols-3">
        <label for="" class="my-auto font-medium text-gray-900">No Agenda</label>
        <input type="text" id="" name="no_agenda" class="bg-white" value="{{ $surats[0]->no_agenda }}"
            disabled required>
    </div>
    <div class="mb-10 col-span-3 grid grid-cols-3">
        <label for="email" class="my-auto font-medium text-gray-900">Tanggal Kegiatan</label>
        <input type="date" id="" name="tanggal_kegiatan" class="bg-white"
            value="{{ $surats[0]->tanggal_kegiatan }}" disabled>
    </div>
    <div class="mb-10 col-start-5 col-end-8 grid grid-cols-3">
        <label for="" class="my-auto font-medium text-gray-900">Kategori</label>
        <input type="text" id="" name="kategori" class="bg-white" value="{{ $surats[0]->kategori }}"
            disabled required>
    </div>
    <div class="mb-10 col-start-1 col-end-8 grid grid-cols-8">
        <label for="" class="my-auto font-medium text-gray-900">Perihal</label>
        <input type="text" id="" name="perihal" class="bg-white ml-5" value="{{ $surats[0]->perihal }}"
            disabled required>
    </div>
    <div class="mb-10 col-span-3 grid grid-cols-3">
        <label for="" class="my-auto font-medium text-gray-900">Upload</label>
        <a href="{{ asset('storage/' . $surats[0]->file) }}" target="_blank"
            class="col-start-2 col-end-4 my-2 text-blue-600 text-sm underline hover:brightness-50">{{ $surats[0]->file_name }}</a>
    </div>
    @if ($surats[0]->jenis_surat == 'Surat Masuk' && $surats[0]->disposisi == 'true')
        <div class="mb-10 col-start-5 col-end-8">
            <div class="flex items-center mt-2" x-data="{ disposisi: true }">
                <input checked id="checked-checkbox" type="checkbox" name="disposisi"
                    class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500" disabled>
                <div x-show="!disposisi">
                    <label for="checked-checkbox" class="ml-4 font-medium text-gray-900">Belum
                        Disposisi</label>
                </div>
                <div x-show="disposisi">
                    <label for="checked-checkbox" class="ml-4 font-medium text-gray-900">Sudah
                        Disposisi</label>
                </div>
            </div>
        </div>
    @elseif ($surats[0]->jenis_surat == 'Surat Masuk' && $surats[0]->disposisi == 'false')
        <div class="mb-10 col-start-5 col-end-8">
            <div class="flex items-center mt-2" x-data="{ disposisi: false }">
                <input id="checked-checkbox" type="checkbox" name="disposisi"
                    class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500" disabled>
                <div x-show="!disposisi">
                    <label for="checked-checkbox" class="ml-4 font-medium text-gray-900">Belum
                        Disposisi</label>
                </div>
                <div x-show="disposisi">
                    <label for="checked-checkbox" class="ml-4 font-medium text-gray-900">Sudah
                        Disposisi</label>
                </div>
            </div>
        </div>
    @endif
</div>
@if ($surats[0]->jenis_surat == 'Surat Masuk' && $surats[0]->disposisi == 'true')
    <div x-data="{ disposisi: true }" @disposisi.window="disposisi=!disposisi">
    @elseif ($surats[0]->jenis_surat == 'Surat Masuk' && $surats[0]->disposisi == 'false')
        <div x-data="{ disposisi: false }" @disposisi.window="disposisi=!disposisi">
@endif
<div class="grid grid-cols-7" x-show="disposisi">
    <div class="mb-10 col-span-3 grid grid-cols-3">
        <label for="email" class="my-auto font-medium text-gray-900">Diteruskan Ke</label>
        <input class="bg-white" value="{{ $surats[0]->diteruskan_ke }}" disabled />
    </div>
    <div class="mb-10 col-start-1 col-end-8 grid grid-cols-8">
        <label for="" class="my-auto font-medium text-gray-900">Catatan</label>
        <input type="text" id="" name="catatan" class="bg-white ml-5"
            value="{{ $surats[0]->catatan }}" disabled>
    </div>
    <div class="mb-10 col-span-3 grid grid-cols-3">
        <label for="email" class="my-auto font-medium text-gray-900">Dari</label>
        <input type="text" id="" name="dari"class="bg-white" value="{{ $surats[0]->dari }}"
            disabled>
    </div>
</div>
</div>
