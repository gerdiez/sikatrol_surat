@extends('layouts.main')

@section('name')
    <x-back-page route="{{ route('surat.keluar.disetujui') }}" name="DETAIL SURAT KELUAR DISETUJUI" />
@endsection

@section('content')
    <div class="p-5 bg-white">
        @include('surat.surat-keluar.disetujui.form', ['action' => 'detail'])
    </div>
@endsection
