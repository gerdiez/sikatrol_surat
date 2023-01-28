@extends('layouts.main')

@section('name')
    <x-back-page route="{{ route('surat.masuk.belum') }}" name="DETAIL SURAT MASUK BELUM DISPOSISI" />
@endsection

@section('content')
    <div class="p-5 bg-white">
        @include('surat.surat-masuk.belum-disposisi.form', ['action' => 'detail'])
    </div>
@endsection
