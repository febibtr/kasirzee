@extends('layouts.app')

@section('content')
    <h1>Edit Detail Transaksi</h1>
    <form action="{{ route('detail-transaksi.update', $detail->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="transaksi_id">Transaksi ID:</label>
            <input type="number" class="form-control" name="transaksi_id" value="{{ $detail->transaksi_id }}" required>
        </div>
        <div class="form-group">
            <label for="produk_id">Produk ID:</label>
            <input type="number" class="form-control" name="produk_id" value="{{ $detail->produk_id }}" required>
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah:</label>
            <input type="number" class="form-control" name="jumlah" value="{{ $detail->jumlah }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection
