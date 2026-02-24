@extends('layout')

@section('title', $title)

@section('content')
    <h1>📑 {{ $title }}</h1>
    
    <a href="/products" style="display: inline-block; margin-bottom: 1rem;">← Kembali ke semua produk</a>

    <table>
        <tr>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
        
        @if($type == 'food-beverage')
            <tr><td>Teh Botol</td><td>Rp 5,000</td><td>50</td></tr>
            <tr><td>Kopi Susu</td><td>Rp 8,000</td><td>40</td></tr>
        @elseif($type == 'beauty-health')
            <tr><td>Sabun Mandi</td><td>Rp 7,000</td><td>30</td></tr>
            <tr><td>Shampoo</td><td>Rp 15,000</td><td>20</td></tr>
        @elseif($type == 'home-care')
            <tr><td>Pembersih Lantai</td><td>Rp 15,000</td><td>25</td></tr>
            <tr><td>Pewangi Ruangan</td><td>Rp 20,000</td><td>18</td></tr>
        @elseif($type == 'baby-kid')
            <tr><td>Susu Formula</td><td>Rp 45,000</td><td>15</td></tr>
            <tr><td>Popok Bayi</td><td>Rp 50,000</td><td>30</td></tr>
        @endif
    </table>
@endsection