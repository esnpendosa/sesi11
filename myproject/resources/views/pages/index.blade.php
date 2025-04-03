@extends('layouts.app')

@section('content')
    <h1>Daftar Halaman</h1>
    <a href="{{ route('pages.create') }}">Tambah Halaman</a>

    @foreach($pages as $page)
        <h3>{{ $page->title }}</h3>
        <p>{{ $page->content }}</p>
    @endforeach
@endsection
