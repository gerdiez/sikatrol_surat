@extends('layouts.main')

@section('content')
    <div>
        <div class="overflow-x-auto relative sm:rounded-lg">
            <div class="flex justify-between items-center pb-4 bg-white">
                <div>
                    <button
                        class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5"
                        type="button">
                        <a href="{{ route('surat.tugas.create') }}">
                            Tambah Surat
                        </a>
                    </button>
                </div>
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    </div>
                    <input type="text" id="table-search-users"
                        class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Search for users">
                </div>
            </div>
            <table class="w-full text-sm border border-gray-200 text-left shadow-md text-gray-500">
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
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="p-4 w-4">
                            1
                        </td>
                        <th scope="row" class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap">
                            STXXXX
                        </th>
                        <td class="py-4 px-6">
                            DSK/XX/XX/XX
                        </td>
                        <td class="py-4 px-6">
                            DISKOMINFO
                        </td>
                        <td class="py-4 px-6">
                            UNDANGAN
                        </td>
                        <td class="py-4 px-6">
                            SOSIALISASI
                        </td>
                        <td class="py-4 px-6">
                            PENTING
                        </td>
                        <td class="py-4 px-6">
                            17 APRIL 2022
                        </td>
                        <td class="py-4 px-6">
                            KASUBAG UMPEG
                        </td>
                        <td class="py-4 px-6">
                            <a href="#" class="font-medium text-blue-600 hover:underline">Lihat</a>
                            <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                            <a href="#" class="font-medium text-blue-600 hover:underline">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
