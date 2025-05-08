@extends('layouts.master')

@section('title', 'Tambah Produk')

@section('content')
<div class="container-fluid">
    <h4 class="mb-4">Tambah Produk</h4>
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('produk.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">Nama Produk</label>
                            <input type="text" name="nama" id="nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="kategori_id">Kategori</label>
                            <select name="kategori_id" id="kategori_id" class="form-control">
                                <option value="">Pilih Kategori</option>
                                @foreach ($kategori as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tipe">Tipe</label>
                            <select name="tipe" id="tipe" class="form-control" required>
                                <option value="barang">Barang</option>
                                <option value="jasa">Jasa</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="number" name="stok" id="stok" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="harga_beli">Harga Beli</label>
                            <input type="number" name="harga_beli" id="harga_beli" class="form-control" step="0.01">
                        </div>
                        <div class="form-group">
                            <label for="harga_jual">Harga Jual</label>
                            <input type="number" name="harga_jual" id="harga_jual" class="form-control" step="0.01" required>
                        </div>
                        <div class="form-group">
                            <label for="berat">Berat (Kg)</label>
                            <input type="number" name="berat" id="berat" class="form-control" step="0.01">
                        </div>
                        <div class="form-group">
                            <label for="satuan">Satuan</label>
                            <input type="text" name="satuan" id="satuan" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="diskon">Diskon</label>
                            <input type="number" name="diskon" id="diskon" class="form-control" step="0.01">
                        </div>
                    </div>
                </div>

                <div class="mt-3 text-right">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-save"></i> Simpan
                    </button>
                    <a href="{{ route('produk.index') }}" class="btn btn-secondary">
                        <i class="fa fa-arrow-left"></i> Batal
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
