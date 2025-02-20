<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateInformationsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'name'        => ['type' => 'varchar', 'constraint' => 50],
            'address'      => ['type' => 'varchar', 'constraint' => 255],
            'phone1'       => ['type' => 'varchar', 'constraint' => 12],
            'phone2'       => ['type' => 'varchar', 'constraint' => 12],
            'whatsapp'     => ['type' => 'varchar', 'constraint' => 12],
            'facebook'     => ['type' => 'varchar', 'constraint' => 255],
            'instagram'    => ['type' => 'varchar', 'constraint' => 255],
            'email'       => ['type' => 'varchar', 'constraint' => 255],
            'website'      => ['type' => 'varchar', 'constraint' => 255],
            'maps_link'    => ['type' => 'varchar', 'constraint' => 255],
            'created_at'  => ['type' => 'datetime', 'null' => true],
            'updated_at'  => ['type' => 'datetime', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('informations');
    }

    public function down()
    {
        $this->forge->dropTable('informations');
    }
}
