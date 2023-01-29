@extends('layouts.main')

@section('name')
    <x-back-page route="{{ route('surat.keputusan') }}" name="DETAIL SURAT KEPUTUSAN" />
@endsection

@section('content')
    <div class="p-5 bg-white">
        @include('surat.surat-keputusan.form', ['action' => 'detail'])
    </div>
@endsection
