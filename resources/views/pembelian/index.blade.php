@extends('layouts.app')

@section('content')
    <h1>Pembelian</h1>
    <a href="{{ route('pembelian.create') }}" class="btn btn-primary">Tambah Pembelian</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Supplier ID</th>
                <th>Tanggal Pembelian</th>
                <th>Total</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pembelians as $pembelian)
                <tr>
                    <td>{{ $pembelian->id }}</td>
                    <td>{{ $pembelian->supplier_id }}</td>
                    <td>{{ $pembelian->tanggal }}</td>
                    <td>{{ $pembelian->total }}</td>
                    <td>
                        <a href="{{ route('pembelian.edit', $pembelian->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('pembelian.destroy', $pembelian->id) }}" method="POST" style="display:inline;">
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
