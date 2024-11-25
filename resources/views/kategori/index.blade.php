@extends('layouts.master')

@section('title', 'Daftar Kategori')

@section('content')
<div class="container-fluid">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4 class="mb-0">Data Kategori</h4>
        {{-- <a href="{{ route('kategori.create') }}" class="btn btn-primary">Tambah Kategori</a> --}}
    </div>
    <div class="row">
        <div class="col-lg">
            <div class="card shadow">
                <div class="card-body">
                    <table class="table table-striped table-bordered">
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
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>
                                    {{-- <a href="{{ route('kategori.edit', $item->id) }}" class="btn btn-warning btn-sm"> --}}
                                        <i class="fa fa-edit"></i> Edit
                                    </a>
                                    {{-- <form action="{{ route('kategori.destroy', $item->id) }}" method="POST" style="display:inline;"> --}}
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
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
</div>
@endsection
