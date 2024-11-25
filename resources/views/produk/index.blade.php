@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Produk</h1>
    {{-- <a href="{{ route('produk.create') }}" class="btn btn-primary">Tambah Produk</a> --}}
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Kategori ID</th>
                <th>stok</th>
                <th>Harga beli</th>
                <th>Harga Jual</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produk as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->kategori_id }}</td>
                    <td>{{ $item->stok }}</td>
                    <td>{{ $item->harga_beli }}</td>
                    <td>{{ $item->harga_jual }}</td>
                    <td>
                        {{-- <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('produk.destroy', $produk->id) }}" method="POST" style="display:inline;"> --}}
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                        <a href="{{ route('produk.show', $item->id) }}" class="btn btn-info">Lihat</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
