@extends('layouts.master')

@section('title', 'Edit Transaksi')

@section('content')
<div class="container-fluid">
    <h4 class="mb-4">Edit Transaksi</h4>
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('transaksi.update', $transaksi->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    
                    <!-- Kolom Kiri -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="staff_id">Staff</label>
                            <select name="staff_id" id="staff_id" class="form-control rounded" required>
                                <option value="">Pilih Staff</option>
                                @foreach($staff as $item)
                                    <option value="{{ $item->id }}" {{ $transaksi->staff_id == $item->id ? 'selected' : '' }}>
                                        {{ $item->nama }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="metode_pembayaran">Metode Pembayaran</label>
                            <select name="metode_pembayaran" id="metode_pembayaran" class="form-control rounded" required>
                                <option value="tunai" {{ $transaksi->metode_pembayaran == 'tunai' ? 'selected' : '' }}>Tunai</option>
                                <option value="transfer" {{ $transaksi->metode_pembayaran == 'transfer' ? 'selected' : '' }}>Transfer</option>
                            </select>
                        </div>
                    </div>

                    <!-- Kolom Kanan -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="total">Total</label>
                            <input type="number" name="total" id="total" class="form-control rounded" value="{{ $transaksi->total }}" required>
                        </div>

                        <div class="form-group">
                            <label for="nama_pelanggan">Nama Pelanggan</label>
                            <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control rounded" value="{{ $transaksi->nama_pelanggan }}">
                        </div>

                        <div class="form-group">
                            <label for="diskon_total">Diskon Total</label>
                            <input type="number" name="diskon_total" id="diskon_total" class="form-control rounded" value="{{ $transaksi->diskon_total }}">
                        </div>

                        <div class="form-group">
                            <label for="pajak_total">Pajak Total</label>
                            <input type="number" name="pajak_total" id="pajak_total" class="form-control rounded" value="{{ $transaksi->pajak_total }}">
                        </div>

                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea name="keterangan" id="keterangan" class="form-control rounded">{{ $transaksi->keterangan }}</textarea>
                        </div>
                    </div>
                </div>

                <!-- Tombol Submit -->
                <div class="mt-3 text-right">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-save"></i> Simpan
                    </button>
                    <a href="{{ route('transaksi.index') }}" class="btn btn-secondary">
                        <i class="fa fa-arrow-left"></i> Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
