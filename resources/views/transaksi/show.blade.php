@extends('layouts.master')

@section('title', 'Detail Transaksi')

@section('content')
<div class="container-fluid">
    <h4 class="mb-4">Detail Transaksi</h4>
    <div class="row justify-content-center">
        <div class="col-lg">
            <div class="card shadow">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="transaksiDetailTable">
                            <tbody>
                                <tr>
                                    <th class="w-25">Tanggal Transaksi</th>
                                    <td>{{ $transaksi->tanggal_transaksi }}</td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td>{{ number_format($transaksi->total, 2) }}</td>
                                </tr>
                                <tr>
                                    <th>Metode Pembayaran</th>
                                    <td>{{ ucfirst($transaksi->metode_pembayaran) }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Pelanggan</th>
                                    <td>{{ $transaksi->nama_pelanggan }}</td>
                                </tr>
                                <tr>
                                    <th>Diskon Total</th>
                                    <td>{{ number_format($transaksi->diskon_total, 2) }}</td>
                                </tr>
                                <tr>
                                    <th>Pajak Total</th>
                                    <td>{{ number_format($transaksi->pajak_total, 2) }}</td>
                                </tr>
                                <tr>
                                    <th>Keterangan</th>
                                    <td>{{ $transaksi->keterangan }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{ route('transaksi.index') }}" class="btn btn-secondary">
                        <i class="fa fa-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
