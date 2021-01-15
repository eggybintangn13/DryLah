<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTableUser extends Migration
{
        public function up()
        {
                $this->forge->addField([
                        'id_user'          => [
                                'type'           => 'INT',
                                'constraint'     => 11,
                                'auto_increment' => true,
                        ],
                        'nama_user'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '25',
                                'null'           => true,
                        ],
                        'email'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '255',
                                'null'           => true,
                        ],
                        'no_hp'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '25',
                                'null'           => true,
                        ],
                        'password'       => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '30',
                                'null'           => true,
                        ],
                        'level'       => [
                                'type'           => 'INT',
                                'constraint'     => '1',
                                'null'           => true,
                        ],
                        'foto_user'       => [
                                'type'           => 'TEXT',
                                'null'           => true,

                        ],
                ]);
                $this->forge->addKey('id_user', true);
                $this->forge->createTable('tbl_user');
        }

        //--------------------------------------------------------------------

        public function down()
        {
                $this->forge->dropTable('tbl_user');
        }
}
