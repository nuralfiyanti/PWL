@extends('layout')

@section('title', 'Transaksi POS')

@section('content')
    <h1>💰 Transaksi POS</h1>

    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
        <div>
            <h3>Tambah Item</h3>
            <select style="width: 100%; padding: 0.5rem; margin-bottom: 1rem;">
                <option>Pilih produk...</option>
                <option>Teh Botol - Rp 5,000</option>
                <option>Sabun - Rp 7,000</option>
            </select>
            <input type="number" placeholder="Jumlah" value="1" style="width: 100%; padding: 0.5rem; margin-bottom: 1rem;">
            <button class="btn" style="width: 100%;">Tambah</button>
        </div>

        <div>
            <h3>Keranjang</h3>
            <table>
                <tr><th>Item</th><th>Qty</th><th>Subtotal</th></tr>
                <tr><td>Teh Botol</td><td>2</td><td>Rp 10,000</td></tr>
                <tr><td>Sabun</td><td>1</td><td>Rp 7,000</td></tr>
                <tr style="font-weight: bold;">
                    <td colspan="2">Total</td>
                    <td>Rp 17,000</td>
                </tr>
            </table>
            <button class="btn" style="width: 100%; margin-top: 1rem;">Proses Pembayaran</button>
        </div>
    </div>
@endsection