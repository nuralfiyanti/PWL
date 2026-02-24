<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        return view('products');
    }

    public function category($type)
    {
        $categories = [
            'food-beverage' => 'Food & Beverage',
            'beauty-health' => 'Beauty & Health',
            'home-care' => 'Home Care',
            'baby-kid' => 'Baby & Kid'
        ];

        if (!array_key_exists($type, $categories)) {
            abort(404);
        }

        return view('category', [
            'type' => $type,
            'title' => $categories[$type]
        ]);
    }
}