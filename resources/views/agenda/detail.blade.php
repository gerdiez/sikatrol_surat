@extends('layouts.main')

@section('name')
    <x-back-page route="{{ route('agenda') }}" name="DETAIL AGENDA" />
@endsection

@section('content')
    <div class="p-5 bg-white">
        @include('agenda.form', ['action' => 'detail'])
    </div>
@endsection
