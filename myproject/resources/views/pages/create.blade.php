@extends('layouts.app')

@section('content')
    <h1>Buat Halaman Baru</h1>

    <form action="{{ route('pages.store') }}" method="POST">
        @csrf
        <label>Judul:</label>
        <input type="text" name="title" required>

        <label>Konten:</label>
        <textarea name="content" required></textarea>

        <button type="submit">Simpan</button>
    </form>
@endsection
