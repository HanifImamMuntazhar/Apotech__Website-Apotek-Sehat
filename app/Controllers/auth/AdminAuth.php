<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class AdminAuth extends BaseController
{
    // Method untuk menampilkan halaman login admin
    public function login()
    {
        // Jika admin sudah login, redirect ke dashboard admin
        if (session()->get('admin_logged_in')) {
            return redirect()->to('/admin/dashboard');
        }

        // Tampilkan view login admin
        return view('http://localhost:8081/');
    }

    // Method untuk memproses login admin
    public function processLogin()
    {
        // Ambil data dari form
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Validasi input
        if (empty($username) || empty($password)) {
            session()->setFlashdata('error', 'Username dan password harus diisi!');
            return redirect()->to('http://localhost:8081/');
        }

        // Cari admin berdasarkan username
        $adminModel = new AdminModel();
        $admin = $adminModel->where('username', $username)->first();

        // Verifikasi password
        if ($admin && password_verify($password, $admin['password'])) {
            // Simpan data admin ke session
            session()->set('admin_logged_in', true);
            session()->set('admin_id', $admin['id']);
            session()->set('admin_username', $admin['username']);

            // Redirect ke dashboard admin
            return redirect()->to('/admin/dashboard');
        } else {
            session()->setFlashdata('error', 'Username atau password yang anda masukkan salah, harap periksa kembali!');
            return redirect()->to('http://localhost:8081/');
        }
    }

    // Method untuk logout admin
    public function logout()
    {
        // Hapus session admin
        session()->remove('admin_logged_in');
        session()->remove('admin_id');
        session()->remove('admin_username');

        // Redirect ke halaman login admin
        return redirect()->to('http://localhost:8081/');
    }
}