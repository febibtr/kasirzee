@extends('layouts.app')

@section('content')
    <h1>Toko</h1>
    <a href="{{ route('toko.create') }}" class="btn btn-primary">Tambah Toko</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Toko</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tokos as $toko)
                <tr>
                    <td>{{ $toko->id }}</td>
                    <td>{{ $toko->nama }}</td>
                    <td>{{ $toko->alamat }}</td>
                    <td>{{ $toko->telepon }}</td>
                    <td>
                        <a href="{{ route('toko.edit', $toko->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('toko.destroy', $toko->id) }}" method="POST" style="display:inline;">
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
