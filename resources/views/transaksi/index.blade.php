@extends('layouts.master')

@section('title', 'Daftar Transaksi')

@section('content')
<div class="container-fluid">
    <h4 class="mb-4">Daftar Transaksi</h4>
    <a href="{{ route('transaksi.create') }}" class="btn btn-primary mb-3">
        <i class="fa fa-plus"></i> Tambah Transaksi
    </a>
    <div class="card shadow">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="transaksiTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tanggal Transaksi</th>
                            <th>Metode Pembayaran</th>
                            <th>Total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transaksi as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->tanggal_transaksi }}</td>
                            <td>{{ ucfirst($item->metode_pembayaran) }}</td>
                            <td>{{ number_format($item->total, 2) }}</td>
                            <td>
                                <a href="{{ route('transaksi.show', $item->id) }}" class="btn btn-info btn-sm">
                                    <i class="fa fa-eye"></i> Detail
                                </a>
                                <a href="{{ route('transaksi.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('transaksi.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus transaksi ini?')">
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
