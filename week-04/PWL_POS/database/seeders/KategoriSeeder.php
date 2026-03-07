<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('m_kategori')->insert([
            ['kategori_id' => 1, 'kategori_kode' => 'ELK', 'kategori_nama' => 'Elektronik'],
            ['kategori_id' => 2, 'kategori_kode' => 'FNB', 'kategori_nama' => 'Food & Beverage'],
            ['kategori_id' => 3, 'kategori_kode' => 'FSN', 'kategori_nama' => 'Fashion'],
            ['kategori_id' => 4, 'kategori_kode' => 'BUK', 'kategori_nama' => 'Buku'],
            ['kategori_id' => 5, 'kategori_kode' => 'ATK', 'kategori_nama' => 'Alat Tulis'],
        ]);
    }
}