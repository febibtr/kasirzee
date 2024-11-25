<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaksi; // pastikan model DetailTransaksi sudah ada
use Illuminate\Http\Request;

class DetailTransaksiController extends Controller
{
    public function index()
    {
        $detailTransaksis = DetailTransaksi::all();
        return view('detail_transaksi.index', compact('detailTransaksis'));
    }

    public function create()
    {
        return view('detail_transaksi.create'); // buat file create.blade.php di resources/views/detail_transaksi
    }

    public function store(Request $request)
    {
        $request->validate([
            'transaksi_id' => 'required|integer',
            'produk_id' => 'required|integer',
            'jumlah' => 'required|integer',
        ]);

        DetailTransaksi::create($request->all());
        return redirect()->route('detail-transaksi.index')->with('success', 'Detail Transaksi berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $detail = DetailTransaksi::findOrFail($id);
        return view('detail_transaksi.edit', compact('detail')); // buat file edit.blade.php di resources/views/detail_transaksi
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'transaksi_id' => 'required|integer',
            'produk_id' => 'required|integer',
            'jumlah' => 'required|integer',
        ]);

        $detail = DetailTransaksi::findOrFail($id);
        $detail->update($request->all());
        return redirect()->route('detail-transaksi.index')->with('success', 'Detail Transaksi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $detail = DetailTransaksi::findOrFail($id);
        $detail->delete();
        return redirect()->route('detail-transaksi.index')->with('success', 'Detail Transaksi berhasil dihapus.');
    }
}
