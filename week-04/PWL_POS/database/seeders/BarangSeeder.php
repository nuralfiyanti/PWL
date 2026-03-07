<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        for ($i = 1; $i <= 15; $i++) {
            $kategori_id = ceil($i / 3); // 1-3: kategori 1, 4-6: kategori 2, dst
            $supplier_id = ceil($i / 5); // 1-5: supplier 1, 6-10: supplier 2, 11-15: supplier 3
            
            $data[] = [
                'barang_id' => $i,
                'kategori_id' => $kategori_id,
                'supplier_id' => $supplier_id,
                'barang_kode' => 'BRG' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'barang_nama' => 'Barang ' . $i,
                'harga_beli' => rand(5000, 50000),
                'harga_jual' => rand(10000, 100000),
            ];
        }
        
        DB::table('m_barang')->insert($data);
    }
}