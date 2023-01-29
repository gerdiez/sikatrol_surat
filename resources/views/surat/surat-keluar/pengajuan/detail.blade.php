@extends('layouts.main')

@section('name')
    <x-back-page route="{{ route('surat.keluar.pengajuan') }}" name="DETAIL SURAT KELUAR PENGAJUAN" />
@endsection

@section('content')
    <div class="p-5 bg-white">
        @include('surat.surat-keluar.pengajuan.form', ['action' => 'detail'])
    </div>
@endsection
