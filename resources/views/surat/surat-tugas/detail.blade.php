@extends('layouts.main')

@section('name')
    <x-back-page route="{{ route('surat.tugas') }}" name="DETAIL SURAT TUGAS" />
@endsection

@section('content')
    <div class="p-5 bg-white">
        @include('surat.surat-tugas.form', ['action' => 'detail'])
    </div>
@endsection
