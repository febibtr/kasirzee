@extends('layouts.master')

@section('title', 'Daftar Pembelian')

@section('content')
<div class="container-fluid">
    <h4 class="mb-4">Data Pembelian</h4>
    <a href="{{ route('pembelian.create') }}" class="btn btn-primary mb-3">
        <i class="fa fa-plus"></i> Tambah Pembelian
    </a>
    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="pembelianTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Supplier</th>
                            <th>Total Harga</th>
                            <th>Tanggal Pembelian</th>
                            <th>Staff</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pembelian as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->supplier->nama}}</td>
                            <td>{{ number_format($item->total_harga, 2, ',', '.') }}</td>
                            <td>{{ $item->tanggal_pembelian}}</td>
                            <td>{{ $item->staff->nama}}</td>
                            <td>
                                <a href="{{ route('pembelian.show', $item->id) }}" class="btn btn-info btn-sm">
                                    <i class="fa fa-eye"></i> Detail
                                </a>
                                <a href="{{ route('pembelian.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('pembelian.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus pembelian ini?')">
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
