@extends('layout')

@section('title', 'Home - POS')

@section('content')
    <h1>🏠 Selamat Datang di POS</h1>
    <p>Sistem Point of Sale sederhana untuk manajemen penjualan.</p>

    <div class="grid">
        <div class="category-card">
            <h3>📦 Produk</h3>
            <p>Kelola daftar produk</p>
            <a href="/products" class="btn">Lihat Produk</a>
        </div>
        <div class="category-card">
            <h3>💰 Transaksi</h3>
            <p>Proses penjualan</p>
            <a href="/sales" class="btn">Buat Transaksi</a>
        </div>
    </div>
@endsection