@extends('layouts.app')

@section('content')
    <h1>Shift</h1>
    <a href="{{ route('shift.create') }}" class="btn btn-primary">Tambah Shift</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Shift</th>
                <th>Jam Mulai</th>
                <th>Jam Selesai</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($shifts as $shift)
                <tr>
                    <td>{{ $shift->id }}</td>
                    <td>{{ $shift->nama }}</td>
                    <td>{{ $shift->jam_mulai }}</td>
                    <td>{{ $shift->jam_selesai }}</td>
                    <td>
                        <a href="{{ route('shift.edit', $shift->id) }}" class="btn btn-warning">Edit</a>
