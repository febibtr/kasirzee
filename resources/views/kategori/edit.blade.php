@extends('layouts.master')

@section('title', 'Edit Kategori')

@section('content')
<div class="container-fluid">
    <h4 class="mb-4">Edit Kategori</h4>
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    
                    <!-- Kolom Kiri -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">Nama Kategori</label>
                            <input type="text" name="nama" id="nama" class="form-control rounded" value="{{ $kategori->nama }}" required>
                        </div>
                    </div>

                    <!-- Kolom Kanan -->
                    <div class="col-md-6">
                        <!-- Kolom kanan kosong, bisa diisi jika diperlukan di masa depan -->
                    </div>
                </div>

                <!-- Tombol Submit -->
                <div class="mt-3 text-right">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-save"></i> Perbarui
                    </button>
                    <a href="{{ route('kategori.index') }}" class="btn btn-secondary">
                        <i class="fa fa-arrow-left"></i> Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
