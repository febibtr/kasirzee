@extends('layouts.master')

@section('title', 'Edit Staff')

@section('content')
<div class="container-fluid">
    <h4 class="mb-4">Edit Staff</h4>
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('staff.update', $staff->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    
                    <!-- Kolom Kiri -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control rounded" value="{{ $staff->nama }}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control rounded" value="{{ $staff->email }}" required>
                        </div>
                        <div class="form-group">
                            <label for="nomor_hp">Nomor HP</label>
                            <input type="text" name="nomor_hp" id="nomor_hp" class="form-control rounded" value="{{ $staff->nomor_hp }}">
                        </div>
                    </div>

                    <!-- Kolom Kanan -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control rounded">{{ $staff->alamat }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select name="role" id="role" class="form-control rounded" required>
                                <option value="kasir" {{ $staff->role == 'kasir' ? 'selected' : '' }}>Kasir</option>
                                <option value="admin" {{ $staff->role == 'admin' ? 'selected' : '' }}>Admin</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Tombol Submit -->
                <div class="mt-3 text-right">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-save"></i> Update
                    </button>
                    <a href="{{ route('staff.index') }}" class="btn btn-secondary">
                        <i class="fa fa-arrow-left"></i> Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
