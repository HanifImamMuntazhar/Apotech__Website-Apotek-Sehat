<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateObatTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_obat' => [
                'type' => 'VARCHAR',
                'constraint' => 255, // Panjang maksimal nama obat
            ],
            'deskripsi' => [
                'type' => 'TEXT', // Deskripsi bisa panjang, jadi menggunakan TEXT
                'null' => true, // Opsional, bisa dikosongkan
            ],
            'indikasi' => [
                'type' => 'TEXT', // Indikasi bisa panjang, jadi menggunakan TEXT
                'null' => true, // Opsional, bisa dikosongkan
            ],
            'kontraindikasi' => [
                'type' => 'TEXT', // Kontraindikasi bisa panjang, jadi menggunakan TEXT
                'null' => true, // Opsional, bisa dikosongkan
            ],
            'efek_samping' => [
                'type' => 'TEXT', // Efek samping bisa panjang, jadi menggunakan TEXT
                'null' => true, // Opsional, bisa dikosongkan
            ],
            'golongan' => [
                'type' => 'VARCHAR',
                'constraint' => 100, // Golongan obat, misalnya antibiotik, analgesik, dll.
            ],
        ]);

        // Menambahkan primary key
        $this->forge->addPrimaryKey('id');

        // Membuat tabel obat
        $this->forge->createTable('obat');
    }

    public function down()
    {
        // Menghapus tabel obat jika migrasi di-rollback
        $this->forge->dropTable('obat');
    }
}