@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Detail Produk</h1>
    <p><strong>Nama:</strong> {{ $produk->nama }}</p>
    <p><strong>Tipe:</strong> {{ $produk->tipe }}</p>
    <p><strong>Stok:</strong> {{ $produk->stok }}</p>
    <p><strong>Harga Beli:</strong> {{ $produk->harga_beli }}</p>
    <p><strong>Harga Jual:</strong> {{ $produk->harga_jual }}</p>
    <p><strong>Satuan:</strong> {{ $produk->satuan }}</p>
    <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
