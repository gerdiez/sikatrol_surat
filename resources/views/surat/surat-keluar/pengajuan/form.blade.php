<div class="grid grid-cols-7">
    <div class="mb-10 col-span-3 grid grid-cols-3">
        <label for="surat_dari" class="my-auto font-medium text-gray-900">Surat Dari</label>
        <input type="text" name="surat_dari" id="surat_dari"
            @if ($action == 'create') @if (Auth::user()->hasRole('unit'))
            value="{{ Auth::user()->name }}" class="my-auto font-medium text-gray-900 focus:outline-none" readonly
            @else
            value="{{ old('surat_dari') }}" class="bg-gray-50 border @error('surat_dari') border-red-600 @enderror col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" @endif
        @elseif ($action == 'edit') value="{{ $surats[0]->surat_dari }}"
            class="bg-gray-50 border @error('surat_dari') border-red-600 @enderror col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
        @elseif ($action == 'detail') class="bg-white" value="{{ $surats[0]->surat_dari }}" disabled
            @endif
        required>
        @error('surat_dari')
            <p class="col-start-2 col-end-4 mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-10 col-start-5 col-end-8 grid grid-cols-3">
        <label for="jenis_surat" class="my-auto font-medium text-gray-900">Jenis Surat</label>
        <input type="text" name="jenis_surat" id="jenis_surat"
            @if ($action == 'create' || $action == 'edit') class="bg-white focus:outline-none" value="Surat Keluar" readonly
            @elseif ($action == 'detail') class="bg-white" value="{{ $surats[0]->jenis_surat }}" disabled @endif
            required>
    </div>
    <div class="mb-10 col-span-3 grid grid-cols-3">
        <label for="no_surat" class="my-auto font-medium text-gray-900">No Surat</label>
        <input type="text" name="no_surat" id="no_surat"
            @if ($action == 'create') @if (Auth::user()->hasRole('tata')) value="{{ old('no_surat') }}" class="bg-gray-50 border @error('no_surat') border-red-600 @enderror col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" required @else value="" class="bg-white focus:outline-none" readonly @endif
        @elseif ($action == 'edit')
            @if (Auth::user()->hasRole('tata')) value="{{ $surats[0]->no_surat }}"
            class="bg-gray-50 border @error('no_surat') border-red-600 @enderror col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" required @else value="" class="bg-white focus:outline-none" readonly @endif
        required @elseif ($action == 'detail') class="bg-white" value="{{ $surats[0]->no_surat }}" disabled
            @endif
        >
        @error('no_surat')
            <p class="col-start-2 col-end-4 mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-10 col-start-5 col-end-8 grid grid-cols-3">
        <label for="tanggal_surat" class="my-auto font-medium text-gray-900">Tanggal Surat</label>
        <input type="date" name="tanggal_surat" id="tanggal_surat"
            @if ($action == 'create') value="{{ old('tanggal_surat') }}" class="bg-gray-50 border @error('tanggal_surat') border-red-600 @enderror col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
            @elseif ($action == 'edit') value="{{ $surats[0]->tanggal_surat }}" class="bg-gray-50 border @error('tanggal_surat') border-red-600 @enderror col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
            @elseif ($action == 'detail') class="bg-white" value="{{ $surats[0]->tanggal_surat }}" disabled @endif
            required>
        @error('tanggal_surat')
            <p class="col-start-2 col-end-4 mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-10 col-span-3 grid grid-cols-3">
        <label for="sifat" class="my-auto mb-2 text-sm font-medium text-gray-900">Sifat</label>
        <div class="col-span-2 relative">
            @if ($action == 'create')
                <select name="sifat" id="sifat" required
                    class="appearance-none bg-gray-50 border  @error('sifat') border-red-600 @enderror col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5">
                    <option selected disabled>Pilih...</option>
                    <option value="Sangat Segera">Sangat Segera</option>
                    <option value="Segera">Segera</option>
                    <option value="Biasa">Biasa</option>
                </select>
                <i class="absolute right-4 top-3 fa-solid fa-chevron-down ml-auto"></i>
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
            @elseif ($action == 'detail')
                <input class="bg-white" value="{{ $surats[0]->sifat }}" disabled />
            @endif
        </div>
        @error('sifat')
            <p class="col-start-2 col-end-4 mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-10 col-start-5 col-end-8 grid grid-cols-3">
        <label for="no_agenda" class="my-auto font-medium text-gray-900">No Agenda</label>
        <input type="text" name="no_agenda" id="no_agenda"
            @if ($action == 'create') @if (Auth::user()->hasRole('unit')) 
                class="bg-white focus:outline-none" readonly
            @else 
            value="{{ old('no_agenda') }}" class="bg-gray-50 border @error('no_agenda') border-red-600 @enderror col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" @endif
        @elseif ($action == 'edit')
            @if (Auth::user()->hasRole('unit')) class="bg-white focus:outline-none" readonly
            @else 
            value="{{ $surats[0]->no_agenda }}" class="bg-gray-50 border @error('no_agenda') border-red-600 @enderror col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" @endif
        @elseif ($action == 'detail') class="bg-white" value="{{ $surats[0]->no_agenda }}" disabled
            @endif
        >
        @error('no_agenda')
            <p class="col-start-2 col-end-4 mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-10 col-span-3 grid grid-cols-3">
        <label for="tanggal_kegiatan" class="my-auto font-medium text-gray-900">Tanggal Kegiatan</label>
        <input type="date" name="tanggal_kegiatan" id="tanggal_kegiatan"
            @if ($action == 'create') value="{{ old('tanggal_kegiatan') }}" class="bg-gray-50 border @error('tanggal_kegiatan') border-red-600 @enderror col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
            @elseif ($action == 'edit') value="{{ $surats[0]->tanggal_kegiatan }}" class="bg-gray-50 border @error('tanggal_kegiatan') border-red-600 @enderror col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
            @elseif ($action == 'detail') class="bg-white" value="{{ $surats[0]->tanggal_kegiatan }}" disabled @endif>
        @error('tanggal_kegiatan')
            <p class="col-start-2 col-end-4 mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-10 col-start-5 col-end-8 grid grid-cols-3">
        <label for="kategori" class="my-auto font-medium text-gray-900">Kategori</label>
        <input type="text" name="kategori" id="kategori"
            @if ($action == 'create') value="{{ old('kategori') }}" class="bg-gray-50 border @error('kategori') border-red-600 @enderror col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
            @elseif ($action == 'edit') value="{{ $surats[0]->kategori }}" class="bg-gray-50 border @error('kategori') border-red-600 @enderror col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
            @elseif ($action == 'detail') class="bg-white" value="{{ $surats[0]->kategori }}" disabled @endif
            required>
        @error('kategori')
            <p class="col-start-2 col-end-4 mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-10 col-start-1 col-end-8 grid grid-cols-8">
        <label for="perihal" class="my-auto font-medium text-gray-900">Perihal</label>
        <input type="text" name="perihal" id="perihal"
            @if ($action == 'create') value="{{ old('perihal') }}" class="bg-gray-50 ml-5 border @error('perihal') border-red-600 @enderror col-start-2 col-end-9 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
            @elseif ($action == 'edit') value="{{ $surats[0]->perihal }}" class="bg-gray-50 ml-5 border @error('perihal') border-red-600 @enderror col-start-2 col-end-9 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
            @elseif ($action == 'detail') class="bg-white ml-5" value="{{ $surats[0]->perihal }}" disabled @endif
            required>
        @error('perihal')
            <p class="col-start-2 col-end-9 ml-5 mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-10 col-start-1 col-end-8 grid grid-cols-7">
        <label for="file" class="my-auto font-medium text-gray-900">Upload</label>
        @if ($action == 'create')
            <input type="file" name="file" id="file" value="{{ old('file') }}"
                class="bg-gray-50 col-span-2 border @error('file') border-red-600 @enderror border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                required>
        @elseif ($action == 'edit')
            <a href="{{ asset('storage/' . $surats[0]->file) }}" target="_blank"
                class="col-start-2 col-end-4 my-2 text-blue-600 text-sm underline hover:brightness-50">{{ $surats[0]->file_name }}</a>
            <input type="hidden" name="oldFile" value="{{ $surats[0]->file }}">
            <input type="file" name="file" value=""
                class="col-start-2 col-end-4 bg-gray-50 col-span-2 border @error('file') border-red-600 @enderror border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5">
        @elseif($action == 'detail')
            <a href="{{ asset('storage/' . $surats[0]->file) }}" target="_blank"
                class="col-start-2 col-end-4 my-2 text-blue-600 text-sm underline hover:brightness-50">{{ $surats[0]->file_name }}</a>
        @endif
        @error('file')
            <p class="col-start-2 col-end-4 mt-2 text-xs text-red-600 font-medium">Maksimum File 2MB & Extension
                pdf,docx,xlsx,jpg,jpeg,png</p>
        @enderror
    </div>
    <div class="mb-10 col-span-3 grid grid-cols-3">
        <label for="diteruskan_ke" class="my-auto font-medium text-gray-900">Diteruskan Ke</label>
        @if ($action == 'create')
            <input name="diteruskan_ke" value="{{ old('diteruskan_ke') }}"
                class="bg-gray-50 col-start-2 col-end-9 border @error('diteruskan_ke') border-red-600 @enderror col-start-2 col-end-9 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                required />
        @elseif ($action == 'edit')
            <input name="diteruskan_ke" value="{{ $surats[0]->diteruskan_ke }}"
                class="bg-gray-50 col-start-2 col-end-9 border @error('diteruskan_ke') border-red-600 @enderror col-start-2 col-end-9 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                required />
        @elseif ($action == 'detail')
            <input class="bg-white" value="{{ $surats[0]->diteruskan_ke }}" disabled />
        @endif
    </div>
    <div class="mb-10 col-start-1 col-end-8 grid grid-cols-8">
        <label for="catatan" class="my-auto font-medium text-gray-900">Catatan</label>
        <input type="text" name="catatan" id="catatan"
            @if ($action == 'create') @if (Auth::user()->hasRole('unit'))
            class="bg-white focus:outline-none" readonly
            @else value="{{ old('catatan') }}" class="bg-gray-50 ml-5 border @error('catatan') border-red-600 @enderror col-start-2 col-end-9 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" required @endif
        @elseif ($action == 'edit')
            @if (Auth::user()->hasRole('unit')) class="bg-white focus:outline-none" readonly
        @else 
        value="{{ $surats[0]->catatan }}" class="bg-gray-50 ml-5 border @error('catatan') border-red-600 @enderror col-start-2 col-end-9 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" @endif
        @elseif ($action == 'detail') class="bg-white ml-5" value="{{ $surats[0]->catatan }}" disabled
            @endif>
        @error('catatan')
            <p class="col-start-2 col-end-4 mt-2 ml-5 text-xs text-red-600 font-medium">{{ $message }}</p>
        @enderror
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
