@extends('layouts.main')

@section('name')
    <x-back-page route="{{ route('surat.masuk.belum') }}" name="EDIT SURAT MASUK BELUM DISPOSISI" />
@endsection

@section('content')
    <form action="{{ route('surat.masuk.belum.update', $id) }}" method="post" class="p-5 bg-white">
        @method('put')
        @csrf
        <div class="grid grid-cols-7">
            <div class="mb-10 col-span-3 grid grid-cols-3">
                <label for="email" class="my-auto font-medium text-gray-900">Diteruskan Ke</label>
                <input type="text" id="" name="diteruskan_ke"
                    class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                    value="{{ $surats[0]->diteruskan_ke }}">
            </div>
            <div class="mb-10 col-start-1 col-end-8 grid grid-cols-8">
                <label for="" class="my-auto font-medium text-gray-900">Catatan</label>
                <input type="text" id="" name="catatan"
                    class="bg-gray-50 ml-5 border col-start-2 col-end-9 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                    value="{{ $surats[0]->catatan }}">
            </div>
            <div class="mb-10 col-span-3 grid grid-cols-3">
                <label for="email" class="my-auto font-medium text-gray-900">Dari</label>
                <input type="text" id="" name="dari"
                    class="bg-gray-50 border col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                    value="{{ $surats[0]->dari }}">
            </div>
        </div>
        <button type="submit"
            class="flex ml-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
            Ubah Surat
        </button>
    @endsection
