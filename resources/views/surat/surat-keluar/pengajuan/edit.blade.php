@extends('layouts.main')

@section('name')
    <x-back-page route="{{ route('surat.keluar.pengajuan') }}" name="EDIT SURAT KELUAR PENGAJUAN" />
@endsection

@section('content')
    <form action="{{ route('surat.keluar.pengajuan.update', $id) }}" method="post" enctype="multipart/form-data" class="p-5 bg-white">
        @method('put')
        @csrf
        @include('surat.surat-keluar.pengajuan.form', ['action' => 'edit'])
    @endsection
