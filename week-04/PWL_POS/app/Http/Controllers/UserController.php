<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
public function index()
{
    $user = UserModel::create([
        'username' => 'manager11_' . rand(100, 999),
        'nama' => 'Manager11',
        'password' => Hash::make('12345'),
        'level_id' => 2,
    ]);
    
    echo "User baru: " . $user->username . "<br>";
    
    $user->username = 'manager12_' . rand(100, 999);
    echo "Setelah diubah: " . $user->username . "<br><br>";
    
    $user->save();
    
    echo "wasChanged(): " . ($user->wasChanged() ? 'true' : 'false') . "<br>";
    echo "wasChanged('username'): " . ($user->wasChanged('username') ? 'true' : 'false') . "<br>";
    echo "wasChanged(['username', 'level_id']): " . ($user->wasChanged(['username', 'level_id']) ? 'true' : 'false') . "<br>";
    echo "wasChanged('nama'): " . ($user->wasChanged('nama') ? 'true' : 'false') . "<br>";
    echo "wasChanged(['nama', 'username']): " . ($user->wasChanged(['nama', 'username']) ? 'true' : 'false') . "<br>";
    
    return;
}
}