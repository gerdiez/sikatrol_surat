@extends('layouts.main')

@section('name')
    <x-back-page route="{{ route('surat.keputusan') }}" name="EDIT SURAT MASUK KEPUTUSAN" />
@endsection

@section('content')
    <form action="{{ route('surat.keputusan.update', $id) }}" method="post" enctype="multipart/form-data" class="p-5 bg-white">
        @method('put')
        @csrf
        @include('surat.surat-keputusan.form', ['action' => 'edit'])
    @endsection
