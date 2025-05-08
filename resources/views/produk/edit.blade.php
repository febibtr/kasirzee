@extends('layouts.master')

@section('title', 'Edit Produk')

@section('content')
<div class="container-fluid">
    <h4 class="mb-4">Edit Produk</h4>
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('produk.update', $produk->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">Nama Produk</label>
                            <input type="text" name="nama" id="nama" class="form-control" value="{{ $produk->nama }}" required>
                        </div>
                        <div class="form-group">
                            <label for="kategori_id">Kategori</label>
                            <select name="kategori_id" id="kategori_id" class="form-control">
                                <option value="">Pilih Kategori</option>
                                @foreach ($kategori as $item)
                                    <option value="{{ $item->id }}" {{ $produk->kategori_id == $item->id ? 'selected' : '' }}>{{ $item->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tipe">Tipe</label>
                            <select name="tipe" id="tipe" class="form-control" required>
                                <option value="barang" {{ $produk->tipe == 'barang' ? 'selected' : '' }}>Barang</option>
                                <option value="jasa" {{ $produk->tipe == 'jasa' ? 'selected' : '' }}>Jasa</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="number" name="stok" id="stok" class="form-control" value="{{ $produk->stok }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="harga_beli">Harga Beli</label>
                            <input type="number" name="harga_beli" id="harga_beli" class="form-control" value="{{ $produk->harga_beli }}" step="0.01">
                        </div>
                        <div class="form-group">
                            <label for="harga_jual">Harga Jual</label>
                            <input type="number" name="harga_jual" id="harga_jual" class="form-control" value="{{ $produk->harga_jual }}" step="0.01" required>
                        </div>
                        <div class="form-group">
                            <label for="berat">Berat (Kg)</label>
                            <input type="number" name="berat" id="berat" class="form-control" value="{{ $produk->berat }}" step="0.01">
                        </div>
                        <div class="form-group">
                            <label for="satuan">Satuan</label>
                            <input type="text" name="satuan" id="satuan" class="form-control" value="{{ $produk->satuan }}">
                        </div>
                        <div class="form-group">
                            <label for="diskon">Diskon</label>
                            <input type="number" name="diskon" id="diskon" class="form-control" value="{{ $produk->diskon }}" step="0.01">
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
