<div class="p-5 rounded-lg bg-white">
    <div class="flex justify-between items-center">
        <a href="{{ route('agenda.show', 'export') }}"
            class="text-white bg-gradient-to-r from-yellow-500 via-yellow-600 to-yellow-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
            Download Excel</a>
        <div class="flex gap-5">
            <div class="relative flex">
                <div
                    class="relative pl-20 text-gray-900 bg-gray-50 rounded-lg rounded-r-none border border-r-0 border-gray-300">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <p class="text-sm pl-3">From</p>
                    </div>
                </div>
                <input type="date" wire:model="start_date"
                    class="block p-2 text-sm text-gray-900 bg-gray-50 rounded-lg rounded-l-none border border-l-0 border-gray-300 focus:outline-none"
                    placeholder="Tanggal Sekarang">
            </div>
            <div class="relative flex">
                <div
                    class="relative pl-16 text-gray-900 bg-gray-50 rounded-lg rounded-r-none border border-r-0 border-gray-300">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <p class="text-sm pl-4">To</p>
                    </div>
                </div>
                <input type="date" wire:model.debounce.300ms="end_date"
                    class="block p-2 text-sm text-gray-900 bg-gray-50 rounded-lg rounded-l-none border border-l-0 border-gray-300 focus:outline-none"
                    placeholder="Tanggal Sampai">
            </div>
            <button wire:click="clear"
                class="inline-flex items-center text-gray-500 bg-gray-50 border border-gray-300 focus:outline-none hover:bg-white focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5"
                type="button">
                Clear
            </button>
        </div>
    </div>
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
                    <th scope="col" class="py-3 px-6">
                        JENIS SURAT
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
                                    <a href={{ route('agenda.show', $surat->id) }}
                                        class="mr-1 text-blue-600 hover:bg-blue-300 hover:rounded-md">
                                        <i class="fa-solid fa-eye rounded-md border border-blue-400 p-1"></i>
                                    </a>
                                </div>
                            </td>
                            <td class="py-4 px-6">
                                {{ $surat->jenis_surat }}
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
    {{ $surats->links('vendor.livewire.tailwind', ['options' => $options]) }}
</div>
