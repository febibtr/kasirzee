<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        $staff = Staff::all();
        return view('staff.index', compact('staff')); 
    }

    public function show($id)
    {
        $staff = Staff::findOrFail($id);
        return view('staff.show', compact('staff')); 
    }

    public function create()
    {
        return view('staff.create'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'pengguna_id' => 'nullable|exists:pengguna,id',
            'nama' => 'required|string|max:100',
            'nomor_hp' => 'nullable|string|max:15',
            'email' => 'required|string|email|max:100|unique:staff',
            'alamat' => 'nullable|string',
            'role' => 'required|in:kasir,admin',
            'password' => 'required|string|min:6',
        ]);

        Staff::create([
            'pengguna_id' => $request->pengguna_id,
            'nama' => $request->nama,
            'nomor_hp' => $request->nomor_hp,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'role' => $request->role,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('staff.index');
    }

    public function edit($id)
    {
        $staff = Staff::findOrFail($id);
        return view('staff.edit', compact('staff')); 
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pengguna_id' => 'nullable|exists:pengguna,id',
            'nama' => 'required|string|max:100',
            'nomor_hp' => 'nullable|string|max:15',
            'email' => 'required|string|email|max:100|unique:staff,email,' . $id,
            'alamat' => 'nullable|string',
            'role' => 'required|in:kasir,admin',
        ]);

        $staff = Staff::findOrFail($id);
        $staff->update($request->only('pengguna_id', 'nama', 'nomor_hp', 'email', 'alamat', 'role'));

        return redirect()->route('staff.index');
    }

    public function destroy($id)
    {
        $staff = Staff::findOrFail($id);
        $staff->delete();

        return redirect()->route('staff.index');
    }
}
