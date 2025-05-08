@extends('layouts.master')

@section('title', 'Edit Supplier')

@section('content')
<div class="container-fluid">
    <h4 class="mb-4">Edit Supplier</h4>
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('supplier.update', $supplier->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">Nama Supplier</label>
                            <input type="text" name="nama" id="nama" class="form-control rounded" value="{{ $supplier->nama }}" required>
                        </div>
                        <div class="form-group">
                            <label for="nomor_hp">Nomor HP</label>
                            <input type="text" name="nomor_hp" id="nomor_hp" class="form-control rounded" value="{{ $supplier->nomor_hp }}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control rounded">{{ $supplier->alamat }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control rounded" value="{{ $supplier->email }}">
                        </div>
                    </div>
                </div>
                <div class="mt-3 text-right">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-save"></i> Update
                    </button>
                    <a href="{{ route('supplier.index') }}" class="btn btn-secondary">
                        <i class="fa fa-arrow-left"></i> Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
