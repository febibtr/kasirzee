@extends('layouts.master')

@section('title', 'Detail Produk')

@section('content')
<div class="container-fluid">
    <h4 class="mb-4">Detail Produk</h4>
    <div class="row justify-content-center">
        <div class="col-lg">
            <div class="card shadow">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <tbody>
                                <tr>
                                    <th>Nama Produk</th>
                                    <td>{{ $produk->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Kategori</th>
                                    <td>{{ $produk->kategori ? $produk->kategori->nama : 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th>Tipe</th>
                                    <td>{{ ucfirst($produk->tipe) }}</td>
                                </tr>
                                <tr>
                                    <th>Stok</th>
                                    <td>{{ $produk->stok }}</td>
                                </tr>
                                <tr>
                                    <th>Harga Jual</th>
                                    <td>{{ number_format($produk->harga_jual, 2) }}</td>
                                </tr>
                                <tr>
                                    <th>Harga Beli</th>
                                    <td>{{ number_format($produk->harga_beli, 2) }}</td>
                                </tr>
                                <tr>
                                    <th>Berat</th>
                                    <td>{{ $produk->berat }} Kg</td>
                                </tr>
                                <tr>
                                    <th>Satuan</th>
                                    <td>{{ $produk->satuan }}</td>
                                </tr>
                                <tr>
                                    <th>Diskon</th>
                                    <td>{{ $produk->diskon }} %</td>
                                </tr>
                                <tr>
                                    <th>Deskripsi</th>
                                    <td>{{ $produk->deskripsi }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{ route('produk.index') }}" class="btn btn-secondary">
                        <i class="fa fa-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
