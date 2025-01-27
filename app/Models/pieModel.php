<?php
namespace App\Models;

use CodeIgniter\Model;

class PieModel extends Model
{
    protected $table = 'obat'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_obat', 'deskripsi', 'indikasi', 'kontraindikasi', 'efek_samping', 'golongan'];

    public function getGolonganData()
    {
        // Query untuk menghitung jumlah obat per golongan
        $query = $this->db->query("SELECT golongan, COUNT(*) as total FROM obat GROUP BY golongan");
        $results = $query->getResultArray();

        $labels = [];
        $values = [];
        foreach ($results as $row) {
            $labels[] = $row['golongan']; // Nama golongan
            $values[] = $row['total'];    // Jumlah obat per golongan
        }

        return [
            'labels' => $labels,
            'values' => $values
        ];
    }
}