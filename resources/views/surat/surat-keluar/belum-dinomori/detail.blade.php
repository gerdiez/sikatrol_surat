@extends('layouts.main')

@section('name')
    <x-back-page route="{{ route('surat.keluar.belum.dinomori') }}" name="DETAIL SURAT MASUK BELUM DINOMORI" />
@endsection

@section('content')
    <div class="p-5 bg-white">
        @include('surat.surat-keluar.belum-dinomori.form', ['action' => 'detail'])
    </div>
@endsection
