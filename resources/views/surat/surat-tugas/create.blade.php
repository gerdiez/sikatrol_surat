@extends('layouts.main')

@section('name')
    <x-back-page route="{{ route('surat.tugas') }}" name="TAMBAH SURAT TUGAS" />
@endsection

@section('content')
    <form action="{{ route('surat.tugas.store') }}" method="post" enctype="multipart/form-data" class="p-5 bg-white">
        @csrf
        @include('surat.surat-tugas.form', ['action' => 'create'])
    </form>
@endsection
