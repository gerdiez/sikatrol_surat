<div class="grid grid-cols-7">
    <div class="mb-10 col-span-3 grid grid-cols-3">
        <label for="" class="my-auto font-medium text-gray-900">Surat Dari</label>
        <input type="text" id="" name="surat_dari"
            @if ($action == 'create') class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
            @elseif ($action == 'detail') class="bg-white" value="{{ $surats[0]->surat_dari }}" disabled
            @elseif ($action == 'edit') class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" value="{{ $surats[0]->surat_dari }}" @endif
            required>
    </div>
    <div class="mb-10 col-start-5 col-end-8 grid grid-cols-3">
        <label for="" class="my-auto font-medium text-gray-900">Jenis Surat</label>
        <input type="text" id="" name="jenis_surat"
            @if ($action == 'create') class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
            @elseif ($action == 'detail') class="bg-white" value="{{ $surats[0]->jenis_surat }}" disabled
            @elseif ($action == 'edit') class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" value="{{ $surats[0]->jenis_surat }}" @endif
            required>
    </div>
    <div class="mb-10 col-span-3 grid grid-cols-3">
        <label for="" class="my-auto font-medium text-gray-900">No Surat</label>
        <input type="text" id="" name="no_surat"
            @if ($action == 'create') class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
            @elseif ($action == 'detail') class="bg-white" value="{{ $surats[0]->no_surat }}" disabled
            @elseif ($action == 'edit') class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" value="{{ $surats[0]->no_surat }}" @endif
            required>
    </div>
    <div class="mb-10 col-start-5 col-end-8 grid grid-cols-3">
        <label for="" class="my-auto font-medium text-gray-900">Tanggal Surat</label>
        <input type="date" id="" name="tanggal_surat"
            @if ($action == 'create') class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
            @elseif ($action == 'detail') class="bg-white" value="{{ $surats[0]->tanggal_surat }}" disabled
            @elseif ($action == 'edit') class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" value="{{ $surats[0]->tanggal_surat }}" @endif
            required>
    </div>
    <div class="mb-10 col-span-3 grid grid-cols-3">
        <label for="countries" class="my-auto mb-2 text-sm font-medium text-gray-900">Sifat</label>
        <div class="col-span-2 relative">
            @if ($action == 'create')
                <select id="" name="sifat"
                    class="appearance-none bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5">
                    <option value="" disabled>Pilih...</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                </select>
                <i class="absolute right-4 top-3 fa-solid fa-chevron-down ml-auto"></i>
            @elseif ($action == 'detail')
                <input class="bg-white" value="{{ $surats[0]->sifat }}" disabled />
            @elseif ($action == 'edit')
                <select id="" name="sifat"
                    class="appearance-none bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5">
                    <option selected value="{{ $surats[0]->sifat }}">{{ $surats[0]->sifat }}</option>
                    <option value="" disabled>Pilih...</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                </select>
                <i class="absolute right-4 top-3 fa-solid fa-chevron-down ml-auto"></i>
            @endif
        </div>
    </div>
    <div class="mb-10 col-start-5 col-end-8 grid grid-cols-3">
        <label for="" class="my-auto font-medium text-gray-900">No Agenda</label>
        <input type="text" id="" name="no_agenda"
            @if ($action == 'create') class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
            @elseif ($action == 'detail') class="bg-white" value="{{ $surats[0]->no_agenda }}" disabled
            @elseif ($action == 'edit') class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" value="{{ $surats[0]->no_agenda }}" @endif
            required>
    </div>
    <div class="mb-10 col-span-3 grid grid-cols-3">
        <label for="email" class="my-auto font-medium text-gray-900">Tanggal Kegiatan</label>
        <input type="date" id="" name="tanggal_kegiatan"
            @if ($action == 'create') class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
            @elseif ($action == 'detail') class="bg-white" value="{{ $surats[0]->tanggal_kegiatan }}" disabled
            @elseif ($action == 'edit') class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" value="{{ $surats[0]->tanggal_kegiatan }}" @endif
            required>
    </div>
    <div class="mb-10 col-start-5 col-end-8 grid grid-cols-3">
        <label for="" class="my-auto font-medium text-gray-900">Kategori</label>
        <input type="text" id="" name="kategori"
            @if ($action == 'create') class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
            @elseif ($action == 'detail') class="bg-white" value="{{ $surats[0]->kategori }}" disabled
            @elseif ($action == 'edit') class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" value="{{ $surats[0]->kategori }}" @endif
            required>
    </div>
    <div class="mb-10 col-start-1 col-end-8 grid grid-cols-8">
        <label for="" class="my-auto font-medium text-gray-900">Perihal</label>
        <input type="date" id="" name="waktu_diterima"
            @if ($action == 'create') class="bg-gray-50 ml-5 border col-start-2 col-end-9 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
            @elseif ($action == 'detail') class="bg-white ml-5" value="{{ $surats[0]->waktu_diterima }}" disabled
            @elseif ($action == 'edit') class="bg-gray-50 ml-5 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" value="{{ $surats[0]->waktu_diterima }}" @endif
            required>
    </div>
    <div class="mb-10 col-start-1 col-end-8 grid grid-cols-8">
        <label for="" class="my-auto font-medium text-gray-900">Upload</label>
        <input type="text" id="" name="file"
            @if ($action == 'create') class="bg-gray-50 ml-5 border col-start-2 col-end-9 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
            @elseif ($action == 'detail') class="bg-white ml-5" value="{{ $surats[0]->file }}" disabled
            @elseif ($action == 'edit') class="bg-gray-50 ml-5 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" value="{{ $surats[0]->file }}" @endif
            required>
    </div>
    <div class="mb-10 col-span-3 grid grid-cols-3">
        <label for="email" class="my-auto font-medium text-gray-900">Diteruskan Ke</label>
        <input type="text" id="" name="diteruskan_ke"
            @if ($action == 'create') class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
            @elseif ($action == 'detail') class="bg-white" value="{{ $surats[0]->diteruskan_ke }}" disabled
            @elseif ($action == 'edit') class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" value="{{ $surats[0]->diteruskan_ke }}" @endif
            required>
    </div>
    <div class="mb-10 col-start-1 col-end-8 grid grid-cols-8">
        <label for="" class="my-auto font-medium text-gray-900">Catatan</label>
        <input type="text" id="" name="catatan"
            @if ($action == 'create') class="bg-gray-50 ml-5 border col-start-2 col-end-9 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
            @elseif ($action == 'detail') class="bg-white ml-5" value="{{ $surats[0]->catatan }}" disabled
            @elseif ($action == 'edit') class="bg-gray-50 ml-5 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" value="{{ $surats[0]->catatan }}" @endif
            required>
    </div>
    <div class="mb-10 col-span-3 grid grid-cols-3">
        <label for="email" class="my-auto font-medium text-gray-900">Dari</label>
        <input type="text" id="" name="dari"
            @if ($action == 'create') class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
            @elseif ($action == 'detail') class="bg-white" value="{{ $surats[0]->dari }}" disabled
            @elseif ($action == 'edit') class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5" value="{{ $surats[0]->dari }}" @endif
            required>
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
