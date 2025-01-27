<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class UserController extends Controller
{
    public function index()
    {
        // Tampilkan halaman utama user
        return view ('user');
    }

    public function dashboard()
    {
        // Periksa apakah pengguna sudah login
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/user/login')->with('error', 'Silakan login terlebih dahulu!');
        }

        // Tampilkan halaman dashboard user
        return view('user_dashboard');
    }
}