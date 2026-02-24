<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }

    public function about()
    {
        return 'NIM : 244107020055 <br> Nama : Nur Alfiyanti';
    }

    public function articles($id)
    {
        return 'Halaman Artikel dengan ID ' . $id;
    }
}