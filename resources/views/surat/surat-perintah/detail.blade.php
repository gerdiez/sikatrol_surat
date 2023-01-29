@extends('layouts.main')

@section('name')
    <x-back-page route="{{ route('surat.perintah') }}" name="DETAIL SURAT PERINTAH" />
@endsection

@section('content')
    <div class="p-5 bg-white">
        @include('surat.surat-perintah.form', ['action' => 'detail'])
    </div>
@endsection
