@extends('layouts.app')

@section('content')
    <h1>Supplier</h1>
    <a href="{{ route('supplier.create') }}" class="btn btn-primary">Tambah Supplier</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Supplier</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($suppliers as $supplier)
                <tr>
                    <td>{{ $supplier->id }}</td>
                    <td>{{ $supplier->nama }}</td>
                    <td>{{ $supplier->alamat }}</td>
                    <td>{{ $supplier->telepon }}</td>
                    <td>
                        <a href="{{ route('supplier.edit', $supplier->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('supplier.destroy', $supplier->id) }}" method="POST" style="display:inline;">
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
