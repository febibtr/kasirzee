@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
       <div class="mt-4"><h2>Dashboard</h2></div> 
       <div class="tanggal">Tanggal</div>
       <div class="form-group row">
        <div class="col-sm-2">
            <input type="date" class="form-control form-control-sm" id="tanggal" name="tanggal" required>
        </div>
        <div class="col-sm-2 mx-auto">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1">
                <label class="form-check-label" for="check1">
                    Checkbox
                </label>
            </div>
        </div>
        <div class="col-sm-2 mx-auto">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1">
                <label class="form-check-label" for="check1">
                    Checkbox
                </label>
            </div>
        </div>
        <div class="col-sm-2 mx-auto">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1">
                <label class="form-check-label" for="check1">
                    Checkbox
                </label>
            </div>
        </div>
    </div>
    
    </div>
    
        
        
            <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Total Penjualan</h4>
                    </div>
                    <div class="card-body">
                        <p>Rp. 10.000.000</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Total Stok</h4>
                    </div>
                    <div class="card-body">
                        <p>150 Barang</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Total Pelanggan</h4>
                    </div>
                    <div class="card-body">
                        <p>75 Pelanggan</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <h3>Recent Transactions</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Pelanggan</th>
                        <th>Total Pembayaran</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>Rp. 500.000</td>
                        <td>2024-11-01</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>Rp. 300.000</td>
                        <td>2024-11-01</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
