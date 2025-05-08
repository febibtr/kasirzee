@extends('layouts.master')

@section('title', 'Detail Kategori')

@section('content')
<div class="container-fluid">
    <h4 class="mb-4">Detail Kategori</h4>
    <div class="row justify-content-center">
        <div class="col-lg">
            <div class="card shadow">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="kategoriDetailTable">
                            <tbody>
                                <tr>
                                    <th class="w-25">Nama Kategori</th>
                                    <td>{{ $kategori->nama }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{ route('kategori.index') }}" class="btn btn-secondary">
                        <i class="fa fa-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
