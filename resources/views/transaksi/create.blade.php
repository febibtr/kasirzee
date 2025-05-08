@extends('layouts.master')

@section('title', 'Tambah Transaksi Baru')

@section('content')
<div class="container-fluid">
    <h4 class="mb-4">Tambah Transaksi Baru</h4>
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('transaksi.store') }}" method="POST">
                @csrf
                {{-- <div class="form-group">
                    <label for="staff_id">Staff</label>
                    <select name="staff_id" id="staff_id" class="form-control">
                        <option value="">Pilih Staff</option>
                        <!-- Daftar staff bisa disesuaikan dengan data yang ada -->
                    </select>
                </div> --}}
                <div class="form-group">
                    <label for="metode_pembayaran">Metode Pembayaran</label>
                    <select name="metode_pembayaran" id="metode_pembayaran" class="form-control" required>
                        <option value="tunai">Tunai</option>
                        <option value="transfer">Transfer</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="total">Total</label>
                    <input type="number" name="total" id="total" class="form-control" value="0" required>
                </div>
                <div class="form-group">
                    <label for="nama_pelanggan">Nama Pelanggan</label>
                    <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control">
                </div>
                <div class="form-group">
                    <label for="diskon_total">Diskon Total</label>
                    <input type="number" name="diskon_total" id="diskon_total" class="form-control" value="0">
                </div>
                <div class="form-group">
                    <label for="pajak_total">Pajak Total</label>
                    <input type="number" name="pajak_total" id="pajak_total" class="form-control" value="0">
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea name="keterangan" id="keterangan" class="form-control"></textarea>
                </div>

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
