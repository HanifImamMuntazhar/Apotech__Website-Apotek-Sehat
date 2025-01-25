<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
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
        'username' => [
            'type' => 'VARCHAR',
            'constraint' => 100,
        ],
        'password' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
        ],
        'role' => [
            'type' => 'ENUM',
            'constraint' => ['admin', 'user'],
            'default' => 'user',
        ],
    ]);
    $this->forge->addPrimaryKey('id');
    $this->forge->createTable('users');
}

    public function down()
    {
        //
    }
}
