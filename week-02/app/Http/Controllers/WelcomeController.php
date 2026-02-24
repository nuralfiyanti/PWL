<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    public function hello()
    {
        return 'Hello World';
    }

    public function greeting()
    {
        return view('blog.hello', ['name' => 'Nur Alfiyanti']);
    }
}

