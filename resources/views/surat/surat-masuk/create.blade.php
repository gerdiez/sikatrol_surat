@extends('layouts.main')

@section('name')
    <a href="{{ route('surat.masuk') }}" class="flex text-gray-600 font-bold text-2xl" id="backPage">
        <i class="fa-solid fa-chevron-left mr-3 mt-1"></i>
        <h1 class="text-gray-600 font-bold text-2xl">TAMBAH SURAT</h1>
    </a>
@endsection

@section('content')
    <form class="p-5 bg-white">
        <div class="grid grid-cols-7">
            <div class="mb-10 col-span-3 grid grid-cols-3">
                <label for="email" class="my-auto font-medium text-gray-900">Surat Dari</label>
                <input type="text" id="email"
                    class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                    required>
            </div>
            <div class="mb-10 col-start-5 col-end-8 grid grid-cols-3">
                <label for="password" class="my-auto font-medium text-gray-900">Jenis Surat</label>
                <input type="text" id="password"
                    class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                    required>
            </div>
            <div class="mb-10 col-span-3 grid grid-cols-3">
                <label for="email" class="my-auto font-medium text-gray-900">No Surat</label>
                <input type="text" id="email"
                    class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                    required>
            </div>
            <div class="mb-10 col-start-5 col-end-8 grid grid-cols-3">
                <label for="password" class="my-auto font-medium text-gray-900">Tanggal Surat</label>
                <input type="text" id="password"
                    class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                    required>
            </div>
            <div class="mb-10 col-span-3 grid grid-cols-3">
                <label for="email" class="my-auto font-medium text-gray-900">Sifat</label>
                <input type="text" id="email"
                    class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                    required>
            </div>
            <div class="mb-10 col-start-5 col-end-8 grid grid-cols-3">
                <label for="password" class="my-auto font-medium text-gray-900">No Agenda</label>
                <input type="text" id="password"
                    class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                    required>
            </div>
            <div class="mb-10 col-span-3 grid grid-cols-3">
                <label for="email" class="my-auto font-medium text-gray-900">Tanggal Kegiatan</label>
                <input type="text" id="email"
                    class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                    required>
            </div>
            <div class="mb-10 col-start-5 col-end-8 grid grid-cols-3">
                <label for="password" class="my-auto font-medium text-gray-900">Kategori</label>
                <input type="text" id="password"
                    class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                    required>
            </div>
            <div class="mb-10 col-start-1 col-end-8 grid grid-cols-8">
                <label for="password" class="my-auto font-medium text-gray-900">Perihal</label>
                <input type="text" id="password"
                    class="bg-gray-50 ml-5 border col-start-2 col-end-9 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                    required>
            </div>
            <div class="mb-10 col-start-1 col-end-8 grid grid-cols-8">
                <label for="password" class="my-auto font-medium text-gray-900">Upload</label>
                <input type="text" id="password"
                    class="bg-gray-50 ml-5 border col-start-2 col-end-9 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                    required>
            </div>
            <div class="mb-10 col-start-1 col-end-8 grid grid-cols-8">
                <label for="password" class="my-auto font-medium text-gray-900">Diteruskan Ke</label>
                <input type="text" id="password"
                    class="bg-gray-50 ml-5 border col-start-2 col-end-9 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                    required>
            </div>
            <div class="mb-10 col-start-1 col-end-8 grid grid-cols-8">
                <label for="password" class="my-auto font-medium text-gray-900">Catatan</label>
                <input type="text" id="password"
                    class="bg-gray-50 ml-5 border col-start-2 col-end-9 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                    required>
            </div>
            <div class="mb-10 col-start-1 col-end-8 grid grid-cols-8">
                <label for="password" class="my-auto font-medium text-gray-900">Dari</label>
                <input type="text" id="password"
                    class="bg-gray-50 ml-5 border col-start-2 col-end-9 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                    required>
            </div>
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Kirim
            Surat</button>
    </form>
@endsection
