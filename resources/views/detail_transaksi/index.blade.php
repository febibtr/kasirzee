@extends('layouts.app')

@section('content')
    <h1>Detail Transaksi</h1>
    <a href="{{ route('detail-transaksi.create') }}" class="btn btn-primary">Tambah Detail Transaksi</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Transaksi ID</th>
                <th>Produk ID</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($detailTransaksis as $detail)
                <tr>
                    <td>{{ $detail->id }}</td>
                    <td>{{ $detail->transaksi_id }}</td>
                    <td>{{ $detail->produk_id }}</td>
                    <td>{{ $detail->jumlah }}</td>
                    <td>
                        <a href="{{ route('detail-transaksi.edit', $detail->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('detail-transaksi.destroy', $detail->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
