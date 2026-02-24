@extends('layout')

@section('title', 'Profil User')

@section('content')
    <h1>👤 Profil Pengguna</h1>

    <table style="width: auto;">
        <tr><th style="width: 100px;">ID</th><td>{{ $id }}</td></tr>
        <tr><th>Nama</th><td>{{ $name }}</td></tr>
        <tr><th>Status</th><td><span style="color: #27ae60;">✓ Aktif</span></td></tr>
        <tr><th>Role</th><td>Administrator</td></tr>
    </table>

    <a href="/" class="btn" style="margin-top: 1rem;">← Kembali</a>
@endsection