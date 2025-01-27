<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ObatModel; // Pastikan model ini di-import

class AdminController extends BaseController
{
    protected $obatModel;

    public function __construct()
    {
        // Inisialisasi model
        $this->obatModel = new ObatModel();
    }

    // Method untuk menampilkan dashboard admin
    public function dashboard()
    {
        // Jika admin belum login, redirect ke halaman login admin
        if (!session()->get('admin_logged_in')) {
            return redirect()->to('/admin/login');
        }

        // Ambil data obat dari database
        $data['obat'] = $this->obatModel->findAll(); // Kirim data obat ke view

        // Tampilkan view dashboard admin dengan data obat
        return view('admin/dashboard', $data);
    }

    // Method untuk menampilkan chart
    public function chart()
    {
        // Jika admin belum login, redirect ke halaman login admin
        if (!session()->get('admin_logged_in')) {
            return redirect()->to('/admin/login');
        }

        // Data untuk chart (contoh)
        $data = [
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
            'datasets' => [
                [
                    'label' => 'Penjualan',
                    'data' => [65, 59, 80, 81, 56],
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'borderWidth' => 1
                ]
            ]
        ];

        // Tampilkan view chart dengan data
        return view('admin/chart', $data);
    }

    // Method untuk menambahkan obat (Create)
    public function addObat()
    {
        // Jika admin belum login, redirect ke halaman login admin
        if (!session()->get('admin_logged_in')) {
            return redirect()->to('/admin/login');
        }

        // Validasi input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama_obat' => 'required',
            'deskripsi' => 'required',
            'indikasi' => 'required',
            'kontraindikasi' => 'required',
            'efek_samping' => 'required',
            'golongan' => 'required'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return $this->response->setJSON([
                'status' => 'error',
                'errors' => $validation->getErrors()
            ]);
        }

        // Simpan data ke database
        $this->obatModel->save([
            'nama_obat' => $this->request->getPost('nama_obat'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'indikasi' => $this->request->getPost('indikasi'),
            'kontraindikasi' => $this->request->getPost('kontraindikasi'),
            'efek_samping' => $this->request->getPost('efek_samping'),
            'golongan' => $this->request->getPost('golongan')
        ]);

        return $this->response->setJSON([
            'status' => 'success',
            'message' => 'Obat berhasil ditambahkan.'
        ]);
    }

    // Method untuk mengupdate obat (Update)
    public function updateObat($id) {
        $obatModel = new \App\Models\ObatModel();
        $data = $this->request->getPost();
    
        if ($obatModel->update($id, $data)) {
            return $this->response->setJSON(['status' => 'success', 'message' => 'Data berhasil diperbarui']);
        } else {
            return $this->response->setJSON(['status' => 'error', 'errors' => 'Gagal memperbarui data'], 400);
        }
    }
    

    // Method untuk menghapus obat (Delete)
    public function deleteObat($id) {
        $obatModel = new \App\Models\ObatModel();
        if ($obatModel->delete($id)) {
            return $this->response->setJSON(['status' => 'success', 'message' => 'Data berhasil dihapus']);
        } else {
            return $this->response->setJSON(['status' => 'error', 'errors' => 'Gagal menghapus data']);
        }
    }
    

    // Method untuk mengambil data obat berdasarkan ID
    public function getObat($id) {
        $obatModel = new \App\Models\ObatModel();
        $obat = $obatModel->find($id);
    
        if ($obat) {
            return $this->response->setJSON($obat);
        } else {
            return $this->response->setJSON(['error' => 'Data tidak ditemukan'], 404);
        }
    }
    
}