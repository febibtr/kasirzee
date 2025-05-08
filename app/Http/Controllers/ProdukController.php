<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::with('kategori')->get(); 
        return view('produk.index', compact('produk'));
    }

    public function create()
    {
        $kategori = Kategori::all(); 
        return view('produk.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'kategori_id' => 'nullable|exists:kategori,id',
            'tipe' => 'required|in:barang,jasa',
            'stok' => 'required|integer',
            'harga_beli' => 'nullable|numeric',
            'harga_jual' => 'nullable|numeric',
            'berat' => 'nullable|numeric',
            'satuan' => 'nullable|max:50',
            'diskon' => 'nullable|numeric',
            'deskripsi' => 'nullable',
        ]);

        Produk::create($request->all());

        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function show($id)
    {
        $produk = Produk::findOrFail($id);
        return view('produk.show', compact('produk'));
    }

    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        $kategori = Kategori::all();
        return view('produk.edit', compact('produk', 'kategori'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|max:100',
            'kategori_id' => 'nullable|exists:kategori,id',
            'tipe' => 'required|in:barang,jasa',
            'stok' => 'required|integer',
            'harga_beli' => 'nullable|numeric',
            'harga_jual' => 'nullable|numeric',
            'berat' => 'nullable|numeric',
            'satuan' => 'nullable|max:50',
            'diskon' => 'nullable|numeric',
            'deskripsi' => 'nullable',
        ]);

        $produk = Produk::findOrFail($id);
        $produk->update($request->all());

        return redirect()->route('produk.index')->with('success', 'Produk berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus.');
    }
}
