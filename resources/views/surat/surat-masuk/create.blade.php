@extends('layouts.main')

@section('name')
    <x-back-page route="{{ route('surat.masuk') }}" name="TAMBAH SURAT"/>
@endsection

@section('content')
    <form action="{{route('surat.masuk.store')}}" method="post" class="p-5 bg-white">
        @csrf
        <div class="grid grid-cols-7">
            <div class="mb-10 col-span-3 grid grid-cols-3">
                <label for="" class="my-auto font-medium text-gray-900">Surat Dari</label>
                <input type="text" id="" name="surat_dari"
                    class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                    required>
            </div>
            <div class="mb-10 col-start-5 col-end-8 grid grid-cols-3">
                <label for="" class="my-auto font-medium text-gray-900">Jenis Surat</label>
                <input type="text" id="" name="jenis_surat"
                    class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                    required>
            </div>
            <div class="mb-10 col-span-3 grid grid-cols-3">
                <label for="" class="my-auto font-medium text-gray-900">No Surat</label>
                <input type="text" id="" name="no_surat"
                    class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                    required>
            </div>
            <div class="mb-10 col-start-5 col-end-8 grid grid-cols-3">
                <label for="" class="my-auto font-medium text-gray-900">Tanggal Surat</label>
                <input type="date" id="" name="tanggal_surat"
                    class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                    required>
            </div>
            <div class="mb-10 col-span-3 grid grid-cols-3">
                <label for="countries" class="my-auto mb-2 text-sm font-medium text-gray-900">Sifat</label>
                <div class="col-span-2 relative">
                    <select id="" name="sifat"
                        class="appearance-none bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5">
                        <option selected>Pilih...</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                    </select>
                    <i class="absolute right-4 top-3 fa-solid fa-chevron-down ml-auto"></i>
                </div>
            </div>
            <div class="mb-10 col-start-5 col-end-8 grid grid-cols-3">
                <label for="" class="my-auto font-medium text-gray-900">No Agenda</label>
                <input type="text" id="" name="no_agenda"
                    class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                    required>
            </div>
            <div class="mb-10 col-span-3 grid grid-cols-3">
                <label for="email" class="my-auto font-medium text-gray-900">Tanggal Kegiatan</label>
                <input type="date" id="" name="tanggal_kegiatan"
                    class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                    required>
            </div>
            <div class="mb-10 col-start-5 col-end-8 grid grid-cols-3">
                <label for="" class="my-auto font-medium text-gray-900">Kategori</label>
                <input type="text" id="" name="kategori"
                    class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                    required>
            </div>
            <div class="mb-10 col-start-1 col-end-8 grid grid-cols-8">
                <label for="" class="my-auto font-medium text-gray-900">Perihal</label>
                <input type="date" id="" name="waktu_diterima"
                    class="bg-gray-50 ml-5 border col-start-2 col-end-9 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                    required>
            </div>
            <div class="mb-10 col-start-1 col-end-8 grid grid-cols-8">
                <label for="" class="my-auto font-medium text-gray-900">Upload</label>
                <input type="text" id="" name="file"
                    class="bg-gray-50 ml-5 border col-start-2 col-end-9 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                    required>
            </div>
            <div class="mb-10 col-span-3 grid grid-cols-3">
                <label for="email" class="my-auto font-medium text-gray-900">Diteruskan Ke</label>
                <input type="text" id="" name="diteruskan_ke"
                    class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                    required>
            </div>
            <div class="mb-10 col-start-1 col-end-8 grid grid-cols-8">
                <label for="" class="my-auto font-medium text-gray-900">Catatan</label>
                <input type="text" id="" name="catatan"
                    class="bg-gray-50 ml-5 border col-start-2 col-end-9 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                    required>
            </div>
            <div class="mb-10 col-span-3 grid grid-cols-3">
                <label for="email" class="my-auto font-medium text-gray-900">Dari</label>
                <input type="text" id="" name="dari"
                    class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                    required>
            </div>
        </div>
        <button type="submit"
            class="flex ml-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Kirim
            Surat</button>
    </form>
@endsection
