<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
    {
        // INSERT data SNK
      /*  $data = [
            'kategori_kode' => 'SNK',
            'kategori_nama' => 'Snack/Makanan Ringan',
            'created_at' => now(),
            'updated_at' => now()
        ];
        
        DB::table('m_kategori')->insert($data);
        
        return 'Insert data SNK berhasil!'; */

        // UPDATE data SNK
        $row = DB::table('m_kategori')
            ->where('kategori_kode', 'SNK')
            ->update(['kategori_nama' => 'Camilan']);
    
        return 'Update data berhasil. Jumlah data diupdate: ' . $row . ' baris';
    }
}