@extends('layouts.master')

@section('title', 'Detail Supplier')

@section('content')
<div class="container-fluid">
    <h4 class="mb-4">Detail Supplier</h4>
    <div class="row justify-content-center">
        <div class="col-lg">
            <div class="card shadow">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <tbody>
                                <tr>
                                    <th class="w-25">Nama</th>
                                    <td>{{ $supplier->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Nomor HP</th>
                                    <td>{{ $supplier->nomor_hp }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $supplier->email }}</td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>{{ $supplier->alamat }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{ route('supplier.index') }}" class="btn btn-secondary">
                        <i class="fa fa-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
