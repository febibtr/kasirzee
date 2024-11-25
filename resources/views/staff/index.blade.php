@extends('layouts.master')

@section('title', 'Daftar Staff')

@section('content')
<div class="container-fluid">
    <h4 class="mb-4">Daftar Staff</h4>
    <div class="card shadow">
        <div class="card-body">
            <a href="{{ route('staff.create') }}" class="btn btn-primary mb-3">
                <i class="fa fa-plus"></i> Tambah Staff
            </a>
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="staffTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Nomor HP</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($staff as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->nomor_hp }}</td>
                            <td>{{ ucfirst($item->role) }}</td>
                            <td>
                                <a href="{{ route('staff.show', $item->id) }}" class="btn btn-info btn-sm">
                                    <i class="fa fa-eye"></i> Detail
                                </a>
                                <a href="{{ route('staff.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('staff.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus staff ini?')">
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
