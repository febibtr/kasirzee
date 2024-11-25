@extends('layouts.app')

@section('content')
    <h1>Tambah Detail Transaksi</h1>
    <form action="{{ route('detail-transaksi.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="transaksi_id">Transaksi ID:</label>
            <input type="number" class="form-control" name="transaksi_id" required>
        </div>
        <div class="form-group">
            <label for="produk_id">Produk ID:</label>
            <input type="number" class="form-control" name="produk_id" required>
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah:</label>
            <input type="number" class="form-control" name="jumlah" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
@endsection
