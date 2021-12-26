<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MenuContent extends Migration
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
            'menufront_id'     => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'name'     => [
                'type'           => 'TEXT',
                'null'          => true,
            ],
            'year'     => [
                'type'           => 'VARCHAR',
                'constraint'     => 4,
                'null'          => true,
            ],
            'content'     => [
                'type'           => 'LONGTEXT',
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
//        $this->forge->addForeignKey('menufront_id', 'menufronts', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('menucontents');
    }

    public function down()
    {
        $this->forge->dropTable('menucontents');
    }
}
