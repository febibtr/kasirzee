@extends('layouts.master')

@section('title', 'Tambah Kategori Baru')

@section('content')
<div class="container-fluid">
    <h4 class="mb-4">Tambah Kategori Baru</h4>
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('kategori.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Kategori</label>
                    <input type="text" name="nama" id="nama" class="form-control" required>
                </div>

                <div class="mt-3 text-right">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-save"></i> Simpan
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
