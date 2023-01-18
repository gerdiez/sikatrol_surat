@extends('layouts.main')

@section('name')
    <h1 class="text-gray-600 font-bold text-2xl">SURAT MASUK</h1>
@endsection

@section('content')
    <div class="p-5 rounded-lg bg-white">
        <div class="flex justify-between items-center pb-4">
            <button type="button"
                class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"><a
                    {{-- href="{{ route('surat.masuk.create') }}"> --}}
                    href="/surat-masuk/create">
                    Tambah Surat
                </a></button>
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                </div>
                <input type="text" id="table-search-users"
                    class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Search for users">
            </div>
        </div>
        <div class="my-5 h-[70vh]">
            <table class="w-full text-sm border border-gray-200 text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 text-center">
                    <tr>
                        <th scope="col" class="p-4">
                            #
                        </th>
                        <th scope="col" class="py-3 px-6">
                            ID SURAT
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
                    </tr>
                </thead>
                <tbody>
                    @foreach ($surats as $surat)
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="py-4 px-6">
                                {{ $loop->iteration }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $surat->id }}
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
                                {{ $surat->waktu_diterima }}
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
                            <td class="py-4 text-center">
                                <div class="tooltip static hover:relative" data-tip="Lihat">
                                    <a href="surat-masuk/{{ $surat->id }}"
                                        class="mr-1 text-blue-600 hover:bg-blue-300 hover:rounded-md">
                                        <i class="fa-solid fa-eye rounded-md border border-blue-400 p-1"></i>
                                    </a>
                                </div>
                                <div class="tooltip static hover:relative" data-tip="Ubah">
                                    <a href="surat-masuk/{{ $surat->id }}/edit" class="mr-1 text-orange-600 hover:bg-orange-300 hover:rounded-md">
                                        <i class="fa-solid fa-pen-to-square rounded-md border border-orange-400 p-1"></i>
                                    </a>
                                </div>
                                <div class="tooltip static hover:relative" data-tip="Hapus">
                                    <a href="#" class="mr-1 text-red-600 hover:bg-red-300 hover:rounded-md">
                                        <i class="fa-solid fa-trash-can rounded-md border border-red-400 p-1"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
