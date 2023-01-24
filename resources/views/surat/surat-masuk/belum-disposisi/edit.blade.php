@extends('layouts.main')

@section('name')
    <x-back-page route="{{ route('surat.masuk.belum') }}" name="EDIT SURAT MASUK" />
@endsection

@section('content')
    <form action="{{ route('surat.masuk.belum.update', $id) }}" method="post" class="p-5 bg-white">
        @method('put')
        @csrf
        @include('surat.surat-masuk.belum-disposisi.form', ['action' => 'edit'])
@endsection
