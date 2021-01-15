<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTableOrder extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_order'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'auto_increment' => true,
			],
			'id_user'          => [
				'type'           => 'INT',
			],
			'paket'       => [
				'type'           => 'INT',
				'constraint'     => 1,
				'null'           => true,
			],
			'jenis'       => [
				'type'           => 'INT',
				'constraint'     => 1,
				'null'           => true,
			],
			'alamat'       => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
				'null'           => true,
			],
			'berat'       => [
				'type'           => 'INT',
				'constraint'     => 5,
				'null'           => true,
			],
			'status'       => [
				'type'           => 'INT',
				'constraint'     => 1,
				'null'           => true,
			],
			'total_bayar'       => [
				'type'           => 'INT',
				'constraint'     => 11,
				'null'           => true,
			],
		]);
		$this->forge->addKey('id_order', true);
		$this->forge->addForeignKey('id_user', 'tbl_user', 'id_user', 'CASCADE', 'CASCADE');
		$this->forge->createTable('order');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('order');
	}
}
