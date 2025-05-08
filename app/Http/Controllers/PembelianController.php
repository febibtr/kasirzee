<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use App\Models\Supplier;
use App\Models\Staff;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function index()
    {
        $pembelian = Pembelian::all();
        $suppliers = Supplier::all(); 
        $staff = Staff::all(); 
    
        return view('pembelian.index', compact('pembelian', 'suppliers', 'staff'));
    }
    public function show($id)
    {
        $pembelian = Pembelian::with('supplier', 'staff')->findOrFail($id);
        return view('pembelian.show', compact('pembelian'));
    }

    public function create()
    {
        $suppliers = Supplier::all();
        $staff = Staff::all();
        return view('pembelian.create', compact('suppliers', 'staff'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'supplier_id' => 'required',
            'staff_id' => 'required',
            'total_harga' => 'required|numeric',
        ]);

        Pembelian::create($request->all());
        return redirect()->route('pembelian.index');
    }

    public function edit($id)
    {
        $pembelian = Pembelian::findOrFail($id);
        $suppliers = Supplier::all();
        $staff = Staff::all();
        return view('pembelian.edit', compact('pembelian', 'suppliers', 'staff'));
    }
    

    public function update(Request $request, $id)
    {
        $request->validate([
            'supplier_id' => 'required',
            'staff_id' => 'required',
            'total_harga' => 'required|numeric',
        ]);

        $pembelian = Pembelian::findOrFail($id);
        $pembelian->update($request->all());
        return redirect()->route('pembelian.index');
    }

    public function destroy($id)
    {
        Pembelian::destroy($id);
        return redirect()->route('pembelian.index');
    }
}
