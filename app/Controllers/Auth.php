<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Auth extends Controller
{
    public function login()
    {
        // Tampilkan halaman login (sekarang halaman user)
        return view('user');
    }

    public function processLogin()
    {
        // Logika proses login
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            // Validasi input
            if (empty($username) || empty($password)) {
                return redirect()->to('/user')->with('error', 'Username dan Password harus diisi!');
            }

            // Contoh validasi login sederhana
            if ($username === 'admin' && $password === 'password') {
                // Simpan status login di session
                session()->set('isLoggedIn', true);
                session()->set('username', $username);

                // Redirect ke halaman user setelah login berhasil
                return redirect()->to('/user/dashboard');
            } else {
                // Jika login gagal, kembalikan ke halaman user dengan pesan error
                return redirect()->to('/user')->with('error', 'Username atau Password salah!');
            }
        } else {
            // Jika bukan metode POST, kembalikan ke halaman user
            return redirect()->to('/user');
        }
    }

    public function logout()
    {
        // Hapus session dan redirect ke halaman user
        session()->remove('isLoggedIn');
        session()->remove('username');
        return redirect()->to('/user');
    }
}