@extends('layouts.master')

@section('title', 'Daftar Supplier')

@section('content')
<div class="container-fluid">
    <h4 class="mb-4">Data Supplier</h4>
    <a href="{{ route('supplier.create') }}" class="btn btn-primary mb-3">
        <i class="fa fa-plus"></i> Tambah Supplier
    </a>
    <div class="card shadow">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="supplierTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Nomor HP</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($suppliers as $supplier)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $supplier->nama }}</td>
                            <td>{{ $supplier->nomor_hp }}</td>
                            <td>{{ $supplier->email }}</td>
                            <td>
                                <a href="{{ route('supplier.show', $supplier->id) }}" class="btn btn-info btn-sm">
                                    <i class="fa fa-eye"></i> Detail
                                </a>
                                <a href="{{ route('supplier.edit', $supplier->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('supplier.destroy', $supplier->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus supplier ini?')">
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
