<div class="grid grid-cols-7">
    <div class="mb-10 col-span-3 grid grid-cols-3">
        <label for="" class="my-auto font-medium text-gray-900">Surat Dari</label>
        <input type="text" name="surat_dari"
            @if ($action == 'create') class="bg-gray-50 border  @error('surat_dari') border-red-600 @enderror col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
            @elseif ($action == 'detail') class="bg-white" value="{{ $surats[0]->surat_dari }}" disabled @endif
            required>
        @error('surat_dari')
            <p class="col-start-2 col-end-4 mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-10 col-start-5 col-end-8 grid grid-cols-3">
        <label for="" class="my-auto font-medium text-gray-900">Jenis Surat</label>
        <input type="text" name="jenis_surat"
            @if ($action == 'create') class="bg-white focus:outline-none" value="Surat Masuk" readonly="readonly"
            @elseif ($action == 'detail') class="bg-white" value="{{ $surats[0]->jenis_surat }}" disabled @endif
            required>
    </div>
    <div class="mb-10 col-span-3 grid grid-cols-3">
        <label for="" class="my-auto font-medium text-gray-900">No Surat</label>
        <input type="text" name="no_surat"
            @if ($action == 'create') class="bg-gray-50 border  @error('no_surat') border-red-600 @enderror col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
            @elseif ($action == 'detail') class="bg-white" value="{{ $surats[0]->no_surat }}" disabled @endif
            required>
        @error('no_surat')
            <p class="col-start-2 col-end-4 mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-10 col-start-5 col-end-8 grid grid-cols-3">
        <label for="" class="my-auto font-medium text-gray-900">Tanggal Surat</label>
        <input type="date" name="tanggal_surat"
            @if ($action == 'create') class="bg-gray-50 border  @error('tanggal_surat') border-red-600 @enderror col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
            @elseif ($action == 'detail') class="bg-white" value="{{ $surats[0]->tanggal_surat }}" disabled @endif
            required>
        @error('tanggal_surat')
            <p class="col-start-2 col-end-4 mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-10 col-span-3 grid grid-cols-3">
        <label for="countries" class="my-auto mb-2 text-sm font-medium text-gray-900">Sifat</label>
        <div class="col-span-2 relative">
            @if ($action == 'create')
                <select name="sifat" required
                    class="appearance-none bg-gray-50 border  @error('sifat') border-red-600 @enderror col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5">
                    <option selected disabled>Pilih...</option>
                    <option value="Sangat Segera">Sangat Segera</option>
                    <option value="Segera">Segera</option>
                    <option value="Biasa">Biasa</option>
                </select>
                <i class="absolute right-4 top-3 fa-solid fa-chevron-down ml-auto"></i>
            @elseif ($action == 'detail')
                <input class="bg-white" value="{{ $surats[0]->sifat }}" disabled />
            @endif
        </div>
        @error('sifat')
            <p class="col-start-2 col-end-4 mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-10 col-start-5 col-end-8 grid grid-cols-3">
        <label for="" class="my-auto font-medium text-gray-900">No Agenda</label>
        <input type="text" name="no_agenda"
            @if ($action == 'create') class="bg-gray-50 border  @error('no_agenda') border-red-600 @enderror col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
            @elseif ($action == 'detail') class="bg-white" value="{{ $surats[0]->no_agenda }}" disabled @endif
            required>
        @error('no_agenda')
            <p class="col-start-2 col-end-4 mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-10 col-span-3 grid grid-cols-3">
        <label for="email" class="my-auto font-medium text-gray-900">Tanggal Kegiatan</label>
        <input type="date" name="tanggal_kegiatan"
            @if ($action == 'create') class="bg-gray-50 border  @error('tanggal_kegiatan') border-red-600 @enderror col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
            @elseif ($action == 'detail') class="bg-white" value="{{ $surats[0]->tanggal_kegiatan }}" disabled @endif
            required>
        @error('tanggal_kegiatan')
            <p class="col-start-2 col-end-4 mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-10 col-start-5 col-end-8 grid grid-cols-3">
        <label for="" class="my-auto font-medium text-gray-900">Kategori</label>
        <input type="text" name="kategori"
            @if ($action == 'create') class="bg-gray-50 border  @error('kategori') border-red-600 @enderror col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
            @elseif ($action == 'detail') class="bg-white" value="{{ $surats[0]->kategori }}" disabled @endif
            required>
        @error('kategori')
            <p class="col-start-2 col-end-4 mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-10 col-start-1 col-end-8 grid grid-cols-8">
        <label for="" class="my-auto font-medium text-gray-900">Perihal</label>
        <input type="text" name="perihal"
            @if ($action == 'create') class="bg-gray-50 ml-5 border  @error('perihal') border-red-600 @enderror col-start-2 col-end-9 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
            @elseif ($action == 'detail') class="bg-white ml-5" value="{{ $surats[0]->perihal }}" disabled @endif
            required>
        @error('perihal')
            <p class="col-start-2 col-end-9 ml-5 mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-10 col-span-3 grid grid-cols-3">
        <label for="" class="my-auto font-medium text-gray-900">Upload</label>
        @if ($action == 'create')
            <input type="file" name="file"
                class="bg-gray-50 col-span-2 border @error('file') border-red-600 @enderror border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                required>
            @error('file')
                <p class="col-start-2 col-end-4 mt-2 text-xs text-red-600 font-medium">Maksimum File 2MB & Extension
                    csv,txt,xlx,xls & pdf</p>
            @enderror
        @elseif($action == 'detail')
            <a href="{{ asset('storage/' . $surats[0]->file) }}" target="_blank"
                class="col-start-2 col-end-4 my-2 text-blue-600 text-sm underline hover:brightness-50">{{ $surats[0]->file_name }}</a>
        @endif
    </div>
    <div class="mb-10 col-start-5 col-end-8">
        <div class="flex items-center mt-2" x-data="{ disposisi: false }">
            <input id="checked-checkbox" type="checkbox" name="disposisi" value="true"
                x-on:click="disposisi = !disposisi; $dispatch('disposisi')"
                class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500"
                @if ($action == 'detail') disable @endif>
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
<div x-data="{ disposisi: false }" @disposisi.window="disposisi=!disposisi">
    <div class="grid grid-cols-7" x-show="disposisi">
        <div class="mb-10 col-span-3 grid grid-cols-3">
            <label for="email" class="my-auto font-medium text-gray-900">Diteruskan Ke</label>
            <input type="text" name="diteruskan_ke"
                @if ($action == 'create') class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                    @elseif ($action == 'detail') class="bg-white" value="{{ $surats[0]->diteruskan_ke }}" disabled @endif>
        </div>
        <div class="mb-10 col-start-1 col-end-8 grid grid-cols-8">
            <label for="" class="my-auto font-medium text-gray-900">Catatan</label>
            <input type="text" name="catatan"
                @if ($action == 'create') class="bg-gray-50 ml-5 border col-start-2 col-end-9 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                    @elseif ($action == 'detail') class="bg-white ml-5" value="{{ $surats[0]->catatan }}" disabled @endif>
        </div>
        <div class="mb-10 col-span-3 grid grid-cols-3">
            <label for="email" class="my-auto font-medium text-gray-900">Dari</label>
            <input type="text" name="dari"
                @if ($action == 'create') class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                    @elseif ($action == 'detail') class="bg-white" value="{{ $surats[0]->dari }}" disabled @endif>
        </div>
    </div>
</div>
@if ($action != 'detail')
    <button type="submit"
        class="flex ml-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
        @if ($action == 'create')
            Kirim Surat
        @else
            Ubah Surat
        @endif
    </button>
@endif
