@extends('layouts.master')

@section('title', 'Daftar Kategori')

@section('content')
<div class="container-fluid">
    <h4 class="mb-4">Data Kategori</h4>
    <a href="{{ route('kategori.create') }}" class="btn btn-primary mb-3">
        <i class="fa fa-plus"></i> Tambah Kategori
    </a>
    <div class="card shadow">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="kategoriTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kategori as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>
                                <a href="{{ route('kategori.show', $item->id) }}" class="btn btn-info btn-sm">
                                    <i class="fa fa-eye"></i> Detail
                                </a>
                                <a href="{{ route('kategori.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('kategori.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus kategori ini?')">
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
