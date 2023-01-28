<div class="grid grid-cols-7">
    <div class="mb-10 col-span-3 grid grid-cols-3">
        <label for="" class="my-auto font-medium text-gray-900">Surat Dari</label>
        <input type="text" id="" name="surat_dari"
            @if ($action == 'detail') class="bg-white" value="{{ $surats[0]->surat_dari }}" disabled
            @elseif ($action == 'edit') class="bg-gray-50 border @error('surat_dari') border-red-600 @enderror  col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" value="{{ $surats[0]->surat_dari }}" @endif
            required>
        @error('surat_dari')
            <p class="col-start-2 col-end-4 mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-10 col-start-5 col-end-8 grid grid-cols-3">
        <label for="" class="my-auto font-medium text-gray-900">Jenis Surat</label>
        <input type="text" id="" name="jenis_surat"
            @if ($action == 'detail') class="bg-white" value="{{ $surats[0]->jenis_surat }}" disabled
            @elseif ($action == 'edit') class="bg-gray-50 border @error('jenis_surat') border-red-600 @enderror  col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" value="{{ $surats[0]->jenis_surat }}" @endif
            required>
    </div>
    <div class="mb-10 col-span-3 grid grid-cols-3">
        <label for="" class="my-auto font-medium text-gray-900">No Surat</label>
        <input type="text" id="" name="no_surat"
            @if ($action == 'detail') class="bg-white" value="{{ $surats[0]->no_surat }}" disabled
            @elseif ($action == 'edit') class="bg-gray-50 border @error('no_surat') border-red-600 @enderror  col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" value="{{ $surats[0]->no_surat }}" @endif
            required>
        @error('no_surat')
            <p class="col-start-2 col-end-4 mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-10 col-start-5 col-end-8 grid grid-cols-3">
        <label for="" class="my-auto font-medium text-gray-900">Tanggal Surat</label>
        <input type="date" id="" name="tanggal_surat"
            @if ($action == 'detail') class="bg-white" value="{{ $surats[0]->tanggal_surat }}" disabled
            @elseif ($action == 'edit') class="bg-gray-50 border @error('tanggal_surat') border-red-600 @enderror  col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" value="{{ $surats[0]->tanggal_surat }}" @endif
            required>
        @error('tanggal_surat')
            <p class="col-start-2 col-end-4 mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-10 col-span-3 grid grid-cols-3">
        <label for="countries" class="my-auto mb-2 text-sm font-medium text-gray-900">Sifat</label>
        <div class="col-span-2 relative">
            @if ($action == 'detail')
                <input class="bg-white" value="{{ $surats[0]->sifat }}" disabled />
            @elseif ($action == 'edit')
                <select id="" name="sifat" required
                    class="appearance-none bg-gray-50 border @error('sifat') border-red-600 @enderror  col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5">
                    @if ($surats[0]->sifat == 'Sangat Segera')
                        <option selected value="Sangat Segera">Sangat Segera</option>
                        <option value="Segera">Segera</option>
                        <option value="Biasa">Biasa</option>
                    @elseif ($surats[0]->sifat == 'Segera')
                        <option value="Sangat Segera">Sangat Segera</option>
                        <option selected value="Segera">Segera</option>
                        <option value="Biasa">Biasa</option>
                    @elseif ($surats[0]->sifat == 'Biasa')
                        <option value="Sangat Segera">Sangat Segera</option>
                        <option value="Segera">Segera</option>
                        <option selected value="Biasa">Biasa</option>
                    @endif
                </select>
                <i class="absolute right-4 top-3 fa-solid fa-chevron-down ml-auto"></i>
            @endif
            @error('sifat')
                <p class="col-start-2 col-end-4 mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="mb-10 col-start-5 col-end-8 grid grid-cols-3">
        <label for="" class="my-auto font-medium text-gray-900">No Agenda</label>
        <input type="text" id="" name="no_agenda"
            @if ($action == 'detail') class="bg-white" value="{{ $surats[0]->no_agenda }}" disabled
            @elseif ($action == 'edit') class="bg-gray-50 border @error('no_agenda') border-red-600 @enderror  col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" value="{{ $surats[0]->no_agenda }}" @endif
            required>
        @error('no_agenda')
            <p class="col-start-2 col-end-4 mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-10 col-span-3 grid grid-cols-3">
        <label for="email" class="my-auto font-medium text-gray-900">Tanggal Kegiatan</label>
        <input type="date" id="" name="tanggal_kegiatan"
            @if ($action == 'detail') class="bg-white" value="{{ $surats[0]->tanggal_kegiatan }}" disabled
            @elseif ($action == 'edit') class="bg-gray-50 border @error('tanggal_kegiatan') border-red-600 @enderror  col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" value="{{ $surats[0]->tanggal_kegiatan }}" @endif>
        @error('tanggal_kegiatan')
            <p class="col-start-2 col-end-4 mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-10 col-start-5 col-end-8 grid grid-cols-3">
        <label for="" class="my-auto font-medium text-gray-900">Kategori</label>
        <input type="text" id="" name="kategori"
            @if ($action == 'detail') class="bg-white" value="{{ $surats[0]->kategori }}" disabled
            @elseif ($action == 'edit') class="bg-gray-50 border @error('kategori') border-red-600 @enderror  col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" value="{{ $surats[0]->kategori }}" @endif
            required>
        @error('kategori')
            <p class="col-start-2 col-end-4 mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-10 col-start-1 col-end-8 grid grid-cols-8">
        <label for="" class="my-auto font-medium text-gray-900">Perihal</label>
        <input type="text" id="" name="perihal"
            @if ($action == 'detail') class="bg-white ml-5" value="{{ $surats[0]->perihal }}" disabled
            @elseif ($action == 'edit') class="bg-gray-50 ml-5 border @error('perihal') border-red-600 @enderror   col-start-2 col-end-9 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" value="{{ $surats[0]->perihal }}" @endif
            required>
        @error('perihal')
            <p class="col-start-2 col-end-4 mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-10 col-span-3 grid grid-cols-3">
        <label for="" class="my-auto font-medium text-gray-900">Upload</label>
        @if ($action == 'detail')
            <a href="{{ asset('storage/' . $surats[0]->file) }}" target="_blank"
                class="col-start-2 col-end-4 my-2 text-blue-600 text-sm underline hover:brightness-50">{{ $surats[0]->file_name }}</a>
        @elseif ($action == 'edit')
            <a href="{{ asset('storage/' . $surats[0]->file) }}" target="_blank"
                class="col-start-2 col-end-4 my-2 text-blue-600 text-sm underline hover:brightness-50">{{ $surats[0]->file_name }}</a>
            <input type="hidden" name="oldFile" value="{{ $surats[0]->file }}">
            <input type="file" name="file" value="{{ $surats[0]->file }}"
                class="col-start-2 col-end-4 bg-gray-50 col-span-2 border @error('file') border-red-600 @enderror  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5">
            @error('file')
                <p class="col-start-2 col-end-4 mt-2 text-xs text-red-600 font-medium">Maksimum File 2MB & Extension
                    pdf,docx,xlsx,jpg,jpeg,png</p>
            @enderror
        @endif
    </div>
    <div class="mb-10 col-start-5 col-end-8">
        <div class="flex items-center mt-2" x-data="{ disposisi: true }">
            <input checked id="checked-checkbox" type="checkbox" name="disposisi" value="true"
                x-on:click="disposisi = !disposisi; $dispatch('disposisi')"
                class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                @if ($action == 'detail') disabled @endif>
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
</div>
<div x-data="{ disposisi: true }" @disposisi.window="disposisi=!disposisi">
    <div class="grid grid-cols-7" x-show="disposisi">
        <div class="mb-10 col-span-3 grid grid-cols-3">
            <label for="email" class="my-auto font-medium text-gray-900">Diteruskan Ke</label>
            <input type="text" id="" name="diteruskan_ke"
                @if ($action == 'detail') class="bg-white" value="{{ $surats[0]->diteruskan_ke }}" disabled
                    @elseif ($action == 'edit') class="bg-gray-50 border @error('diteruskan_ke') border-red-600 @enderror col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" value="{{ $surats[0]->diteruskan_ke }}" @endif>
            @error('diteruskan_ke')
                <p class="col-start-2 col-end-4 mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-10 col-start-1 col-end-8 grid grid-cols-8">
            <label for="" class="my-auto font-medium text-gray-900">Catatan</label>
            <input type="text" id="" name="catatan"
                @if ($action == 'detail') class="bg-white ml-5" value="{{ $surats[0]->catatan }}" disabled
                    @elseif ($action == 'edit') class="bg-gray-50 ml-5 border @error('catatan') border-red-600 @enderror col-start-2 col-end-9 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" value="{{ $surats[0]->catatan }}" @endif>
            @error('catatan')
                <p class="col-start-2 col-end-4 mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-10 col-span-3 grid grid-cols-3">
            <label for="email" class="my-auto font-medium text-gray-900">Dari</label>
            <input type="text" id="" name="dari"
                @if ($action == 'detail') class="bg-white" value="{{ $surats[0]->dari }}" disabled
                    @elseif ($action == 'edit') class="bg-gray-50 border @error('dari') border-red-600 @enderror col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" value="{{ $surats[0]->dari }}" @endif>
            @error('dari')
                <p class="col-start-2 col-end-4 mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
            @enderror
        </div>
    </div>
</div>
@if ($action != 'detail')
    <button type="submit"
        class="flex ml-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
        Ubah Surat
    </button>
@endif
