<?php

namespace App\Http\Controllers;

use App\Models\UserModel;

class UserController extends Controller
{
    public function index()
    {
        $data = UserModel::all();
        return view('user', ['data' => $data]);
    }
}
