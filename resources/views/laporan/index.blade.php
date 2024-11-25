@extends('layouts.app')

@section('content')
    <h1>Laporan</h1>
    <a href="{{ route('laporan.create') }}" class="btn btn-primary">Tambah Laporan</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Jenis</th>
                <th>Keterangan</th>
                <th>Waktu Laporan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($laporans as $laporan)
                <tr>
                    <td>{{ $laporan->id }}</td>
                    <td>{{ $laporan->jenis }}</td>
                    <td>{{ $laporan->keterangan }}</td>
                    <td>{{ $laporan->waktu_laporan }}</td>
                    <td>
                        <a href="{{ route('laporan.edit', $laporan->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('laporan.destroy', $laporan->id) }}" method="POST" style="display:inline;">
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
