@extends('layouts.main')

@section('name')
    <x-back-page route="{{ route('surat.tugas') }}" name="EDIT SURAT MASUK TUGAS" />
@endsection

@section('content')
    <form action="{{ route('surat.tugas.update', $id) }}" method="post" enctype="multipart/form-data" class="p-5 bg-white">
        @method('put')
        @csrf
        @include('surat.surat-tugas.form', ['action' => 'edit'])
    @endsection
