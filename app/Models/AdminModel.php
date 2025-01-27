<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    // Nama tabel
    protected $table = 'admin';

    // Primary key
    protected $primaryKey = 'id';

    // Apakah menggunakan auto-increment pada primary key
    protected $useAutoIncrement = true;

    // Tipe data yang dikembalikan
    protected $returnType = 'array';

    // Apakah menggunakan soft deletes
    protected $useSoftDeletes = false;

    // Apakah melindungi field yang tidak ada di $allowedFields
    protected $protectFields = true;

    // Field yang diizinkan untuk diisi
    protected $allowedFields = ['username', 'password'];

    // Dates
    protected $useTimestamps = true; // Aktifkan timestamps
    protected $dateFormat = 'datetime'; // Format tanggal
    protected $createdField = 'created_at'; // Field created_at
    protected $updatedField = 'updated_at'; // Field updated_at
    protected $deletedField = 'deleted_at'; // Field deleted_at (jika menggunakan soft deletes)

    // Validation
    protected $validationRules = [
        'username' => 'required|min_length[3]|max_length[50]',
        'password' => 'required|min_length[8]',
    ];

    protected $validationMessages = [
        'username' => [
            'required' => 'Username harus diisi.',
            'min_length' => 'Username minimal 3 karakter.',
            'max_length' => 'Username maksimal 50 karakter.',
        ],
        'password' => [
            'required' => 'Password harus diisi.',
            'min_length' => 'Password minimal 8 karakter.',
        ],
    ];

    protected $skipValidation = false; // Lewati validasi jika false
    protected $cleanValidationRules = true; // Bersihkan aturan validasi

    // Callbacks
    protected $allowCallbacks = true; // Aktifkan callbacks
    protected $beforeInsert = ['hashPassword']; // Hash password sebelum insert
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];

    // Callback untuk hash password sebelum insert
    protected function hashPassword(array $data)
    {
        if (isset($data['data']['password'])) {
            $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        }
        return $data;
    }
}