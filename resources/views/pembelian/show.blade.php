@extends('layouts.master')

@section('title', 'Detail Pembelian')

@section('content')
<div class="container-fluid">
    <h4 class="mb-4">Detail Pembelian</h4>
    <div class="row justify-content-center">
        <div class="col-lg">
            <div class="card shadow">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <tbody>
                                <tr>
                                    <th>Supplier</th>
                                    <td>{{ $pembelian->supplier ? $pembelian->supplier->nama : 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th>Staff</th>
                                    <td>{{ $pembelian->staff ? $pembelian->staff->nama : 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Pembelian</th>
                                    <td>{{ \Carbon\Carbon::parse($pembelian->tanggal_pembelian)->format('d-m-Y H:i') }}</td>
                                </tr>
                                <tr>
                                    <th>Total Harga</th>
                                    <td>{{ number_format($pembelian->total_harga, 2, ',', '.') }}</td>
                                </tr>
                                <tr>
                                    <th>Keterangan</th>
                                    <td>{{ $pembelian->keterangan ?? 'N/A' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{ route('pembelian.index') }}" class="btn btn-secondary">
                        <i class="fa fa-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
