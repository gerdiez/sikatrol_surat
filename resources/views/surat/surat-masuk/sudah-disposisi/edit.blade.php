@extends('layouts.main')

@section('name')
    <x-back-page route="{{ route('surat.masuk.sudah') }}" name="EDIT SURAT MASUK SUDAH DISPOSISI" />
@endsection

@section('content')
    <form action="{{ route('surat.masuk.sudah.update', $id) }}" enctype="multipart/form-data" method="post" class="p-5 bg-white">
        @method('put')
        @csrf
        @include('surat.surat-masuk.sudah-disposisi.form', ['action' => 'edit'])
@endsection
