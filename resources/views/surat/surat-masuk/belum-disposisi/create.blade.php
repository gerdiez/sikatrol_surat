@extends('layouts.main')

@section('name')
    <x-back-page route="{{ route('surat.masuk.belum') }}" name="TAMBAH SURAT" />
@endsection

@section('content')
    <form action="{{ route('surat.masuk.belum.store') }}" method="post" enctype="multipart/form-data" class="p-5 bg-white">
        @csrf
        @include('surat.surat-masuk.belum-disposisi.form', ['action' => 'create'])
    </form>
@endsection
