@extends('layouts.master')

@section('title', 'Daftar Produk')

@section('content')
<div class="container-fluid">
    <h4 class="mb-4">Daftar Produk</h4>
    <a href="{{ route('produk.create') }}" class="btn btn-primary mb-3">
        <i class="fa fa-plus"></i> Tambah Produk
    </a>
    <div class="card shadow">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="produkTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Tipe</th>
                            <th>Stok</th>
                            <th>Harga Jual</th>
                            <th>Diskon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produk as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->kategori ? $item->kategori->nama : 'Tidak Ada' }}</td>
                            <td>{{ ucfirst($item->tipe) }}</td>
                            <td>{{ $item->stok }}</td>
                            <td>{{ number_format($item->harga_jual, 2) }}</td>
                            <td>{{ $item->diskon ? $item->diskon . '%' : 'Tidak ada' }}</td>
                            <td>
                                <a href="{{ route('produk.show', $item->id) }}" class="btn btn-info btn-sm">
                                    <i class="fa fa-eye"></i> Detail
                                </a>
                                <a href="{{ route('produk.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('produk.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus produk ini?')">
                                        <i class="fa fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
