@extends('layouts.main')

@section('name')
    <x-back-page route="{{ route('surat.masuk') }}" name="TAMBAH SURAT" />
@endsection

@section('content')
    <form action="{{ route('surat.masuk.store') }}" method="post" class="p-5 bg-white">
        @csrf
        @include('surat.surat-masuk.form', ['action' => 'create'])
    </form>
@endsection
