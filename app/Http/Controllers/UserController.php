<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;    

class UserController extends Controller
{
 public function index()
{
    // Langkah A: Tambah data baru (Insert) agar ada data 'customer-1'
    UserModel::create([
        'username' => 'customer-1',
        'nama' => 'Pelanggan Baru',
        'password' => Hash::make('12345'),
        'level_id' => 3, // Staff/Kasir
    ]);

    // Langkah B: Update data yang baru dibuat tadi
    UserModel::where('username', 'customer-1')->update([
        'nama' => 'Pelanggan Pertama',
    ]);

    // Langkah C: Tampilkan semua data
    $user = UserModel::all();
    return view('user', ['data' => $user]);
}
}

