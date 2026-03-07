<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        for ($i = 1; $i <= 15; $i++) {
            $supplier_id = ceil($i / 5); // 1-5: supplier 1, 6-10: supplier 2, 11-15: supplier 3
            
            $data[] = [
                'stok_id' => $i,
                'supplier_id' => $supplier_id,
                'barang_id' => $i,
                'stok_jumlah' => rand(10, 100),
            ];
        }
        
        DB::table('t_stok')->insert($data);
    }
}