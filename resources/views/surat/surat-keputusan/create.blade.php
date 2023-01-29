@extends('layouts.main')

@section('name')
    <x-back-page route="{{ route('surat.keputusan') }}" name="TAMBAH SURAT KEPUTUSAN" />
@endsection

@section('content')
    <form action="{{ route('surat.keputusan.store') }}" method="post" enctype="multipart/form-data" class="p-5 bg-white">
        @csrf
        @include('surat.surat-keputusan.form', ['action' => 'create'])
    </form>
@endsection
