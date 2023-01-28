@extends('layouts.main')

@section('name')
    <h1 class="text-gray-600 font-bold text-2xl">SURAT MASUK SUDAH DISPOSISI</h1>
@endsection

@section('content')
    <div class="p-5 rounded-lg bg-white">
        <div class="flex justify-end items-center">
            <form action="{{ route('surat.masuk.sudah') }}" method="get">
                <div class="relative w-96 flex">
                    <div
                        class="relative pl-10 text-gray-900 bg-gray-50 rounded-lg rounded-r-none border border-r-0 border-gray-300">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <select name="category"
                            class="appearance-none text-sm text-gray-90 py-2 pr-8 bg-gray-50 focus:outline-none">
                            @foreach ($categories as $key => $category)
                                @if (request('category') == $key)
                                    <option selected value="{{ $key }}">{{ $category }}</option>
                                @else
                                    <option value="{{ $key }}">{{ $category }}</option>
                                @endif
                            @endforeach
                        </select>
                        <i class="absolute right-2 top-2 fa-solid fa-chevron-down ml-auto"></i>
                    </div>
                    <input type="text" name="search"
                        class="block p-2 text-sm text-gray-900 bg-gray-50 rounded-lg rounded-l-none border border-l-0 border-gray-300 focus:outline-none"
                        value="{{ request('search') }}" placeholder="Cari Surat Masuk">
                </div>
            </form>
        </div>
        @if (session()->has('create'))
            <div class="p-4 mb-4 text-sm text-green-700 font-medium rounded-lg bg-green-50">
                {{ session('create') }}
            </div>
        @elseif (session()->has('edit'))
            <div class="p-4 mb-4 text-sm text-orange-700 font-medium rounded-lg bg-orange-50">
                {{ session('edit') }}
            </div>
        @elseif (session()->has('delete'))
            <div class="p-4 mb-4 text-sm text-red-700 font-medium rounded-lg bg-red-50">
                {{ session('delete') }}
            </div>
        @endif
        <div class="my-5 h-[70vh]">
            <table class="w-full text-sm border border-gray-200 text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 text-center">
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
                            DITERUSKAN KE
                        </th>
                        <th scope="col" class="py-3 px-6">
                            AKSI
                        </th>
                        <th scope="col" class="py-3 px-6">
                            STATUS
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
                                    {{ $loop->iteration }}
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
                                <td class="py-4 px-6">
                                    {{ $surat->diteruskan_ke }}
                                </td>
                                <td class="py-4">
                                    <div class="tooltip static hover:relative" data-tip="Lihat">
                                        <a href={{ route('surat.masuk.sudah.show', $surat->id) }}
                                            class="mr-1 text-blue-600 hover:bg-blue-300 hover:rounded-md">
                                            <i class="fa-solid fa-eye rounded-md border border-blue-400 p-1"></i>
                                        </a>
                                    </div>
                                    @canany(['tata usaha', 'sekretaris'])
                                        <div class="tooltip static hover:relative" data-tip="Ubah">
                                            <a href={{ route('surat.masuk.sudah.edit', $surat->id) }}
                                                class="mr-1 text-orange-600 hover:bg-orange-300 hover:rounded-md">
                                                <i
                                                    class="fa-solid fa-pen-to-square rounded-md border border-orange-400 p-1"></i>
                                            </a>
                                        </div>
                                    @endcanany
                                    @can('tata usaha')
                                        <div class="tooltip static hover:relative" data-tip="Hapus">
                                            <label for="delete{{ $surat->id }}"
                                                class="mr-1 text-red-600 hover:bg-red-300 hover:rounded-md">
                                                <i class="fa-solid fa-trash-can rounded-md border border-red-400 p-1"></i>
                                            </label>
                                            <input type="checkbox" id="delete{{ $surat->id }}" class="modal-toggle" />
                                            <div class="modal" id="popup-modal" tabindex="-1"
                                                class="fixed hidden top-0 left-0 right-0 z-50 p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                                                <div class="relative w-full h-full max-w-md md:h-auto">
                                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                        <label for="delete{{ $surat->id }}"
                                                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                            data-modal-hide="popup-modal">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </label>
                                                        <div class="p-6 text-center">
                                                            <form action="{{ route('surat.masuk.sudah.destroy', $surat->id) }}"
                                                                method="post">
                                                                @method('delete')
                                                                @csrf
                                                                <svg aria-hidden="true"
                                                                    class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200"
                                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                                    </path>
                                                                </svg>
                                                                <h3
                                                                    class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">
                                                                    Apakah anda yakin akan menghapus surat ini ?</h3>
                                                                <button data-modal-hide="popup-modal" type="submit"
                                                                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                                    Ya, Saya Yakin
                                                                </button>
                                                                <label for="delete{{ $surat->id }}"
                                                                    data-modal-hide="popup-modal" type="button"
                                                                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Tidak,
                                                                    Batalkan</label>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endcan
                                </td>
                                <td class="py-4 px-6">
                                    @if ($surat->disposisi == 'true')
                                        Sudah Disposisi
                                    @else
                                        Belum Disposisi
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
