@extends('layouts.master')

@section('title', 'Tambah Pembelian')

@section('content')
<div class="container-fluid">
    <h4 class="mb-4">Tambah Pembelian</h4>
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('pembelian.store') }}" method="POST">
                @csrf
                <div class="row">
                    <!-- Kolom Kiri -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="supplier_id">Supplier</label>
                            <select name="supplier_id" id="supplier_id" class="form-control rounded" required>
                                @foreach($suppliers as $supplier)
                                    <option value="{{ $supplier->id }}">{{ $supplier->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="staff_id">Staff</label>
                            <select name="staff_id" id="staff_id" class="form-control rounded" required>
                                @foreach($staff as $staffMember)
                                    <option value="{{ $staffMember->id }}">{{ $staffMember->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Kolom Kanan -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="total_harga">Total Harga</label>
                            <input type="number" name="total_harga" id="total_harga" class="form-control rounded" required>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea name="keterangan" id="keterangan" class="form-control rounded"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Tombol Submit -->
                <div class="mt-3 text-right">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-save"></i> Simpan
                    </button>
                    <a href="{{ route('pembelian.index') }}" class="btn btn-secondary">
                        <i class="fa fa-arrow-left"></i> Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
