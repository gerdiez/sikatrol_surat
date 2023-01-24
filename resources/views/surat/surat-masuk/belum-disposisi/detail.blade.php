@extends('layouts.main')

@section('name')
    <x-back-page route="{{ route('surat.masuk.belum') }}" name="DETAIL" />
@endsection

@section('content')
    <div class="p-5 bg-white">
        @include('surat.surat-masuk.belum-disposisi.form', ['action' => 'detail'])
    </div>
@endsection
