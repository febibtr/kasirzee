@extends('layouts.app')

@section('content')
    <h1>Transaksi</h1>
    <a href="{{ route('transaksi.create') }}" class="btn btn-primary">Tambah Transaksi</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Toko ID</th>
                <th>Shift ID</th>
                <th>Waktu Transaksi</th>
                <th>Total</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transaksis as $transaksi)
                <tr>
                    <td>{{ $transaksi->id }}</td>
                    <td>{{ $transaksi->toko_id }}</td>
                    <td>{{ $transaksi->shift_id }}</td>
                    <td>{{ $transaksi->waktu }}</td>
                    <td>{{ $transaksi->total }}</td>
                    <td>
                        <a href="{{ route('transaksi.edit', $transaksi->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('transaksi.destroy', $transaksi->id) }}" method="POST" style="display:inline;">
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
