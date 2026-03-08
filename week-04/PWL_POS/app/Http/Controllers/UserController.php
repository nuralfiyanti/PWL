<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // Buat user baru dengan username unik
        $user = UserModel::create([
            'username' => 'manager55_' . rand(100, 999), 
            'nama' => 'Manager55',
            'password' => Hash::make('12345'),
            'level_id' => 2,
        ]);
        
        echo "User baru: " . $user->username . "<br>";
        
        // Ubah username
        $user->username = 'manager56_' . rand(100, 999); 
        
        echo "Setelah diubah: " . $user->username . "<br><br>";
        
        // Cek isDirty
        echo "isDirty(): " . ($user->isDirty() ? 'true' : 'false') . "<br>";
        echo "isDirty('username'): " . ($user->isDirty('username') ? 'true' : 'false') . "<br>";
        echo "isDirty('nama'): " . ($user->isDirty('nama') ? 'true' : 'false') . "<br>";
        echo "isDirty(['nama', 'username']): " . ($user->isDirty(['nama', 'username']) ? 'true' : 'false') . "<br><br>";
        
        // Cek isClean
        echo "isClean(): " . ($user->isClean() ? 'true' : 'false') . "<br>";
        echo "isClean('username'): " . ($user->isClean('username') ? 'true' : 'false') . "<br>";
        echo "isClean('nama'): " . ($user->isClean('nama') ? 'true' : 'false') . "<br>";
        echo "isClean(['nama', 'username']): " . ($user->isClean(['nama', 'username']) ? 'true' : 'false') . "<br><br>";
        
        // Simpan perubahan
        $user->save();
        
        echo "Setelah save:<br>";
        echo "isDirty(): " . ($user->isDirty() ? 'true' : 'false') . "<br>";
        echo "isClean(): " . ($user->isClean() ? 'true' : 'false') . "<br>";
        
        return;
    }
}