<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produk extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'contraint' => 11,
				'unsigned' => true,
				'auto_increment' => true
			],
			'nama_produk' => [
				'type' => 'VARCHAR',
				'constraint' => 100
			],
			'deskripsi_produk' => [
				'type' => 'TEXT',
				'constraint' => 100
			],
			'created_at' => [
				'type' => 'DATETIME',
				'null' => true
			],
			'updated_at' => [
				'type' => 'DATETIME',
				'null' => true
			]
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('produk');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('produk');
	}
}
