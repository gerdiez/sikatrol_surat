@extends('layouts.main')

@section('name')
    <x-back-page route="{{ route('surat.perintah') }}" name="TAMBAH SURAT PERINTAH" />
@endsection

@section('content')
    <form action="{{ route('surat.perintah.store') }}" method="post" enctype="multipart/form-data" class="p-5 bg-white">
        @csrf
        @include('surat.surat-perintah.form', ['action' => 'create'])
    </form>
@endsection
