<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
    public function index()
    {
        // CEK apakah data CUS sudah ada
        $cek = DB::select('select * from m_level where level_kode = ?', ['CUS']);
        
        if (empty($cek)) {
            // INSERT jika belum ada
            DB::insert('insert into m_level(level_kode, level_nama, created_at) values(?, ?, ?)', 
                ['CUS', 'Pelanggan', now()]);
            echo "Insert data CUS berhasil! <br>";
        } else {
            echo "Data CUS sudah ada, melanjutkan ke UPDATE... <br>";
        }
        
        // UPDATE data
        $rowUpdate = DB::update('update m_level set level_nama = ? where level_kode = ?', 
            ['Customer', 'CUS']);
        echo "Update data berhasil! Jumlah data diupdate: " . $rowUpdate . " baris <br>";

        // Hapus data CUS
        $rowDelete = DB::delete('delete from m_level where level_kode = ?', ['CUS']);
        echo "Delete data berhasil. Jumlah data yang dihapus: " . $rowDelete . " baris <br>";
    }
}