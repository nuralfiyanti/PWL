<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('m_supplier')->insert([
            [
                'supplier_id' => 1,
                'supplier_kode' => 'SUP001',
                'supplier_nama' => 'PT Elektronik Jaya',
                'supplier_alamat' => 'Jl. Merdeka No. 1, Malang'
            ],
            [
                'supplier_id' => 2,
                'supplier_kode' => 'SUP002',
                'supplier_nama' => 'CV Sumber Makmur',
                'supplier_alamat' => 'Jl. Sudirman No. 45, Surabaya'
            ],
            [
                'supplier_id' => 3,
                'supplier_kode' => 'SUP003',
                'supplier_nama' => 'UD Berkah Abadi',
                'supplier_alamat' => 'Jl. Ahmad Yani No. 78, Jakarta'
            ],
        ]);
    }
}