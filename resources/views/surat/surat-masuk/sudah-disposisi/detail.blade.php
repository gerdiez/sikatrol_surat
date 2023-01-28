@extends('layouts.main')

@section('name')
    <x-back-page route="{{ route('surat.masuk.sudah') }}" name="DETAIL SURAT MASUK SUDAH DISPOSISI" />
@endsection

@section('content')
    <div class="p-5 bg-white">
        @include('surat.surat-masuk.sudah-disposisi.form', ['action' => 'detail'])
    </div>
@endsection
