@extends('layouts.main')

@section('name')
    <x-back-page route="{{ route('surat.masuk.sudah') }}" name="EDIT SURAT MASUK SUDAH DISPOSISI" />
@endsection

@section('content')
    <form action="{{ route('surat.masuk.sudah.update', $id) }}" enctype="multipart/form-data" method="post"
        class="p-5 bg-white">
        @method('put')
        @csrf
        @if (Auth::user()->hasRole('sekre'))
            <div class="grid grid-cols-7">
                <div class="mb-10 col-span-3 grid grid-cols-3">
                    <label for="diteruskan_ke" class="my-auto font-medium text-gray-900">Diteruskan Ke</label>
                    <div class="col-span-2 relative">
                        <select name="diteruskan_ke" id="diteruskan_ke" required
                            class="appearance-none bg-gray-50 border  @error('diteruskan_ke') border-red-600 @enderror col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full p-2.5">
                            @foreach ($unitKerja as $unit)
                                @if ($surats[0]->diteruskan_ke == $unit)
                                    <option selected value="{{ $unit }}">{{ $unit }}</option>
                                @else
                                    <option value="{{ $unit }}">{{ $unit }}</option>
                                @endif
                            @endforeach
                        </select>
                        <i class="absolute right-4 top-3 fa-solid fa-chevron-down ml-auto"></i>
                    </div>
                    @error('diteruskan_ke')
                        <p class="col-start-2 col-end-4 mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-10 col-start-1 col-end-8 grid grid-cols-8">
                    <label for="catatan" class="my-auto font-medium text-gray-900">Catatan</label>
                    <input type="text" id="catatan" name="catatan" value="{{ old('catatan') }}"
                        class="bg-gray-50 ml-5 border  @error('catatan') border-red-600 @enderror col-start-2 col-end-9 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                        value="{{ $surats[0]->catatan }}">
                    @error('catatan')
                        <p class="ml-5 col-start-2 col-end-9 mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-10 col-span-3 grid grid-cols-3">
                    <label for="dari" class="my-auto font-medium text-gray-900">Dari</label>
                    <input type="text" id="dari" name="dari" value="{{ old('dari') }}"
                        class="bg-gray-50 border  @error('dari') border-red-600 @enderror col-span-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 p-2.5"
                        value="{{ $surats[0]->dari }}">
                    @error('dari')
                        <p class="col-start-2 col-end-4 mt-2 text-xs text-red-600 font-medium">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <button type="submit"
                class="flex ml-auto text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                Ubah Surat
            </button>
        @else
            @include('surat.surat-masuk.sudah-disposisi.form', ['action' => 'edit'])
        @endif
    @endsection
