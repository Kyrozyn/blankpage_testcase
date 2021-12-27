<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Career extends Migration
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
            'title'     => [
                'type'           => 'TEXT',
                'constraint'     => 100,
            ],
            'date'     => [
                'type'           => 'DATE',
            ],
            'time'     => [
                'type'           => 'TEXT',
            ],
            'location'     => [
                'type'           => 'TEXT',
            ],
            'category'     => [
                'type'           => 'TEXT',
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
        $this->forge->createTable('career');
    }

    public function down()
    {
        $this->forge->dropTable('career');
    }
}
