<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Maps extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name'     => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'address'     => [
                'type'           => 'TEXT',
            ],
            'lat'     => [
                'type'           => 'TEXT',
            ],
            'long'     => [
                'type'           => 'TEXT',
            ],
            'city'     => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'category'  => [
                'type'           => 'VARCHAR',
                'constraint'     => 100,
            ],
            'created_at'  => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at'  => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('maps');
    }

    public function down()
    {
        $this->forge->dropTable('maps');
    }
}
