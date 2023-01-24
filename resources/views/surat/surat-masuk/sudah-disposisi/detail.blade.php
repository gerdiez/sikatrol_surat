@extends('layouts.main')

@section('name')
    <x-back-page route="{{ route('surat.masuk.sudah') }}" name="DETAIL" />
@endsection

@section('content')
    <div class="p-5 bg-white">
        @include('surat.surat-masuk.sudah-disposisi.form', ['action' => 'detail'])
    </div>
@endsection
