<div class="p-5 rounded-lg bg-white">
    <div class="flex justify-between items-center">
        <a href="{{ route('agenda.export') }}"
            class="text-white bg-gradient-to-r from-green-500 via-green-600 to-green-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
            Download Excel</a>
        <div class="relative w-96 flex">
            <div
                class="relative pl-10 text-gray-900 bg-gray-50 rounded-lg rounded-r-none border border-r-0 border-gray-300">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <select wire:model="category"
                    class="appearance-none text-sm text-gray-90 py-2 pr-8 bg-gray-50 focus:outline-none">
                    @foreach ($categories as $key => $category)
                        <option value="{{ $key }}">{{ $category }}</option>
                    @endforeach
                </select>
                <i class="absolute right-2 top-2 fa-solid fa-chevron-down ml-auto"></i>
            </div>
            <input type="text" wire:model="search"
                class="block p-2 text-sm text-gray-900 bg-gray-50 rounded-lg rounded-l-none border border-l-0 border-gray-300 focus:outline-none"
                placeholder="Cari Surat Masuk">
        </div>
    </div>
    {{-- <div class="flex justify-evenly">
    <div class="relative w-96 flex">
        <div
            class="relative pl-10 text-gray-900 bg-gray-50 rounded-lg rounded-r-none border border-r-0 border-gray-300">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>
        <input type="date" wire:model.debounce.300ms="start_date"
            value="{{ Carbon\Carbon::parse($start_date)->format('Y-m-d') }}"
            class="block p-2 text-sm text-gray-900 bg-gray-50 rounded-lg rounded-l-none border border-l-0 border-gray-300 focus:outline-none"
            placeholder="Tanggal Sekarang">
    </div>
    <div class="relative w-96 flex">
        <div
            class="relative pl-10 text-gray-900 bg-gray-50 rounded-lg rounded-r-none border border-r-0 border-gray-300">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>
        <input type="date" wire:model="end-date"
            class="block p-2 text-sm text-gray-900 bg-gray-50 rounded-lg rounded-l-none border border-l-0 border-gray-300 focus:outline-none"
            placeholder="Tanggal Sampai">
    </div>
</div> --}}
    @if (session()->has('create'))
        <div class="p-4 my-4 text-sm text-green-700 font-medium rounded-lg bg-green-50">
            {{ session('create') }}
        </div>
    @elseif (session()->has('edit'))
        <div class="p-4 my-4 text-sm text-orange-700 font-medium rounded-lg bg-orange-50">
            {{ session('edit') }}
        </div>
    @elseif (session()->has('delete'))
        <div class="p-4 my-4 text-sm text-red-700 font-medium rounded-lg bg-red-50">
            {{ session('delete') }}
        </div>
    @endif
    <div class="my-5 h-[68vh] overflow-auto">
        <table class="w-full text-sm border border-gray-200 text-left text-gray-500">
            <thead class="sticky top-[-1px] z-10 text-xs text-gray-700 uppercase bg-gray-50 text-center">
                <tr>
                    <th scope="col" class="p-4">
                        #
                    </th>
                    <th scope="col" class="py-3 px-6">
                        NO SURAT
                    </th>
                    <th scope="col" class="py-3 px-6">
                        SURAT DARI
                    </th>
                    <th scope="col" class="py-3 px-6">
                        KATEGORI
                    </th>
                    <th scope="col" class="py-3 px-6">
                        PERIHAL
                    </th>
                    <th scope="col" class="py-3 px-6">
                        SIFAT
                    </th>
                    <th scope="col" class="py-3 px-6">
                        TGL KEGIATAN
                    </th>
                    <th scope="col" class="py-3 px-6">
                        AKSI
                    </th>
                </tr>
            </thead>
            <tbody>
                @if (count($surats) == 0)
                    <tr class="bg-white border-b hover:bg-gray-50 text-center">
                        <td class="py-4 px-6" colspan="10">
                            Tidak ada data
                        </td>
                    </tr>
                @else
                    @foreach ($surats as $surat)
                        <tr class="bg-white border-b hover:bg-gray-50 text-center">
                            <td class="py-4 px-6">
                                {{ ($surats->currentPage() - 1) * $surats->perpage() + $loop->index + 1 }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $surat->no_surat }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $surat->surat_dari }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $surat->kategori }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $surat->perihal }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $surat->sifat }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $surat->tanggal_kegiatan }}
                            </td>
                            <td class="py-4">
                                <div class="tooltip static z-20 hover:relative" data-tip="Lihat">
                                    <a href={{ route('surat.tugas.show', $surat->id) }}
                                        class="mr-1 text-blue-600 hover:bg-blue-300 hover:rounded-md">
                                        <i class="fa-solid fa-eye rounded-md border border-blue-400 p-1"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
    {{ $surats->links('vendor.livewire.tailwind', ['options' => $options]) }}
</div>
