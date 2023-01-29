@extends('layouts.main')

@section('name')
    <x-back-page route="{{ route('surat.keluar.disetujui') }}" name="EDIT SURAT KELUAR DISETUJUI" />
@endsection

@section('content')
    <form action="{{ route('surat.keluar.disetujui.update', $id) }}" method="post" enctype="multipart/form-data" class="p-5 bg-white">
        @method('put')
        @csrf
        @include('surat.surat-keluar.disetujui.form', ['action' => 'edit'])
    @endsection
