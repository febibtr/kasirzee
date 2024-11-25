@extends('layouts.master')

@section('title', 'Detail Staff')

@section('content')
<div class="container-fluid">
    <h4 class="mb-4 ">Detail Staff</h4>
    <div class="row justify-content-center">
        <div class="col-lg">
            <div class="card shadow">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="staffDetailTable">
                            <tbody>
                                <tr>
                                    <th class="w-25">Nama</th>
                                    <td>{{ $staff->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Nomor HP</th>
                                    <td>{{ $staff->nomor_hp }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $staff->email }}</td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>{{ $staff->alamat }}</td>
                                </tr>
                                <tr>
                                    <th>Role</th>
                                    <td>{{ $staff->role }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{ route('staff.index') }}" class="btn btn-secondary">
                        <i class="fa fa-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
