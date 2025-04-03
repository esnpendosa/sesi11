@extends('layouts.app')

@section('content')
    <h1>Daftar Produk</h1>
    <a href="{{ route('products.create') }}">Tambah Produk</a>

    @foreach($products as $product)
        <h3>{{ $product->name }}</h3>
        <p>{{ $product->description }}</p>
        <p>Harga: Rp {{ number_format($product->price, 0, ',', '.') }}</p>
    @endforeach
@endsection
