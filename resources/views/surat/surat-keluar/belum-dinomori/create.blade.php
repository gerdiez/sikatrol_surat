@extends('layouts.main')

@section('name')
    <x-back-page route="{{ route('surat.keluar.belum.dinomori') }}" name="TAMBAH SURAT KELUAR" />
@endsection

@section('content')
    <form action="{{ route('surat.keluar.belum.dinomori.store') }}" method="post" enctype="multipart/form-data" class="p-5 bg-white">
        @csrf
        @include('surat.surat-keluar.belum-dinomori.form', ['action' => 'create'])
    </form>
@endsection
