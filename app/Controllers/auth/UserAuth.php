<?php

namespace App\Controllers\Auth;

use App\Models\ObatModel; // Pastikan model ObatModel sudah digunakan
use CodeIgniter\Controller;

class UserAuth extends Controller
{
    public function login()
    {
        // Tampilkan halaman login user
        return view('Views/daftar_obat'); // Pastikan ini adalah view login yang benar
    }

    public function processLogin()
    {
        // Proses login user
        if ($this->request->getMethod() === 'post') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            // Validasi input
            if (empty($username) || empty($password)) {
                return redirect()->to('/user/dashboard')->with('error', 'Username dan Password harus diisi!');
            }

            // Validasi login sederhana (gunakan database untuk validasi sebenarnya)
            if ($username === 'user' && $password === 'password') {
                // Simpan status login di session
                session()->set('isLoggedIn', true);
                session()->set('username', $username);

                // Redirect ke halaman daftar obat
                return redirect()->to('/user/daftar_obat');
            } else {
                // Jika login gagal
                return redirect()->to('/user/login')->with('error', 'Username atau Password salah!');
            }
        }

        // Jika bukan metode POST
        return redirect()->to('/user/login');
    }

    public function dashboard()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/user/login')->with('error', 'Silakan login terlebih dahulu!');
        }

        // Tampilkan view dashboard admin dengan data obat
        return view('admin/dashboard', $data);
    }

    public function daftar_obat() {
        // Koneksi ke database dan query
        $this->load->database();
        $query = $this->db->get('obat');
        
        // Kirim data ke view
        $data['result'] = $query->result_array();
        $this->load->view('daftar_obat', $data);
    }
    

    public function logout()
    {
        // Hapus session dan redirect ke halaman login
        session()->remove('isLoggedIn');
        session()->remove('username');
        return redirect()->to('/user/login');
    }
}
