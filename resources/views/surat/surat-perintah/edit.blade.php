@extends('layouts.main')

@section('name')
    <x-back-page route="{{ route('surat.perintah') }}" name="EDIT SURAT MASUK PERINTAH" />
@endsection

@section('content')
    <form action="{{ route('surat.perintah.update', $id) }}" method="post" enctype="multipart/form-data" class="p-5 bg-white">
        @method('put')
        @csrf
        @include('surat.surat-perintah.form', ['action' => 'edit'])
    @endsection
