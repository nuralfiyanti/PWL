@extends('layout')

@section('title', 'Daftar Produk')

@section('content')
    <h1>📦 Daftar Produk</h1>
    
    <div style="margin-bottom: 2rem;">
        <p>Pilih kategori produk:</p>
        <div style="display: flex; gap: 0.5rem; flex-wrap: wrap; margin-top: 1rem;">
            <a href="/category/food-beverage" class="btn">🍔 Food & Beverage</a>
            <a href="/category/beauty-health" class="btn">💄 Beauty & Health</a>
            <a href="/category/home-care" class="btn">🏠 Home Care</a>
            <a href="/category/baby-kid" class="btn">👶 Baby & Kid</a>
        </div>
    </div>

    <h3>Semua Produk:</h3>
    <table>
        <tr>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
        <tr><td>Teh Botol</td><td>Food & Beverage</td><td>Rp 5,000</td><td>50</td></tr>
        <tr><td>Sabun</td><td>Beauty & Health</td><td>Rp 7,000</td><td>30</td></tr>
        <tr><td>Pembersih Lantai</td><td>Home Care</td><td>Rp 15,000</td><td>25</td></tr>
        <tr><td>Susu Formula</td><td>Baby & Kid</td><td>Rp 45,000</td><td>15</td></tr>
    </table>
@endsection